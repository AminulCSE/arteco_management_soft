<?php
use Illuminate\Http\Request;
use DB;
use Redirect,Response;

class InvoiceController extends Controller{
	public function addInovice(){
        return view('invoice.add_invoice');
	}


	public function index(){
      $data['orders'] = DB::table('orders')->get();
       return view("invoice.add_invoice",$data);
    }
 
   public function getPrice(){
      $getPrice = $_GET['id'];
      $price  = DB::table('orders')->where('id', $getPrice)->get();
      return Response::json($price);
   }   
}