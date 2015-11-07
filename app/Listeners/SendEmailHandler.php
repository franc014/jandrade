<?php namespace App\Listeners;

use App\Events\EmailHandler;

use App\Events\SendEmail;


class SendEmailHandler  {

	//use InteractsWithQueue;

	/**
	 * Create the event handler.
	 *
	 */
	public function __construct()
	{
		//
	}

    /**
     * Handle the event.
     *
     * @param EmailHandler|SendEmail $event
     */
	public function handle(SendEmail $event)
	{   //dd($event);
		//sent through Services\Mailer Interface
        $event->mailer->send();
	}

}
