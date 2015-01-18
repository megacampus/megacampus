<?php namespace Megacampus\Storage;
 
use Illuminate\Support\ServiceProvider;
use Megacampus\Storage\Program\ProgramRepository;

use Program;
 
class StorageServiceProvider extends ServiceProvider {
 
	public function register()
	{

		/*$this->app->bind(
			'Megacampus\Storage\Program\ProgramInterface',
			'Megacampus\Storage\Program\EloquentProgramRepository'
		);*/

		$this->app->bind('Megacampus\Storage\Eloquent\MyEloquentInterface', function($app)
		{
			return new ProgramRepository(new Program);
		});
	}
 
}