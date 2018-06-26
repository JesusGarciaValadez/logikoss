<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Blade::component('shared.components.navbar', 'navbar');
    Blade::component('shared.components.nav', 'nav');
    Blade::component('shared.components.search-form', 'searchForm');
    Blade::component('shared.components.repository-list-item', 'repositoryListItem');
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }
}
