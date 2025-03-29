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
     * @OA\Get(
     *     path="/api/showResponse",
     *     summary="Display a listing of responses",
     *     tags={"responses"},
     *     @OA\Response(response="200", description="Display a listing of responses")
     * )
     */


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->responseServices->getAllResponses());
    }

       /**
     * @OA\Post(
     *     path="/api/storeResponse",
     *     summary="Store a newly created response",
     *     tags={"responses"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"content", "author"},
     *             @OA\Property(property="content", type="string"),
     *             @OA\Property(property="author", type="string")
     *         )
     *     ),
     *     @OA\Response(response="201", description="Response created successfully")
     * )
     */   


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = $this->responseServices->createResponse($request->all());
        return response()->json($response, 201);
    }

       /**
     * @OA\Get(
     *     path="/api/showResponseId/{id}",
     *     summary="Display the specified response",
     *     tags={"responses"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response="200", description="Display the specified response")
     * )
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json($this->responseServices->getResponseById($id));
    }

    /**
     * @OA\Put(
     *     path="/api/updateResponse/{id}",
     *     summary="Update the specified response",
     *     tags={"responses"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="content", type="string"),
     *             @OA\Property(property="author", type="string")
     *         )
     *     ),
     *     @OA\Response(response="200", description="Response updated successfully")
     * )
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json($this->responseServices->update($id, $request->all()));
    }

    /**
     * @OA\Delete(
     *     path="/api/destroyResponse/{id}",
     *     summary="Remove the specified response",
     *     tags={"responses"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response="204", description="Response deleted successfully")
     * )
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $this->responseServices->deleteResponse($id);
       return response()->json(null, 204);
    }
}
