<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mongo_db {
	private $conn;
	function __construct(){
		require 'vendor/autoload.php';
		$this->ci =& get_instance();
		$this->ci->load->config('mongodb');

		$host 			= 	$this->ci->config->item('host');
		$username 		= 	$this->ci->config->item('username');
		$password 		= 	$this->ci->config->item('password');
		$collecion 		= 	$this->ci->config->item('collecion');
		$authenticate 	= 	$this->ci->config->item('authenticate');

		$connect = "mongodb+srv://${username}:${password}@${host}/${collecion}?retryWrites=true&w=majority";
		
		$connected = (new MongoDB\Client($connect))->$collecion;
		if($connected){
			$this->conn = $connected;
		}
	}

	function getConn() {
		return $this->conn;
	}
}