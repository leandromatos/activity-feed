<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class ActivitiesController extends Controller
{
    /**
     * Show the activity feed for a user.
     *
     * @param  User $user
     * @return Response
     */
    public function show(User $user)
    {
        $activity = $user->activity;

        return view('activity.show', compact('activity'));
    }
}
