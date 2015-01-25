<?php
/**
 * 
 */
class Guess extends Application
{
    /*
    	Constructor for guess
     */
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->data['pagebody'] = 'justone';
        $auth = $this->quotes->get(4);

        $this->data['what'] = $auth['what'];
		$this->data['who'] = $auth['who'];
		$this->data['mug'] = $auth['mug'];

		$this->render();
    }
    
}


