<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\lab;
use App\Models\computer;
use App\Models\software;
use App\Models\hardware;
use App\Models\User;
use Illuminate\Support\Facades\Input;
use Auth;
use Illuminate\Http\Request;


class BasicController extends Controller
{
    public function adminstore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        //dd($request->all());
        admin::create([
            'name' => $request['name'],
            'password' => $request['password']
        ]);
        return view('register');

        // return redirect('register');
        //$student=student::all();
        // return view('student',compact('student'));
    }

    public function login(Request $request)
    {


        $uname = $request->input('name');
        $password = $request->input('password');
        // dd($uname);
        // dd($password);


        $user = admin::where('name', '=', $uname)->first();
        $pass1 = admin::where('password', '=', $password)->first();
        if ($user && $pass1) {
            return view('lab');
        } else {
            dd("wrong");
        }

        //dd($users);
    }

    public function display()
    {


        // $data2=Computer::where('id',1)->first();
        //  return view('display',compact('data','data1'));

    }




    public function pc()
    {

        $pc = Computer::all();
        return view('pc', compact('pc'));
    }

    public function pcfind($id)
    {
        $pc = Computer::find($id);
        $data = Hardware::all();
        $data1 = Software::all();
        return view('display', compact('pc', 'data', 'data1'));
    }



    public function admincrud()
    {

         $userdata = user::all();
        return view('admincrud', compact('userdata'));
    }

    public function dataentry(Request $request)
    {
        user::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);
        return redirect('data');
    }

    
   public function datadelete($id)
   {
      user::where('id', $id)->delete();
      return redirect('data');
   }

   
   public function dataedits($id)
   {
      $user = user::find($id);
      // dd($student);

      return view('userEdit', compact('user'));
   }

   public function editPage($id)
   {
    $student = user::find($id);
    // dd($student);
    return view('useredit', compact('student'));
    }

    public function dataedit( Request $request,$id)
    {
       
       user::where('id',$id)->update([
          'username' => $request['username'],
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => $request['password']
       ]);
 
       return redirect('data');
    }

}

