<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($dataInput)
     {
         //
         $this->data = $dataInput;
     }

     /**
      * Build the message.
      *
      * @return $this
      */
     public function build()
     {
      return $this->view('mail.contact')->with([
        'nombre' => $this->data['nombre'],
        'email' => $this->data['email'],
        'telefono' => $this->data['telefono']
      ])->subject('Mensaje desde Formulario de Contacto página web');
     }
}
