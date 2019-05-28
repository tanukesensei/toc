<?php

namespace toc\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use toc\User;

class HeaderComposer
{

    /**
     * Create a new profile composer.
     * @return void
     */
    public function __construct()
    {
    
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $notifications = User::whereId(Auth::id())->first()->unreadNotifications;

        $messages = [];

        foreach ($notifications as $message) {

            $messages[] = [
                'id' => $message->id,
                'data' => htmlspecialchars($message->data['message'])
            ];
        }
    
        $view->with([
            'count_notify_user' => count($notifications),
            'notify_user_messages' => $messages
        ]);
    }
}