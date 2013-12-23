<?php

namespace Polytech\ProjetTransversalBundle\OdtBuilder;

use Odtphp;

class OdtBuilder
{
	private $phpODT;


	public function __construct($name){
		$this->phpODT = new \Odtphp\Odf($name);
	}
	
	public function createODT($projectName){
		
		$fixesData = $this->getFixesData();
		$clientData = $this->getClientData();
		
		// match client data with fixes data
		

		$this->phpODT->saveToDisk('output2.odt');
		$this->phpODT->exportAsAttachedFile();
		
	}
	
	public function getFixesData(){
		return 0;
	}
	
	public function getClientData(){
		return 0;
	}

}