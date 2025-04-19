<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserProfileController extends Controller
{
    public function __construct(
        private readonly \App\Service\MessageManager\Messages $messagesManager
    )
    {
    }

    public function update(\App\Http\Requests\Frontend\UserProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $result = $request->user()->save();
        if ($result === true) {
            $this->messagesManager->addSuccessMessage('Profile updated successfully');
            return Redirect::route('customer.account.dashboard');
        }
        $this->messagesManager->addErrorMessage('Failed to update profile');
        return Redirect::route('customer.account.dashboard');

    }
}
