<?php

declare(strict_types=1);

namespace Hubmais\HClient\Providers;

use Illuminate\Support\ServiceProvider;

class HClientServiceProvider extends ServiceProvider
{
    public function register(): void
    {
       /** @noinspection PhpUndefinedMethodInspection */
        $this->mergeConfigFrom(__DIR__ . '/../config/h-client.php', 'h-client');

        $this->app->singleton(\Hubmais\HClient\Client::class, function () {
            $client = new \Hubmais\HClient\Client(
                config('h-client.endpoint'),
                config('h-client.timeout'),
            );

            $client->setToken(config('h-client.token'));
            $client->setMarketplaceId(config('h-client.marketplace_id'));
            $client->setSellerId(config('h-client.seller_id'));

            return $client;
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/h-client.php' => config_path('h-client.php'),
        ], 'h-client-config');
    }
}