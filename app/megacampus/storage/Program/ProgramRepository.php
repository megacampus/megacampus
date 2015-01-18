<?php namespace Megacampus\Storage\Program;
 
//use Program;
use Megacampus\Storage\Eloquent\MyAbstractEloquentRepository;
use Megacampus\Storage\Program\ProgramInterface;

use Program;
 
class ProgramRepository extends MyAbstractEloquentRepository implements ProgramInterface {
 
 // Properties

  protected $model;
 
  //Constructor
   
  public function __construct(Program $model)
  {
    $this->model = $model;  
  }



  /*public function all()
  {
    return Program::all();
  }

  public function paginate($itemsByPage) 
  {
    return Program::paginate($itemsByPage);
  }

  public function find($id)
  {
    return Program::find($id); 
  }

  public function where($column, $operator = null, $value = null, $boolean = 'and')
  {
    return Program::where($column, $operator, $value, $boolean);
  }

  public function orWhere($column, $operator = null, $value = null)
  {
    return $this->where($column, $operator, $value, 'or');
  }*/

}