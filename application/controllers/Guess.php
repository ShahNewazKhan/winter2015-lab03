<?php

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

        $this->data = array_merge($this->data, $auth);


		$this->render();
    }
    
}


