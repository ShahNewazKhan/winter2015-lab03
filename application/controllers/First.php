<?php

class First extends Application
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['pagebody'] = 'justone';
		$auth = $this->quotes->get(1);

		$this->data = array_merge($this->data, $auth);

		$this->render();
	}

	function zzz()
	{
		$this->data['pagebody'] = 'justone';
		$auth = $this->quotes->get(1);

		$this->data = array_merge($this->data, $auth);


		$this->render();
	}

	function gimme( $arg )
	{
		$this->data['pagebody'] = 'justone';
		$auth = $this->quotes->get( $arg );

		$this->data = array_merge($this->data, $auth);


		$this->render();
	}
}