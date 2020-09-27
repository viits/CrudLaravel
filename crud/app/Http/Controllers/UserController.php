<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index()
    {
        $usuario = User::select('*')->paginate(6);
        return view('visualizar', compact('usuario'));
    }


    public function pesquisarNome(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name' => 'required'
        ]);
        if ($validate->fails()) {
            $message = 'Digite um nome';
            return redirect('/user')->withErrors($message)->withInput();
        }

        $user = $request->get('name');
        //
        if(User::where('name', 'like', '%' . $user . '%')->orderBy('name')->exists()){
            $post = User::where('name', 'like', '%' . $user . '%')->orderBy('name')->get();
            return view('resultadoPesquisa', compact('post'));    
        }
            $message = 'Usuário não encontrado';
            return redirect('/user')->withErrors($message)->withInput();
        
    }

    public function create(Request $request)
    {
        $validator = $this->validacao($request);
        if ($validator->fails()) {
            $message = 'Email ja existe';
            return redirect('/')->withErrors($message)->withInput();
        }
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
        return redirect('user');
    }

    private function validacao($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'unique:users',
            'password' => 'required'
        ]);
        return $validator;
    }

    public function show($id)
    {
        if (User::find($id)) {

            $user = User::find($id);
            return view('show', compact('user'));
        }

        echo "Nao  existe esse id";
    }




    public function update($id, Request $request)
    {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return redirect('user');
    }

    public function delete($id)
    {

        $user = User::find($id);

        $user->delete();

        return redirect('user')->with('jsAlert', 'Deletado com Sucesso');
    }
}
