<?php

namespace App\Controllers;

class PagesController{
	

	public function Home()
	{		
		
		return view('index');
	
	}

	public function About()
	{
		
		return view('about');	
	}

	public function Contact()
	{
		
		return view('contact');	
	
	}
	

}