<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;

class PurchaseMail extends Mailable
{
    protected $tokens;
    protected $price;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($tokens, $price)
    {
        $this->tokens = $tokens;
        $this->price = $price;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $lang = App::getLocale();

        if($lang == 'ru'){
            $subject = "Meta GPT - Спасибо за покупку!";
        }else{
            $subject = "Meta GPT - Thank you for purchase!";
        }

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.purchase',
            with: [
                'tokens' => $this->tokens,
                'price' => $this->price
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
