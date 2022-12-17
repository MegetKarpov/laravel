<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('welcome')->with([
            'customers' => $customers
        ]);
    }

    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {
        $date = date('Y', strtotime($request->birthday));

        if($date < 1970){
            return redirect()->back()->withErrors([
                'birthday' => 'Дата рождения не может быть меньше 1970 года'
            ])->withInput($request->all());
        }

       $customer = Customer::create($request->all());
       return redirect()->route('customers');
    }
}
