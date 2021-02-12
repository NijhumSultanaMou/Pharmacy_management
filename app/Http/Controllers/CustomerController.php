<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use DB;
class CustomerController extends Controller
{
    //

    public function InsertCustomerInfo()
    {
    	return view('admin.create');

    }

    public function Insert(Request $request)
    {
    $values =[$request->firstname,$request->lastname,$request->gender,$request->address,$request->phone,$request->purchaseamount];
    DB::insert('EXEC InsertCustomerInfo ?,?,?,?,?,?',$values);
        return redirect()->back()->with('message', 'Data Inserted Successfully');
    }

    public function getCustomerinfo()
    {
    $data=DB::select('EXEC getCustomerInfo');
    return view('admin.customer')->with('data',$data);


    }

    public function updateCustomerInfo($id)
    {

//        $data=DB::select('EXEC getCustomerInfoOne ?',[$id]);
        $data=Customer::find($id);
        return view('admin.update')->with('customer',$data);

    }
    public function Edit(Request $request,$id)
    {
        $values =[$request->firstname,$request->lastname,$request->gender,$request->address,$request->phone,$request->purchaseamount,$id];
        DB::update('EXEC updateCustomerInfo ?,?,?,?,?,?,?',$values);
        return redirect()->back()->with('message', 'Data Updated Successfully');
//dd($values);

    }

    public function DiscountCustomer($id)
    {
        $data=Customer::find($id);
        return view('admin.discount')->with('customer',$data);
    }
    public function Discount(Request $request,$id)
    {
        $values =[$request->firstname,$request->lastname,$request->gender,$request->address,$request->phone,$request->purchaseamount,$id];
        DB::update('EXEC DiscountCustomer ?,?,?,?,?,?,?',$values);
        return redirect()->back()->with('message', 'Discounted');
//dd($values);

    }

    public function Delete($id)
    {
        DB::delete('EXEC DeleteCustomerInfo ?',[$id]);
        return redirect()->back()->with('message', 'Data Deleted Successfully');
    }
    
   
}
