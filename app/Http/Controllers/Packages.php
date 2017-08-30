<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Packages extends Controller
{

    

public function basicLogoPackage(){
        $metas = [ "Basic Logo package | Logo design packages | Design Proficient" , "Are you a startup company and looking for brand identity solutions for your business then basic logo package suits the best for your business today."];

       
       $subherocontent = [ 'The Perfect Logo Package for Small Sized Corporate or Personal Packages' ];

        $body = [
            'Basic Logo Package',
            'Good things come in small packages and so does our logo package. Our basic logo package is currently one of our bestselling packages providing our customers with 2 custom logo design concepts from 1 dedicated designer. Don’t like it? Change it! You can revise your concepts a not once, not twice but four times. With 100% satisfaction rate, we’re the best pick that you can get at a budget!',
            'This project is suitable for small corporate projects and small personal projects on a budget with a quick turnaround time.'
        ];

        
        $box = [
            'Basic Logo Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '88.00',
            '44.00'
        ];

        $list = [
            '2 Custom Logo Design Concepts',
            '1 Dedicated Designer',
            '4 Revisions',
            '48 to 72 hours TAT',
            'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)',
            '100% Unique Design Guarantee*',
            '100% Satisfaction Guarantee',
            '100% Money Back Guarantee*',
            '100% Ownership Rights'
 
        ];

        $orderCategory = 'order.logo';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }


 /********************************************/

 public function startupLogoPackage(){
        
       $metas = [ "Startup Logo package | Logo design services | Design Proficient" , "This package is suitable for small startups and independent corporations on a budget seeking brand identity solutions."];

       $subherocontent = [ 'Exceptional Logo Package for Startups and Mid-Sized Businesses' ];

        $body = [
            'Startup Logo Package',
            'We like to push new ideas and additionally promote startups that have a knack for great design sense. The startup logo package that we provide our customers comes with 4 logo design concepts from 2 of our best designers. As a packager user, you have the ability to get unlimited revisions. Not just this, you also get free business card designs on this package. ',
            'This package is suitable for small startups and independent corporations on a budget seeking brand identity solutions.'
        ];
        
        $box = [
            'Start Up Logo Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '168.00',
            '84.00'
        ];

        $list = [
            '4 Custom Logo Design Concepts',
            'By 2 Designers',
            'FREE Icon',
            'FREE Business Card Design',
            'UNLIMITED Revisions',
            '48 to 72 hours TAT',
            'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee*',
            '100% Ownership Rights'
 
        ];


        $orderCategory = 'order.logo';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

    

/********************************************/


public function professionalLogo(){
               $metas = [ "Professional Logo package | Logo design company | Design Proficient" , "This package is suitable for mega startups and mid-sized corporations looking for suitable creative Logo Design Solutions."];

       $subherocontent = [ 'Brand Identity Solutions For Future Corporate Giants To Set Them A Class Apart' ];

        $body = [
            'Professional Logo Package',
            'For huge organizations and institutions that aim to create a change in the market, this is just the package. The professional logo package features unlimited concepts by three of the best creative thinkers that we have. With a professional stationary design set and MS Word letterhead that comes in complimentary with the package, this is just what you need to make your business a success.',
            'This package is suitable for mega startups and mid-sized corporations looking for suitable creative brand identity solutions.'
        ];
        
        $box = [
            'Professional Logo Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '248.00',
            '124.00'
        ];

        $list = [
            'UNLIMITED Logo Design Concepts',
            'By 3 Designers',
            'UNLIMITED Revisions',
            'FREE Stationary Design Set',
            'FREE MS Word Letterhead',
            '48 to 72 hours TAT',
            'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee*',
            '15% Discount on your next order'
        ];


        $orderCategory = 'order.logo';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/


 public function eliteLogoPackage(){
               $metas = [ "Elite Logo package | Logo design agency | Design Proficient" , "This package is suitable for mega brand and huge-sized corporations looking for suitable creative brand identity solutions."];

       $subherocontent = [ 'Top Notch Logo Design Solutions For Monster-Sized Corporations' ];

        $body = [
            'Elite Logo Package',
            'For corporations succeeding at a supersized scale, top quality brand development solutions are a must. With the Elite Logo Package, you can get nothing but the best logo solutions that we have and that too on the best price. Unlimited designs, Unlimited Revisions, Free Stationary Design and much more.',
            'This package is suitable for mega brand and huge-sized corporations looking for suitable creative brand identity solutions.'
        ];
        
        $box = [
            'Elite Logo Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '348.00',
            '174.00'
        ];

        $list = [
            'UNLIMITED Logo Design Concepts',
            'By 5 Design Artist',
            'FREE Stationary Design Set',
            'UNLIMITED Revisions',
            'FREE MS Word Letterhead',
            'Free Email Signature',
            'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *',
            '48 to 72 hours TAT',
            '15% Discount on your next order'
            
 
        ];


        $orderCategory = 'order.logo';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function businessLogoPackage(){
               $metas = [ "Business Logo package | Logo design services | Design Proficient" , "This package is suitable for pre-existing multinational corporations and super startups aiming for brand reputation success."];

       $subherocontent = [ 'Corporate Brand Identity Solutions For Classy Business Entities' ];

        $body = [
            'Business Logo Package',
            'For brands that like to keep it strictly corporate, our business logo package works like an absolute treat. The package includes unlimited logo design concepts from 8 of our best creative design artists. A double-sided flyer design and 2 additional stationary sets are additionally part of this amazing package. With a near perfect satisfaction rate and a money back guarantee, this is just what you’re looking for to create a brand reputation that’s out of this world.',
            'This package is suitable for pre-existing multinational corporations and super startups aiming for brand reputation success.'
        ];
        
        $box = [
            'BASIC LOGO PACKAGE',
            'Suitable for potential super-startups and brand revamps for companies.',
            '488.00',
            '244.00'
        ];

        $list = [
            'UNLIMITED Logo Design Concepts',
            'By 8 Design Artist',
            'FREE Unlimited Revisions',
            'UNLIMITED Revisions',
            '2 Stationary Design Sets',
            'Double Sided Flyer Design',
            'Bi-Fold Brochure',
            'FREE MS Word Letterhead',
            'Social Media Banners Design',
            'Free Email Signature',
            'Free Fax Signature',
            'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
 
        ];


        $orderCategory = 'order.logo';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function goldLogoPackage(){
               $metas = [ "Gold Logo package | Logo Design Services | Design Proficient" , "This package is suitable for pre-existing multinational corporations and super startups seeking successful brand revamp."];

       $subherocontent = [ 'Logo Design Solutions For The Best In The Business' ];

        $body = [
            'Gold Logo Package',
            'The Gold Logo Package is perhaps the best logo package that you can find if you’re willing to give your brand that’s already performing, a successful revamp. The gold logo package consists of unlimited logo design concepts by 8 of the best design artists. Our team will additionally be providing you with 2 stationary set designs and much more to make your new brand a success.',
            'This package is suitable for pre-existing multinational corporations and super startups seeking successful brand revamp.'
        ];
        
        $box = [
            'Gold Logo Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '1,048.00',
            '524.00'
        ];

        $list = [
            'UNLIMITED Logo Design Concepts',
            'By 8 Design Artist',
            'UNLIMITED Revisions',
            '2 Stationary Design Sets',
            'FREE MS Word Letterhead',
            '3 Page Custom Website',
            'Content Management System',
            '2 Stock Photos',
            '2 Banner Designs',
            'jQuery Slider',
            'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)',
            '100% Ownership Rights' ,
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee*',
            
        ];


        $orderCategory = 'order.logo';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/


public function basicIllustrativeLogoPackage(){
               $metas = [ "Basic Illustrative Logo Package | Logo Design agency | Design Proficient" , "This project is suitable for small corporate projects and small personal projects on a budget with a quick turnaround time."];

       $subherocontent = [ 'Out Of The Box Illustrative Logos For Seed Sized Startups' ];

        $body = [
            'Basic Illustrative Logo Package',
            'The Basic Illustrative Logo Package is currently the best illustrative logo package for small personal and corporate projects. The package comes with 3 beautiful illustrative concepts by 2 of the best designers we have. Don’t like it? Revise it! Our basic illustrative package is perhaps one of the best packages that you could find.',
            'This project is suitable for small corporate projects and small personal projects on a budget with a quick turnaround time.'
        ];
        
        $box = [
            'Basic Illustrative Logo Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '588.00',
            '294.00'
        ];

        $list = [
            '3 Custom Logo Design Concepts',
            'By 2 Designers',
            'UNLIMITED Revisions',
            '48 to 72 hours TAT',
            'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee*'
 
        ];


        $orderCategory = 'order.logo';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function startupIllustrativeLogoPackage(){
               $metas = [ "Startup Illustrative Logo Package | Design Proficient" , "This package is suitable for small startups and independent corporations on a budget seeking brand identity solutions."];

       $subherocontent = [ 'Creative Illustrative Logos For Emerging Brands and Startups' ];

        $body = [
            'Startup Illustrative Logo Package',
            'The Startup Illustrative Package is basically one of the best packages in terms of illustrative logo package production. The package itself includes 4 custom design projects by 3 different designers. The package currently comes with unlimited revisions. With a 100% satisfaction rate and a money back guarantee, this is just the package that you need to make a difference in your industry.',
            'This package is suitable for small startups and independent corporations on a budget seeking brand identity solutions.'
        ];
        
        $box = [
            'Startup Illustrative Logo Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '788.00',
            '394.00'
        ];

        $list = [
            '4 Custom Logo Design Concepts',
            'By 3 Designers',
            '48 to 72 hours TAT',
            'UNLIMITED Revisions',
            'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee*'
 
        ];


        $orderCategory = 'order.logo';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function professionalIllustrativePackage(){
               $metas = [ "Professional Illustrative Logo Package | Design Proficient" , "This package is suitable for pre-existing multinational corporations and super startups aiming for brand reputation success."];

       $subherocontent = [ 'Extraordinary Illustrative Design Solutions For Corporate Brands' ];

        $body = [
            'Professional Illustrative Logo Package',
            'The Professional Illustrative Logo Package is easily one of the most competitive package for illustrative logos in the industry. The package is tailormade for industry giants looking to switch to a better and more illustrative brand identity. The package features unlimited logo design concepts that are bound to impress the audience by 4 of the best designers.',
            'This package is suitable for pre-existing multinational corporations and super startups aiming for brand reputation success.'
        ];
        
        $box = [
            'Professional Illustrative Logo Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '1,188.00',
            '594.00'
        ];

        $list = [
            'UNLIMITED Logo Design Concepts',
            'By 4 Designers',
            'UNLIMITED Revisions',
            '24 to 48 hours TAT',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee*'
 
        ];


        $orderCategory = 'order.logo';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/



public function interactivemotiongraphicpackage(){
               $metas = [ "3D Logo Package | Logo Design Services | Design Proficient" , "This package is suitable for pre-existing multinational corporations and super startups aiming for brand reputation success."];

       $subherocontent = [ 'Three-Dimensional Logo Concepts For Emerging Creative Companies ' ];

        $body = [
            '3D Logo Package',
            'One of our bestsellers is the 3D logo package, a personal favorite for many of our clients. The 3D logo package is fit for companies that are creative and like to take things to the next level. The package provides 4 3D logo concepts by some of our creative workers and designers.',
            'This package is suitable for pre-existing multinational corporations and super startups aiming for brand reputation success.'
        ];
        
        $box = [
            '3D Logo Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '1,088.00',
            '544.00'
        ];

        $list = [
            '3 Unique 3D Logo Concepts',
            'Light Effects and VFX',
            'Fully Rendered',
            'Multiple 3D Angles',
            'By 3 Award Winning Designers',
            '72 hours Turnaround Time',
            'UNLIMITED Revisions',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Satisfaction Guarantee',
            '100% Money Back Guarantee*'
 
        ];


        $orderCategory = 'order.logo';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function startUpWebsite(){
               $metas = [ "Startup Web Package | Web development packages | Design Proficient" , "This package is suitable for small companies and seed sized startups aiming for web based success."];

       $subherocontent = [ 'The Perfect Boost For Your Startup Over The World Wide Web' ];

        $body = [
            'Startup Web Package',
            'Building a startup is perhaps the hardest yet innovative thing that you can do. The startup web package is the perfect and perhaps the most budget friendly package that you could possibly find in the industry. The package includes a staggering 5-page website together with an SEO friendly Google Sitemap. With a money back guarantee together with an amazing customer satisfaction rate, this deal is easily the best to take.',
            'This package is suitable for small companies and seed sized startups aiming for web based success.'
        ];
        
        $box = [
            'BASIC WEB PACKAGE',
            'Suitable for personal projects and startups<br>that require a quick logo design.',
            '788.00',
            '394.00'
        ];

        $list = [
            '2 Stock Images',
            '3 Page Website',
            '1 jQuery Slider Banner',
            'Contact/Query Form',
            'Complete W3C Certified HTML',
            '48 to 72 hours TAT',
            'Complete Deployment*',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
 
        ];


        $orderCategory = 'order.web';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function basicWebsite(){
               $metas = [ "Basic Web Package | Web development services | Design Proficient" , "This package is suitable for pre-existing multinational corporations and super startups aiming for brand reputation success."];

       $subherocontent = [ 'Excellent Web Solutions For Small Personal and Corporate Projects  ' ];

        $body = [
            'Basic Web Package',
            'Starting up with a small personal or professional project? Well, it’s time for you to take a step into the future with our basic web package. The basic web package is perhaps the best package for small projects and startups. With a turnaround time that staggering fast, it’s easier to make sure your web is up and running.',
            'This package is suitable for pre-existing multinational corporations and super startups aiming for brand reputation success.'
        ];
        
        $box = [
            'BASIC LOGO PACKAGE',
            'Suitable for personal projects and startups<br>that require a quick logo design.',
            '488.00',
            '244.00'
        ];

        $list = [
            '5 Stock Photos',
            '5 Page Website',
            '3 Banner Design',
            '1 jQuery Slider Banner',
            'FREE Google Friendly Sitemap',
            'Complete W3C Certified HTML',
            '48 to 72 hours TAT',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *',
            'Mobile Responsive will be Additional $200*',
            'CMS will be Additional $250*'
 
        ];


        $orderCategory = 'order.web';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function professionalWebsite(){
               $metas = [ "Professional Website Package | Web design agency | Design Proficient" , "This package is suitable for Mid-Sized and Mega Sized corporations aiming for web based success."];

       $subherocontent = [ 'Top Class Web Solutions For Mega Corporations Globally' ];

        $body = [
            'Professional Web Package',
            'The world wide web is currently the hub to some of the best businesses in the world. With the competition this tough, even the best businesses around the world pull on their battle armors. Are you looking for exceptional web solutions? The professional web package is just what you need.',
            'This package is suitable for Mid-Sized and Mega Sized corporations aiming for web based success.'
        ];
        
        $box = [
            'Professional Web Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '1,288.00',
            '644.00'
        ];

        $list = [
            '10 Unique Pages Website',
            'CMS / Admin Panel Support',
            '8 Stock images',
            '5 Banner Designs',
            '1 jQuery Slider Banner',
            'FREE Google Friendly Sitemap',
            'Complete W3C Certified HTML',
            '48 to 72 hours TAT',
            'Complete Deployment',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *',
            'Mobile Responsive will be Additional '
 
        ];


        $orderCategory = 'order.web';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function eliteWebsite(){
           $metas = [ "Elite Website Package | Web development company | Design Proficient" , "This package is suitable for Super Sized corporations aiming for web based success and looking for complete web package."];

       $subherocontent = [ 'Superb Web Solutions for Super-Sized Companies Worldwide.' ];

        $body = [
            'Elite Web Package',
            'For companies that are super-sized with hundreds and thousands of branches, the elite web package is just what you need. The Elite web package is designed to keep huge corporations with sustainable web solutions. Create results that matter with the Elite Web Package. A 15 page unique website with a conceptual design and dynamic design is exactly what you get from this amazing package.',
            'This package is suitable for Super Sized corporations aiming for web based success and looking for complete web package.'
        ];
        
        $box = [
            'Elite Website',
            'Suitable for potential super-startups and brand revamps for companies.',
            '2,988.00',
            '1,494.00'
        ];

        $list = [
            'Upto 15 Unique Pages Website',
            'Conceptual and Dynamic Website',
            'Mobile Responsive',
            'Online Reservation/Appointment Tool (Optional)',
            'Online Payment Integration (Optional)',
            'Custom Forms',
            'Lead Capturing Forms (Optional)',
            'Striking Hover Effects',
            'Newsletter Subscription (Optional)',
            'Newsfeed Integration',
            'Social Media Integration',
            'Search Engine Submission',
            '5 Stock Photos',
            '3 Unique Banner Design',
            '1 jQuery Slider Banner',
            'Complete W3C Certified HTML',
            '48 to 72 hours TAT',
            'Complete Deployment',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
 
        ];


        $orderCategory = 'order.web';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function silverWebsitePackage(){
               $metas = [ "Silver Website Package | Web development services | Design Proficient" , "This package is suitable for Super-Sized corporations aiming for web based success and looking for complete web package."];

       $subherocontent = [ 'Conceptual Web Solutions For Globally Acclaimed Corporations' ];

        $body = [
            'Silver Web Package',
            'If you’re looking for complete web solutions that are hassle-free for your company, this is just the package that you need. The package basically consists of a complete website between 15-20 pages with each and every feature of the website being custom for your business. For an iconic website, this is perhaps the best thing that you can get.',
            'This package is suitable for Super-Sized corporations aiming for web based success and looking for complete web package.'
        ];
        
        $box = [
            'Silver Website Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '4,788.00',
            '2,394.00'
        ];

        $list = [
            '15 to 20 Pages Website',
            'Custom Made, Interactive, Dynamic & High End Design',
            'Custom WP (or) Custom PHP Development',
            '1 jQuery Slider Banner',
            'Up to 10 Custom Made Banner Designs',
            '10 Stock Images',
            'Unlimited Revisions',
            'Special Hoover Effects',
            'Content Management System (CMS)',
            'Online Appointment/Scheduling/Online Ordering Integration (Optional)',
            'Online Payment Integration (Optional)',
            'Multi Lingual (Optional)',
            'Custom Dynamic Forms (Optional)',
            'Signup Area (For Newsletters, Offers etc.)',
            'Search Bar',
            'Live Feeds of Social Networks integration (Optional)',
            'Mobile Responsive',
            'FREE 5 Years Domain Name',
            'Free Google Friendly Sitemap',
            'Search Engine Submission',
            'Complete W3C Certified HTML',
            'Industry Specified Team of Expert Designers and Developers',
            'Complete Deployment',
            'Dedicated Accounts Manager',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
 
        ];



        $orderCategory = 'order.web';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function collateralStartup(){
               $metas = [ "Startup Collateral Package | Digital Marketing | Design Proficient" , "This package is suitable for startups looking for a budget friendly collateral design and development package."];

       $subherocontent = [ 'Make The Perfect First Impression On Your Targeted Audience' ];

        $body = [
            'Startup Collateral Package',
            'While many might not consider it as an important step for the startup to have properly designed collateral. For a startup, the collateral happens to be the most important thing to have and the Startup Collateral Package is exactly what you need for this.',
            'This package is suitable for startups looking for a budget friendly collateral design and development package.'
        ];
        
        $box = [
            'Startup Collateral Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '198.00',
            '99.00'
        ];

        $list = [
            '2 Stationery Design Set',
            'FREE Fax Template',
            'Print Ready Formats',
            'UNLIMITED Revisions',
            '100% Satisfaction Guarantee',
            '00% Money Back Guarantee*'
 
        ];


        $orderCategory = 'order.branding';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function collateralClassic(){
               $metas = [ "Classic Collateral Package | Digital Marketing | Design Proficient" , "This package is suitable for mid-sized corporations looking for a budget friendly collateral design and development package."];

       $subherocontent = [ 'Redefining Class With Excellently Designed Marketing Collateral' ];

        $body = [
            'Classic Collateral Package',
            'A classy corporate business owner will always look for a classy corporate solution to things and the Classic Collateral package is just that. The classic collateral package was made by the best business and design analysts in the business for corporations who are eager to make a mark on the industry.',
            'This package is suitable for mid-sized corporations looking for a budget friendly collateral design and development package.'
        ];
        
        $box = [
            'Classic Collateral Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '398.00',
            '199.00'
        ];

        $list = [
            '2 Stationery Design Set',
            'UNLIMITED Revisions',
            'Flyer Design',
            'Brochure Design (Bi-fold/Tri-fold)',
            '100% Satisfaction Guarantee',
            '100% Money Back Guarantee*'
 
        ];



        $orderCategory = 'order.branding';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/



public function collateralPremium(){
               $metas = [ "Premium Collateral Package | Digital Marketing | Design Proficient" , "This package is suitable for mid-sized and well-established corporations looking for a budget friendly collateral design and development package."];

       $subherocontent = [ 'Exceptional Collateral Design Solutions For Supreme Corporations' ];

        $body = [
            'Premium Collateral Package',
            'A good businessman would look for a good collateral design package, but a great business owner will always look for the best design package at the right price. Our Premium Collateral Package features just that and that too with exceptional concepts that leave the viewer craving for more.',
            'This package is suitable for mid-sized and well-established corporations looking for a budget friendly collateral design and development package.'
        ];
        
        $box = [
            'Premium Collateral Package',
            'Suitable for personal projects and startups<br>that require a quick logo design.',
            '798.00',
            '399.00'
        ];

        $list = [
            '2 Stationery Design Set',
            'Packaging Design',
            'UNLIMITED Revisions',
            'T-Shirt Design',
            '100% Satisfaction Guarantee',
            '100% Money Back Guarantee*'
 
        ];



        $orderCategory = 'order.branding';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function collateralUnlimited(){
               $metas = [ "Unlimited Collateral Package | Digital Marketing | Design Proficient" , "This package is suitable for mid-sized and well-established corporations looking for a budget friendly collateral design and development package."];

       $subherocontent = [ 'The Best Industries Prefer The Best In Class Collateral Designs' ];

        $body = [
            'Unlimited Collateral Package',
            'The Unlimited Collateral Package is built for organizations that are looking to create a difference. Working on this package are some of the best designers that we have at Design Proficient. For corporate giants seeking a brand revamp or for newly formed institutions, this is just the collateral package that you need.',
            'This package is suitable for mid-sized and well-established corporations looking for a budget friendly collateral design and development package.'
        ];
        
        $box = [
            'Unlimited Collateral Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '998.00',
            '499.00'
        ];

        $list = [
            '2 Stationery Design Set',
            'Menu Card Design',
            'T-Shirt Design',
            '1 Banner Design',
            '100% Satisfaction Guarantee',
            '100% Money Back Guarantee*'
 
        ];



        $orderCategory = 'order.branding';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

/********************************************/


public function eCommerceStartup(){
               $metas = [ "E-Commerce Startup Package | Web Solutions | Design Proficient" , "This package is suitable for startup e-stores looking for budget friendly e-commerce solutions."];

       $subherocontent = [ 'Affordable E-Commerce Solutions For Startup E-Stores' ];

        $body = [
            'E-Commerce Startup Package',
            'For an e-commerce business providing excellent web solutions in the market, a great website is just what they need for an excellent start. The Ecommerce Startup Package is just what you need to create results from the very start.',
            'This package is suitable for startup e-stores looking for budget friendly e-commerce solutions.'
        ];
        
        $box = [
            'E-Commerce Startup Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '1,588.00',
            '794.00'
        ];

        $list = [
            'Customized Design',
            'Up-to 100 Products',
            'Content Management System (CMS)',
            'Mini Shopping Cart Integration',
            'Payment Module Integration',
            'Easy Product Search',
            'Dedicated designer & developer',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee*'
 
        ];



        $orderCategory = 'order.ecommerce';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function eCommerceProfessional(){
               $metas = [ "E-Commerce Professional Package | Web Solutions | Design Proficient" , "This package is suitable for startup e-stores looking for budget friendly e-commerce solutions."];

       $subherocontent = [ 'Professionally Perfect E-Commerce Solutions For The Global E-Stores' ];


        
        $body = [
            'E-Commerce Professional Package',
            'Professional e-commerce solutions can be hard to find for e-commerce services spread across the planet. This is where the design and development professionals from Design Proficient step in. The Ecommerce Professional package focuses on a custom e-commerce website for your business. ',
            'This package is suitable for startup e-stores looking for budget friendly e-commerce solutions.'
        ];
        
        $box = [
            'E-Commerce Professional Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '2,788.00',
            '1,394.00'
        ];

        $list = [
            'Customized Design',
            'Up-to 500 Products',
            'Content Management System (CMS)',
            'Full Shopping Cart Integration',
            'Payment Module Integration',
            'Easy Product Search',
            'Product Reviews',
            '5 Promotional Banners',
            'Team of Expert Designers & Developers',
            'Unlimited Revisions',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee*'
            
 
        ];



        $orderCategory = 'order.ecommerce';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function eCommerceElite(){
               $metas = [ "E-Commerce Elite Package | Web Solutions | Design Proficient" , "This package is suitable for monster sized e-stores looking for exceptional e-commerce solutions."];

       $subherocontent = [ 'World Class E-Commerce Solutions For World Class E-Stores.' ];

        $body = [
            'E-Commerce Elite Package',
            'For stores that are looking for world class e-commerce development solutions, this is just the package! The Ecommerce elite package is currently the best package in terms of ecommerce design and development that we have. The package includes the best features for your ecommerce store and that too complete to the very core.',
            'This package is suitable for monster sized e-stores looking for exceptional e-commerce solutions.'
        ];
        
        $box = [
            'E-Commerce Elite Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '7,388.00',
            '3,694.00'
        ];

        $list = [
            'UNLIMITED Logo Design Concepts',
            'By 6 Award Winning Designers',
            'Icon Design',
            'UNLIMITED Revisions',
            'Print Media',
            'Stationary Design (BusinessCard,Letterhead & Envelope)',
            'Invoice Design, Email Signature',
            'Bi-Fold Brochure (OR) 2 Sided Flyer Design',
            'Product Catalog Design',
            'Sign age Design (OR) Label Design',
            'T-Shirt Design (OR) Car Wrap Design',
            'Website',
            'E-Commerce Store Design',
            'Product Detail Page Design',
            'Unique Banner Slider',
            'Featured Products Showcase',
            'Full Shopping Cart Integration',
            'Unlimited Products',
            'Unlimited Categories',
            'Product Rating & Reviews',
            'Easy Product Search',
            'Multi-currency SupportPayment Gateway Integration',
            'Multi-currency Support',
            'Content Management System',
            'Cutomer Log-in Area',
            'Mobile Responsive',
            'Social Media Plugins Integration',
            'Tell a Friend Feature',
            'Social Media Pages',
            'Facebook , Twitter, YouTube, Google+ & Pinterest Page Designs',
            'Value Added Services',
            'Dedicated Account Manager',
            'Unlimited Revisions',
            'All Final File Formats',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
            
                
 
        ];



        $orderCategory = 'order.ecommerce';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function videoStartup(){
               $metas = [ "Startup Video Package | Video production agency | Design Proficient" , "This package is suitable for small brands seeking video production services for personal or professional projects."];

       $subherocontent = [ 'Budget Friendly Animation and Video Production For Small Projects' ];

        $body = [
            'Startup Video Package',
            'Gone is the time when you needed text to create results that mattered. The audience is now starting to become a huge fan of video content and we’re here to help your business grow with it. The video startup package is the perfect budget package for brands seeking top class video editing and animation under a budget.',
            'This package is suitable for small brands seeking video production services for personal or professional projects.'
        ];
        
        $box = [
            'Startup Video Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '1,598.00',
            '499.00'
        ];

        $list = [
            '30 Second Video',
            'Professional Script',
            'Storyboard',
            'Animation',
            'Voice - Over & Sound Effects',
            '4 weeks Delivery',
            'Unlimited Revisions'
 
        ];



        $orderCategory = 'order.video';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function videoClassic(){
               $metas = [ "Classic Video Package | Video production company | Design Proficient" , "This package is suitable for mid-sized brands seeking video production services for personal or professional projects"];

       $subherocontent = [ 'Perfectly Crafted Video Production and Editing Solutions For ROI Centric Organizations ' ];

        $body = [
            'Classic Video Package',
            'Our team of animators and video production experts love to provide the audience with everything that they need from a video on a budget. This is why collaborating with our business analysts, we came up with the video classic package providing top class video solutions to those needing it.',
            'This package is suitable for mid-sized brands seeking video production services for personal or professional projects.'
        ];
        
        $box = [
            'Classic Video Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '2,198.00',
            '999.00'
        ];

        $list = [
            '60 Second Video',
            'Professional Script',
            'Sample Theme',
            'Storyboard',
            'Animation',
            'Voice - Over & Sound Effects',
            '5 weeks Delivery'
 
        ];



        $orderCategory = 'order.video';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function videoPremium(){
               $metas = [ "Premium Video Package | Video production company | Design Proficient" , "This package is suitable for mid-sized brands seeking video production services for personal or professional projects."];

       $subherocontent = [ 'Video Premium Production Services For Creative Advertising Solutions' ];

        $body = [
            'Premium Video Package',
            'Our team of video animators created the video premium package for brands that depend of excessive use of video and need solutions on a budget. Get videos produced near perfection with the video premium package. Get yourself the video premium package today.',
            'This package is suitable for mid-sized brands seeking video production services for personal or professional projects.'
        ];
        
        $box = [
            'Premium Video Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '2,998.00',
            '1499.00'
        ];

        $list = [
            '90 Second Video',
            'Professional Script',
            'Sample Theme',
            'Storyboard',
            'Animation',
            'Voice - Over & Sound Effects',
            '6 Weeks Delivery'
 
        ];



        $orderCategory = 'order.video';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function videoUnlimited(){
               $metas = [ "Unlimited Video Package | Video production agency | Design Proficient" , "This package is suitable for mid-sized brands seeking video production services for personal or professional projects."];

       $subherocontent = [ 'Next Level Video Production For Next Generation Brands' ];

        $body = [
            'Unlimited Video Package',
            'The video unlimited package is for people that love to create results with videos in terms of ROI. We dedicate the best designers, video production artists and creative thinkers to this package. Creating results via video is easy and that’s what this package was made for. Get yourself the video unlimited package today.',
            'This package is suitable for mid-sized brands seeking video production services for personal or professional projects.'
        ];
        
        $box = [
            'Unlimited Video Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '4,598.00',
            '2,299.00'
        ];

        $list = [
            '120 Second Video',
            'Professional Script',
            'Sample Theme',
            'Storyboard',
            'Animation',
            'Voice - Over & Sound Effects'
            
 
        ];



        $orderCategory = 'order.video';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/



    public function StartupSEOPackages(){
               $metas = [ "Get The Best SEO Package for Startups | Design Proficient" , "Looking for the best SEO packages that can get you on top of the search results? This is the best package to start with!"];

       $subherocontent = [ 'Helping Your Startup Be Visible On The Search Engine Rankings' ];

        $body = [
            'SEO Startup Package',
            'Startups face a tough time being visible to the audience and that can’t be done without being visible to the search engines. With this package, we allow startups of all shapes and sizes in becoming visible on the search engines.',
            'This package is suitable for small-sized brands and startups seeking search engine optimization services for personal or professional projects.'
        ];
     
        $box = [
            'SEO Startup Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '898.00',
            '449.00'
        ];

        $list = [
            '5 Keywords',
            'Guaranteed Ranking on Google',
            'Off-site Optimization',
            'Link Building',
            'Social Bookmarking',
            'Basic Analytical Report',
            'In-depth Site Analysis',
            'Content Duplicity Check',
            'Initial Backlinks analysis',
            'Google Penalty Check',
            'Mobile Usability Check',
            'Competition Analysis',
            'Keyword Research',
            'Informational Content Writing & Sharing (2 - Per Month)',
            'Blog Writing (1 - Per Month)',
            'Press Release Social Bookmarking (5 - Per Month)',
            'NAP Syndication',
            'Google My Business / Bing Local Listing',
            'Citation Building',
            'Classified Submissions',
            'Google Analytics Analysis Report',
            'SEO Reports',
            'Search Engine Rank Report',
            'Dedicated Accounts Manager',
            'Monthly Action Plan',
            'Activity Report'
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }



/********************************************/


public function SEOIdentityPackages(){
               $metas = [ "SEO Package For Mid-Sized Brands | Design Proficient" , "For decent mid-sized brands that are looking to create an impact on the search engines, this is just the package on a budget that you need."];

       $subherocontent = [ 'Assisting Mid-Sized Brands Make Their Identity On The Top Tier Of Google' ];

        $body = [
            'SEO Identity Package',
            'With an ample SEO package like the SEO identity package, we help mid-sized brands in becoming the best at what they do. Our SEO experts allow you to become visible to your targeted audience always on the top of the search engines.',
            'This package is suitable for mid-sized brands seeking search engine optimization services for professional and corporate needs.'
        ];
     
        $box = [
            'SEO Identity Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '1698.00',
            '849.00'
        ];

        $list = [
            '10 Keywords',
            'Guaranteed Ranking on Google',
            'Off-site Optimization',
            'On-site Optimization',
            'Link Building',
            'Social Bookmarking',
            'In-depth Site Analysis',
            'Content Duplicacy Check',
            'Initial Backlinks analysis',
            'Google Penalty Check',
            'Mobile Usability Check',
            'Competition Analysis',
            'Keyword Research',
            'Title & Meta Tags Optimization',
            'Content Optimization',
            'Page Speed Analysis & Optimization',
            'HTML Code Cleanup & Optimization',
            'Internal Link Structuring & Optimization',
            'Pages H tags Optimization',
            'Canonicalization/301 Redirect',
            'Website Page Load Optimization',
            'Schema Markup Implementation',
            'Image & Hyperlink Optimization',
            'Robots.txt Creation/Analysis',
            'Blog Writing (2 - Per Month)',
            'Informational Content Writing & Sharing (1 Per Month)',
            'Press Release Writing & Distribution',
            'Press Release Social Bookmarking',
            'Google Webmaster Tools Setup',
            'Google Analytics Setup & Integration'
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }



/********************************************/



public function EliteSEOPackages(){
               $metas = [ "SEO Services For Multinational Companies | Design Proficient" , "The best search engine optimization services for multinational companies seeking amazing results. Check out the SEO Elite Package today!"];

       $subherocontent = [ 'Stay On Top Of The SERPS At Every Search Engine On The Web' ];

        $body = [
            'SEO Elite Package',
            'The SEO Elite package is made by the best SEO executives that we have. Our team of executives make sure that you’re not only at top of the SERPs but your brand reputation online is also being properly managed.',
            'This package is suitable for mega-sized brands seeking search engine optimization services for professional and corporate needs.'
        ];
     
        $box = [
            'SEO Elite Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '3098.00',
            '1549.00'
        ];

        $list = [
            '20 Keywords',
            'Guaranteed Ranking on Google',
            'Off-site Optimization',
            'On-site Optimization',
            'Link Building',
            'Social Bookmarking',
            'In-depth Site Analysis',
            'Content Duplicacy Check',
            'Initial Backlinks analysis',
            'Google Penalty Check',
            'Mobile Usability Check',
            'Competition Analysis',
            'Keyword Research',
            'Page Speed Analysis & Optimization',
            'Title & Meta Tags Optimization',
            'Content Optimization',
            'HTML Code Cleanup & Optimization',
            'Internal Link Structuring & Optimization',
            'Pages H tags Optimization',
            'Canonicalization/301 Redirect',
            'Website Page Load Optimization',
            'Robots.txt Creation/Analysis',
            'Press Release Writing & Distribution',
            'Press Release Social Bookmarking',
            'Schema Markup Implementation',
            'Image & Hyperlink Optimization',
            'Google Webmaster Tools Setup',
            'Google Analytics Setup & Integration',
            'Blog Writing (2 - Per Month)',
            'Informational Content Writing & Sharing (1 Per Month)'
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }



/********************************************/





public function socialStartUp(){
               $metas = [ "Startup Social Package | Digital Marketing agency | Design Proficient" , "This package is suitable for seed-sized brands and startups seeking social media marketing services for personal or professional projects."];

       $subherocontent = [ 'Assisting Seed Sized Brands With Social Media Marketing Solutions' ];

        $body = [
            'Startup Social Package',
            'For a small emerging brands and startups, existence on social media is very important. Our digital marketing experts teamed up with our brand analysts to create a package made solely for seed sized companies and startups called the social startup package. For a startup, this is the best package that you can possibly get.',
            'This package is suitable for seed-sized brands and startups seeking social media marketing services for personal or professional projects.'
        ];
     
        $box = [
            'Startup Social Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '198.00',
            '99.00'
        ];

        $list = [
            'Cover Photo Design',
            'Profile Picture Design',
            'Welcome Page Design',
            'Unlimited Revisions',
            '100% Satisfaction Guarantee',
            '100% Money Back Guarantee*'
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/





public function socialClassic(){
               $metas = [ "Classic Social Package | Digital Marketing agency | Design Proficient" , "This package is suitable for mid-sized brands and startups seeking social media marketing services for personal or professional projects."];

       $subherocontent = [ 'Bringing Social Media To Life for Mid-Sized Brands and Corporations' ];

        $body = [
            'Classic Social Package',
            'Our team of social media marketers believe in budget friendly marketing solutions that create a vivid change in the ROI of any mid-sized brand are important. This is why we created the Social Classic Package to provide you with the best solutions that bang!',
            'This package is suitable for mid-sized brands and startups seeking social media marketing services for personal or professional projects.'
        ];
        
        $box = [
            'Classic Social Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '298.00',
            '149.00'
        ];

        $list = [
            'Cover Photo Design',
            'Profile Picture Design',
            'Welcome Page Design',
            'Twitter Page Design',
            'Unlimited Revisions',
            '100% Money Back Guarantee*'
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function socialPremium(){
               $metas = [ "Premium Social Package | Social media marketing | Design Proficient" , "This package is suitable for well-established seeking social media marketing services for personal or professional projects."];

       $subherocontent = [ 'Premium Social Media Marketing Solutions For Well-Established Brands' ];

        $body = [
            'Premium Social Package',
            'Our team of social and digital marketers provide you with the best results that you need from your social media outlets. We make sure the best team of social marketers are part of the campaigns being made for customers availing this package. Each and every feature by all means in this package is PREMIUM as the name says it.',
            'This package is suitable for well-established seeking social media marketing services for personal or professional projects.'
        ];
        
        $box = [
            'Premium Social Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '398.00',
            '199.00'
        ];

        $list = [
            'Cover Photo Design',
            'Profile Picture Design',
            'Welcome Page Design',
            'Twitter Page Design',
            'YouTube Page Design',
            'Unlimited Revisions',
            '100% Money Back Gurantee*'
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function socialUnlimited(){
               $metas = [ "Unlimited Social Package | Social media marketing | Design Proficient" , "This package is suitable for well-established seeking social media marketing services for personal or professional projects."];

       $subherocontent = [ 'Top Notch Social Media Marketing and Management Services For World Class Corporations.' ];

        $body = [
            'Unlimited Social Package',
            'For corporations that need a well-reputed social media presence over the web, this is the perfect package to avail. We dedicate the best social media marketers to this package creating the best social media existence.',
            'This package is suitable for well-established seeking social media marketing services for personal or professional projects.'
        ];
        
        $box = [
            'Unlimited Social Package',
            'Suitable for personal projects and startups<br>that require a quick logo design.',
            '1998.99',
            '999.99'
        ];

        $list = [
            '2 Cover Photo Designs',
            'Profile Picture Design',
            'Welcome Page Design',
            'Twitter Page Design',
            'YouTube Page Design',
            'Google+ Page Design',
            '100% Money Back Gurantee*'
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/



public function basicCombo(){
               $metas = [ "Basic Combo Package | Brand Development Packages | Design Proficient" , "This package is suitable for small sized brands or personal projects looking for an all in one brand package."];

       $subherocontent = [ 'The Perfect Combination Of Brand Development Solutions On A Budget ' ];

        $body = [
            'Basic Combo Package',
            'The basic combo package is our initial combo package made for small personal or professional projects and that too on a budget. From logo design to stationary design and even custom icon design, at a price that’s just too good to be true. The basic combo package is just what you need to create a brand at a budget.',
            'This package is suitable for small sized brands or personal projects looking for an all in one brand package. '
        ];
        
        $box = [
            'Basic Combo',
            'Suitable for potential super-startups and brand revamps for companies.',
            '1,288.00',
            '644.00'
        ];

        $list = [
            '5 Custom Logo Design Concepts',
            'By 2 Designers',
            'Icon Design',
            'Business Card, Letterhead, Envelope, Fax Template',
            'MS Word Letterhead',
            '5 Page Website',
            'Mobile Responsive',
            'Team of Expert Designers & Developers',
            '8 Stock images',
            '5 Banner Designs',
            'jQuery Sliders',
            'Free Google Friendly Sitemap',
            'Complete W3C Certified HTML',
            'Complete Deployment',
            'Facebook Page Design',
            'All Final File Formats',
            'Dedicated Account Manager',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
        ];



        $orderCategory = 'order.branding';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/



public function startUpCombo(){
               $metas = [ "Startup Combo Package | Brand Development Company | Design Proficient" , "This package is suitable for small sized startups looking for an all in one brand package."];

       $subherocontent = [ 'Skyrocket Your Startup With Apt Branding Solutions At The Perfect Price ' ];

        $body = [
            'Startup Combo Package',
            'For a startup to excel in its respective industry, it needs exceptional branding solutions. Unfortunately, most startups don’t have the capital to pay for excellent branding solutions. With the Startup Combo Package, we aim to provide the client with the best of branding at a price that’s just too good to be true.',
            'This package is suitable for small sized startups looking for an all in one brand package. '
        ];
        
        $box = [
            'StartUp Combo',
            'Suitable for potential super-startups and brand revamps for companies.',
            '1,988.00',
            '994.00'
        ];

        $list = [
            '10 Custom Logo Design Concepts',
            'Mobile Responsive',
            '3 Dedicated Designers',
            'Icon Design',
            'Business Card, Letterhead, Envelope',
            'MS Word Letterhead',
            'UNLIMITED Pages Website',
            'Content Management System (CMS)',
            '5 Stock Photos + 3 Banner Designs',
            'Complete W3C Certified HTML',
            'Complete Deployment',
            'Facebook Page Design',
            'All Final File Formats',
            'Dedicated Account Manager',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
 
        ];



        $orderCategory = 'order.branding';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function professionalCombo(){
               $metas = [ "Professional Combo Package | Brand Development Agency | Design Proficient" , "This package is suitable for mega startups looking for an all in one brand package."];

       $subherocontent = [ 'Globally Acclaimed Brand Development Solutions At The Perfect Price' ];

        $body = [
            'Professional Combo Package',
            'Businesses that are pre-developed and are on the verge of becoming giants in the industry need a brand revamp suitable for expansion. The Professional Combo Package is made for brands that have succeeded or are succeeding and are looking to expand their wings. 8 of our best creative designers provide you with the best design and development solutions that you can possibly get. ',
            'This package is suitable for mega startups  looking for an all in one brand package. '
        ];
        
        $box = [
            'Professional Combo',
            'Suitable for potential super-startups and brand revamps for companies.',
            '2,788.00',
            '1,394.00'
        ];

        $list = [
            'Unlimited Logo Concepts',
            '8 Dedicated Designers',
            'Icon Design',
            '2 Free Custom Stationary Designs',
            'MS Word Letterhead',
            'Trifold Brochure Design',
            'Presentation Folder Design',
            'Conceptual and Dynamic Liquid Website',
            'Team of Expert Designers & Developers',
            'Mobile Responsive',
            'Online Reservation/Appointment Tool (Optional)',
            'Custom Forms',
            'Lead Capturing Forms (Optional)',
            'Newsfeed Integration',
            'Social Media Integration',
            'Search Engine Submission',
            '15 Stock images',
            '8 Unique Banner Designs',
            'jQuery Sliders',
            'Free Google Friendly Sitemap',
            'Complete W3C Certified HTML',
            'Facebook Page Design',
            'Twitter Page Design',
            'YouTube Page Design',
            'Google+ Page Design',
            'All Final File Formats',
            'Dedicated Account Manager',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
 
        ];



        $orderCategory = 'order.branding';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function corporateCombo(){
               $metas = [ "Corporate Combo Package | Brand development agency | Design Proficient" , "This package is suitable for mega corporations looking for an all in one brand package."];

       $subherocontent = [ 'Corporate All-In-One Branding Solutions For Super-Sized Corporations' ];

        $body = [
            'Corporate Combo Package',
            'There’s a difference between a corporation and a business; the difference is eye for perfection. The Corporate Combo Package is tailor made for globally widespread corporations looking for a change in their branding solutions. The corporate combo package creates maximum results for a mega corporation looking for brand revamp.',
            'This package is suitable for mega corporations looking for an all in one brand package. '
        ];
        
        $box = [
            'Corporate Combo',
            'Suitable for potential super-startups and brand revamps for companies.',
            '3,988.00',
            '1,994.00'
        ];

        $list = [
            'Unlimited Logo Concepts',
            '8 Dedicated Designers',
            'Icon Design',
            '2 Free Custom Stationary Designs',
            'MS Word Letterhead',
            'Invoice Design',
            'Product Catalog Design',
            'Unlimited Pages Website',
            'Conceptual and Dynamic Website',
            'Content Management System (CMS)',
            'Easy Product Search',
            'Product Reviews',
            'Unlimited Products',
            'Unlimited Categories',
            'Promotional Product Showcase',
            'New Product Showcase',
            'Full Shopping Cart Integration',
            'Payment Module Integration',
            'Sales & Inventory Management',
            'Custom Forms',
            'Lead Capturing Forms (Optional)',
            'Newsfeed Integration',
            'Social Media Integration',
            'Search Engine Submission',
            'Team of Dedicated Designers, Developers and Brand Experts',
            '20 Stock images',
            '6 Unique Banner Designs',
            'jQuery Slider',
            'Free Google Friendly Sitemap',
            'Complete W3C Certified HTML',
            'Facebook Page Design',
            'Twitter Page Design',
            'YouTube Page Design',
            'Google+ Page Design',
            'Pinterest Page Design',
            'All Final File Formats',
            'Dedicated Account Manager',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
 
        ];



        $orderCategory = 'order.branding';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/




public function eliteCombo(){
               $metas = [ "Elite Combo Package | Brand development Services" , "This package is suitable for world class brands looking for an all in one brand package."];

       $subherocontent = [ 'Best In Class Brand Development Solutions For Elite Businesses' ];

        $body = [
            'Elite Combo Package',
            'The best in class always prefer the best in branding. The Elite Combo package is just what you need to remain the best in class for your branding solutions. From logo design to icon design, we’re here to change the way you look in a professional manner. Get yourself the elite combo package today.',
            'This package is suitable for world class brands looking for an all in one brand package. '
        ];
        
        $box = [
            'Elite Combo',
            'Suitable for potential super-startups and brand revamps for companies.',
            '7,388.00',
            '4,999.00'
        ];

        $list = [
            'Complete Custom Design & Development',
            'Any One: Dating Portal, Job Portal, Professional Network, Social Network, Media Portal (Photos/Video)',
            'Client/User Dashboard Area',
            'Custom Coding',
            'Custom PHP Development',
            'Content Management System (CMS)',
            'Online Appointment/Scheduling/Online Ordering Integration (Optional)',
            'Online Payment Integration (Optional)',
            'Multi Lingual (Optional)',
            'Custom Dynamic Forms (Optional)',
            'Signup Area (For Newsletters, Offers etc.)',
            'Search Bar',
            'Live Feeds of Social Networks integration (Optional)',
            'Mobile Responsive Web',
            'Search Engine Submission',
            'Module-wise Architecture',
            'Extensive Admin Panel',
            'Award Winning Team of Expert Designers and Developers',
            'Complete Deployment',
            '100% Custom Designs - No Templates',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
 
        ];



        $orderCategory = 'order.branding';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/


public function webcontentpackage(){
               $metas = [ "Web Content Package | Content Creation Agency | Design Proficient" , "desc"];

       $subherocontent = [ 'Unique Web Content Solutions For Businesses.' ];

        $body = [
            'Web Content Package',
            'TEXT IN BOLD',
            'PARAGRAPH'
        ];
        
        $box = [
            'Web Content Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '70.00',
            null
        ];

        $list = [
            '250 Words per Page',
            'Timely Delivery',
            'Superior Standard Content',
            'Professional Industry Specific Writers',
            '100% Satisfaction Guarantee',
            '100% Money Back Guarantee *'
            
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function articlewritingpackage(){
               $metas = [ "Article Writing Package | Content creation agency| Design Proficient" , "desc"];

       $subherocontent = [ 'Fresh Article writing packages for brands' ];

        $body = [
            'Article Writing Package',
            'For stores that are looking for world class ecommerce development solutions, this is just the package! The Ecommerce elite package is currently the best package in terms of ecommerce design and development that we have. The package includes the best features for your ecommerce store and that too complete to the very core.',
            'This package is suitable for monster sized e-stores looking for exceptional e-commerce solutions.'
        ];
        
        $box = [
            'Article Writing Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '40.00',
            null
        ];

        $list = [
            '300 Words per Page',
            'Timely Delivery',
            'Superior Standard Content',
            'Professional Writers',
            '100% Satisfaction Guarantee',
            '100% Money Back Guarantee*',
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function creativewritingpackage(){
               $metas = [ "Ecommerce Elite Package | Web Solutions | Design Proficient" , "This package is suitable for monster sized e-stores looking for exceptional e-commerce solutions."];

       $subherocontent = [ 'World Class Ecommerce Solutions For World Class E-Stores.' ];

        $body = [
            'Ecommerce Elite Package',
            'For stores that are looking for world class ecommerce development solutions, this is just the package! The Ecommerce elite package is currently the best package in terms of ecommerce design and development that we have. The package includes the best features for your ecommerce store and that too complete to the very core.',
            'This package is suitable for monster sized e-stores looking for exceptional e-commerce solutions.'
        ];
        
        $box = [
            'Ecommerce Elite Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '7,388.00',
            '3,694.00'
        ];

        $list = [
            'UNLIMITED Logo Design Concepts',
            'By 6 Award Winning Designers',
            'Icon Design',
            'UNLIMITED Revisions',
            'Print Media',
            'Stationary Design (BusinessCard,Letterhead & Envelope)',
            'Invoice Design, Email Signature',
            'Bi-Fold Brochure (OR) 2 Sided Flyer Design',
            'Product Catalog Design',
            'Sign age Design (OR) Label Design',
            'T-Shirt Design (OR) Car Wrap Design',
            'Website',
            'E-Commerce Store Design',
            'Product Detail Page Design',
            'Unique Banner Slider',
            'Featured Products Showcase',
            'Full Shopping Cart Integration',
            'Unlimited Products',
            'Unlimited Categories',
            'Product Rating & Reviews',
            'Easy Product Search',
            'Multi-currency SupportPayment Gateway Integration',
            'Multi-currency Support',
            'Content Management System',
            'Cutomer Log-in Area',
            'Mobile Responsive',
            'Social Media Plugins Integration',
            'Tell a Friend Feature',
            'Social Media Pages',
            'Facebook , Twitter, YouTube, Google+ & Pinterest Page Designs',
            'Value Added Services',
            'Dedicated Account Manager',
            'Unlimited Revisions',
            'All Final File Formats',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
            
                
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function blogwritingpackage(){
               $metas = [ "Ecommerce Elite Package | Web Solutions | Design Proficient" , "This package is suitable for monster sized e-stores looking for exceptional e-commerce solutions."];

       $subherocontent = [ 'World Class Ecommerce Solutions For World Class E-Stores.' ];

        $body = [
            'Ecommerce Elite Package',
            'For stores that are looking for world class ecommerce development solutions, this is just the package! The Ecommerce elite package is currently the best package in terms of ecommerce design and development that we have. The package includes the best features for your ecommerce store and that too complete to the very core.',
            'This package is suitable for monster sized e-stores looking for exceptional e-commerce solutions.'
        ];
        
        $box = [
            'Ecommerce Elite Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '7,388.00',
            '3,694.00'
        ];

        $list = [
            'UNLIMITED Logo Design Concepts',
            'By 6 Award Winning Designers',
            'Icon Design',
            'UNLIMITED Revisions',
            'Print Media',
            'Stationary Design (BusinessCard,Letterhead & Envelope)',
            'Invoice Design, Email Signature',
            'Bi-Fold Brochure (OR) 2 Sided Flyer Design',
            'Product Catalog Design',
            'Sign age Design (OR) Label Design',
            'T-Shirt Design (OR) Car Wrap Design',
            'Website',
            'E-Commerce Store Design',
            'Product Detail Page Design',
            'Unique Banner Slider',
            'Featured Products Showcase',
            'Full Shopping Cart Integration',
            'Unlimited Products',
            'Unlimited Categories',
            'Product Rating & Reviews',
            'Easy Product Search',
            'Multi-currency SupportPayment Gateway Integration',
            'Multi-currency Support',
            'Content Management System',
            'Cutomer Log-in Area',
            'Mobile Responsive',
            'Social Media Plugins Integration',
            'Tell a Friend Feature',
            'Social Media Pages',
            'Facebook , Twitter, YouTube, Google+ & Pinterest Page Designs',
            'Value Added Services',
            'Dedicated Account Manager',
            'Unlimited Revisions',
            'All Final File Formats',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
            
                
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/

public function infographicspackages(){
               $metas = [ "Ecommerce Elite Package | Web Solutions | Design Proficient" , "This package is suitable for monster sized e-stores looking for exceptional e-commerce solutions."];

       $subherocontent = [ 'World Class Ecommerce Solutions For World Class E-Stores.' ];

        $body = [
            'Ecommerce Elite Package',
            'For stores that are looking for world class ecommerce development solutions, this is just the package! The Ecommerce elite package is currently the best package in terms of ecommerce design and development that we have. The package includes the best features for your ecommerce store and that too complete to the very core.',
            'This package is suitable for monster sized e-stores looking for exceptional e-commerce solutions.'
        ];
        
        $box = [
            'Ecommerce Elite Package',
            'Suitable for potential super-startups and brand revamps for companies.',
            '7,388.00',
            '3,694.00'
        ];

        $list = [
            'UNLIMITED Logo Design Concepts',
            'By 6 Award Winning Designers',
            'Icon Design',
            'UNLIMITED Revisions',
            'Print Media',
            'Stationary Design (BusinessCard,Letterhead & Envelope)',
            'Invoice Design, Email Signature',
            'Bi-Fold Brochure (OR) 2 Sided Flyer Design',
            'Product Catalog Design',
            'Sign age Design (OR) Label Design',
            'T-Shirt Design (OR) Car Wrap Design',
            'Website',
            'E-Commerce Store Design',
            'Product Detail Page Design',
            'Unique Banner Slider',
            'Featured Products Showcase',
            'Full Shopping Cart Integration',
            'Unlimited Products',
            'Unlimited Categories',
            'Product Rating & Reviews',
            'Easy Product Search',
            'Multi-currency SupportPayment Gateway Integration',
            'Multi-currency Support',
            'Content Management System',
            'Cutomer Log-in Area',
            'Mobile Responsive',
            'Social Media Plugins Integration',
            'Tell a Friend Feature',
            'Social Media Pages',
            'Facebook , Twitter, YouTube, Google+ & Pinterest Page Designs',
            'Value Added Services',
            'Dedicated Account Manager',
            'Unlimited Revisions',
            'All Final File Formats',
            '100% Ownership Rights',
            '100% Satisfaction Guarantee',
            '100% Unique Design Guarantee',
            '100% Money Back Guarantee *'
            
                
 
        ];



        $orderCategory = 'order.media';  /* orderlogo | orderweb | OrderNow */

        return view('package', compact('metas','body','box','list','orderCategory', 'subherocontent'));
    }

/********************************************/


/********************************************/


}
