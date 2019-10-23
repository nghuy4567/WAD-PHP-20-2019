<?php 
include 'bt21-1.php';
class Customer extends User{
		public $addressgd;
		public $code;

		public function Pay(){
			echo "pay";
		}

		public function history(){
			echo "history";
		}
}


$customer = new Customer();
$customer -> Register();
$customer -> pay();

 ?>
