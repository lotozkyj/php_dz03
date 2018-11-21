<?php
	function mainPage()
	{
        include DOCROOT . '/data/maindata.php';
		echo renderViewWithTemplate("content","template",mainContent());
	}

    function aboutPage()
    {
        include DOCROOT . '/data/aboutdata.php';
        echo renderViewWithTemplate("content","template",aboutContent());
    }

    function photoPage()
    {
        include DOCROOT . '/data/photodata.php';
        echo renderViewWithTemplate("content","photos",photoContent());
    }

    function newsPage()
    {
        include DOCROOT . '/data/newsdata.php';
        echo renderViewWithTemplate("content","all_news",getNewsData());
    }

	function contactsPage(){
        include DOCROOT . '/data/contactsdata.php';
		echo renderViewWithTemplate("contacts","contacts",mainContent());
	}