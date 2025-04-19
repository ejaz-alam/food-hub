<?php

namespace App\Service\MessageManager;

use Flasher\Prime\Notification\Envelope;

class Messages
{
    public function addSuccessMessage($message): Envelope
    {
        return toastr()->success($message);
    }

    public function addErrorMessage($message): Envelope
    {
        return toastr()->error($message);
    }

    public function addWarningMessage($message): Envelope
    {
        return toastr()->warning($message);
    }

    public function addInfoMessage($message): Envelope
    {
        return toastr()->info($message);
    }
}
