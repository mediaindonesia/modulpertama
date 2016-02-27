<?php

namespace Vicky\MdlProduk;

use Illuminate\Support\ServiceProvider;

class MdlProdukServiceProvider extends ServiceProvider
{
	public function boot()
	{
		include __DIR__ . '/routes.php';

		$this->loadViewsFrom(__DIR__ . '/Views', 'mdlproduk');
	}
	public function register()
	{
		$this->app['mdlproduk'] = $this->app->share(function($app) {
			return new MdlProduk;
		});
	}
}