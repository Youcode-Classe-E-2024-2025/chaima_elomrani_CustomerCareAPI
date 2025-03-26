<?php

namespace App\Http\Controllers;

use App\Services\ResponseService;
use Illuminate\Http\Request;

class ResponsesController extends Controller
{

    protected $responseServices
    ;
    public function __construct(ResponseService $responseServices){
        $this->responseServices = $responseServices;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->responseServices->getAllResponses());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = $this->responseServices->createResponse($request->all());
        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
