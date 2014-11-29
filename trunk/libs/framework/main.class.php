<?php
class main {
	
	static function createApp(){
		
		//get module from request 
		if( isset( $_REQUEST['module'] ) ) {
			$strModule = $_REQUEST['module'];
		} else {
			$strModule = 'home';
		}
		
		//including assign app 
		include 'controlers/bky/assignApplicationModules.php';
		
		if( true == array_key_exists( $strModule, $arrstrModules ) ) {
				
			//including requested module controller
			include 'controlers/bky/'.$arrstrModules[$strModule];

			$classname = str_replace( '.class.php', '', basename( $arrstrModules[$strModule] ) );
			
			//creating class object
			$objapp = new $classname;
			$objapp->build();
		} else {
			echo 'handle gracefully';
		}
	}
}
?>
