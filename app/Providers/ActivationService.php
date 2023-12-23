<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Mail; // Add this line for Mail facade
use App\Mail\UserActivationEmail;
use App\Models\UserActivation as ModelsUserActivation;
use App\Models\User;

class ActivationService extends ServiceProvider
{
    protected $resendAfter = 24; // Sẽ gửi lại mã xác thực sau 24h nếu thực hiện sendActivationMail()
    protected $userActivation;

    public function __construct(ModelsUserActivation $userActivation)
    {
        $this->userActivation = $userActivation;
    }

    public function sendActivationMail($user)
    {
        if ($user->active || !$this->shouldSend($user)) return;
        $token = $this->userActivation->createActivation($user);
        $user->activation_link = route('user.activate', $token);
        $mailable = new UserActivationEmail(['activation_link' => $user->activation_link, 'user' => $user]);
        try {
            Mail::to($user->email)->send($mailable);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        
    }

    public function activateUser($token)
    {
        $activation = $this->userActivation->getActivationByToken($token);
        if ($activation === null) return null;
        $user = User::find($activation->user_id);
        $user->active = true;
        $user->save();
        $this->userActivation->deleteActivation($token);

        return $user;
    }

    private function shouldSend($user)
    {
        $activation = $this->userActivation->getActivation($user);
        return $activation === null || strtotime($activation->created_at) + 60 * 60 * $this->resendAfter < time();
    }
}
