<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DiplomaticEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     */
    public function __construct($_data)
    {
        $this->data = $_data;
    }

    public function build(){
        return $this->subject('SCES Diplomatic Invitation')
            ->view('emails.diplomatic', [
                'data' => $this->data,
                'contact_us' => route('contact_us'),
                'agenda' => route('agenda'),
                'xs_logo' => asset('wp-content/uploads/2023/01/xs-conference-1-light.png'),
                'c3_logo' => asset('wp-content/uploads/2023/01/C3-conference-1-e1675154716886-150x150.jpg'),
                'sce_summit_logo' => asset('wp-content/uploads/2023/07/logo_black.jpg'),
            ]);
    }
}
