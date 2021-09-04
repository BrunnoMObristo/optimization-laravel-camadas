<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FuncionarioController extends Controller
{    
    public function index(){
        $funcionarios = DB::select('select * from funcionarios');
        return view('funcionarios', 
                    ['funcionarios' => $funcionarios]);
    }

    public function ViewAdd(){
        return view('adicionarFuncionario');
    }

    public function ViewShow($id){
        $funcionarios = DB::select('select * from funcionarios where id = :id', ['id'=>$id]);              
        return view('mostrarFuncionario', ['funcionarios' => $funcionarios]);
    }

    public function ViewUpdate($id){
        $funcionarios = DB::select('select * from funcionarios where id = :id', ['id'=>$id]);              
        return view('editarFuncionario', ['funcionarios' => $funcionarios]);
    }

    public function editarFuncionario(Request $request){
        $funcionarios = DB::update('update funcionarios set nome_completo=?, cargo=?, departamento=? where id = ?',
            [$request->nome_completo,
             $request->cargo,
             $request->departamento,
             $request->id]);

        return redirect('funcionarios');
    }

    public function Delete($id){
        $funcionarios = DB::select('delete from funcionarios where id = :id', ['id'=>$id]);        
        return redirect('funcionarios');
    }

    public function insert(Request $request){
        DB::insert('insert into funcionarios (nome_completo, cargo, departamento) values (?, ?, ?)',
            [$request->nome_completo, 
             $request->cargo, 
             $request->departamento]);

        return redirect('funcionarios');
    } 
}
