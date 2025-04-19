<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminPasswordUpdateRequest;
use App\Service\MessageManager\Messages;
use App\Traits\FileUploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Auth;

class AdminProfileController extends Controller
{
    use FileUploadTrait;
    public function __construct(
        private readonly Messages $messagesManager,
    )
    {}

    public function execute(): View
    {
       return view('admin.profile.index');
    }

   public function update(\App\Http\Requests\Admin\AdminProfileUpdateRequest $request): RedirectResponse
   {
       $user = $this->getCurrentUser();
       $user->name = $request->get('name');
       $user->email = $request->get('email');
       $avatar = $this->uploadFile($request, 'avatar');
       if ($avatar) {
           $user->avatar = $avatar;
       }
       $result = $user->save();
       if (true === $result) {
         $this->messagesManager->addSuccessMessage(__('Your profile has been updated.'));
       }
        return redirect()->back();
   }

   public function updatePassword(AdminPasswordUpdateRequest $request): RedirectResponse
   {
       $user = $this->getCurrentUser();
       $user->password = bcrypt($request->get('password'));
       $result = $user->save();

       if (true === $result) {
           $this->messagesManager->addSuccessMessage(__('Your password has been updated.'));
       }

       return redirect()->back();
   }

   private function getCurrentUser(): ?\App\Models\User
   {
       return Auth::user();
   }
}
