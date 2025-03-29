<?php

namespace App\Http\Controllers;

use App\Services\ResponseService;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Responses",
 *     description="API Endpoints for managing responses to tickets"
 * )
 * 
 * @OA\Schema(
 *     schema="Response",
 *     required={"content", "ticket_id"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="content", type="string"),
 *     @OA\Property(property="ticket_id", type="integer"),
 *     @OA\Property(property="user_id", type="integer"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class ResponsesController extends Controller
{
    protected $responseService;

    public function __construct(ResponseService $responseService)
    {
        $this->responseService = $responseService;
    }

    /**
     * @OA\Get(
     *     path="/api/showResponse",
     *     summary="Get all responses",
     *     tags={"Responses"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Response"))
     *     )
     * )
     */
    public function index()
    {
        return response()->json($this->responseService->getAllResponses());
    }

    /**
     * @OA\Post(
     *     path="/api/storeResponse",
     *     summary="Create a new response",
     *     tags={"Responses"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Response")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Response created",
     *         @OA\JsonContent(ref="#/components/schemas/Response")
     *     )
     * )
     */
    public function store(Request $request)
    {
        $response = $this->responseService->createResponse($request->all());
        return response()->json($response, 201);
    }

    /**
     * @OA\Get(
     *     path="/api/showResponseId/{id}",
     *     summary="Get a specific response by ID",
     *     tags={"Responses"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Response")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Response not found"
     *     )
     * )
     */
    public function show(string $id)
    {
        return response()->json($this->responseService->getResponseById($id));
    }

    /**
     * @OA\Put(
     *     path="/api/updateResponse/{id}",
     *     summary="Update an existing response",
     *     tags={"Responses"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Response")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Response updated",
     *         @OA\JsonContent(ref="#/components/schemas/Response")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Response not found"
     *     )
     * )
     */
    public function update(Request $request, string $id)
    {
        return response()->json($this->responseService->updateResponse($id, $request->all()));
    }

    /**
     * @OA\Delete(
     *     path="/api/destroyResponse/{id}",
     *     summary="Delete a response",
     *     tags={"Responses"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Response deleted successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Response not found"
     *     )
     * )
     */
    public function destroy(string $id)
    {
        $this->responseService->deleteResponse($id);
        return response()->json(null, 204);
    }
}
