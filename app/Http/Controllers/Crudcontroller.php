<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lab;
use App\Models\software;
use App\Models\hardware;
use App\Models\computer;
use App\Models\complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //return $lab_id;
        $user = lab::select("*")->where('lab_id',$lab_id)->first();
         
       return view('labcrudedit', compact('user'));
    }

    
    public function labdataedit(Request $request, $lab_id)
    {

        lab::where('lab_id', $lab_id)->update([
            'lab_no' => $request['lab_no']
        ]);

        return redirect('labdata');
    }





    //computer 
     
    public function computercrud()
    {

        $userdata = computer::all();
        return view('computercrud', compact('userdata'));
    }

    public function computerentry(Request $request)
    {
        computer::create([
            'Computer_no' => $request['Computer_no'],
            'lab_id' => $request['lab_id']            
        ]);
        return redirect('computerdata');
    }

    
    public function computerdatadelete($computer_id)
    {
        computer::where('computer_id', $computer_id)->delete();
        return redirect('computerdata');
    }


    public function computerdataedits($computer_id)
    {
        //return $lab_id;
        $user = computer::select("*")->where('computer_id',$computer_id)->first();
         
       return view('computercrudedit', compact('user'));
    }

    
    public function computerdataedit(Request $request, $computer_id)
    {

        computer::where('computer_id', $computer_id)->update([
            'Computer_no' => $request['Computer_no'],
            'lab_id' => $request['lab_id']
        ]);

        return redirect('computerdata');
    }










    //software

    public function softwarecrud()
    {

        $userdata = software::all();
        return view('softwarecrud', compact('userdata'));
    }

    public function softwareentry(Request $request)
    {
        software::create([
            'software_name' => $request['softwarename']
        ]);
        return redirect('softwaredata');
    }

    
    public function softwaredatadelete($id)
    {
        software::where('id', $id)->delete();
        return redirect('softwaredata');
    }


    public function softwaredataedits($id)
    {
        $user = software::find($id);
        // dd($student);

        return view('softwarecrudedit', compact('user'));
    }

    public function softwareeditPage($id)
    {
        $student = software::find($id);
        // dd($student);
        return view('softwarecrudedit', compact('student'));
    }

    public function softwaredataedit(Request $request, $id)
    {

        software::where('id', $id)->update([
            'software_name' => $request['software_name']
        ]);

        return redirect('softwaredata');
    }






    //hardware

    
    public function hardwarecrud()
    {

        $userdata = hardware::all();
        return view('hardwarecrud', compact('userdata'));
    }

    public function hardwareeentry(Request $request)
    {
        hardware::create([
            'hardware_name' => $request['hardware_name']
        ]);
        return redirect('hardwaredata');
    }

    
    public function hardwaredatadelete($id)
    {
        hardware::where('id', $id)->delete();
        return redirect('hardwaredata');
    }


    public function hardwaredataedits($id)
    {
        $user = hardware::find($id);
        // dd($student);

        return view('hardwarecrudedit', compact('user'));
    }

    public function hardwareeditPage($id)
    {
        $student = hardware::find($id);
        // dd($student);
        return view('hardwarecrudedit', compact('student'));
    }

    public function hardwaredataedit(Request $request, $id)
    {

        hardware::where('id', $id)->update([
            'hardware_name' => $request['hardware_name']
        ]);

        return redirect('hardwaredata');
    }





    //complain view

    public function complainview()
    {

        $complains = DB::table('complain')
                    ->select('complain.*', 'computer.Computer_no', 'lab.lab_no', 'hardware.hardware_name', 'software.software_name')
                    ->join('computer', 'complain.computer_id', '=', 'computer.computer_id')
                    ->join('lab', 'complain.lab_id', '=', 'lab.lab_id')
                    ->join('hardware', 'complain.hardware_id', '=', 'hardware.id')
                    ->join('software', 'complain.software_id', '=', 'software.id')
                    ->get();

    


        return view('complainview', compact('complains'));
        
    }


      public function adminmain()
      {
        return view('admin');
      }



}
