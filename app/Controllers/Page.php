<?php namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        // echo "Page index";
        $data['title'] = 'Pages';
        echo view('tamplates/header',$data);
        echo view('page/index',$data);
        echo view('tamplates/footer');

    }
	public function about()
	{
		echo "about page";
	}
    
    public function contact()
	{
		echo "contact page";
	}
    
    public function faqs()
	{
		echo "Faqs page";
	}

}