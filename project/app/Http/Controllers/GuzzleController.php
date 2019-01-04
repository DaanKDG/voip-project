<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\TicketGenerator;
use DateTime;



class GuzzleController extends Controller
{
    public function ticket(Request $request)
    {
        $generator = new TicketGenerator('eecba48e-53a8-4e46-8adc-b3988f651404', 'cqmFwVxoYE2uCKWeSFySBg==');
        $signedUserTicket = $generator->generateTicket($request->input('name'), new DateTime(), 3600);
        
        return ['userTicket' => $signedUserTicket];
        
    }
}
