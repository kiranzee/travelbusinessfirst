<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\HolidayEnquiry;


class HolidayMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    protected $holidayEnquiry;
    protected $packagename;
    /**
     * Create a new message instance.
     */
    public function __construct(HolidayEnquiry $holidayEnquiry, $packagename)
    {
        // Initialize both the enquiry and the package name
        $this->holidayEnquiry = $holidayEnquiry;
        $this->packagename = $packagename; // Add the package name to the class
    }

    public function build()
    {
        return $this->view('emails.holidaythankyou') // Adjust to the correct path
        ->with([
            'holidayEnquiry' => $this->holidayEnquiry,
            'packagename' => $this->packagename,
        ]);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Holiday Enquiry @ TravelBusinessfirst.co.uk',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.holidaythankyou',
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
