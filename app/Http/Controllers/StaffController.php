<?php

namespace App\Http\Controllers;

use App\Models\ActivityLogs;
use App\Models\Staff;
use App\Models\Types;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $staff = Staff::where('is_deleted','=',NULL)->get();
        $title = "Staff";
        return view('staff.index',compact(['staff','title']));
    }

    public function create(){
        $title = "Create Staff";
        $types = Types::all();
        $first = Staff::get()->first();
        $myId = "";
        $year = date("Y");
    
        if(!$first){
            $myId = $year."01";
        }else{
            
            $myId = $year."0".Staff::get()->count()+1;
            
        }
        return view('staff.create',compact('title','types','myId'));
    }
    public function store(Request $data){
         $data->validate([
            'firstname'=>'required|string',
            'lastname'=>'required|string',
            'types'=>'required|string',
            'number'=>'required|size:11',
            'email'=>'required|string',
            'address'=>'required|string',
            // 'myid'=>'required'
        ]);
        $first = Staff::get()->first();
        $myId = "";
        $year = date("Y");
        if(!$first){
            $myId = $year."01";
        }else{
            $myId = $year."0".Staff::get()->count()+1;
        }
        $dataStaff = new Staff();

        $dataStaff->firstname = $data->input('firstname');
        $dataStaff->middlename = $data->input('middlename');
        $dataStaff->lastname = $data->input('lastname');
        $dataStaff->address =  $data->input('address');
        $dataStaff->workers_id =  $myId;
        $dataStaff->email = $data->input('email');
        $dataStaff->number =  $data->input('number');
        $dataStaff->type =  $data->input('types');

        if($dataStaff->save()){
            $log = new ActivityLogs();
            $log->user_id = auth()->user()->id;
            $log->activity = "Staff User Created - ".$myId;
            if($log->save())
            return redirect(route('staff.index'))->with(['msg'=>'Staff Save Succesfully']);
        }else{
            return redirect(route('staff.create'))->with('msg','Error Saving Data');
        }
            return redirect(route('staff.create'))->with('msg','Error Saving Data');

    }

    public function destroy($id){
        $staff = Staff::where('workers_id',$id)->first();
        $staff->is_deleted="true";
        if($staff->update()){
            $log = new ActivityLogs();
            $log->user_id = auth()->user()->id;
            $log->activity = "Staff User Deleted - ".$id;
            if($log->save())
            return redirect(route('staff.index'))->with(['msg'=>'Staff Deleted Succesfully']);
        }else{
            return redirect(route('staff.index'))->with(['msg'=>'Staff Deleting Failed']);
            
        }
        return redirect(route('staff.index'))->with(['msg'=>'Staff Deleting Failed']);

    }

    public function show($id){
        $staff =  Staff::where('workers_id',$id)->first();
        $types = Types::get();
        return view('staff.show',compact('staff','types'));
    }

    public function edit($id){
        $staff =  Staff::where('workers_id',$id)->first();
        $types = Types::get();
        return view('staff.edit',compact('staff','types'));
    }

    public function storeEdit($id, Request $data){
       $staff = Staff::where('workers_id',$id)->first();
       
       $data->validate([
        'firstname'=>'required|string',
        'lastname'=>'required|string',
        'types'=>'required|string',
        'number'=>'required|size:11',
        'email'=>'required|string',
        'address'=>'required|string',
        // 'myid'=>'required'
        ]);

         
       
        $staff->firstname = $data->input('firstname');
        $staff->middlename = $data->input('middlename');
        $staff->lastname = $data->input('lastname');
        $staff->address =  $data->input('address');
        $staff->email = $data->input('email');
        $staff->number =  $data->input('number');
        $staff->type =  $data->input('types');
        if($staff->update()){
            $log = new ActivityLogs();
            $log->user_id = auth()->user()->id;
            $log->activity = "Staff User has been Modified - ".$id;
            if($log->save())
            return redirect(route('staff.index'))->with(['msg'=>'Staff Modified Succesfully']);
        }else{
            return redirect(route('staff.index'))->with(['msg'=>'Staff Modified Failed']);

        }
        return redirect(route('staff.index'))->with(['msg'=>'Staff Modified Failed']);

    }
}
