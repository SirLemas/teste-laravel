<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cadastro;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\CadastroStoreRequest;

class CadastroController extends Controller
{
    public function registros()
    {
        $registros = Cadastro::all();
        if (empty($registros)) {
            return response()->json('Ainda não tem registros para validar', 200);
        }

        return response()->json($registros, 200);
    }

    public function registrar(CadastroStoreRequest $request)
    {
        if (!isset($request->colaborador) || empty($request->colaborador)) {
            return response()->json('Erro na requisicao, por favor verificar os dados', 400);
        }

        if ($request->validated()) {
            $colaborador = Cadastro::create($request->colaborador);
            return response()->json($colaborador, 201);
        }
    }

    public function validar(Request $request, $id)
    {

        if (!isset($request->colaborador) || empty($request->colaborador)) {
            return response()->json('Erro na requisicao, por favor verificar os dados', 400);
        }

        $colaborador = Cadastro::where('id', $id)->first();

        if (empty($colaborador)) {
            return response()->json('Colaborador nao encontrado', 404);
        }

        $colaborador->validado = $request->colaborador['validado'];
        $colaborador->validado_em = date('Y-m-d H:i');
        $colaborador->save();

        return response()->json('Cliente validado com sucesso!', 201);
    }

    public function getColaborador($id) {
        $colaborador = Cadastro::where('id', $id)->first();
        if (empty($colaborador)) {
            return response()->json('Colaborador nao encontrado', 404);
        }

        return response()->json($colaborador, 201);
    }
}
