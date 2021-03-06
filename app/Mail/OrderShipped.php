<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = (object)$request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $view = $this->request->top ? 'order-top' : 'order';
        return $this->from(config('mail.username'))->to(config('mail.username'))->subject('Jets – новая заявка')->view("mail.{$view}");
    }
}
