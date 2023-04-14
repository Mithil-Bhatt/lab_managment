<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lab;
use Illuminate\Http\Request;

class Crudcontroller extends Controller
{
    //user
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

    public function dataedit(Request $request, $id)
    {

        user::where('id', $id)->update([
            'username' => $request['username'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);

        return redirect('data');
    }





    //lab

    
    public function labcrud()
    {

        $userdata = lab::all();
        return view('labcrud', compact('userdata'));
    }

    public function labentry(Request $request)
    {
        lab::create([
            'lab_no' => $request['lab_no']
           
        ]);
        return redirect('labdata');
    }

    
    public function labdelete($lab_id)
    {
        lab::where('lab_id', $lab_id)->delete();
        return redirect('labdata');
    }


    public function labedits($lab_id)
    {
        $user = lab::find($lab_id);
        // dd($student);

        return view('labcrudedit', compact('user'));
    }
}
