<?php

	include_once 'book.php';
	
	class Model{
		public function getBookList(){
			//values to simulate the db
			return array(
				"Jungle Book" => new Book("Jungle Book", "R.Kipling", "A classic book."),
				"Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
				"PHP for Dummies" => new Book("PHP for Dummies", "Some smart Guy", "")
				);
		}
		
		public function getBook($title){
			$allBooks = $this->getBookList();
			return $allBooks[$title];
		}
	}

?>