<?php

namespace App\Helpers;

use App\CustomPage;
use App\Page;
use Illuminate\Support\Facades\Request;

class Helper
{
    public static function menu()
    {
    	$last_current_segment = Request::segment(count(Request::segments()));

    	$menu = '';
    	$pages = CustomPage::where('inMenu',1)->get();
    	
    	foreach ($pages as $count => $page) 
    		{
    		$class='';
    		if ($last_current_segment == $page->uri) 
    			{
    			$class = "class='act'";
    			} 
    		    		
    		$menu .= '<li><a href="'. url($page->uri) .'" '. $class.' >'.$page->title.'</a></li>';
    		
    		}

    	return $menu;
    }
}