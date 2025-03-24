<?php
namespace App\Services;

use App\Models\Tickets;


class TicketService{

    public function createTicket(array $data){
        
        return Tickets::create($data);
    }
}