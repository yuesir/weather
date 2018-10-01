<?php
/**
 * Created by PhpStorm.
 * User: yuesir
 * Date: 2018/10/1
 * Time: 上午11:14
 */

namespace Yuesir\Weather;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}