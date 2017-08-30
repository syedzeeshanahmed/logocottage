<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as'=> 'home' , 'uses'=> function () {
    return view('index');
}]);

Route::get(  '/services', ['as'=> 'services' , 'uses'=> function () {
    return view('services');
}]);

Route::get('/contact', ['as'=> 'contact' , 'uses'=> function () {
    return view('contact');
}]);

Route::get('/about', ['as'=> 'about' , 'uses'=>  function () {
    return view('about');
}]);

Route::get('/showcase', ['as'=> 'portfolio' , 'uses'=> function () {
    return view('portfolio');
}]);

Route::get('/combo-packages', ['as'=> 'ComboPackages' , 'uses'=> function () {
    return view('combopackages');
}]);

Route::get('/custom-packages', ['as'=> 'custom-packages' , 'uses'=> 'CustomPackages@index']);

Route::resource( 'customPackages' , 'CustomPackages');

Route::get('/Membership-Plans', ['as'=> 'membershipplans' , 'uses'=> function () {
    return view('membershipplans');
}]);

Route::get('/privacy-policy', ['as'=> 'privacy-policy' , 'uses'=> function () {
    return view('privacy-policy');
}]);

Route::get('/terms', ['as'=> 'term' , 'uses'=> function () {
    return view('terms');
}]);

Route::get('/logo-design', ['as'=> 'service.logodesign' , 'uses'=> 'Subservices@logo']);
Route::get('/marketing', ['as'=> 'marketing.logodesign' , 'uses'=> 'Subservices@logoMarketing']);

Route::get('/Get-a-Free-Quote', ['as'=> 'ShareYourIdea' , 'uses'=> function () {
    return view('shareyouridea');
}]);

Route::get('/OrderNow/{package}/{price}', ['as'=> 'OrderNow' , 'uses'=> function ($package, $price) {
    $info = [ 'pkg'=> $package, 'price'=> $price ];
    return view('ordernow', compact('info'));
}]);


// Route::post('/place', ['as'=> 'order.place' , 'uses'=> 'Order@place']);



/* Routes for design requirements */
Route::post('/requirement-logo', ['as'=> 'requirement.logo' , 'uses'=> 'Requirements@logo']);
Route::post('/requirement-web', ['as'=> 'requirement.web' , 'uses'=> 'Requirements@web']);


/* logo package route */
Route::get('/package/Basic-Logo-Package', [ 'as'=> 'package.balp' , 'uses'=> 'Packages@basicLogoPackage' ]);
Route::get('/package/Startup-Logo-Package', [ 'as'=> 'package.slp' , 'uses'=> 'Packages@startupLogoPackage' ]);
Route::get('/package/Professional-Logo-Package', [ 'as'=> 'package.pl' , 'uses'=> 'Packages@professionalLogo' ]);
Route::get('/package/Elite-Logo-Package', [ 'as'=> 'package.elp' , 'uses'=> 'Packages@eliteLogoPackage' ]);
Route::get('/package/Business-Logo-Package', [ 'as'=> 'package.blp' , 'uses'=> 'Packages@businessLogoPackage' ]);
Route::get('/package/Gold-Logo-Package', [ 'as'=> 'package.glp' , 'uses'=> 'Packages@goldLogoPackage' ]);
Route::get('/package/Basic-Illustrative-Logo-Package', [ 'as'=> 'package.bilp' , 'uses'=> 'Packages@basicIllustrativeLogoPackage' ]);
Route::get('/package/Startup-Illustrative-Logo-Package', [ 'as'=> 'package.slip' , 'uses'=> 'Packages@startupIllustrativeLogoPackage' ]);

Route::get('/package/Professional-Illustrative-Package', [ 'as'=> 'package.pip' , 'uses'=> 'Packages@professionalIllustrativePackage' ]);
Route::get('/package/3D-Logo-Package', [ 'as'=> 'package.imgp' , 'uses'=> 'Packages@interactivemotiongraphicpackage' ]);
Route::get('/package/Start-Up-Website-Package', [ 'as'=> 'package.suw' , 'uses'=> 'Packages@startUpWebsite' ]);
Route::get('/package/Basic-Website-Package', [ 'as'=> 'package.bw' , 'uses'=> 'Packages@basicWebsite' ]);
Route::get('/package/Professional-Website-Package', [ 'as'=> 'package.pw' , 'uses'=> 'Packages@professionalWebsite' ]);
Route::get('/package/Elite-Website-Package', [ 'as'=> 'package.ew' , 'uses'=> 'Packages@eliteWebsite' ]);
Route::get('/package/Silver-Website-Package', [ 'as'=> 'package.swp' , 'uses'=> 'Packages@silverWebsitePackage' ]);
Route::get('/package/Collateral-Startup-Package', [ 'as'=> 'package.cs' , 'uses'=> 'Packages@collateralStartup' ]);
Route::get('/package/Collateral-Classic-Package', [ 'as'=> 'package.cc' , 'uses'=> 'Packages@collateralClassic' ]);
Route::get('/package/Collateral-Premium-Package', [ 'as'=> 'package.cp' , 'uses'=> 'Packages@collateralPremium' ]);
Route::get('/package/Collateral-Unlimited-Package', [ 'as'=> 'package.cu' , 'uses'=> 'Packages@collateralUnlimited' ]);
Route::get('/package/E-Commerce-Startup-Package', [ 'as'=> 'package.ecs' , 'uses'=> 'Packages@eCommerceStartup' ]);
Route::get('/package/E-Commerce-Professional-Package', [ 'as'=> 'package.ecp' , 'uses'=> 'Packages@eCommerceProfessional' ]);
Route::get('/package/E-Commerce-Elite-Package', [ 'as'=> 'package.ece' , 'uses'=> 'Packages@eCommerceElite' ]);
Route::get('/package/Video-Startup-Package', [ 'as'=> 'package.vs' , 'uses'=> 'Packages@videoStartup' ]);
Route::get('/package/Video-Classic-Package', [ 'as'=> 'package.vc' , 'uses'=> 'Packages@videoClassic' ]);
Route::get('/package/Video-Premium-Package', [ 'as'=> 'package.vp' , 'uses'=> 'Packages@videoPremium' ]);
Route::get('/package/Video-Unlimited-Package', [ 'as'=> 'package.vu' , 'uses'=> 'Packages@videoUnlimited' ]);
Route::get('/package/Social-StartUp-Package', [ 'as'=> 'package.ss' , 'uses'=> 'Packages@socialStartUp' ]);
Route::get('/package/Social-Classic-Package', [ 'as'=> 'package.sc' , 'uses'=> 'Packages@socialClassic' ]);
Route::get('/package/Social-Premium-Package', [ 'as'=> 'package.sp' , 'uses'=> 'Packages@socialPremium' ]);
Route::get('/package/Social-Unlimited-Package', [ 'as'=> 'package.su' , 'uses'=> 'Packages@socialUnlimited' ]);
Route::get('/package/Basic-Combo-Package', [ 'as'=> 'package.bc' , 'uses'=> 'Packages@basicCombo' ]);
Route::get('/package/Start-Up-Combo-Package', [ 'as'=> 'package.suc' , 'uses'=> 'Packages@startUpCombo' ]);
Route::get('/package/Professional-Combo-Package', [ 'as'=> 'package.pc' , 'uses'=> 'Packages@professionalCombo' ]);
Route::get('/package/Corporate-Combo-Package', [ 'as'=> 'package.coc' , 'uses'=> 'Packages@corporateCombo' ]);
Route::get('/package/Elite-Combo-Package', [ 'as'=> 'package.elc' , 'uses'=> 'Packages@eliteCombo' ]);

Route::get('/package/Web-Content-Package', [ 'as'=> 'package.wcp' , 'uses'=> 'Packages@webcontentpackage' ]);
Route::get('/package/Article-Writing-Package', [ 'as'=> 'package.awp' , 'uses'=> 'Packages@articlewritingpackage' ]);
Route::get('/package/Creative-Writing-Package', [ 'as'=> 'package.cwp' , 'uses'=> 'Packages@creativewritingpackage' ]);
Route::get('/package/Blog-Writing-Package', [ 'as'=> 'package.bwp' , 'uses'=> 'Packages@blogwritingpackage' ]);
Route::get('/package/Infographics-Packages', [ 'as'=> 'package.ip' , 'uses'=> 'Packages@infographicspackages' ]);




Route::get('/package/Startup-SEO-Package', [ 'as'=> 'package.sep' , 'uses'=> 'Packages@StartupSEOPackages' ]);
Route::get('/package/SEO-Identity-Packages', [ 'as'=> 'package.sip' , 'uses'=> 'Packages@SEOIdentityPackages' ]);
Route::get('/package/Elite-SEO-Packages', [ 'as'=> 'package.esp' , 'uses'=> 'Packages@EliteSEOPackages' ]);


Route::get('/theme', ['as'=> 'theme' , 'uses'=> function () {
    return view('themetester');
}]);


Route::get('/blog', ['as'=> 'blog' , 'uses'=> function () {
    return view('blog');
}]);

Route::get('/package/business-bundle-package', ['as'=> 'package.logo' , 'uses'=> function () {
    return view('package-logo');
}]);

Route::get('/package/elite-web-package', ['as'=> 'package.web' , 'uses'=> function () {
    return view('package');
}]);

Route::get('/package/elite-sensation', ['as'=> 'package.sens' , 'uses'=> function () {
    return view('package-sensational');
}]);

Route::get('/package/ecommerce-elite', ['as'=> 'package.ecom' , 'uses'=> function () {
    return view('package-ecommerce');
}]);

/* Packages Routing begin */ 

    Route::get('/packages/{tab?}', ['as'=> 'packages' , 'uses'=> function ($tab = 'logo') {
        $content = [
            'hero-h4' => 'LS Packages',
            'hero-h3' => 'Handcrafted Brand Development Packages <br> by Industry Proven Experts',
            'hero-p'  => 'Our Experts and Industry proven professionals love to provide you with <br> the best services and solutions at the best price. <br> From big packages to small ones and even custom made packages,  <br> we’ve got the perfect sets of packages that suit everyone.'
        ];

        if($tab=="logo") { $tab=1; }
         else if($tab=="web") { $tab=2; } 
        else if($tab=="branding") { $tab=3; } 
         else if($tab=="ecommerce") { $tab=4; } 
        else if($tab=="motion-graphic") { $tab=5; }
        else if($tab=="seo") { $tab=6; }
        else if($tab=="social") { $tab=7; }
        else if($tab=="content") { $tab=8; }

        return view('packages' , compact('content', 'tab'));
    }]);

/* Packages Routing ends */ 



Route::get('/services/Brand-Development', ['as'=> 'service.brand' , 'uses'=>  'Subservices@identity']);


Route::get('/web', ['as'=> 'service.web' , 'uses'=>  'Subservices@web']);


Route::get('/services/Back-End-Development', ['as'=> 'service.backend' , 'uses'=> 'Subservices@backend']);


Route::get('/services/Motion-Graphics', ['as'=> 'service.motiongraphics' , 'uses'=>  'Subservices@motion']);


Route::get('/services/Digital-Marketing', ['as'=> 'service.marketing' , 'uses'=>  'Subservices@digital']);



Route::get('/services/Marketing-Collateral', ['as'=> 'service.productdesign' , 'uses'=>  'Subservices@digital']);
Route::get('/services/Digital-cont', ['as'=> 'service.contentdevelopment' , 'uses'=>  'Subservices@digital']);




Route::get('/services/Marketing-Collateral', ['as'=> 'service.collateral' , 'uses'=>  'Subservices@collateral']);
Route::get('/services/Website-Management', ['as'=> 'service.management' , 'uses'=>  'Subservices@management']);
Route::get('/services/Domain-Registration', ['as'=> 'service.domain' , 'uses'=>  'Subservices@domain']);
Route::get('/services/Creative-Copywriting', ['as'=> 'service.copywriting' , 'uses'=>  'Subservices@copywriting']);
Route::get('/services/2D-&-3D-illustration', ['as'=> 'service.illustration' , 'uses'=>  'Subservices@illustration']);

Route::get('/services/App-Design-and-Development', ['as'=> 'service.app' , 'uses'=>  'Subservices@app']);




Route::get('/GetFreeConsultancy', ['as'=> 'GetFreeConsultancy' , 'uses'=> function () {
    return view('getquote');
}]);

Route::get('/thank-you', ['as'=> 'thankyou' , 'uses'=> function () {
    return view('thankyou');
}]);


Route::get('/ns/c', ['as'=> 'ns.c' , 'uses'=> function () {
    return view('mails_layout.newsletter_contact');
}]);


Route::get('/ns/stake', ['as'=> 'ns.st' , 'uses'=> function () {
    return view('mails_layout.notification-custom-order');
}]);


Route::get('/ns/n', ['as'=> 'ns.c' , 'uses'=> function () {
    return view('mails_layout.newsletter_new');
}]);


Route::get('/ns/s', ['as'=> 'ns.s' , 'uses'=> function () {
    return view('mails_layout.newsletter_subscribe');
}]);


Route::post('/mail', [ 'as'=> 'mail.send' , 'uses'=> 'Mailer@mail_quote' ]);

Route::get('/ns/flat', ['as'=> 'ns.s' , 'uses'=> function () {
    return view('mails_layout.plain');
}]);



/*  New routes  */



Route::post('user/dashboard', ['as'=>'user.login', 'uses'=>'Users@login']);
Route::get('user/panel', ['as'=>'user.profile', 'uses'=>'Users@toProfile']);
Route::get('user/logout', ['as'=>'user.logout', 'uses'=>'Users@logout']);

Route::get('user/review', ['as'=>'user.review', 'uses'=>'Users@review']);
Route::get('user/verify/{id}/{hash}', ['as'=>'user.verify', 'uses'=>'Users@verify'])->where('hash', '(.*)');
Route::post('user/register', ['as'=>'user.register', 'uses'=>'Users@register']);
Route::get('user/create', ['as'=>'user.create', 'uses'=>'Users@create']);

Route::post('user/reset', ['as'=>'user.reset', 'uses'=>'Users@reset']);

Route::get('user/reset/password/{id}/{hash}', ['as'=>'user.reset.password', 'uses'=>'Users@resetPassword'])->where('hash', '(.*)');
Route::post('user/reset/password/save', ['as'=>'user.reset.save', 'uses'=>'Users@savePassword'])->where('hash', '(.*)');

Route::get('/signup', ['as'=> 'user.signup' , 'uses'=> function () {
    return view('register');
}]);


Route::get('/forgot', ['as'=> 'user.forgot' , 'uses'=> function () {
    return view('forgot');
}]);


Route::get('/book-a-call', ['as'=> 'user.book' , 'uses'=> function () {
    return view('book-a-call');
}]);

Route::get('/login', ['as'=> 'login', 'uses'=> function () {
    if( session('is_logged') == 1 ){
        return redirect( route('user.profile') );   
    } else{
        return view('login');    
    }
}]);


Route::get('/thank-you', ['as'=> 'thankyou' , 'uses'=> function () {
    return view('thankyou');
}]);

Route::get('/package/custom', ['as'=> 'package.custom' , 'uses'=> function () {
    return view('custom-quote');
}]);



Route::get('/order/logo/{name?}/{price?}', ['as'=> 'order.logo' , 'uses'=> function ($name, $price) {
    return view('order-logo', compact('name', 'price'));
}]);

Route::get('/order/web/{name?}/{price?}', ['as'=> 'order.web' , 'uses'=> function ($name, $price) {
    return view('order-web', compact('name', 'price'));
}]);

Route::get('/order/branding/{name?}/{price?}', ['as'=> 'order.branding' , 'uses'=> function ($name, $price) {
    return view('order-branding', compact('name', 'price'));
}]);

Route::get('/order/content/{name?}/{price?}', ['as'=> 'order.content' , 'uses'=> function ($name, $price) {
    return view('order-branding', compact('name', 'price'));
}]);

Route::get('/order/combo/{name?}/{price?}', ['as'=> 'order.combo' , 'uses'=> function ($name, $price) {
    return view('order-combo', compact('name', 'price'));
}]);

Route::get('/order/ecommerce/{name?}/{price?}', ['as'=> 'order.ecommerce' , 'uses'=> function ($name, $price) {
    return view('order-ecommerce', compact('name', 'price'));
}]);

Route::get('/order/packagevideo/{name?}/{price?}', ['as'=> 'order.video' , 'uses'=> function ($name, $price) {
    return view('order-packagevideo', compact('name', 'price'));
}]);

Route::get('/order/media/{name?}/{price?}', ['as'=> 'order.media' , 'uses'=> function ($name, $price) {
    return view('order-media', compact('name', 'price'));
}]);


/* Quote form submission */

Route::post('quote/save', ['as'=>'quote.save', 'uses'=>'Quote@save']);
Route::post('quote/short', ['as'=>'quote.save.short' ,'uses'=>'Quote@saveShortQuote']);

/* subscription */

Route::post('/subscribe', [ 'as'=> 'user.subscribe' , 'uses'=> 'Users@Subscribe' ]);

/* Book a call */

Route::post('/call/book', [ 'as'=> 'call.book' , 'uses'=> 'Bookings@book' ]);

/* Requirement forms routes */

Route::post('order/requirements/logo-save', ['as'=>'order.logo.save', 'uses'=>'Requirements@logo']);
Route::post('order/requirements/web-save', ['as'=>'order.web.save', 'uses'=>'Requirements@web']);
Route::post('order/requirements/general-save', ['as'=>'order.general.save', 'uses'=>'Requirements@general']);
Route::post('order/requirements/social-save', ['as'=>'order.social.save', 'uses'=>'Requirements@social']);







Route::get('/user/quotes', [ 'as'=> 'dash.quotes' , 'uses'=> 'User\Quotes@index' ]);
Route::get('/user/packages', [ 'as'=> 'dash.packages' ,  'uses'=> 'User\Packages@index' ]);

Route::get('/user/settings', ['as'=>'user.settings', 'uses'=>'User\Settings@index']);
Route::post('/user/settings/', ['as'=>'user.settings.update', 'uses'=>'User\Settings@update']);
Route::post('/user/password/change', ['as'=>'user.password.change', 'uses'=>'User\Settings@changePassword']);



Route::get('/user/reviews', ['as'=>'dash.reviews', 'uses'=>'User\Reviews@index']);
Route::post('/user/reviews/save', ['as'=>'dash.reviews.save', 'uses'=>'User\Reviews@save']);


Route::get('/user/handovers', ['as'=>'dash.handovers', 'uses'=>'User\Handovers@index']);
Route::get('/user/files', ['as'=>'dash.files', 'uses'=>'User\Files@index']);
Route::get('/user/file/download/{file}', ['as'=>'dash.file.download', 'uses'=>'User\Files@download']);
Route::get('/user/orders', ['as'=>'dash.orders', 'uses'=>'User\Orders@index']);
 


Route::get('/user/custom', [ 'as'=> 'dash.custom' ,  'uses'=> function () {
    return view('user.custom');
}]);


Route::get('/user/membership', [ 'as'=> 'dash.membership', 'uses'=>'User\Membership@index']);



Route::post('/user/membership/apply', [ 'as'=> 'user.membership.apply' , 'uses'=>'Memberships@apply']);





// Route::filter('dashboard',function(){
//     if(session('is_logged')==1){
//         return redirect( route( 'user.profile' ) );
//   } else{
//     return view('login');    
//   }
// });



/*******  Landing pages style rules  ********/

Route::group( [ 'namespace' => 'Landing' ] , function () {
    Route::get('/identity-design', ['as'=> 'marketing.logodesign' , 'uses'=> 'Marketing@logoMarketing']);
    Route::get('/package/Basic-identity-Package', [ 'as'=> 'package.mbalp' , 'uses'=> 'MarketingPackages@basicLogoPackage' ]);
    Route::get('/package/Startup-identity-Package', [ 'as'=> 'package.mslp' , 'uses'=> 'MarketingPackages@startupLogoPackage' ]);
    Route::get('/package/Professional-identity-Package', [ 'as'=> 'package.mpl' , 'uses'=> 'MarketingPackages@professionalLogo' ]);
});







