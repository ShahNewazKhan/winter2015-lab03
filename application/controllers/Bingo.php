<?php

class Bingo extends Application
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['pagebody'] = 'justone';
		$auth = $this->quotes->get(5);

		$this->data['what'] = $auth['what'];
		$this->data['who'] = $auth['who'];
		$this->data['mug'] = $auth['mug'];

		$this->render();
	}

	function wisdom()
	{
		$this->data['pagebody'] = 'justone';
		$auth = $this->quotes->get(6);

		$this->data['what'] = $auth['what'];
		$this->data['who'] = $auth['who'];
		$this->data['mug'] = $auth['mug'];

		$this->render();
	}
}