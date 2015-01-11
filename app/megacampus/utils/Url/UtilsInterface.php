<?php namespace Megacampus\Utils\Url;

Interface UtilsInterface {

	public function setUrlPrevious ();
	public function getUrlPrevious($option);
	public function forgetUrlPrevious();

}