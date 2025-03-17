<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as BaseVerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class CustomVerifyEmail extends BaseVerifyEmail
{
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->subject('Please verify your email address')
                ->line('Thanks for registering with our Laravel app!')
                ->action('Verify Email Address', url('/email/verify/'.$this->verificationUrl($notifiable)))
                ->line('Please click the button below to verify your email address.')
                ->attach(public_path('images/pb-logo.png'), [
                    'as' => 'pb-logo.png',
                    'mime' => 'image/png',
                ]);
    }
}
