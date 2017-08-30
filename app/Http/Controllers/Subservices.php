<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Subservices extends Controller
{
    public function identity(){

    	$bannerHeadings = [
	        'Recognized Brand Development Services and Solutions',
	        'Assisting brands and media companies with state of the art brand development solutions that help you stand out'
	    ];	
    	
    	$headings = [
        'Brand Development','Our team of brand development professionals, analysts and design enthusiasts love to tell your brand’s story with the help of impressive brand identity development solutions. We create identities that are evergreen and have the potential to help your brand grow into a revolutionary label. The identities we create aim to leave breadcrumbs on the minds of your targeted audience helping you make an impact that lasts forever. Discuss your brand identity development ideas with us today.'
        ];    
	    $list = [
	        'Stationary Design',
	        'Product Design',
	        'Business Card Design',
	        'Merchandise Design',
	        'Mascot Design',
	        'Logo Design',
	        'Letterhead Design'
	    ];

	     $metas = [ "Get your brand created by the best brand development company" , "We’re a professional brand development agency working excellently to define superb brand development strategies for companies of shapes and sizes.", '/img/Brand-Identity-Development.png' ]; // index 2 containes banner link

	     $packages = 'packages-logo';

	     $portfolio = 'portfolio-web-logo';

	     $process = [
	     	'Discovering what your company really stands for is essential for our brand development analysts. This will be the base of your brand and this is where our analysts focus the most on.',
	     	'If your brand isn’t targeting the right audience, it is pretty much of no use. This is mainly why put pressure on targeting to help your boost your ROI to the very top.',
	     	'Our brand development professionals put their entire focus on measuring what’s new and what isn’t and provide you with results that you need in the end for proper brand analysis.'
	     ];

	     $processHeadings = [
	     	'Discovery',
	     	'Targeting',
	     	'Measurement'
	     ];

	     $processIcon = [
	     	'icon-discovery-brand-process',
	     	'icon-targeting-brand-process',
	     	'icon-measurement-brand-process',
	     ];

	    return view('subservice', compact('list', 'headings', 'metas', 'packages', 'process', 'processIcon','portfolio', 'bannerHeadings', 'processHeadings'));
	}

    public function web(){
        $threeLine=1;
    	$bannerHeadings = [
	        'Next Generation Website Design and Development Solutions',
	        'Helping brands and multinationals all over the world in creating innovative and world class website design services'
	    ];	
    	
	    $headings = [
	        'Web Design and Development',
	        'Web aesthetics are perhaps one of the most important things that we focus on at our website design company
	        when creating a brand that aims to conquer the market. With more than half the population on earth wise enough to be online,
	        it is important to make sure your business is too.',
	        'At Design Proficient, we consider website design as an essential part of the overall online existence.
	        We’re a website design company that focuses on creating gorgeous web user interfaces. We focus on creating
	        website design services that are affordable and attractive. We’re a group of web designers and developers that
	        value top quality design solutions. From Ecommerce website design to corporate web design, there’s nothing our
	        professional website designers can’t handle. As a matter of fact, we constantly train our team of
	        professional website designers for such corporate solutions. Need Ecommerce designers and developers
	        that work dedicatedly on the same project? No problem. Our ecommerce designers and developers are
	        just what you’re looking for.'
	        
	    ];
	    $list = [
	        'Web Interface Design',
	        'User Interface Prototyping',
	        'Back-End Development',
	        'Cross Platform Web Development',
	        'CMS Development',
	        'B2B Portal Development',
	        'Portal Development'
	    ];

	    
	    $metas = [ "Web Design – Custom Web Design Services by Creative Web Designers" , "Our team of professional web designers and web developers provide you with the best creative web development and design services in town. Discuss your project with us today" , '/img/Web-Design-and-Development.png' ];

	    $process = [
	     	'Your web’s interface is perhaps the most essential and most important part of your website. Our web design engineers pay immense importance in creating a conceptual web interface.',
	     	'A brilliant design is essential for the brand but without beautifully embedded functions, it may not impress your customer. Our development team makes sure your website is well-developed.',
	     	'Quality assurance is a key factor that we focus on before we launch the website. Our team of QA experts make sure each bug is removed and your website is in perfect working shape.'
	     ];

	     $processHeadings = [
	     	'Design',
	     	'Development',
	     	'Quality Assurance'
	     ];

	     $processIcon = [
	     	'icon-design-web-process',
	     	'icon-development-web-process',
	     	'icon-quality-web-process',
	     ];

	    $packages = 'packages-web';

	    $portfolio = 'portfolio-web';

	    return view('subservice', compact('list', 'headings', 'metas', 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings','threeLine', 'processHeadings'));

    }



    public function app(){
    	
	    $bannerHeadings = [
	        'Creating beautiful and functional applications',
	        'Assisting several companies worldwide with gorgeous app design and development solutions'
	    ];	

	    $headings = [
	        'Application Design and Development Services' ,'Assisting corporations from every region globally with application design and development solutions. We aim to give unique ideas the shape that they deserve with top notch application design and development solutions being provided globally to entrepreneurs, startups and multinationals. We love working with organizations of all shapes and sizes.'
	    ];

	    $list = [
	        'iOS App Design and Development',
	        'Android App Design and Development',
	        'Windows App Design and Development',
	        'Hybrid App Design and Development',
	        'Application Maintenance Services',
	        'Startup Application Assistance'
	    ];

	    
	    $metas = [ "Get your app design & developed by the best mobile app development Company" , "We’re one of the top app development agencies in the country providing you with ample design and development solutions for your next big app! Reach us today." , '/img/App-Design-and-Development.png' ];

	    $process = [
	     	'Your unique idea is the most important aspect of your application. It defines how different your application is going to be which is why it is the initial step to our process.',
	     	'Designing and developing your idea is the next most important step that we focus on to create an app that stands out from all of its competitors and makes a mark on the audience.',
	     	'Delivering perfection is what our team aims for, mainly why we focus on quality assurance and bug fixes before the final delivery to make sure you get nothing but the best.'
	     ];

	     $processHeadings = [
	     	'Idea',
	     	'Develop',
	     	'Deliver'
	     ];

	     $processIcon = [
	     	'icon-idea-app-process',
	     	'icon-dev-app-process',
	     	'icon-delivery-app-process',
	     ];

	     $portfolio = 'portfolio-app';

	    $packages = 'packages-web';
	    return view('subservice', compact('list', 'headings', 'metas', 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'processHeadings'));
    }



    public function backend(){

    	$bannerHeadings = [
	        'State Of The Art Back End Development Solutions',
	        'Our team of data management engineers and back-end developers provide you with globally acclaimed solutions.'
	    ];	
    	     $headings = [
	        'Back End Development Solutions','Gone are the days when money was the most important asset to any organization. Today, the most important asset of any business is the data that it has gathered. This is where our backend development experts step in providing corporations worldwide working on any scale with data management solutions that help document data in a better more precise manner. Reach us today to discuss our excellent backend development project with our back-end architects today.'
	        ];    
	    $list = [
	        'PHP Development',
	        '.NET Development',
	        'Ruby Development',
	        'Python Development',
	        'Node JS Development'
	    ];

	  
	    $process = [
	     	'Our back-end development experts analyze your data requirements and provide you with a proper break-out plan divided into several different phases for your project.',
	     	'The back-end development process that we follow is perhaps the best in class and this is mainly why we focus on creating something that is solely made for your brand.',
	     	'Testing your newly developed back-end is perhaps the most important step of the process. Our back-end development professionals make sure you get nothing but the best.'
	     ];

	     $processIcon = [
	     	'icon-analysis-back-end-process',
	     	'icon-develop-back-end-process',
	     	'icon-testing-back-end-process',
	     ];

	     $processHeadings = [
	     	'Analysis',
	     	'Develop',
	     	'Testing'
	     ];

	     $portfolio = 'portfolio-random';



	    $metas = [ "Get Back-End Development Services From The Best Back-End Development Company" , "Our back-end development experts and professionals love to make a well-managed back-end solution for your company without you breaking a sweat." , '/img/Back-End-Development.png' ];
	    
	 	$packages = 'packages-web';
	   return view('subservice', compact('list', 'headings', 'metas', 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'processHeadings'));
    	
    }


    public function digital(){

    	$bannerHeadings = [
	        'Top Notch Digital Marketing Solutions For Your Brand',
	        'Our team of social media and digital marketers are globally recognized for the amazing services that they provide.'
	    ];	
    	    $headings = [
	        'Digital Marketing Services','Having an online existence for any brand is extremely essential. However, no matter how big the corporation is and no matter how great its web presence is, if it can’t connect to its customers worldwide then its facing an issue. This is where our proven digital marketing professionals help you out giving you nothing but the best strategically thought-out marketing campaigns. Discuss your marketing goals with our digital marketing professionals today!'
	        ];    
	    $list = [

			'Search Engine Optimization',
			'Search Engine Marketing',
			'Social Media Marketing',
			'Pay-Per-Click Campaigns',
			'Reputation Management'

	    ];

	    $process = [
	     	'Planning out the perfect digital marketing strategy is the first step to many for your brand. Creating a proper marketing plan is where we start from.',
	     	'Measuring and analyzing statistics is what helps our digital marketing experts understand the nature of your brand. Another essential part of our process.',
	     	'Discovering new trends, new audience networks and new potential customers is an effective cycle that always keeps moving.'
	     ];

	     $processIcon = [
	     	'icon-plan-digital-process',
	     	'icon-measure-digital-process',
	     	'icon-discover-digital-process',
	     ];

	     $processHeadings = [
	     	'Plan',
	     	'Measure',
	     	'Discover'
	     ];

	     $portfolio = 'portfolio-random';
		
  		$threeLine=1;

	     $metas = [ "Get Digital Marketing Services From The Best Digital Marketing Agency" , "If you’re not on the first page of Google, you don’t matter! Our team of professional Digital Marketing experts make sure your digital existence is on top.", '/img/Digital-Marketing.png'  ];

	     		$packages = 'packages-social-media';
	   return view('subservice', compact('list', 'headings', 'metas' , 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'threeLine', 'processHeadings'));
    }
	
	
	   public function logo(){

	   	$bannerHeadings = [
	        'Assisting Multinationals With Exceptional Logo Design Services',
	        'Helping you make an excellent and out-of-the-box impression with custom logo design and website design solutions'
	    ];	
    	    $headings = [
	        'Logo Design Solutions',
	        'Making a great impression on the first glance is a sign of excellent customer communication. Looking for logo designers to design logo online? Well,
	        look no further. We’re a logo design company that focuses on the perfect first impression. We’re global, we design logo online and stay connected to
	        clients all over the globe. If you’re seeking a custom logo design, the team at Design Proficient is just what you need. Our team of professional
	        logo designers make your logo and website an identity that makes a mark on the customer’s mind.',
	        
	        'Our team of logo designers and design architects have been working in the field for over a decade. Your logo is a core asset of your identity.
	        This is one of the many reasons why our professional logo designers focus on creating custom logo designs that not only make an immediately amazing
	        first impression, but additionally leave an everlasting stamp on the minds of your targeted audience. We’re a logo design agency that focuses on results
	        that matter which is one of the many reasons why from logo brief collection to final logo design submission, we aim to provide you exceptional logo design services.',

	        
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



	     $metas = [ "Jaw-dropping logo designs by the best logo designers" , "Need a professional logo design? We can make it for you! Our team of creative logo designers provide you with the best logo designs on the web. Reach us now!", '/img/Logo-Designing.png'  ];

	     $packages = 'packages-logo';
	     $portfolio = 'portfolio-logo';

	   return view('subservice', compact('list', 'headings', 'metas', 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'processHeadings'));




    }
	
	
	

    public function collateral(){

    	$bannerHeadings = [
	        'Top in class marketing collateral for companies all over the planet',
	        'Our creative designers provide you with extremely classy marketing collateral that impresses the customer'
	    ];	
    	    $headings = [
	        'Marketing Collateral','Marketing Collateral is an important part of the overall existence of a business. From startups that are on the verge of taking their first step to established organizations, the marketing collateral of the company sets things apart. The perfect marketing collateral allows your company to create an immediate positive impact on your customer. Reach us today to discuss your project one on one with our marketing experts and design masterminds.'
	        ];    
	    $list = [

			'Brochure Design',
			'Infographic Design',
			'Sales Presentation Design',
			'Company Profile Design',
			'Newsletter Design'

	    ];
	    
	    $process = [
	     	'We believe the marketing collateral carries the essence of the company which is solely why we discuss the brief of the document with the client.',
	     	'The design concept is the most important part of the process as however the unique the design gets, the better its results start displaying on ROI.',
	     	'Gorgeously crafted designs are what help us stand apart from our indefinite competition. We believe in results that matter and it has always been that way.'
	     ];

	     $processIcon = [
	     	'icon-brief-collateral-process',
	     	'icon-concept-collateral-process',
	     	'icon-result-collateral-process',
	     ];

	     $processHeadings = [
	     	'Brief',
	     	'Concept',
	     	'Results'
	     ];


	     $metas = [ "Get marketing collaterals designed by the best marketing collateral agency" , "Our creative thinkers create excellent stationary design services to gorgeous marketing collateral design services; we are here to serve you with nothing but the best.", '/img/Marketing-Collateral.png'  ];

		$packages = 'corporate-branding';
	    return view('subservice', compact('list', 'headings', 'metas' , 'packages', 'process', 'processIcon','bannerHeadings', 'processHeadings'));
    }




    public function motion(){

    	$bannerHeadings = [
	        'World Renowned Motion Graphics and Animation Services',
	        'We impress your audience with 3D Animation Videos and Video Animation Services to help you stand a class apart from your competitors'
	    ];	
    	
	        $headings = [
	        'Motion Graphics','Have you ever caught yourself paying more attention on a video documentary over a text thesis? Well, obviously you have. The attention span of a normal human being is less than a goldfish. This is where growing brands need new mediums to convert customers and motion graphics is just the answer. Our animators and graphic design professionals are easily one of the best in the world providing you with a guaranteed increase in conversion rates for your projects with Business Animation Videos.'
	        ];    
	    $list = [
	        '2D/3D Animation',
	        'Explainer Video Development',
	        'Whiteboard Animation Video',
	        'Brand Storytelling Solutions',
	        'Branded Audio Video Production'
	    ];
	    $process = [
	     	'Our team first focuses on listening to what you aim to create and understands the storyline that you have in mind.',
	     	'Our design and motion graphics professionals lay down the complete storyline for motion graphics in order to create something unique.',
	     	'Our animation experts and creative masterminds love to patch up the puzzle pieces to create something really one of a kind.'
	     ];

	     $processIcon = [
	     	'icon-script-motion-process',
	     	'icon-story-motion-process',
	     	'icon-motion-motion-process',
	     ];

	     $processHeadings = [
	     	'Brief',
	     	'Story',
	     	'Motion'
	     ];

	     $portfolio = 'portfolio-motion-graphic';

	     $herovideo = 'motion-video-banner';

	     $metas = [ "Get Motion Graphics Designed By The Best Motion Graphics Agency" , "Our professional animators and creative motion graphics artist create the best explainer videos and animation videos for your business. Contact us today and discuss your project.", '/img/Motion-Graphics.png'  ];
	    
		$packages = 'packages-video';
	    return view('subservice', compact('list', 'headings', 'metas' , 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'processHeadings', 'herovideo'));
    }


        public function management(){

        	$bannerHeadings = [
	        'Managing your existence over the world wide web efficiently',
	        'We help you manage your website enabling you to freely managing your online existence'
	    ];	
    	
	        $headings = [
	        'Website Management','For each corporation connected to its revenue via the World Wide Web, online existence is very important. But hey, what’s the one thing more important? It’s proper management of that very existence. Our Website Management and Maintenance team is trained and qualified enough to provide exceptional web management solutions to websites of all shapes and sizes. Reach us today and discuss your website management issues today.'
	        ];    
	    $list = [
	        'Integration Management',
	        'Back-End Management',
	        'Data Management',
	        'Domain Registration and Management',
	        'Server Management'
	    ];

	    $process = [
	     	'We initially plan out everything that there is for your website that needs to be managed. Our experts analyze everything you need help with on the web.',
	     	'Our website management professionals provide you with the best breakdown of uptime and downtime during management hours to assist your business.',
	     	'Our reporting methods are made for companies that aim for immediate success. Our management officers keep you in the loop of everything that we do.'
	     ];

	     $processIcon = [
	     	'icon-plan-web-manegement-process',
	     	'icon-schedule-web-manegement-process',
	     	'icon-reports-web-manegement-process',
	     ];

	     $processHeadings = [
	     	'Plan',
	     	'Schedule',
	     	'Reports'
	     ];

	     $portfolio = 'portfolio-random';


	     $metas = [ "Get Website Management Services By The Best Web Management Company" , "Managing you web existence can be hard. Lucky for you, our web experts provide you with the best web management services globally. Talk to us today!", '/img/Website-Management.png'  ];
	    		$packages = 'packages-web';

	    return view('subservice', compact('list', 'headings', 'metas' , 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'processHeadings'));
    }



    public function domain(){

    	$bannerHeadings = [
	        'Get Known Easily on the world wide web',
	        'We help you get known over the world wide web with the help of top class domain registration'
	    ];	
    	    $headings = [
	        'Domain Registration','No matter how great your web existence is over the world wide web, if your domain name doesn’t compliment your business enough. A great domain name is easily the biggest investment that you can make to your business and we, at design proficient can help you with that. Register the best domain names in the industry easily in just a few clicks. Reach us today and discover the best domain names that you can possibly get.'
	        ];    
	    $list = [
			'Country based domain names',
			'WHOIS Business Listing',
			'Premium Domain Names',
			'Expired Domain Names',
			'Domain Preregistration'
	    ];
	    
	    $process = [
	     	'Our team asks you for a brief of whatever domain name you have in mind. Our team of professionals also provide you with additional domain suggestions.',
	     	'After you’re done providing us the brief, we give you an excellent list of suggestions from which you can select and book your domain.',
	     	'Right after you’re done choosing your domain, we transfer the domain control to you and provide you the credentials to help it go live.'
	     ];

	     $processIcon = [
	     	'brief-domain-process',
	     	'book-domain-process',
	     	'transfer-domain-process',
	     ];

	     $processHeadings = [
	     	'Brief',
	     	'Book',
	     	'Transfer'
	     ];

	     $oldImgs=1;

	     $portfolio = 'portfolio-random';

	     $metas = [ "Get Cheap Domain Registration Services By The Best Domain Registration Company" , "A great website is nothing without a catchy domain. We help you get the best domains at the web domain prices. Register your website’s domain name today!", '/img/Domain-Registration.png'  ];

		$packages = 'packages-domain';

	    return view('subservice', compact('list', 'headings', 'metas' , 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'processHeadings', 'oldImgs'));
    }




    public function copywriting(){

    	$bannerHeadings = [
	        'Creative Copywriting Solutions For Organizations Worldwide',
	        'We help you create exceptional and attractive copies for all platforms and mediums'
	    ];	
    	    $headings = [
	        'Creative Copywriting','Making compelling copies that convert viewers into customers is what our creative copywriters do best. Great content indulges users but a great copy converts users into customers. Our team of creative copywriters are trained professionals who understand your need from a copy. From advertisements to company brochures, we write amazing and compelling copies that produce results and boost ROI. Talk to us today and tell us about your copywriting needs.'
	        ];    
	    $list = [

	    'Advertisement Copywriting',
		'Digital Marketing Copywriting',
		'Digital Advertisement Copywriting',
		'Keyword Based Copywriting',
		'Sales Pitch & Related Copywriting'

	    ];
	    
	    $process = [
	     	'Copywriting is an art that can’t be properly implemented if research isn’t involved. Our team of copywriting professionals make sure enough marketing research is part of the plan.',
	     	'Our content creation experts don’t rest until the perfect copy makes it to your desk. We make sure the copy written is perfectly placed to create results that are fairly spectacular.',
	     	'After our content curation experts are done with the copy, we focus on delivering nothing but the best laid out copies that you need for your business’s online or offline existence.'
	     ];

	     $processIcon = [
	     	'icon-research-copywriting-process',
	     	'icon-copy-copywriting-process',
	     	'icon-delivery-copywriting-process',
	     ];

	     $processHeadings = [
	     	'Research',
	     	'Copy',
	     	'Delivery'
	     ];

	     $portfolio = 'portfolio-random';

	     $metas = [ "Get Creative Copywriting Done By The Best Copywriting Agency" , "At Design Proficient, our team of professional creative copywriters provide you with top class content writing services. Talk to our content specialists today.", '/img/copywriting.png'  ];

		$packages = 'packages-content';
	    return view('subservice', compact('list', 'headings', 'metas' , 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'processHeadings'));
    }




    public function illustration(){

    	$bannerHeadings = [
	        'Sketching Out Beautiful 2D & 3D Illustrations',
	        'We provide you with gorgeously designed 2D and 3D illustrations for your business'
	    ];	
    	    $headings = [
	        '2D & 3D illustration','Our team of creative professionals specializes in 2D & 3D Illustration for companies that are born to stand out in competition against hundreds and thousands of businesses in the industry. From 3D cartoon animations to 3D industrial illustrations, we’re here to serve you with everything that you need in the industry to succeed. Think you have a project for us? Reach us today and discuss your project in detail today.'
	        ];    
	    $list = [
			'2D and 3D Architectural Illustrations',
			'3D Rendering Services',
			'Sound Design Services',
			'Game Design and Artwork Services',
			'2D and 3D animation Services.'
	    ];
	    
	    $process = [
	     	'We first sketch out the rough 2D and or 3D illustration that the client needs. This is perhaps one of the many reasons why keep the client in loop of everything as well.',
	     	'After the final sketches are approved, we provide the customers with the final illustrations. In case of any revisions, we keep the client in touch to make sure the changes are made properly.',
	     	'After the final file is approved by the client, deliver the final file and provide them with excellent results that leave an excellent impression.'
	     ];

	     $processIcon = [
	     	'icon-sketch-illustration-process',
	     	'icon-illustrate-illustration-process',
	     	'icon-delivery-illustration-process',
	     ];

	     $processHeadings = [
	     	'Sketch',
	     	'Illustrate',
	     	'Delivery'
	     ];

	     $portfolio = 'portfolio-random';


	     $metas = [ "Get 2D & 3D Illustrations from the best graphic designers" , "Our team of professional graphic designers create beautiful 2D and 3D graphic illustrations for your business. Talk to our creative analysts today to discuss your project.", '/img/illustration.png'  ];

		$packages = 'packages-illustration';

		
	    return view('subservice', compact('list', 'headings', 'metas' , 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'processHeadings'));
    }


	
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
        
         $threeLine=1;

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



	     $metas = [ "Logo and Identity Design Services | Brand Identity" , "Transforming and giving birth to newer brands and corporations with brand identity solutions like no other. Come and inquire for a unique logo design today!", '/img/Logo-Designing.png'  ];

	     $packages = 'packages-logo';
	     $portfolio = 'portfolio-logo';

	   return view('marketing', compact('list', 'headings', 'metas', 'packages', 'process', 'processIcon', 'portfolio', 'bannerHeadings', 'processHeadings', 'threeLine'));




    }

    
}
