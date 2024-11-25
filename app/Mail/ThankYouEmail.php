<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\TicketEnquiry; // Ensure this is correct

class ThankYouEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    protected $ticketEnquiry;

   

    /**
     * Create a new message instance.
     */
    public function __construct(TicketEnquiry $ticketEnquiry)
    {
        //
        $this->ticketEnquiry = $ticketEnquiry;
    }
    public function build()
    {
        return $this->view('emails.ticketthankyou') // Adjust to the correct path
        ->with([
            'ticketEnquiry' => $this->ticketEnquiry,
        ]);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Your Inquiry is in Good Hands – Let’s Get Started",
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.ticketthankyou',
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
