<?php 
	Class Test extends CI_Controller {

		private $mongo;	

		function __construct() {
			parent::__construct();
			$this->load->library('mongo_db');
			$this->mongo = $this->mongo_db->getConn();
		}

		public function index(){


			$cursor = $this->mongo->Messages->find();

			foreach ($cursor as $document) {
				echo $document['Body'], "\n";
			}

		
		}
	}
?>