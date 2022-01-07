<?php

namespace App\Http\Controllers;
use DB;
use App\Attendence;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addAttendence(){
    	$employee = DB::table('employees')->orderBy('id', 'ASC')->get();
    	return view('attendence.add_attendence', compact('employee'));
    }

    public function StoreAttendance(Request $request){

    	$validatedData = $request->validate([
	        'attendence'	=> 'required',
    	]);

    	$get_dt = $request->att_date;
    	$att_dt = DB::table('attendences')->where('att_date', $get_dt)->first();

		if ($att_dt) {
			return back()->with('error', 'Today! Attendence Already Inserted!');
		}else{
			$data = array();
	    	foreach($request->employee_id as $id) {
	    		$data[]=[
	    			'employee_id'	=>$id,
	    			'att_date'		=>$request->att_date,
	    			'att_year'		=>$request->att_year,
	    			'att_month'		=>$request->att_month,
	    			'hourly_duty'	=>$request->hourly_duty[$id],
	    			'overtime'		=>$request->overtime[$id],
	    			'attendence'	=>$request->attendence[$id],
	    			'edit_date'		=>date('d_m_y'),
	    		];
	    	}
	    	$att = DB::table('attendences')->insert($data);
	    	if ($att) {
	    		return back()->with('message', 'Attendence Insert Successfully!');
	    	}
		}
    }


    public function AllAttendence(){
    	$all_att = DB::table('attendences')->select('edit_date')->groupBy('edit_date')->get();
    	return view('attendence.all_attendence', compact('all_att'));
    }

    public function EditAttendence($edit_date){
    	$get_edit_date = DB::table('attendences')->where('edit_date', $edit_date)->first();

    	$edit_att = DB::table('attendences')->join('employees', 'attendences.employee_id', 'employees.id')->select('employees.name', 'employees.image', 'attendences.*')->where('edit_date', $edit_date)->orderBy('attendences.id', 'ASC')->get();
    	return view('attendence.edit_attendence', compact('edit_att', 'get_edit_date'));
    }

    public function UpdateAttendance(Request $request){
    	foreach($request->id as $id) {
	    		$data=[
	    			'att_date'		=>$request->att_date,
	    			'att_year'		=>$request->att_year,
	    			'att_month'		=>$request->att_month,
	    			'hourly_duty'	=>$request->hourly_duty[$id],
	    			'overtime'		=>$request->overtime[$id],
	    			'attendence'	=>$request->attendence[$id],
	    		];
	    	$attendence = Attendence::where(['att_date'=>$request->att_date, 'id'=>$id])->first();
	    	$attendence->update($data);
	    	}
	    	if ($attendence) {
	    		return back()->with('message', 'Attendence Updated Successfully!');
	    	}else{
	    		return back()->with('message', 'Attendence not Updated !');
	    	}
    }

    public function ViewAttendence($edit_date){
    	$get_view_date = DB::table('attendences')->where('edit_date', $edit_date)->first();
    	$edit_att = DB::table('attendences')->join('employees', 'attendences.employee_id', 'employees.id')->select('employees.name', 'employees.image', 'attendences.*')->where('edit_date', $edit_date)->orderBy('attendences.id', 'ASC')->get();
    	return view('attendence.view_attendence', compact('edit_att', 'get_view_date'));
    }



}



