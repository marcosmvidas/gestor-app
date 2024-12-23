<?php

namespace App\Http\Controllers;

use App\Services\RubricaService;
use Illuminate\Http\Request;

class RubricaController extends Controller
{
    protected $service;

    public function __construct(RubricaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return response()->json($this->service->list(), 200);
    }

    public function show($id)
    {
        return response()->json($this->service->show($id), 200);
    }

    public function store(Request $request)
    {
        try {
            $rubrica = $this->service->store($request->all());
            return response()->json($rubrica, 201);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $rubrica = $this->service->update($id, $request->all());
            return response()->json($rubrica, 200);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->json(null, 204);
    }
}
