<?php namespace Intagono\Gallery;

use Illuminate\Support\ServiceProvider;

class GalleryServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/controllers' => app_path('Http/Controllers'),
			__DIR__.'/models' => app_path('Models'),
			__DIR__.'/migrations' => base_path('database/migrations'),
			__DIR__.'/views' => base_path('resources/views/gallery'),
		]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
