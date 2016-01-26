<?php
class Blog extends CI_Controller {

	public function index()
	{
		echo 'Hello World!';
	}

	public function abc()
	{
		$this->load->view('yamamoto_view');
	}
	public function takuya()
	{
		$this->load->model('Sample_model');
        $name = 'test' ;

	}
    public function name()
	{
        $this ->load->$name="yamamoto";
        echo $this->name;
    }

}