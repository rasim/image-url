<?php namespace Rasim\Image;

use Illuminate\Support\ServiceProvider;
use Intervention\ImageManager;

class ImageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('rasim/image');

        $app = $this->app;

        $app['image'] = $app->share(function ($app) {
            return new Images($app['config']->get('image::config'));
        });

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

        

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array("images");
	}

}
