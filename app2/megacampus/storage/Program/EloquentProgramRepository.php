<?php namespace Megacampus\Storage\Program;
 
use Program;
 
class EloquentProgramRepository implements ProgramInterface {
 
  public function all()
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
  }

}