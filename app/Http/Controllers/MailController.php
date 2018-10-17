<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Redirect;
use Session;

class MailController extends Controller
{
    public function sendmail(Request $request)
    {

      Mail::to("info@sagaservice.cl")->send(new ContactMail($request->input()));

      if (Mail::failures()) {
        //dd('algo paso');
        Session::flash('error','error.');
        return Redirect::back();

      }
      else {
        //Session::flash('success','Su mensaje a sido recibido satisfactoriamente y pronto nos contactaremos con usted.');
        return redirect('/enviado');
      }


    }

}
