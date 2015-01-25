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

		$firstAuth = $this->quotes->get(1);

		$this->data['what'] = $firstAuth['what'];

		$this->data['who'] = $firstAuth['who'];

		$this->data['mug'] = $firstAuth['mug'];

		$this->render();
	}

	function zzz()
	{
		$this->data['pagebody'] = 'justone';

		$firstAuth = $this->quotes->get(1);

		$this->data['what'] = $firstAuth['what'];

		$this->data['who'] = $firstAuth['who'];

		$this->data['mug'] = $firstAuth['mug'];

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