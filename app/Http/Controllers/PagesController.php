<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Category;
use\App\Products;
use\App\Banners;

class PagesController extends Controller
{
	public function getIndex(){
		$category = Category::all();
		/*var_dump($category);
		exit();*/
		$banners = Banners::all();
		return view('pages.home', compact('banners','category'));
	}

	public function getAbout(){
		return view('pages.about-us');
	}

	public function getCategory(){
		$category = Category::all();
    	/*var_dump($category);
    	exit;*/
    	return view('pages.all-products', compact('category'));
    }

    public function getCeramic(){
    	$ceramic = Products::all()->where('cat_id', 0);
    	/*var_dump($ceramic);
    	exit;*/
    	return view('pages.ceramictiles', compact('ceramic'));
    }
}
