<?php
	class DefaultController extends Controller{
		public function index(){
			$message = Example::get_data();
			View::render('index', ['message' => $message]);
		}
	}