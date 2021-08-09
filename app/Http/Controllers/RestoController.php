<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
use App\Models\Restaurant;
use App\Models\User;

use Crypt;
use Session;

class RestoController extends Controller
{
    //
    function index(){
        return view('home');
    }

    function list(){
        $data = Restaurant::all();
        return view('list',["data" => $data]);
    }
    function add(Request $req){
        // return $req->input();
        $resto = new Restaurant;
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address = $req->input('address');
        $resto->save();
        $req->session()->flash('status','Restaurant Added Successfully!');
        return redirect('list');
    }
    function delete($id){
        Restaurant::find($id)->delete();
        Session::flash('status','Restaurant Deleted Successfully!');
        return redirect('list');
    }
    function edit($id){
        $data = Restaurant::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req){
        // return $req->input();
        $resto = Restaurant::find($req->input('id'));
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address = $req->input('address');
        $resto->save();
        $req->session()->flash('status','Restaurant Updated Successfully!');
        return redirect('list');
    }
    function register(Request $req){
        // return $req->input();
        $user = new User;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->mobile = $req->input('mobile');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->save();
        $req->session()->put('user',$req->input('name'));
        return redirect('home');
    }
    function login(Request $req){
        // return $req->input();
        $user = User::where('mobile',$req->input('mobile'))->get();
        if(Crypt::decrypt($user[0]->password) == $req->input('password'))
        {
            $req->session()->put('user',$user[0]->name);
            return redirect('home');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
    
}
