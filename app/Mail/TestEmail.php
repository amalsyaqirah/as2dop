<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class TestEmail extends Mailable
{
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Test Email from Laravel')
                    ->view('emails.test');  // Corrected to reference 'emails.test'
    }
}
