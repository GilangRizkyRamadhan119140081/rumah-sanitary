<?php

namespace App\Http\Controllers\Sanitary;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use App\Notifications\ForgotPassword;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Kontak;
use App\Models\GtagManager;
use App\Models\Analytics;
use App\Models\TagManager;
use App\Models\SearchConsole;
use App\Models\User;
use App\Models\SocialMedia;

class ForgotController extends Controller
{

    public function index()
    {
        $user = User::get();
        $icon = Logo::get();
        $footer = Kontak::first();
        $shopee = SocialMedia::where('id', 1)->first();
        $tokopedia = SocialMedia::where('id', 2)->first();
        $tagManager = TagManager::first();
        $gtagManager = GtagManager::first();
        $analytics = Analytics::first();
        $searchConsole = SearchConsole::first();

        return view('sanitary.auth.forgot-password', compact('user', 'icon', 'footer', 'gtagManager', 'analytics', 'tagManager', 'searchConsole', 'shopee', 'tokopedia'));
    }

    public function postForgotPassword(Request $request) {
        info('anjing');
        info($request);
        info('babi');

        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
    }

    public function getResetPasswordToken(string $token) {

        return view('auth.reset-password', ['token' => $token]);

    }

    public function postResetPasswordToken(Request $request) {

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);

    }

}
