@extends('layout')
@section('content')


			<?php 	$order=Session::has('order') ? Session::get('order') :null;


  
use App\selectedfood;
date_default_timezone_set('Africa/Cairo');
 Session::put('date',date("h:i a")); 
 
 
if (!$order){
	die('	<div id="subheader">
			<div id="sub_content">
				<h1>Payment section</h1>
				<h2>ha expected</h2>
				<p><a href="/menu"> return menu </a></p>
			</div><!-- End sub_content -->
		</div><!-- End subheader -->	
		');}?>
<!-- SubHeader =============================================== -->
<section class="parallax-window"  id="short"  data-parallax="scroll" data-image-src="/img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a  class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a  class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

 
    
<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
			<div class="col-md-3">
				<div class="box_style_2 hidden-xs info">
					<h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
					<p>
						Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
					</p>
					<hr>
					<h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
					<p>
						Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
					</p>
				</div><!-- End box_style_2 -->
				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Call <span>Us?</span></h4>
					<a href="tel://004542344599" class="phone"> @foreach ($restaurant as $res )
                
          
						{{$res->Telephone}} 
					  
						@endforeach</a>
					<small>Monday to Friday 9.00am - 7.30pm</small>
				</div>
			</div><!-- End col-md-3 -->
            
			<div class="col-md-6">
				<div class="box_style_2">
					<h2 class="inner">Payment methods</h2>
					<div id='thanks' style='display:none'>  <h2> Thank you for your purchase please procceed </h2> </div>
						
					<div id='cash' class="payment_select nomargin">
						<label><input type ="radio" value="Pay By Cash" id="myRadios" onclick="myFunction(this.value)" name="payment_method"   >Pay with cash</label>
						<i class="icon_wallet"></i>
					</div>
					<div>
					<br>
					</div>
					<div class="payment_select" id="paypal">
						<label><input type="radio" value="Pay By Paypal Or Credit Card"  id="myRadio" onclick="myFunction(this.value)" name="payment_method" >Pay with paypal</label>
						<div id="paypal-button"></div>
						
 

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<?php $paypaltotal=bcdiv($order->total*0.062, 1, 2) ?>
<script>
$(document).ready(function() {
        $("#buttonss").hide();
        $("#myRadios").click(function() {
          
          $("#buttonss").show();
        });
        $("#myRadio").click(function() {
        
          $("#buttonss").hide();
        });
      });
function myFunction(method) {
	var x= method;
	document.getElementById("result").innerHTML = x;
}
 

var z = <?php echo $paypaltotal;  ?>


//die(var_dump(z));

  paypal.Button.render({
  
    env: 'sandbox',
    client: {
      sandbox: 'AZcSkGco490mar6LEiMpWMIzYtQ_BkJh77vuXr1mMFABdWrHU4FaeYv9t4AczaEy4Hht38pIrlRRD176',
      production: 'demo_production_client_id'
    },
   
    locale: 'en_US',
    style: {
      size: 'large',
      color: 'gold',
	  shape: 'rect',
	  fundingicons: 'true',
    },

  
    commit: true,
	payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total:z ,
            currency: 'USD'
          } 
        }]
      });
    },

    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() { // result
       
        window.alert('Thank you for your purchase!');
		$("#buttonss").show();
document.getElementById('paypal').style.display = "none"; 
document.getElementById('cash').style.display = "none"; 
document.getElementById('thanks').style.display = "block"; 						
      });
    }
  }, '#paypal-button');

</script>
					</div>
						
				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->

			
			<div class="col-md-3" id="sidebar">
            <div class="theiaStickySidebar">
				<div id="cart_box" >
			
					<h3>Your order <i class="icon_cart_alt pull-right"></i></h3>


				
				
				
					<table class="table table_summary">
						<?php $total=0; ?>
						@if ($order)
							
						
							@foreach ($order->items as $orderitem)
					 <tbody>
					  <tr> 
						  <!-- orderitem= object of type selected food -->
						<td>
						<a href={{ route('removefromcart',['item'=> $orderitem->id]) }} class="remove_item"><i class="icon_minus_alt"></i></a> <strong> {{$orderitem->Quantity}} x</strong> {{$orderitem->Name}}
						</td>
						<td>
						<strong class="pull-right">EGP {{$orderitem->Price*$orderitem->Quantity}}</strong> <?php $total = $total + $orderitem->Quantity*$orderitem->Price ?>  
						</td>
					  </tr>
					  @endforeach
				 	
					 </tbody>
					 </table>
				 	
				    	
                    
					  <hr> <hr>
				    	<table class="table table_summary">
				    	<tbody>
				     	<tr>
						<td>
							 Subtotal <span class="pull-right"> EGP <?php echo $total ?> </span>
						</td>
					</tr>
					<tr>
						<td>
							 Tax 24% <span class="pull-right"> EGP <?php echo $total*0.24;$total=$total+($total*0.24) ; ?></span>
						</td>
					</tr>
					<tr>
						<td class="total">
							 TOTAL <span class="pull-right"> EGP <?php echo $total ;?> </span>
						</td>
						
						@else
						<tr>
							<td class="" >
								Your Cart is empty
							</td>
						@endif
					</tr>
					</tbody>
					</table>
					<hr>
					
					<h3 id="result"></h3>
					<br>
					
					
					<a class="btn_full" id="buttonss" href={{ route('gopayment') }} >Order now</a>
					
		
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
			</div><!-- End col-md-3 -->
				</div><!-- End cart_box -->
                </div><!-- End theiaStickySidebar -->
			</div><!-- End col-md-3 -->
            
		</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->
@endsection
