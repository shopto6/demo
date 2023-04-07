<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
class CustomerController extends Controller
{
    public function index(){
        $url=url('/customer');
        $title="Sign Up";
        $data=compact('url','title');
        return view('customer')->with ($data);
    }
    public function store(Request $request){
        echo "<pre>";
        print_r($request->all());

        $customer = new Customers;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->password=$request['password'];
        $customer->save();

        return redirect('/customer/view');
    }
    public function view(){
        $customer= Customers::all();

        $data=compact('customer');
        return view('customer-view')->with($data);
    }
    public function delete($id)
    {
      Customers::find($id)->delete();
      return redirect()->back();
    }
    public function edit($id)
    {
      $customer=Customers::find($id);
      if(is_null($customer)){
        //not found
        return redirect('customer');
      }else{
        $title="Update Registration";
        $url=url('/customer/update') ."/" . $id;
        $data=compact('customer', 'url','title');
        return view('customer')->with($data);
      }
     
    }
    public function update($id,Request $request){
      $customer=Customers::find($id);
      $customer->name=$request['name'];
      $customer->email=$request['email'];
      $customer->password=$request['password'];
      $customer->save();
      return redirect ('/customer/view');
    }

}


