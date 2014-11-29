<?php
	//Implement functions which can be used throughout application;
	class bkyApp {
		public $m_objSmarty;
		
	   function __construct() {
			
	   }
	
		public function myecho() {
			echo 'In Myecho function';
		}
		
		public function loadSmarty(){
			// load Smarty library
			require("libs/Smarty-3.1.14/libs/Smarty.class.php");
			$this->m_objSmarty = new Smarty;
			$this->m_objSmarty->template_dir = "D:/svn/trunk/views/smarty/templates/bky";
			$this->m_objSmarty->config_dir = "D:/svn/trunk/views/smarty/config";
			$this->m_objSmarty->cache_dir = "D:/svn/trunk/libs/cache";
			$this->m_objSmarty->compile_dir = "D:/svn/cachedViews";
			
			//returning smarty object
			return $this->m_objSmarty;
		}

	}
?>
