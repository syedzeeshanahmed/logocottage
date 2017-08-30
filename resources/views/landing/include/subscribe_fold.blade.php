<section class="section-padding text-center subscribe_fold">
<h4 class="wow fadeInDown" data-wow-delay="0.2s">LEARN DESIGN</h4>
<h3 class="wow fadeInDown" data-wow-delay="0.4s">Download Our <br>Free Design eBook Today</h3>
<p class="wow fadeInDown margin-bottom-20" data-wow-delay="0.6s">Our team of designers likes to spread the word far and wide educating everyone on beautiful design. <br>Provide us our email so we can send you the eBook today.</p>
<div class="wow fadeInDown clearfix" data-wow-delay="0.8s">


<form method="POST" id="subscribe_form" action="{{ route('user.subscribe') }}" data-loader=".loader_quote_subscribe_fold">

  <div class="col-md-12 col-xs-12">
    <div class="subscribe-now">
    	{{ csrf_field() }}
      <input type="email" placeholder="Email" name="email" required onFocus="this.placeholder=''" onBlur="this.placeholder='Email'" class="form-control">
      <button type="submit" class="btn-fill">Subscribe</button>
    </div>

 </form>   

</div>
</div>
</section>
