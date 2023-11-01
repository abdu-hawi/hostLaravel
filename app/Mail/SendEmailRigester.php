<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SendEmailRigester extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($_data)
    {
        $this->data = $_data;
    }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Send Email Rigester',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [
    //         "qr.png" => QrCode::format('png')->size(100)->generate('QrCode as PNG image!')
    //     ];
    // }

    public function build()
    {
        if ($this->data['isEmail']) {
            return $this->subject('Notice: Postponing the date of the Saudi Contracting Excellence Summit 2023')
            ->view('emails.update_date', [
                'data' => $this->data,
                'contact_us' => route('contact_us'),
                'xs_logo' => asset('wp-content/uploads/2023/01/xs-conference-1-light.png'),
                'c3_logo' => asset('wp-content/uploads/2023/01/C3-conference-1-e1675154716886-150x150.jpg'),
                'sce_summit_logo' => asset('wp-content/uploads/2023/07/logo_black.jpg'),
            ]);
        }

        return $this->subject('Thank you for register')
            ->view('emails.sample', [
                'data' => $this->data,
                'contact_us' => route('contact_us'),
                'xs_logo' => asset('wp-content/uploads/2023/01/xs-conference-1-light.png'),
                'c3_logo' => asset('wp-content/uploads/2023/01/C3-conference-1-e1675154716886-150x150.jpg'),
                'sce_summit_logo' => asset('wp-content/uploads/2023/07/logo_black.jpg'),
            ]);
        // ->attach(QrCode::size(300)
        //     ->format('png')
        //     ->gradient(48, 48, 49, 99, 99, 197, "diagonal")
        //     ->backgroundColor(246, 248, 250)
        //     ->generate("https://techvblogs.com/blog/generate-qr-code-laravel-9"));
    }
}
