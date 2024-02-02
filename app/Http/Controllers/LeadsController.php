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

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request){
        $leads = new leads();
        $leads->NMLead = $request->nome;
        $leads->NUTelefoneLead = $request->telefone;
        $leads->NMEmailLead = $request->email;
        $leads->UF = $request->estado;
        $leads->NMCidadeLead = $request->cidade;
        $leads->DSMensagem= $request->mensagem;
        $leads->save();
        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource to delete.
     */
    public function delete($id){
        return view('excluir',[
            "lead" =>  leads::findOrFail($id) 
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        return view('editar',[
           "lead" =>  leads::findOrFail($id) 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        DB::update("UPDATE leads SET NMLead = '".$request->nome."', NMEmailLead = '".$request->email."', NUTelefoneLead = '".$request->telefone."', UF = '".$request->estado."', NMCidadeLead = '".$request->cidade."', DSMensagem = '".$request->mensagem."' WHERE id = '".$request->id."' ");
        return redirect()->route('home');
    }  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $Request){
        DB::delete("DELETE FROM leads WHERE id = '".$Request->id."'");
        return redirect()->route('home');
    }
}
