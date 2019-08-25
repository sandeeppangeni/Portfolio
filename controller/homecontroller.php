<?php
	class homecontroller extends controller
	{
		function __construct()
		{
			
			$this->intro=$this->loadmodel('intro');
			$this->about=$this->loadmodel('about');
			$this->services=$this->loadmodel('services');
			$this->contact=$this->loadmodel('contact');
			$this->testimonial=$this->loadmodel('testimonial');
			$this->skills=$this->loadmodel('skills');
		}

		function index()
		{
			$this->intro=$this->intro->showintro();
			$this->about=$this->about->showabout();
			$this->services=$this->services->showservices();
			$this->testimonial=$this->testimonial->showtestimonial();
			$this->contactdetail=$this->contact->showcontact();
			$this->skillsdetail=$this->skills->showskills();
			$this->loadview('index');
		}
	}
?>