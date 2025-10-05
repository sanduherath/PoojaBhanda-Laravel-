<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
      public function index()
    {
        return view('public.pages.index');
    }
      public function dashboard()
    {
        return view('public.pages.dashboard');
    }
       public function fruitManagement()
    {
        return view('public.pages.fruit-management.index');
    }
         public function fruitManagementProduct()
    {
        return view('public.pages.fruit-management.product.index');
    }
      public function fruitManagementBilling()
    {
        return view('public.pages.fruit-management.billing.index');
    }
      public function fruitManagementCreateBasket()
    {
        return view('public.pages.fruit-management.create-basket.index');
    }
         public function poojaBhanda()
    {
        return view('public.pages.pooja-bhanda.index');
    }
           public function branchManagement()
    {
        return view('public.pages.branch-mgmt.index');
    }
}
