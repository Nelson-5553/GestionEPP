<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Telescope\IncomingEntry;
use Laravel\Telescope\Telescope;
use Laravel\Telescope\TelescopeApplicationServiceProvider;

class TelescopeServiceProvider extends TelescopeApplicationServiceProvider
{
    public function boot()
    {
        parent::boot(); // Asegura que el `boot()` del padre se ejecute correctamente
        $this->gate();  // ← Llamamos a la función `gate()`
    }
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Telescope::night();


        $this->hideSensitiveRequestDetails();

        $isLocal = $this->app->environment('local');

        Telescope::filter(function (IncomingEntry $entry) use ($isLocal) {
            return $isLocal ||
                   $entry->isReportableException() ||
                   $entry->isFailedRequest() ||
                   $entry->isFailedJob() ||
                   $entry->isScheduledTask() ||
                   $entry->hasMonitoredTag();
        });
    }

    /**
     * Prevent sensitive request details from being logged by Telescope.
     */
    protected function hideSensitiveRequestDetails(): void
    {
        if ($this->app->environment('local')) {
            return;
        }

        Telescope::hideRequestParameters(['_token']);

        Telescope::hideRequestHeaders([
            'cookie',
            'x-csrf-token',
            'x-xsrf-token',
        ]);
    }

    /**
     * Register the Telescope gate.
     *
     * This gate determines who can access Telescope in non-local environments.
     */
    protected function gate()
    {
        Telescope::auth(function ($request) {
            // Verificamos que el usuario esté autenticado
            if (!$request->user()) {
                return false;
            }

            // Verificamos si el email está en la lista autorizada
            return in_array($request->user()->email, [
                'superadmin@example.com',
                // Puedes añadir más emails aquí
            ]);
        });

        // También mantenemos la definición en Gate
        Gate::define('viewTelescope', function ($user) {
            return in_array($user->email, [
                'superadmin@example.com',
                // Los mismos emails que arriba
            ]);
        });
    }

}
