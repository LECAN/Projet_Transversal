<?php
	
namespace PhingLauncher;

//get PHPUnit libraries
use PHPUnit;
use Exception;
		
//redirect standard and error output to log files
 define ("STDOUT",fopen('application.log', 'wb'));
 define ("STDERR",fopen('error.log', 'wb'));


		 //get phing libraries
defined('PHING_TEST_BASE') || define('PHING_TEST_BASE', dirname(__FILE__));
set_include_path(
	realpath(dirname(__FILE__) . '/../classes') . PATH_SEPARATOR . 
	realpath(dirname(__FILE__) . '/classes') . PATH_SEPARATOR .
	get_include_path()  // trunk version of phing classes should take precedence
);

//require_once('../../../phing/phing/classes/phing/BuildFileTest.php');
require_once(dirname(__FILE__).'/../../../phing/phing/classes/phing/Phing.php');
		
class PhingLauncher{
	
	/*
	*    build file that will be executed by phing
	*/
	private $file; 
	
	public function __construct($file){
		if($file === null){   // default folder is PhingLauncher folder
			$file = __DIR__.'build.xml';
		}else if(!is_file($file)){
			throw new Exception('PhingLauncher file does not exists !');
		}
		$this->file = $file;
		
	}
	
	public function launch(){
		//default path
		\Phing::setProperty('phing.home', realpath(dirname(__FILE__) . '/../../../phing/phing/build/'));
		//initialize phing
		\Phing::startup();
		//launch phing targets
		\Phing::start(array('-file', $this->file,'hello'));

		error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE & ~E_STRICT);
	}

}