@extends('layout.master')

@section('body')
<style type="text/css">
  
.secondary-nav-wrap{ display: none; }
    header .logo a { background-position: bottom center;   }
    .call-action span{ color: #16a085; }
    .call-action span small{ color: #626262; }
    .nav-toggle{ opacity: 0.3; }

    .hero-services {
      background: url( '{{ asset("none") }}' );
      background-size: auto !important;
    height:auto;
    background-color:#fff !important;
    }

    #header-sroll{ background-color: #fff;     box-shadow: 1px -10px 26px #b7b7b7; }


    


header #header-sroll ul#navigation li a {color: #888888; opacity: 1;  -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}

header #header-sroll .call-action span {color: #2c2c2c;   -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}

header #header-sroll .call-action span small {color: #888888;   -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}

header #header-sroll .call-action a {color: #888888;  -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;}


header #header-sroll .nav-toggle span, header #header-sroll .nav-toggle span:before, header #header-sroll .nav-toggle span:after{    background: #631a79;}

#header-sroll.small .nav-toggle span, #header-sroll.small .nav-toggle span:before, #header-sroll.small .nav-toggle span:after{background: #631a79;}
</style>
<div class="section-padding portfolio_fold">
  <section class="padding-section privacyPolicy breakdown-dot">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="margin-bottom-20">
            <h3>About The Policy</h3>
            <p>At designproficient, the privacy of our clients is our top priority on <a href="www.designproficient.com" target="_blank">www.designproficient.com </a> and we respect it as our own. Though we collect information from our clients, it is only used to make improvements in our customer services. Our company acknowledges that the maintenance and use of our clients' information is our responsibility. We DO NOT rent or sell the information that our clients provide us online.</p>
<p>This policy describes how the personal information of our client collected by us is used, why we collect it, and how we use it. It is within our policy that we describe the choices you can make about how we can collect and use your information</p>
          </div>
          <div class="margin-bottom-20">
            <h3>Personal Information Collected</h3>
            <p>The information collected by designproficient includes the client's name, e-mail, mailing address and phone number. These are pieces of information that the client provides us while ordering or while saving the information with our company. We may also use the email addresses or mailing addresses which we receive through our mailing system such as our Contact Us Form for responding to comments, queries etc.</p>
            <p>Our company also maintains records of the items, which have interested our clients in the past, as well as the client's purchases online.</p>
          </div>
          
          
          <div class="margin-bottom-20">
            <h3>Use of Collected Data</h3>
            <p>The information collected is used in many diversified methods. Our company uses the information saved by our clients to process their order. We also send them e-mails to confirm the order and our customer services may also contact them via phone, mailing address or e-mail if our company has other queries regarding the order placed.</p>
             <p>As a client, one might also receive updates regarding our site and services which may include a newsletter and information on promotions. In addition, we may also use the information about your interests and purchases to help our company improve our site design and the client's purchasing experience.</p>
          </div>
          
          <!--<div class="margin-bottom-20">
        
        <h3>3rd Party Sharing</h3>
        <p>Personal information will NOT be released to third parties unless as described in this policy. There are no circumstances under</p>
<p>which we sell personal information to third parties.</p>


<p>We use credit card processing companies to bill you for services. These companies do not retain, share, store or use personally identifiable information for any other purposes. We also use Live Person to provide live customer support chat on our website. These companies are authorized to use your personal information only as necessary to provide these services to us.</p>




      </div>-->
          
          <div class="margin-bottom-20">
            <h3>Newsletter Opt-out</h3>
            <p>If you no longer wish to receive our newsletter and promotional communications, you may opt-out of receiving them by following the instructions included in each newsletter or communication or by emailing us at Or calling us at 1-866-978-6636.</p>
          </div>
          <div class="margin-bottom-20">
            <h3>Social Media (Features) and Widgets</h3>
            <p>Our Web site includes Social Media Features, such as the Facebook Like button [and Widgets, such as the Share this button or interactive mini-programs that run on our site]. These Features may collect your IP address, which page you are visiting on our site, and may set a cookie to enable the Feature to function properly. Social Media Features and Widgets are either hosted by a third party or hosted directly on our Site. Your interactions with these Features are governed by the privacy policy of the company providing it.</p>
          </div>
          <div class="margin-bottom-20">
            <h3>3rd Party Sharing</h3>
            <p>Personal information will NOT be released to third parties unless as described in this policy. There are no circumstances under<p>
            <p>which we sell personal information to third parties.</p>
            <p>We use credit card processing companies to bill you for services. These companies do not retain, share, store or use personally identifiable information for any other purposes. We also use Live Person to provide live customer support chat on our website. These companies are authorized to use your personal information only as necessary to provide these services to us.</p>
          </div>
          <div class="margin-bottom-20">
            <h3>Security of Personal Information</h3>
            <p>The information of our clients is secure, as it is protected during transmission by the use of the Secure Sockets Layer (SSL) Software which encrypts the information the client puts in.</p>
            
<p>We follow generally accepted industry standards to protect the personal information submitted to us, both during transmission and once we receive it. No method of transmission over the Internet, or method of electronic storage, is 100% secure, however. Therefore, while we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security.</p>
            <p>If you have any questions about security on our Web site, you can send email us at <a href="mailto:support@designproficient.com">support@designproficient.com</a></p>
          </div>
          <div class="margin-bottom-20">
            <h3>Access of Registered Accounts</h3>
            <p>The client can access their registered accounts by signing in on our homepage. Once signed in, the client has access to their previous lists and information that they have already submitted to the site. The users are able to update their information once they have logged in to their accounts by clicking My Account.</p>
          </div>
          <div class="margin-bottom-20">
            <h3>Changing & Deleting/Unsubscribing Accounts</h3>
            <p>The client has to send in an email to request the cancellation of subscription or request to have their personal information deleted. This shall prevent the user from receiving e-mails communication relating to any online order they might have placed at the site.</p>
            <p>We will retain your information for as long as your account is active or as needed to provide you services. Please contact us if you wish to cancel your account or request that we no longer use your information to provide you services. We will retain and use your information as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements.</p>
          </div>
          <div class="margin-bottom-20">
            <h3>Cookies and Their Use</h3>
            <p>Cookies are alphanumeric identifiers that are transferred to the clients' hard drives through their Web browsers. This enables our systems to recognize the clients' browsers and storage of items in their Shopping Carts during visits.</p>
            <p>The Help portion of the toolbar on most browsers will be more helpful in explaining how to prevent the browser from accepting new cookies, how to have the browser notify the user when a new cookie is received, or how to disable cookies altogether. However, cookies allow you to take full advantage of the top features at our site, and our company's personal recommendation is that the client leaves them to be accepted.</p>
            <p>Second, we keep track of your IP address to help diagnose problems with our server and to administer our Web site. Your IP address is also used to gather broad demographic information about you, such as your location and your Internet service provider. We may also collect combined information on how our users are utilizing the site. This might include information regarding traffic patterns through the site and search queries. No IP address/log file information is tied to Personally Identifiable Information (PII).</p>
            <p>Third, we log browser types, access times, URLs from which visitors came to our site and URLs viewed by visitors while on our site. Except as otherwise stated in this Privacy Policy, we do not provide this information to third parties, except in combined form.</p>
            <p>The use of cookies by our partners, affiliates, tracking utility company, service providers is not covered by our privacy statement. We do not have access or control over these cookies. Our partners, affiliates, tracking utility company, service providers use session ID cookies to make it easier for you to navigate our site.</p>
          </div>
          <div class="margin-bottom-20">
            <h3>Clear Gifs (Web Beacons/Web Bugs)</h3>
            <p>We employ a software technology called clear gifs (a.k.a. Web Beacons/Web Bugs), that help us better manage content on our site by informing us what content is effective. Clear gifs are tiny graphics with a unique identifier, similar in function to cookies, and are used to track the online movements of Web users. In contrast to cookies, which are stored on a user's computer hard drive, clear gifs are embedded invisibly on Web pages and are about the size of the period at the end of this sentence. We do not tie the information gathered by clear gifs to our customers' personally identifiable information.</p>
          </div>
          <div class="margin-bottom-20">
            <h3>Testimonials</h3>
            <p>With your consent we may post your testimonial along with your name. If you want your testimonial removed please contact us.</p>
          </div>
          
          <div class="margin-bottom-20">
            <h3>Links to Other Web Sites</h3>
            <p>Our Site includes links to other Web sites whose privacy practices may differ from those of ours. If you submit personal information to any of those sites, your information is governed by their privacy statements. We encourage you to carefully read the privacy statement of any Web site you visit.</p>
          </div>
          
          <div class="margin-bottom-20">
            <h3>Notification of the Changes in Privacy Policy</h3>
            <p>If we decide to change our privacy policy, we will post those changes to this privacy statement, the homepage, and other places we deem appropriate so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it. We reserve the right to modify this privacy statement at any time, so please review it frequently. If we make material changes to this policy, we will notify you here, by email, or by means of a notice on our homepage before the change takes effect.</p>
          </div>
          <div class="margin-bottom-20">
            <h3>Legal Disclaimer</h3>
            <p>We reserve the right to disclose your personally identifiable information as required by law and when we believe that disclosure is necessary to protect our rights and/or comply with a judicial proceeding, court order, or legal process served on our Web site.</p>
          </div>
          <div class="margin-bottom-20">
            <h3>Questions</h3>
            <p>If you have any questions regarding our Privacy Policy or our use of your information, call our toll free number (1-866-978-6636) or email us on <a href="mailto:support@designproficient.com">support@designproficient.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@section('footer')
  @parent
@stop



@stop 