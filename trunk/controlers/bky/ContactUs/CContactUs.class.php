<?php
include 'controlers/bky/bkyApp.class.php';
class CcontactUs extends bkyApp {
	function build() {
		switch ( $_REQUEST['action'] ) {
			case NULL;
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
				echo 'Action not found.';
			
		}
	}

	function display_view_all() {
		$objSmarty = $this->loadSmarty();
		$objSmarty->assign('msg', 'In contact us');
		$objSmarty->display('contact_us/contact_us.tpl');
	}
	
	function display_view_first() {
		echo'displying first';
	}
	
	function display_view_second() {
		echo'displying second';
	}
}
?>
