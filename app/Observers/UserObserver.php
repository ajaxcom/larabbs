<?php

namespace App\Observers;

use App\Models\User;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class UserObserver
{
    public function saveing(User $user)
    {
        if (empty($user->avatar)){
            $user->avatar = "https://s1.ax1x.com/2018/11/01/ifanNq.jpg";
        }
    }

    public function creating(User $user)
    {
        //
    }

    public function updating(User $user)
    {
        //
    }
}