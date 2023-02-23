<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    function show($name){
        return "Zahoor and ".$name;
    }

    function loadView($name){
        if (view()->exists('user')){
            return view('user',['user'=>$name]);
        }else{
            return "Not found";
        }
    }

    function getData(Request $req){
        return $req->input();
    }

    function hitAPI(){
        $data = Http::get('https://reqres.in/api/users?page=1');
        return view('print_api', ['collection'=>$data['data']]);
    }

    function storeD(Request $req){
        echo "success!";
        return $req->input();

    }

    function saveData(Request $req){
        $d = $req->input('name');
        $req->session()->flash('name',$d);
        return redirect()->back();
    }

    function login(Request $req){
        $data = $req->input('email');
        $req->session()->put('user',$data);
        return redirect()->route('/profile');
    }

}
