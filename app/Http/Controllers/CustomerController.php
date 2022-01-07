<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use DB;
class CustomerController extends Controller
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


    public function addCustomer(){
    	return view('customer/add_customer');
    }

    public function StoreCustomer(Request $request){
        $validatedData = $request->validate([
            'name'          => 'required|min:2',
            'phone'         => 'max:255',
            'position'      => 'required|max:255|min:2',
            'salary'        => 'max:255',
            'email'         => 'max:255',
            'address'       => 'max:255',
            'start_date'    => 'max:255',
            'image'         => 'required|mimes:jpeg,png,PNG,JPG,jpg,gif|max:2048'
        ]);
    }

    
}
