<?php

namespace App\Http\Controllers;

use App\Models\leads;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('home',[
            "leads" => DB::select("SELECT * FROM leads")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(leads $leads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(leads $leads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, leads $leads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(leads $leads)
    {
        //
    }
}
