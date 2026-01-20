<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDiscountController extends Controller
{
    public function index(){
        return view('admin.product_discount.create');
    }

    public function manage(){
        return view('admin.product_discount.manage');
    }
}
