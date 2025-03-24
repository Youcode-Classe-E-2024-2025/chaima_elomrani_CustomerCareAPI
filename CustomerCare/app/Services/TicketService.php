<?php
namespace App\Services;

use App\Models\Tickets;


class TicketService{

    public function createTicket(array $data){
        
        return Tickets::create($data);
    }

    public function getAllTickets(){
        return Tickets::all();
    }

    public function update($id , array $data){
        $ticket = Tickets::findOrFail($id);
        $ticket->update($data);
    }
}