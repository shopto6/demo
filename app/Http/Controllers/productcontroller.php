<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class productcontroller extends Controller
{
    function insert(Request $req){
        $name= $req->get('pname');
        $price= $req->get('pprice');
        $quantity= $req->get('pquantity');
        $pimage= $req->file('image')->getClientOriginalName();
        //move uploaded File
        $req->image->move(public_path('images'),$pimage);

        $prod =new Product();
        $prod->PName = $name;
        $prod->PPrice = $price;
        $prod->PQuantity = $quantity;
        $prod->PImage = $pimage;
        $prod->save();
        return redirect('index');
    }
    function readdata(){
        $pdata=Product::all();
        return view('product',['data'=> $pdata]);
    }
    function updateordelete(Request $req){
       $id= $req->get('Id');
       $name= $req->get('name');
       $price= $req->get('price');
       $quantity= $req->get('quantity');
     
       if($req->get('update') == 'Update'){
        return view('updateproduct',['pid'=>$id, 'pname'=>$name, 'pprice'=>$price,'pquantity'=>$quantity]);
        
       }
    }


}
