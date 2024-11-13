<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos= Produto::paginate(10);
        return view('produtos.index', compact('produtos'));
        
        
    }

   
    public function create()
    {
       
        return view('create.index', compact('produtos'));
    }

    public function store(Request $request)
    {
       
    }

    
    public function show(string $id)
    {
     
    }

  
    public function edit(string $id)
    {
        return view('create.index', compact('produtos'));
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
