<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CatalogoController extends Controller
{
    public function mostrarProductos(){
        $response = Http::get('https://fakestoreapi.com/products');
        json_decode($response->body());
        return view('cliente.catalogo') -> with('productos',json_decode($response->body())); 
    }

    public function detalleProducto($id){
        $response = Http::get('https://fakestoreapi.com/products/'.$id);
        json_decode($response->body());
        return view('cliente.detalle')-> with('producto',json_decode($response->body()));  
    }
}