<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepartamentoController extends Controller
{
    public function index(){
        $departamentos = DB::select('select * from departamentos');
        return view('departamentos', 
                    ['departamentos' => $departamentos]);
    }

     public function ViewAdd(){
        return view('adicionarDepartamento');
    }

    public function ViewShow($id){
        $departamentos = DB::select('select * from departamentos where id = :id', ['id'=>$id]);              
        return view('mostrarDepartamento', ['departamentos' => $departamentos]);
    }

    public function ViewUpdate($id){
        $departamentos = DB::select('select * from departamentos where id = :id', ['id'=>$id]);              
        return view('editarDepartamento', ['departamentos' => $departamentos]);
    }

    public function editarDepartamento(Request $request){
        $departamentos = DB::update('update departamentos set nome=?, responsabilidade=? where id = ?',
            [$request->nome,
             $request->responsabilidade,
             $request->id]);

        return redirect('departamentos');
    }

    public function Delete($id){
        $departamentos = DB::select('delete from departamentos where id = :id', ['id'=>$id]);        
        return redirect('departamentos');
    }

    public function insert(Request $request){
        DB::insert('insert into departamentos (nome, responsabilidade) values (?, ?)',
            [$request->nome, 
             $request->responsabilidade]);

        return redirect('departamentos');
    } 
}
