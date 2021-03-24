<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

    public function contact(Request $request)
    {
        $subject = $request->subject;
        $for = "20183l301008@utcv.edu.mx";
        Mail::send('Mail.mail', $request->all(), function ($msj) use ($subject, $for) {
            $msj->from("eighttax11@gmail.com", "SignalsTalk");
            $msj->subject($subject);
            $msj->to($for);
        });

        return redirect()->route('portfolio.index')->with('info', 'Tu mensaje ha sido enviado con éxito. ¡Gracias!');
    }
}
