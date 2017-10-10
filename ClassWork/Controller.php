<?php

	include_once 'Model.php';
	
	
	class Controller {
		public $model;
		public  function __construct(){
			$this->model = new Model();
		}
		
		public function invoke(){
			if (!isset($_GET['book'])){
				//list of all books
				$books = $this->model->getBookList();
				include 'booklist.php';
			}else{
				//shows the requested book  
				$book = $this->model->getBook($_GET['book']);
				include 'viewbook.php';
			}
		}
	}

?>