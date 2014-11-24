<?php

/**
 * Controller Name: ProgramController
 *
 * Description: Controller to list, insert, update, delete, search, export Programs Information
 * 
 * Author: 
 *
  */


class ProgramController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		// Get the programa informantion page by page
		$programs=Program::paginate(7);

		//$programs=Program::take(3)->skip(5)->-get()->paginate(7);

		//$page = Input::get('page');
		/*$perPage = 10;
		$skip = 5; //$perPage * $page;
		$prog = Program::take($perPage)->skip($skip)->get()->toArray();
		$programs = Paginator::make($prog, Program::count(), $perPage);*/

		// Display Program List and send information to the view
	  	return View::make('programs')
			->with(
				array(
				'programs' 		=> $programs,
				'title'			=> 'Program Management',
				'create_link'	=> 'Add Program',
				'label_search'	=> null,
				'search_value'  => null
				));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//store in the session object the previous URL
		Session::put('UrlPrevious',URL::previous());
		//Display the view to add a program
	  	return View::make('create_program');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// define fields validations
		$rules = array(
			'program_id'       => 'required',
			'program_name'      => 'required', //|email',
			'program_description' => 'required' //|numeric'
		);
		// validate the fields base on the rules define
		$validator = Validator::make(Input::all(), $rules);
		// Send to view the errrs messages
		if ($validator->fails()) {
			return Redirect::to('programs/create')
				->withErrors($validator);
				//->withInput(Input::except('password'));
		} else {
			// store the data to the database
			$program = new Program;
			$program->program_id       = Input::get('program_id');
			$program->program_name      = Input::get('program_name');
			$program->program_description = Input::get('program_description');
			$program->save();
			//store in the session object a message to display in the view
			Session::flash('message', 'Program was created successfully!');
 			//return to the previous url;
			return Redirect::to(Session::get('UrlPrevious'));
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// find a program id to access its information
		 $program = Program::find($id);
        //show program info in the view
        return View::make('show_program')
            ->with('program', $program);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		//store in the session object the previous URL
		Session::put('UrlPrevious',URL::previous());
		// find a program id to access its information
		$program = Program::find($id);
        //show the edit form and pass the program
        return View::make('edit_program')
            ->with('program', $program);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		
		// define fields validations
		$rules = array(
            'program_id'      	 	=> 'required',
            'program_name'      	=> 'required', //|email',
            'program_description' 	=> 'required' //|numeric'
        );
		// validate the fields base on the rules define
        $validator = Validator::make(Input::all(), $rules);
        // Send to view the errrs messages
        if ($validator->fails()) {
            return Redirect::to('programs/' . $id . '/edit')
                ->withErrors($validator);
                //->withInput(Input::except('password'));
        } else {
            // store the data to the database
            $program = Program::find($id);
            $program->program_id      		= Input::get('program_id');
            $program->program_name     		= Input::get('program_name');
            $program->program_description 	= Input::get('program_description');
            $program->touch();
 			$program->save();
            //store in the session object a message to display in the view
          	Session::flash('message', 'The program was updated successfully!');
      	  	//return to the previous url;
      	  	return Redirect::to (Session::get('UrlPrevious'));
        }

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id){
	
		// find a program id to delete it
		$program = Program::find($id);
		// delete the program id found
		$program->delete();
		//store in the session object a message to display in the view
      	Session::flash('message', 'The program was deleted successfully!');
      	//return to the previous url;
      	return Redirect::back();
	}

	/**
	 * Search a string input by the user.
	 *
	 * @return Response
	 */
	public function search() 
	{
		// Get the string to search in the database
		$value= Input::get('search_value');
		// find the string in the database and return the program found
		$programs=Program::where('program_id','like','%'.$value.'%')
				->orwhere('program_name','like','%'.$value.'%')
				->orwhere('program_description','like','%'.$value.'%')
				->paginate(7);
		// Verify if the user applied a filter via the Search Text		
		if ($programs->getTotal()!=Program::All()->count()){
			//if a filter is applied a label is display in the view
			$label_search='Filter Is Applied';
		}
		else{
			//if a filter is NOT applied a label is set empty to avoid to be display it.
			$label_search='';
		}
		// Display the view and return some variables to the view to display info
		return View::make('programs')
			->with(
				array(
				'programs' 		=> $programs,
				'title'			=> 'Program Management',
				'create_link'	=> 'Add Program',
				'label_search'	=> $label_search,
				'search_value'  => $value
				));
    	
	}

	/**
	 * Export all programas to Excel
	 *
	 * @return Response
	 */
	public function export() 
	{ 
		//get all programs
		$data=Program::all();
		//create a excel files 
		Excel::create('Programs', function($excel) use($data) {
			//create a excel sheet
	        $excel->sheet('Programs', function($sheet) use($data){
	        	// insert the programs to excel sheet
	            $sheet->fromArray($data);
        	});
        // export to a file
    	})->export('csv');

	}


	public function selectImportFile() 
	{ 
		

		Session::put('UrlPrevious',URL::previous());
        //show the import form 
        return View::make('import_programs');
      
	}


	public function import() 
	{ 
		return "entro";
		//read a excel files 
		$programs=Excel::load('C:\Users\ROLTOR~1\AppData\Local\Temp\Programs.csv',
					 function($reader) {})->get();


		// FALTA LA LOGICA PARA AGREGARLO A LA BASE DE DATOS


		Session::flash('message', 'The programs was imported successfully!');
      	//return to the previous url;
	   // return Redirect::to (Session::get('UrlPrevious'));
      
	}
}

 
