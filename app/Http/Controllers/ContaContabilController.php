<?php

namespace App\Http\Controllers;

use App\Services\ContaContabilService;
use App\Services\Validation\ContaContabilValidate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContaContabilController extends Controller
{
    protected $contaContabilService;
    protected $contaContabilValidate;

    public function __construct(ContaContabilService $contaContabilService, ContaContabilValidate $contaContabilValidate)
    {
        $this->contaContabilService = $contaContabilService;
        $this->contaContabilValidate = $contaContabilValidate;
    }

    /**
     * Lista contas contábeis.
     */
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 15);

        $contas = $this->contaContabilService->list($perPage);

        if ($request->expectsJson()) {
            return response()->json($contas);
        }

        return view('contabilidade.conta-contabil-lista', ['contas' => $contas]);
    }

    /**
     * Exibe o formulário para criar uma nova conta contábil.
     */
    public function create()
    {
        return view('contabilidade.conta-contabil-form');
    }
    
    public function edit($id)
    {
        $conta = contaContabilService::findOrFail($id);
        return view('contabilidade.conta-contabil-form', compact('conta'));
    }    

    /**
     * Mostra os detalhes de uma conta contábil.
     */
    public function show(Request $request, $id)
    {
        $conta = $this->contaContabilService->getById($id);

        if (!$conta) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Conta contábil não encontrada'], Response::HTTP_NOT_FOUND);
            }
            abort(404, 'Conta contábil não encontrada');
        }

        if ($request->expectsJson()) {
            return response()->json($conta); // Para API
        }

        return view('contabilidade.conta-contabil-detalhes', ['conta' => $conta]); // Para Web
    }

    /**
     * Cria uma nova conta contábil (API e Web).
     */
    public function store(Request $request)
    {
        $validator = $this->contaContabilValidate->validate($request->all());

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json(['errors' => $validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $conta = $this->contaContabilService->create($request->all());

        if ($request->expectsJson()) {
            return response()->json($conta, Response::HTTP_CREATED); // Para API
        }

        return redirect()->route('contabilidade.index')->with('success', 'Conta criada com sucesso'); // Para Web
    }
    
    /**
     * Atualiza uma conta contábil existente.
     */
    public function update(Request $request, $id)
    {
        $validator = $this->contaContabilValidate->validate($request->all());

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json(['errors' => $validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $conta = $this->contaContabilService->getById($id);

        if (!$conta) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Conta contábil não encontrada'], Response::HTTP_NOT_FOUND);
            }
            abort(404, 'Conta contábil não encontrada');
        }

        $updatedConta = $this->contaContabilService->update($conta, $request->all());

        if ($request->expectsJson()) {
            return response()->json($updatedConta); // Para API
        }

        return redirect()->route('contabilidade.index')->with('success', 'Conta atualizada com sucesso'); // Para Web
    }

    /**
     * Exclui uma conta contábil.
     */
    public function destroy(Request $request, $id)
    {
        $conta = $this->contaContabilService->getById($id);

        if (!$conta) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Conta contábil não encontrada'], Response::HTTP_NOT_FOUND);
            }
            abort(404, 'Conta contábil não encontrada');
        }

        $this->contaContabilService->delete($conta);

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Conta contábil excluída com sucesso']); // Para API
        }

        return redirect()->route('contabilidade.index')->with('success', 'Conta excluída com sucesso'); // Para Web
    }
}
