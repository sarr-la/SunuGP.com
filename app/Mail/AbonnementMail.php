<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AbonnementMail extends Mailable
{
    use Queueable, SerializesModels;


namespace App\Mail;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;

class AbonnementMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $date;

    public function __construct($name, $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    public function build()
    {
        return $this->view('abonnement.mail-expired');
    }
}

    public function __construct()
    {

        $this->name = $name;
        $this->date = $date;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
