<?php
	function mainPage()
	{
		echo renderViewWithTemplate("content","template");
	}

	function contactsPage(){
		echo renderViewWithTemplate("contacts","template");
	}