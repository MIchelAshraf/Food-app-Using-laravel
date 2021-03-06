@extends('layout')
@section('content')
    
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
			<?php $order=Session::has('order') ? Session::get('order') :null; 
			if ($order->Payment)
			?>
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a  class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a  class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a  class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

   

<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="box_style_2">
				<h2 class="inner">Order confirmed!</h2>
				<div id="confirm">
<?php $order=Session::has('order') ? Session::get('order') :null;
use App\selectedfood;
 $total=0; 

?>
					<i class="icon_check_alt2"></i>
		<h3>Thank you {{  ucfirst(Auth::user()->name) }} !</h3>

							
						
		@foreach ($order->items as $orderitem)
					<p>
						Order is placed successfuly 
					</p>

				</div>
				<h4>Summary</h4>
				<table class="table table-striped nomargin">
				<tbody>
				<tr>
					<td>
						<strong>{{$orderitem->Quantity}} x </strong>{{$orderitem->Name}}
					</td>
					<td>
						<strong class="pull-right"> EGP {{$orderitem->Price*$orderitem->Quantity}}</strong>
					</td>

				</tr>
 				<?php $total = $total + $orderitem->Quantity*$orderitem->Price ?>  
		@endforeach
				
				<tr>
					<td>
						 Order Time <a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="Please wait for 30 minutes more or less  !"><i class="icon_question_alt"></i></a>
					</td>
					<td>
						<strong class="pull-right"><?php echo Session::get('date'); ?></strong>
					</td>
				</tr>
			
				<tr>
				</tr>
				<tr>
					<td class="total_confirm">
						 TOTAL
					</td>
					<td class="total_confirm">
						<span class="pull-right"><?php echo $total*1.24 ; ?> EGP</span>
					</td>
				</tr>
				</tbody>
				</table>
			</div>
		<?php Session::forget('order') ?>
		</div>
	</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->
@endsection
