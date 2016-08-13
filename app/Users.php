<?php

class Users {
	// Render Home Page
	function home($main)
	{
		echo \Template::instance()->render('home.html');
	}

	// Render About Page
	function about($main)
	{
		echo \Template::instance()->render('about.html');
	}
	 // Render Contacts Page
	function usage($main)
	{
		echo \Template::instance()->render('usage.html');
	}

}
