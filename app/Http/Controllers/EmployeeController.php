<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\employee;
class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function AddEmployee(){
    	return view('employee.add_employee');
    }

    public function StoreEmployee(Request $request){
    	$validatedData = $request->validate([
	        'name'			=> 'required|min:2',
	        'phone'			=> 'max:255',
	        'position'		=> 'required|max:255|min:2',
	        'salary'		=> 'max:255',
	        'email'			=> 'max:255',
	        'address'		=> 'max:255',
            'start_date'    => 'max:255',
	        'image' 	  	=> 'required|mimes:jpeg,png,PNG,JPG,jpg,gif|max:2048'
    	]);


	    $employee = new employee;
	    $employee->name			= $request->name;
	    $employee->phone		= $request->phone;
	    $employee->position		= $request->position;
	    $employee->salary		= $request->salary;
	    $employee->email		= $request->email;
	    $employee->address		= $request->address;
        $employee->start_date      = $request->start_date;

	    $image                  = $request->file('image');
            $image_name         = hexdec(uniqid());
            $ext                = strtolower($image->getClientOriginalExtension());
            $image_full_name    = $image_name.'.'.$ext;
            $upload_path        = 'public/backend/employee/images/';
            $image_url          = $upload_path.$image_full_name;
            $success            = $image->move($upload_path, $image_full_name);
            $employee->image    = $image_url;
            $employee->save();
            return back()->with('message', 'Employee Insert Success!');
    }

    public function AllEmployee(){
        $employee_data = DB::table('employees')->orderBy('id', 'ASC')->get();
        return view('employee.all_employee', compact('employee_data'));
    }

    public function EditEmployee($id){
        $edit_employee = DB::table('employees')->where('id', $id)->first();
        return view('employee.edit_employee', compact('edit_employee'));
    }




    public function UpdateEmployee(Request $request, $id){
        $validatedData = $request->validate([
            'name'          => 'required|min:5',
            'phone'         => 'max:255',
            'position'      => 'required|max:255|min:2',
            'salary'        => 'max:255',
            'email'         => 'max:255',
            'address'       => 'max:255',
            'start_date'    => 'max:255',
        ]);

        $update_data = array();
        $update_data['name']       = $request->name;
        $update_data['phone']      = $request->phone;
        $update_data['position']   = $request->position;
        $update_data['salary']     = $request->salary;
        $update_data['email']      = $request->email;
        $update_data['address']    = $request->address;
        $update_data['start_date'] = $request->start_date;
        $update_data['image']      = $request->image;
        $image                     = $request->file('image');

        if ($image){
            $image_name         = hexdec(uniqid());
            $ext                = strtolower($image->getClientOriginalExtension());
            $image_full_name    = $image_name.'.'.$ext;
            $upload_path        = 'public/backend/employee/images/';
            $image_url          = $upload_path.$image_full_name;
            $success            = $image->move($upload_path, $image_full_name);
            $update_data['image']= $image_url;
            unlink($request->oldimage);
            DB::table('employees')->where('id', $id)->update($update_data);
            return back()->with('message', 'Employee Updated Success!');
        }else{
            $update_data['image']   = $request->oldimage;
            DB::table('employees')->where('id', $id)->update($update_data);
            return back()->with('message', 'Employee Updated Successfully! Without Image');
        }
    }

    public function DeleteEmployee($id){
        $slider_delete = DB::table('employees')->where('id', $id)->first();
        $image = $slider_delete->image;

        $delete_employee = DB::table('employees')->where('id', $id)->delete();
        if ($delete_employee) {
            unlink($image);
            return back()->with('message', 'Employee Deleted Successfully!');
        }
    }
}
