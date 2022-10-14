<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactFormSubmit(Request $request){

       

        $this->validate($request,[
            'email'=>'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255'
         ]);

         dd($request->email);

      
        dd($request->first_name);

        dd($request->last_name);
    }
}
