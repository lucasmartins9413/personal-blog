<?php
	
	namespace blog\Controllers;

	class HomeController{

		public function index(){

			\blog\Views\MainView::render('home');
		}
	}
	

?>