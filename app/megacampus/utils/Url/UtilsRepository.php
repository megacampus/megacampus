<?php namespace Megacampus\Utils\Url;

use Session;
use URL;

class UtilsRepository implements UtilsInterface {

	public function setUrlPrevious() {

		Session::put('UrlPrevious',URL::previous());
	}


	public function getUrlPrevious($option){

		//Define the URL to Go Back to the Same Page of the Program List
		if (strpos(Session::get('UrlPrevious'),'page=')!==false){
			$UrlPrevious= $option .'?' . strstr(Session::get('UrlPrevious'), 'page=');
		}else{
			if (strpos(URL::previous(),'page=')!==false){
				$UrlPrevious= $option .'?' . strstr(URL::previous(), 'page=');
			}else{
				$UrlPrevious= $option .'/';
			}
		}
		//store in the session object the previous URL
		Session::put('UrlPrevious',$UrlPrevious);
	}

	public function forgetUrlPrevious(){

		Session::forget('UrlPrevious');
	}


}