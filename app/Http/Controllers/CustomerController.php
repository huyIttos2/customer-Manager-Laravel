<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = [
            '0' =>[
                "id" => 1,
                "name" => "customer1",
                "bod" => "1989-09-01",
                "email" => "customer1@gmail.com",
            ],
            '1' =>[
                "id" => "2",
                "name" => "customer2",
                "bod" => "1998-02-01",
                "email" => "customer2@gmail.com",
            ],
            '2' =>[
                "id" => "3",
                "name" => "customer3",
                "bod" => "1998-09-02",
                "email" => "nguyendanghuy234@gmail.com",
            ]
        ];
        return view('customer.list',compact('customers'));
    }

}
