<?php namespace Megacampus\Utils;
 
use Illuminate\Support\ServiceProvider;
 
class UtilsServiceProvider extends ServiceProvider {
 
  public function register()
  {
     $this->app->bind(
      'Megacampus\Utils\Url\UtilsInterface',
      'Megacampus\Utils\Url\UtilsRepository'
    );
  }
 
}