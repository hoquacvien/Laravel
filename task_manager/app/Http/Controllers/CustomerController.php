<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::all()->toArray();
        return view('customer/index')->with('customer', $customer);
    }
    public function create(){
        return view('customer/create');
    }
    public function edit($id){
        $customer = Customer::find($id)->toArray();
        return view('customer/edit', compact('customer'));
    }
    public function delete($id){
        Customer::find($id)->delete();
        return redirect()->route('index');
    }
    public function detail($id){
        $customer = Customer::find($id)->toArray();
        return view('customer/detail', compact('customer'));
    }
    public function save(Request $rq){
        if ($rq->id == null){
            $cus = new Customer();
            $cus->name = $rq->name;
            $cus->phone = $rq->phone;
            $cus->email = $rq->email;
            $cus->save();
            return redirect()->route('index');
        }else{
            $cus = Customer::find($rq->id);
            $cus->name = $rq->name;
            $cus->phone = $rq->phone;
            $cus->email = $rq->email;
            $cus->save();
            return redirect()->route('index');
        }
    }
}
