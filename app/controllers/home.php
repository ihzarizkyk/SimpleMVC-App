<?php

/*
Author : Mochammad Ihza Rizky Karim
*/

class Home extends Controller{

	public function index($name = '')
	{
		$user = $this->model("User");
		$user->name = "ihza Rizky";

		$this->view("home/index", ['name' => $user->name]);
	}

}
