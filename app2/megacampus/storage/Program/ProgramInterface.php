<?php namespace Megacampus\Storage\Program;
 
interface ProgramInterface {
   
  public function all();
  public function paginate($itemsByPage);
  public function find($id);
  public function where($column, $operator = null, $value = null, $boolean = 'and');
  public function orWhere($column, $operator = null, $value = null);
 
}