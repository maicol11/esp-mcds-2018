<?php
	abstract class DataBase {
		protected $host;
		protected $user;
		protected $pass;
		protected $nmdb;
		protected $conx;

		public function __construct($h, $u, $p, $n) {
			$this->host = $h;
			$this->user = $u;
			$this->nmdb = $n;
			$this->pass = $p;
		}

		public function connection() {
			try {
				$this->conx = new PDO("mysql:host=$this->host;dbname=$this->nmdb",$this->user);
				$this->conx->exec('set names utf8');
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}

		public function disconnection() {
			$this->conx = null;
		}
	}
