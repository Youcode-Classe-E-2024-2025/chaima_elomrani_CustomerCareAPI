<?php

namespace App\Http\Controllers;

use App\Services\TicketService;
use Illuminate\Http\Request;

class TicketsController extends Controller
{

    protected $ticketService;

    public function __construct(TicketService $ticketService){
        $this->ticketService = $ticketService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->ticketService->getAllTickets());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $ticket = $this->ticketService->createTicket($request->all());
      return response()->json($ticket, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return response()->json($this->ticketService->getTickeById($id));
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
