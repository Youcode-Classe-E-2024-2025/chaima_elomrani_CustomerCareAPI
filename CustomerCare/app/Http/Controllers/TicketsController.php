<?php

namespace App\Http\Controllers;

use App\Services\TicketService;
use Illuminate\Http\Request;

/**
 * @OA\PathItem(
 *     path="/api"
 * )
 * @OA\Tag(
 *     name="Tickets",
 *     description="API Endpoints for managing tickets"
 * )
 * 
 * @OA\Schema(
 *     schema="Ticket",
 *     required={"title", "description"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="title", type="string"),
 *     @OA\Property(property="description", type="string"),
 *     @OA\Property(property="status", type="string"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class TicketsController extends Controller {

    protected $ticketService;

    public function __construct(TicketService $ticketService)
    {
        $this->ticketService = $ticketService;
    }

    /**
     * @OA\Get(
     *     path="/api/showTickets",
     *     summary="Get all tickets",
     *     tags={"Tickets"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Ticket"))
     *     )
     * )
     */
    public function index()
    {
        return response()->json($this->ticketService->getAllTickets());
    }

    /**
     * @OA\Post(
     *     path="/api/storeTickets",
     *     summary="Create a new ticket",
     *     tags={"Tickets"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Ticket")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Ticket created",
     *         @OA\JsonContent(ref="#/components/schemas/Ticket")
     *     )
     * )
     */
    public function store(Request $request)
    {
        $ticket = $this->ticketService->createTicket($request->all());
        return response()->json($ticket, 201);
    }

    /**
     * @OA\Get(
     *     path="/api/show/{id}",
     *     summary="Get a specific ticket by ID",
     *     tags={"Tickets"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Ticket")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Ticket not found"
     *     )
     * )
     */
    public function show(string $id)
    {
        return response()->json($this->ticketService->getTickeById($id));
    }

    /**
     * @OA\Put(
     *     path="/api/update/{id}",
     *     summary="Update an existing ticket",
     *     tags={"Tickets"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Ticket")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Ticket updated",
     *         @OA\JsonContent(ref="#/components/schemas/Ticket")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Ticket not found"
     *     )
     * )
     */
    public function update(Request $request, string $id)
    {
        return response()->json($this->ticketService->update($id, $request->all()));
    }

    /**
     * @OA\Delete(
     *     path="/api/destroy/{id}",
     *     summary="Delete a ticket",
     *     tags={"Tickets"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Ticket deleted successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Ticket not found"
     *     )
     * )
     */
    public function destroy(string $id)
    {
        $this->ticketService->deleteTicket($id);
        return response()->json(null, 204);
    }
}
