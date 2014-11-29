<?php
include 'controlers/bky/bkyApp.class.php';
class Chome extends bkyApp {
	function build() {
				
		switch( $_REQUEST['action'] ) {
			case 'view_all':
				$this->display_view_all();
				break;
				
			case 'view_first':
				$this->display_view_first();
				break;
				
			case 'view_second':
				$this->display_view_second();
				break;
				
			default:
				$objSmarty = $this->loadSmarty();
				$objSmarty->assign( 'msg',"you are at home page" );
				$objSmarty->display( 'home/home.tpl' );
				
				//$this->myecho();

		}
	}

	function display_view_all(){
		echo'displying all';
	}
	
	function display_view_first(){
		echo'displying first';
	}
	
	function display_view_second(){
		echo'displying second';
	}
}
?>
