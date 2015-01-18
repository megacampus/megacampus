<?php namespace Megacampus\Storage\Eloquent;


	
abstract class MyAbstractEloquentRepository {
 
  
  public function all()
  {
    return $this->model->all();
  }

  public function paginate($itemsByPage) 
  {
    return $this->model->paginate($itemsByPage);
  }

  public function find($id)
  {
    return $this->model->find($id); 
  }

  public function where($column, $operator = null, $value = null, $boolean = 'and')
  {
    return $this->model->where($column, $operator, $value, $boolean);
  }

  public function orWhere($column, $operator = null, $value = null)
  {
    return $this->model->where($column, $operator, $value, 'or');
  }
 
}