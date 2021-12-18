<?php

namespace App\Http\Controllers;

use App\Models\Army;
use Illuminate\Http\Request;

class ArmyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Army::get();
        return view('pages.army.index',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.army.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation();
        Army::create([
            'army' => $request->army
        ]);
        return redirect()->back()->with('success','تمت العملية بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(Army $army)
    {
        return view('pages.army.edit',compact('army'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Army $army)
    {
        $this->validation();
        $army->update([
            'army' => $request->army
        ]);
        return redirect()->back()->with('success','تمت العملية بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(Army $army)
    {
        $army->delete();
        return redirect()->back()->with('success','تمت العملية بنجاح');
    }

    private function validation()
    {
        request()->validate([
            'army' => 'required|string',
        ]);
    }
}
