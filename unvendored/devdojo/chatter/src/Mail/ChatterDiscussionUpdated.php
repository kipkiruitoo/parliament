<?php

namespace DevDojo\Chatter\Mail;

use DevDojo\Chatter\Models\Discussion;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChatterDiscussionUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public $discussion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Discussion $discussion)
    {
        $this->discussion = $discussion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $subject = "Discussion Updated";
        return $this->view(config('chatter.email.view'))->subject($subject)
                    ->with([
                        'discussion' => $this->discussion,
                    ]);
    }
}
