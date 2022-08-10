<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    //
    public function create()
    {
        return view('page.checkout');
    }
    public function store(Request $request)
    {
        $history = History::create([
            'phonenumber' => $request->phonenumber,
            'user_id' => $request->user_id,
            'service_id' => $request->service_id, 
            'name' => $request->name,
            'description' => $request->description,   
            'imgurl' => $request->imgurl,                 
        ]);

        return redirect('home')->with('flash_message', 'Service Booked Successfully!');  
    }

    public function show($user_id)
    {
        $histories = History::where('user_id',$user_id)->get();
        return view('page.history')->with('histories', $histories);
    }   
    
}
