@extends('layout')

@section('content')
   
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/Image-for-Total-Health-cover-1400-x-350.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>About us</h1>
         <p>Everyone deserves to know.</p>
         <p></p>
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->



<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row">
		<div class="col-md-4">
			<h3 class="nomargin_top">Some words about us</h3>
		<h5 >
			@foreach ($description as $d)

			{{$d->Description}}
				
			@endforeach

		</h5>
		</div>
		<div class="col-md-7 col-md-offset-1 text-right hidden-sm hidden-xs">
			<img src="img/devices.jpg" alt="" class="img-responsive">
		</div>
	</div><!-- End row -->
	<hr class="more_margin">
    <div class="main_title">
            <h2 class="nomargin_top">Quick food quality feautures</h2>
            <p>
                Cum doctus civibus efficiantur in imperdiet deterruisset.
            </p>
        </div>

	<div class="row">
		<div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
			<div class="feature">
				<i class="icon_bag_alt"></i>
				<h3><span>Delivery</span> or Takeaway</h3>
				<p>
					 Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
				</p>
			</div>
		</div>
		<div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
			<div class="feature">
				<i class="icon_mobile"></i>
				<h3><span>Mobile</span> support</h3>
				<p>
					 Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
				</p>
			</div>
		</div>
	</div><!-- End row -->
	<div class="row">
		<div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
			<div class="feature">
				<i class="icon_wallet"></i>
				<h3><span>Cash</span> payment</h3>
				<p>
					 Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
				</p>
			</div>
		</div>
		<div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
			<div class="feature">
				<i class="icon_creditcard"></i>
				<h3><span>Secure card</span> payment</h3>
				<p>
					 Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
				</p>
			</div>
		</div>
	</div><!-- End row -->
</div><!-- End container -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 nopadding features-intro-img">
			<div > <img src="img/resize-15920916901115619327team.png" alt="" class="img-responsive">
			
			</div>
		</div>
		<div class="col-md-6 nopadding">
			<div class="features-content">
				<h3>"Ex vero mediocrem"</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.
				</p>
				<p>
					Per ea erant aeque corpora, an agam tibique nec. At recusabo expetendis vim. Tractatos principes mel te, dolor solet viderer usu ad.
				</p>
			</div>
		</div>
		
	</div>
</div><!-- End container-fluid  -->
<!-- End Content =============================================== -->
                                                                                                            
@endsection