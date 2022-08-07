<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller{
    public function index(){
        $status = Auth::user()->status;
        if( strcmp( $status, "isAdmin")  === 0 ){
            return view('admin.admin');
        }
        return redirect('/home');
    }
}
