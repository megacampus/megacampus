<?php namespace Megacampus\Storage;
 
use Illuminate\Support\ServiceProvider;
 
class StorageServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'Megacampus\Storage\Program\ProgramInterface',
      'Megacampus\Storage\Program\EloquentProgramRepository'
    );
  }
 
}