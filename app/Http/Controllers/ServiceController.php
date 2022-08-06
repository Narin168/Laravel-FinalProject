<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //    
        $services = Service::all();
        return view ('category.carpentry')->with('services', $services);
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function electrical()
    {
        //    
        $services = Service::where('category_id',1)->get();
        return view ('category.electrical')->with('services', $services);
    }
    public function plumbing()
    {
        //    
        $services = Service::where('category_id',2)->get();        
        return view ('category.plumbing')->with('services', $services);
    }
    public function cleaning()
    {
        
        $services = Service::where('category_id',3)->get();
        return view ('category.cleaning')->with('services', $services);
    }
    public function painting()
    {
        $services = Service::where('category_id',4)->get();
        return view ('category.painting')->with('services', $services);
    }
    public function flooring()
    {
        $services = Service::where('category_id',5)->get();
        return view ('category.flooring')->with('services', $services);
    }
    public function carpentry()
    {
        $services = Service::where('category_id',6)->get();
        return view ('category.carpentry')->with('services', $services);
    }
    
    public function checkout($id)
    {
        $service = Service::find($id);
        return view('page.checkout', compact('service'));
    }   
}
