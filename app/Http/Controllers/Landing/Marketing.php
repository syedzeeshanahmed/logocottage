<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Marketing extends Controller
{
	public function logoMarketing(){

		   	$bannerHeadings = [
		        'Assisting Multinationals With Exceptional Logo Design Solutions, Starting With $34',
		        'Helping you make an excellent and out-of-the-box impression with superb logo design and development solutions '
		    ];	
	    	    $headings = [
		        'Logo Design Solutions',
		        'Making a great impression on the first glance is a sign of excellent customer communication. This is why we make sure you make the perfect first impact with top notch logo design solutions by Design Proficient. Our design architects make your logo an identity that makes a mark on the customer’s mind. Reach us today and talk to our logo design architects regarding your project.'
		        ];    
		    $list = [

				'Mascot Logo Design',
				'3D Logo Design',
				'Illustrative Logo Design',
				'Flat Logo Design',
				'Minimal Logo Design',
				'Emblem Logo Design'

		    ];


		     $processIcon = [
		     	'icon-conceptualizing-logo-process',
		     	'icon-design-logo-process',
		     	'icon-delivery-logo-process',
		     ];

		     $process = [
		     	'Conceptualization is the strongest pillar to a beautifully constructed logo which is why our creative thinkers make sure the concepts are always unique and out-of-the-box.',
		     	'Regardless of your project’s size, we make sure the best team of creative designers work on your project for a brand identity that is incomparable in terms of design.',
		     	'Our team of designers provides you with several unique concepts and at the end provides you with apt results that impress your targeted audience at the very first glance.'
		     ];

		     $processHeadings = [
		     	'Conceptualization',
		     	'Design',
		     	'Delivery'
		     ];



		     $metas = [ "Logo and Identity Design Services | Brand Identity" , "Transforming and giving birth to newer brands and corporations with brand identity solutions like no other. Come and inquire for a unique logo design today!", 'landing/img/Logo-Designing.png'  ];

		     $packages = 'packages-logo';
		     $portfolio = 'portfolio-logo';

		   return view('landing.marketing', compact('list', 'headings', 'metas', 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'processHeadings'));
	}
}
