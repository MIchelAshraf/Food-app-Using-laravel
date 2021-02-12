<!DOCTYPE html>
<html>
    @extends('layout')
    @section('content')
    
	<!-- SubHeader =============================================== -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Gochi+Hand" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/elegant_font/elegant_font.min.css" rel="stylesheet">
    <link href="css/fontello/css/fontello.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/pop_up.css" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<!-- SPECIFIC CSS -->
	<link href="css/skins/square/grey.css" rel="stylesheet">
	<link href="css/admin.css" rel="stylesheet">
	<link href="css/bootstrap3-wysihtml5.min.css" rel="stylesheet">
	<link href="css/dropzone.css" rel="stylesheet">
	<?php 
	if (Auth::guest())
	die('	<div id="subheader">
			<div id="sub_content">
				<h1>Admin section</h1>
				<p>Access Denied</p>
				<p><a href="/"> return home </a></p>
			</div><!-- End sub_content -->
		</div><!-- End subheader -->	
		');
	$waw= Auth::user()->type; 
	if($waw!=2){
		die('	<div id="subheader">
			<div id="sub_content">
				<h1>Admin section</h1>
				<p>Access Denied</p>
				<p><a href="/"> return home </a></p>
			</div><!-- End sub_content -->
		</div><!-- End subheader -->
	
		');


	}
	?>
	<!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="/img/admin.jpg" data-natural-width="1280" data-natural-height="600">
		<div id="subheader">
			<div id="sub_content">
				<h1>Admin section</h1>
				<p>The power in your hands</p>
				<p></p>
			</div><!-- End sub_content -->
		</div><!-- End subheader -->
	</section><!-- End section -->
	<!-- End SubHeader ============================================ -->



	<!-- Content ================================================== -->
	<div class="container margin_60">
		<div id="tabs" class="tabs">
			<nav>
				<ul>
					<li><a href="#section-1" class="icon-profile"><span>Main info</span></a>
					</li>
					<li><a href="#section-2" class="icon-menut-items"><span>Menu</span></a>
					</li>
					<li><a href="#section-3" class=''><i   class='far fa-question-circle' style='font-size:12px'></i>  	&nbsp;FAQ</a>
					</li>
<li><a href="#section-4" class="icon-menut-items"><span>orders</span></a>
					</li>
				</ul>
			</nav>
			<div class="content">

				<section id="section-1">
 <form method="post" action="{{ route('RestInfo') }}">
@csrf
 
			<div class="box_style_2" id="order_process">
                  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif
					<div class="indent_title_in">
						<i class="icon_house_alt"></i>
						<h3>General restaurant description</h3>
						<p>this will appear in the home page</p>
					</div>

					<div class="wrapper_indent">
						<div class="form-group">
							<label>Restaurant name</label>
							<input class="form-control" name="restaurant_name" id="restaurant_name" type="text">
						</div>
						<div class="form-group">
							<label>Restaurant description</label>
							<textarea class="wysihtml5 form-control"name="Description" placeholder="Enter text ..." style="height: 200px;"></textarea>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Telephone</label>
									<input type="text" id="Telephone" name="Telephone" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" id="Email" name="Email" class="form-control">
								</div>
							</div>
						</div>
					</div><!-- End wrapper_indent -->

					<hr class="styled_2">

					<div class="indent_title_in">
						<i class="icon_pin_alt"></i>
						<h3>Address</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="wrapper_indent">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Country</label>
									<select class="form-control" name="country" id="country">
										<option value="" selected>Select your country</option>
										<option value="Egypt">Egypt</option>
										<option value="United states">United states</option>
										<option value="Russia">Russia</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Street line 1</label>
									<input type="text" id="street_1" name="street_1" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Street line 2</label>
									<input type="text" id="street_2" name="street_2" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>City</label>
									<input type="text" id="city_booking" name="city_booking" class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>State</label>
									<input type="text" id="state_booking" name="state_booking" class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Postal code</label>
									<input type="text" id="postal_code" name="postal_code" class="form-control">
								</div>
							</div>
						</div><!--End row -->
					</div><!-- End wrapper_indent -->

					
					

				
					<div class="wrapper_indent">
						<button class="btn_1 " type="submit">Save now</button>
</form>
					</div><!-- End wrapper_indent -->
                    
				</section><!-- End section 1 -->

				<section id="section-2">
<form method="post" action="{{ route('AddItem') }}">
@csrf
<div class="box_style_2" id="order_process">
                  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif
					<div class="indent_title_in">
						<i class="icon_document_alt"></i>
						<h3>Edit menu list</h3>
						<p>Partem diceret praesent mel et, vis facilis alienum antiopam ea, vim in sumo diam sonet. Illud ignota cum te, decore elaboraret nec ea. Quo ei graeci repudiare definitionem. Vim et malorum ornatus assentior, exerci elaboraret eum ut, diam meliore no mel.</p>
					</div>
                    
					<div class="wrapper_indent">
						<div class="form-group">
							<label>Menu Category</label>
							<input type="text" name="menu_category" class="form-control" placeholder="EX. Starters">

						</div>

											<div class="form-group">
												
<label>Select existing Category to add new item to</label>
<div class='styled-select ' >
<select class="form-control"width='300 px' name='oldCat'>
 <option></option>
@foreach ($foodcategory as $i)
    <option value="{{$i->id}}">{{$i->Name}}</option>
    
  @endforeach
</select>
</div>
											</div>
						<div class="strip_menu_items">
							<div class="row">
							
								<div class="col-sm-9">
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label>Title</label>
												<input type="text"  name="menu_item_title" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Price</label>
												<input type="text" name="menu_item_title_price" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Short description</label>
										<input type="text" name="menu_item_description" class="form-control">
									</div>

									

								
								</div>
							</div><!-- End row -->
						</div><!-- End strip_menu_items -->



						
                    
					<hr class="styled_2">
                    
					<div class="wrapper_indent">
						<button type="submit" class="btn_1 green">Save</button>
</form>
					</div><!-- End wrapper_indent -->
<div class="col-md-6 col-sm-6 add_bottom_15">
<form method"get" action="{{ route('UpdateCat') }}">
@csrf
							<div class="indent_title_in">
								<i class="icon_mail_alt"></i>
								<h3>Update Exisiting Item</h3>
								
							</div>
							<div class="wrapper_indent">
								<div class="form-group">
									<label>Select Old Item to update</label>
									<div class="styled-select">
<select class="form-control"  name='PreviousItem'>
 <option></option>
@foreach ($hey as $i)
    <option value="{{$i->id}}">{{$i->Name}}</option>
    
  @endforeach
</select>
</div>
<br>
                   Enter new name<input type="text" class="form-control" name="updateItemName">
                Enter new Price <input type="text" class="form-control" name="updateItemPrice">
</form>
								</div>
								
								
								<button type="submit" class="btn_1 green">Update Item</button>
                    
				</section><!-- End section 2 -->

				<section id="section-3">

					<div class="row">
                    <form method="post" action="{{ route('addfaq') }}">
@csrf
						<div class="col-md-6 col-sm-6 add_bottom_15">
							<div class="indent_title_in">
								<i class="icon_lock_alt"></i>
								<h3>Change your faq</h3>
								<p>
									Mussum ipsum cacilds, vidis litro abertis.
								</p>
							</div>
							<div class="wrapper_indent">
								<div class="form-group">
									<label>question</label>
									<input class="form-control" name="question" type="texts">
								</div>
								<div class="form-group">
									<label>Answer</label>
									<input class="form-control" name="answer"  type="text">
								</div>
								
								<button type="submit" class="btn_1 green">Save</button>
</form>
							</div><!-- End wrapper_indent -->
						</div>

                        <form method="post" action="{{ route('AboutInfo') }}" >
@csrf
						<div class="col-md-6 col-sm-6 add_bottom_15">
							<div class="indent_title_in">
								<i class="icon_mail_alt"></i>
								<h3>Change your About us</h3>
								<p>
									Mussum ipsum cacilds, vidis litro abertis.
								</p>
							</div>
							<div class="wrapper_indent">
								<div class="form-group">
									<label>Description</label>
									<textarea class="wysihtml5 form-control"name="AboutUsDes" placeholder="Enter text ..." style="height: 200px;"></textarea>
								</div>
								
								
								<button type="submit" class="btn_1 green">Update About us</button>
</form>
							</div><!-- End wrapper_indent -->
						</div>
                        
					</div><!-- End row -->

					<hr class="styled_2">
                    
                    
				</section><!-- End section 3 -->

<section id="section-4">
<body>
<?php
$oldid=-1;
?>
<div style='overflow-y: scroll;height:350px;'>
<table class='table table-hover' >
  <tr position: relative>
    <th position: sticky;><h3>Order Number</h3></th>
    <th position: sticky;><h3>Order Item</h3></th>
	<th position: sticky;><h3>Quantity</h3></th>
	<th position: sticky;><h3>Status</h3></th>
	<th position: sticky;><h3>Change Status</h3></th>
  </tr>
  
@foreach ($order as $i)   <!--        table data                -->
    <tr>
<?php $appear=false; if($i->order_id == $oldid){ 
echo "<td></td>";  

}
else {  $appear=true;
 echo "<td> {$i->order_id}</td>";
}

$st='';

$itemName = App\itemadd::find($i->item_id);
echo "<td> $itemName->Name </td>";

echo "<td>{$i->quantity}</td>";
$oldid=$i->order_id;
?>
  <td><!--order status -->  
	
	@foreach ($order1 as $o) 
	<?php	 if ($appear){ if($o->id==$i->order_id)
	{	echo $o->Status;
		$st=$o->Status;
	}}
?>	@endforeach
  
</td> 
<td><!-- changing status button-->  
<?php if ($appear){ 
	
	?>
	@if ($st=='Preparing')
    <a href={{ route('change_status',['order_id'=> $i->order_id]) }} class='btn_1 '> Delivering </a>
@endif
	
<?php } ?>
</td>
  @endforeach
 
    
	

  </tr>
  

 
  
  
</table>
</div>
</body>



</section>
<!-- End section 4 -->

			</div><!-- End content -->
		</div>
	</div><!-- End container  -->
	<!-- End Content =============================================== -->

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->



	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_close"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon-search-6"></i>
			</button>
		</form>
	</div>
	<!-- End Search Menu -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>

	<!-- Specific scripts -->
	<script src="js/tabs.js"></script>
	<script>
		new CBPFWTabs(document.getElementById('tabs'));
	</script>

	<script src="js/bootstrap3-wysihtml5.min.js"></script>
	<script type="text/javascript">
		$('.wysihtml5').wysihtml5({});
	</script>
	<script src="js/dropzone.min.js"></script>
	<script>
		if ($('.dropzone').length > 0) {
			Dropzone.autoDiscover = false;
			$("#photos").dropzone({
				url: "upload",
				addRemoveLinks: true
			});

			$("#logo_picture").dropzone({
				url: "upload",
				maxFiles: 1,
				addRemoveLinks: true
			});

			$(".menu-item-pic").dropzone({
				url: "upload",
				maxFiles: 1,
				addRemoveLinks: true
			});
		}
	</script>

</body>
@endsection
</html>
