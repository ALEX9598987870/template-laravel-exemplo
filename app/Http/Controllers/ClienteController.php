<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Endereco;

class ClienteController extends Controller
{
    
    public function index()
    {
        return view('index');
    }
    
    public function create()
    {
       
    }
    
    public function store(Request $request){

        $c = new Cliente;
        $c->cnpj = $request->cnpj;
        $c->nome_fantasia = $request->nome_fantasia;
        $c->razao_social = $request->razao_social;
        $c->cnae = $request->cnae;
        $c->inscricao_municipal = $request->inscricao_municipal;
        $c->inscricao_estatual = $request->inscricao_estatual;
        $c->email = $request->email;
        $c->telefone_residencial = $request->telefone_residencial;
        $c->telefone_celular = $request->telefone_celular;
        
        $c->save();
        
        $e = new Endereco;
        $e->cep = $request->cep;
        $e->logradouro = $request->logradouro;
        $e->numero = $request->numero;
        $e->complemento = $request->complemento;
        $e->bairro = $request->bairro;
        $e->municipio = $request->municipio;
        $e->uf = $request->uf;
        $e->pais = $request->pais;

        $c->endereco()->save($e);
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
}
