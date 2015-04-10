<?php namespace Lio\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Lio\Content\SpamFilter;

class ContentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bindShared('Lio\Content\SpamDetector', function () {
            return new SpamFilter([]);
        });
    }

    public function provides()
    {
        return ['Lio\Content\SpamDetector'];
    }
}
