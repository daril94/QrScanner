<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use App\Models\Usuario;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
        Fortify::loginView(fn () => view('theme.back.login'));
        Fortify::registerView(fn () => view('theme.back.register'));
        RateLimiter::for("login", function () {
            Limit::perMinute(5);
        });

        Fortify::authenticateUsing(function (Request $request) {
            $usuario = Usuario::where('email', $request->email)->first();
            if ($usuario && Hash::check($request->password, $usuario->password)) {
                // $roles = $usuario->roles()->first();
                //if ($roles) {
                //$request->session()->put('rol_slug', $roles->slug);
                return $usuario;
                // }
                // return false;
            }
        });
    }
}
