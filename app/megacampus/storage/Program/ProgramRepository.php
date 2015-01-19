<?php namespace Megacampus\Storage\Program;
 
//use Program;
use Megacampus\Storage\Eloquent\MyAbstractEloquentRepository;
use Megacampus\Storage\Eloquent\MyEloquentInterface;

use Program;
 
class ProgramRepository extends MyAbstractEloquentRepository implements MyEloquentInterface {
 
 // Properties

  protected $model;
 
  //Constructor
   
  public function __construct(Program $model)
  {
    $this->model = $model;  
  }

}