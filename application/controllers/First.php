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

		$this->data['what'] = $auth['what'];
		$this->data['who'] = $auth['who'];
		$this->data['mug'] = $auth['mug'];

		$this->render();
	}

	function zzz()
	{
		$this->data['pagebody'] = 'justone';
		$auth = $this->quotes->get(1);

		$this->data['what'] = $auth['what'];
		$this->data['who'] = $auth['who'];
		$this->data['mug'] = $auth['mug'];

		$this->render();
	}

	function gimme( $arg )
	{
		$this->data['pagebody'] = 'justone';
		$firstAuth = $this->quotes->get( $arg );

		$this->data['what'] = $firstAuth['what'];
		$this->data['who'] = $firstAuth['who'];
		$this->data['mug'] = $firstAuth['mug'];

		$this->render();
	}
}