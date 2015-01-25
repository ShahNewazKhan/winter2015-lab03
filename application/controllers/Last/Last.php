<?php

class Last extends Application
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['pagebody'] = 'justone';
		$auth = $this->quotes->get(6);

		$this->data = array_merge($this->data, $auth);


		$this->render();
	}

}