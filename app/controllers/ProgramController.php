<?php

/**
 * Controller Name: ProgramController
 *
 * Description: Controller to list, insert, update, delete, search, export and import Programs Information
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

	// fields validations for store and edit functions
	private $rules = array(
            'program_id'      	 	=> 'required',
            'program_name'      	=> 'required', //|email',
            'program_description' 	=> 'required' //|numeric'
        );

	private $directory_files = "programs";

	public function index()
	{
		
		//Remove All Session Variable;
		Session::forget('UrlPrevious');
		//Session::flush();
		// Get the programa informantion page by page
		$programs=Program::paginate(7);

		//$programs=Program::take(3)->skip(5)->-get()->paginate(7);

		//$page = Input::get('page');
		/*$perPage = 10;
		$skip = 5; //$perPage * $page;
		$prog = Program::take($perPage)->skip($skip)->get()->toArray();
		$programs = Paginator::make($prog, Program::count(), $perPage);*/

		// Display Program List and send information to the view
	  	return View::make($this->directory_files .'/list')
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
		
		//Define the URL to Go Back to the Same Page of the Program List
		if (strpos(Session::get('UrlPrevious'),'page=')!==false){
			$UrlPrevious='programs?' . strstr(Session::get('UrlPrevious'), 'page=');
		}else{
			if (strpos(URL::previous(),'page=')!==false){
				$UrlPrevious='programs?' . strstr(URL::previous(), 'page=');
			}else{
				$UrlPrevious='programs/';
			}
		}
		//store in the session object the previous URL
		Session::put('UrlPrevious',$UrlPrevious);
		
		//Display the view to add a program
	  	return View::make($this->directory_files .'/create')
	  		->with(array(
				'title'			=> 'Program Management'
		));

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate the fields base on the rules define
		$validator = Validator::make(Input::all(), $this->rules);
		// Send to view the errros messages and the input data
		if ($validator->fails()) {
			return Redirect::to('programs/create')
				->withInput()->withErrors($validator);
		} else {
			try {
				DB::beginTransaction();
					// store the data to the database
					$program = new Program;
					$program->program_id       = Input::get('program_id');
					$program->program_name      = Input::get('program_name');
					$program->program_description = Input::get('program_description');
					$program->save();
					//store in the session object a message to display in the view
					Session::flash('message', 'SUCCESS: Program was created successfully!');	
				DB::commit();

			} catch (Exception $e) {
				
	    		Session::flash('message', 'ERROR: The add process was NOT executed successfully! <br> <br> <em>Caught exception: ' . $e->getMessage().'</em>');
				Session::flash('error',1);	

				DB::rollBack();
			}
			
 			//return to the previous url;
			//return Redirect::to(Session::get('UrlPrevious'));
			return Redirect::to(URL::current() . '/create');
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

		Session::put('UrlPrevious',URL::previous());
		// find a program id to access its information
		 $program = Program::find($id);
        //show program info in the view
        return View::make($this->directory_files .'/show')
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

		//Define the URL to Go Back to the Same Page of the Program List
		if (strpos(Session::get('UrlPrevious'),'page=')!==false){
			$UrlPrevious='programs?' . strstr(Session::get('UrlPrevious'), 'page=');

		}else{
			if (strpos(URL::previous(),'page=')!==false){
				$UrlPrevious='programs?' . strstr(URL::previous(), 'page=');
			}else{
				$UrlPrevious='programs/';
			}
		}
		//store in the session object the previous URL
		Session::put('UrlPrevious',$UrlPrevious);

		// find a program id to access its information
		$program = Program::find($id);
        //show the edit form and pass the program
        return View::make($this->directory_files .'/edit')
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
		// validate the fields base on the rules define
        $validator = Validator::make(Input::all(), $this->rules);
        // Send to view the errrs messages
        if ($validator->fails()) {
            return Redirect::to('programs/' . $id . '/edit')
                ->withErrors($validator);
                //->withInput(Input::except('password'));
        } else {
            // store the data to the database
			try {
	            DB::beginTransaction();
		            $program = Program::find($id);
		            $program->program_id      		= Input::get('program_id');
		            $program->program_name     		= Input::get('program_name');
		            $program->program_description 	= Input::get('program_description');
		            $program->touch();
		 			$program->save();
		            //store in the session object a message to display in the view
		          	Session::flash('message', 'SUCCESS: The program was updated successfully!');
		      	  	//return to the previous url;
		      	  	//return Redirect::to (Session::get('UrlPrevious'));
		      	  	return Redirect::to(URL::current() . '/edit');
	      	  	DB::commit();

	    	} catch (Exception $e) {

	    		Session::flash('message', 'ERROR: The update process was NOT executed successfully! <br> <br> <em>Caught exception: ' . $e->getMessage().'</em>');
				Session::flash('error',1);	

				DB::rollBack();
			}

			return Redirect::to(URL::current() . '/edit');
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
	
		//validate if $id was found
		if (!empty($program->program_id)) {
			try {
				DB::beginTransaction();		
					// delete the program id found
					$program->delete();
					//store in the session object a message to display in the view
			      	Session::flash('message', 'SUCCESS: The program was deleted successfully!');
			    DB::commit();
			} catch (Exception $e) {
				Session::flash('message', 'ERROR: The delete process was NOT executed successfully! <br> <br> <em>Caught exception: ' . $e->getMessage().'</em>');
				Session::flash('error',1);	
				DB::rollBack();
			}	
     	 }
			
     	//return to the previous url
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
		if ($programs->getTotal()!=Program::all()->count()){
			//if a filter is applied a label Sis display in the view
			$label_search= $value;
		}
		else{
			//if a filter is NOT applied a label is set empty to avoid to be display it.
			$label_search='';
		}

		// Display the view and return some variables to the view to display info
		return View::make($this->directory_files .'/list')
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
		try {
			
			//get all programs
			$data=Program::all();
			//create a excel files 
			Excel::create('Programs', function($excel) use($data) {
				//create a excel sheet
		        $excel->sheet('Programs', function($sheet) use($data){
		        	// insert the programs to excel sheet
		            $sheet->fromArray($data);
		           Session::flash('message', 'SUCCESS: The export process was executed successfully!');
			Session::flash('error',0);
	        	});
	        	
	        // export to a file
	    	})->export('csv');
		
			

		} catch (Exception $e) {
	    	//Set the message error to display
			Session::flash('message', 'ERROR: The export process was NOT executed successfully! <br> <br> <em>Caught exception: ' . $e->getMessage(). '</em>');
			Session::flash('error',1);	
			
		}

		return Redirect::Back();
	}


	public function selectImportFile() 
	{ 

		
		//Define the URL to Go Back to the Same Page of the Program List
		if (strpos(Session::get('UrlPrevious'),'page=')!==false){
			$UrlPrevious='programs?' . strstr(Session::get('UrlPrevious'), 'page=');

		}else{
			if (strpos(URL::previous(),'page=')!==false){
				$UrlPrevious='programs?' . strstr(URL::previous(), 'page=');
			}else{
				$UrlPrevious='programs/';
			}
		}
		//store in the session object the previous URL
		Session::put('UrlPrevious',$UrlPrevious);

		
        //show the import form 
        return View::make($this->directory_files .'/import');
        
      
	}

	
	public function import() 
	{ 

		/*=====================	RULES TO IMPORt FILES ========================================
		1) The first row must be the fields hearder .
		2) if the row has a value in the ID Field it will be update if not will be added.
		===================================================================================*/
		try {
			//get the upload file infomration
			$file=Input::file('fileToImport');
			//validate the user select a file
			if (!empty($file)) {
				// Begin a Transaction
				DB::beginTransaction();
				//load the file to the database	
				$programs=Excel::load($file->getRealPath(), function($reader) {
		
					//get the file content / data
					$results = $reader->get();

					$i=0; // caount add records
					$j=0; // count update records
				
					foreach ($results as $key => $row) {
						// Validate if the file uploaded has the ID field
						if (!empty ($row->program_id)) {
							// find the id to decide if it wil be an update or add process
							$program =  Program::find($row->id);
							//validate if $id was found so UPDATE it
							if ($program) {
								$program->program_id      	 	= $row->program_id;
								$program->program_name      	= $row->program_name;
								$program->program_description	= $row->program_description;
								$program->touch();  //touch: update timestamps
								$program->save();
								$j++;
							}
							// validate no found so ADD it
							else{
								$program = new Program;
								$program->program_id      	 	= $row->program_id;
								$program->program_name      	= $row->program_name;
								$program->program_description	= $row->program_description;
								$program->save();
								$i++;
							}
						}
					}
					// Store the message information for the user in the Session Object
					if (($i+$j)==0){
						Session::flash('message', 'ERROR: The import process did not add or update any record successfully!');
						Session::flash('error',1);	
					}else{
						Session::flash('message', 'SUCCESS: The import process add '.  $i . ' records and update '. $j . ' successfully!');
						Session::flash('error',0);	
					}
   					//Commint the Transaction
					DB::commit();

				})->get();

			}
	        else{
		    	Session::flash('message', 'ERROR: The file to import is missing, you need to choose a file!');
				Session::flash('error',1);  	
		    }	

	    } catch (Exception $e) {
	    	//Set the message error to display
			Session::flash('message', 'ERROR: The import process did not add or update any record successfully! <br> <br> <em>Caught exception: ' . $e->getMessage(). '</em>');
			Session::flash('error',1);	
			//Rollback the Transaction
			DB::rollBack();
		}
	   	//Redirect to the import page
	    return Redirect::to(URL::to('programs/import_file'));
	}
}

 
