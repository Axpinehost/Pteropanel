<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function store(Request $request){
        $ticket = new Ticket();
        $ticket->title = $request->title;
        $ticket->content = $request->content;
        $ticket->type = $request->type;
        $ticket->status = 0;
        $ticket->author_id = $request->user()->id;
        $ticket->save();
        return Redirect::route('myTickets');
    }

    public function index(Request $request){
        $tickets = Ticket::where('author_id', $request->user()->id)->get();
        return Inertia::render('Panel/MyTickets')->with('tickets', $tickets);
    }

    public function showTicket($id , Request $request){

        $ticket = Ticket::where('id', $id)->get()->first();
        if($ticket->author_id != $request->user()->id) return Inertia::render('Panel/Dashboard');
        return Inertia::render('Panel/Tickets/Ticket')->with('ticket', $ticket); 
    }
}
