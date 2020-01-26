<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AbonnementMail extends Mailable
{
    use Queueable, SerializesModels;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;

    use Queueable, SerializesModels;
    public $nom;


    public function __construct($nom)
    {
        $this->nom = $nom;

    }

    public function build()
    {
        return $this->view('abonnement.mail-expired');
    }


}
