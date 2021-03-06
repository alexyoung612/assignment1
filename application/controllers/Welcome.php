<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->data['header'] = 'header';
        
        //amount spent on all inventory to date
        $this->data['inventorycost'] = "$".number_format(10.00,2);
        //net amount received from sales
        $this->data['salesamount'] = "$".number_format(11.50,2);
        //cost of ingredients consumed to date
        $this->data['costofingredientsused'] = "$".number_format(21.21,2);
        
        $this->data['pagebody'] = 'welcome_message';
        $this->render(); 
	}

}
