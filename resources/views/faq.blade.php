@extends('layout')

@section('content')

    
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short"  data-parallax="scroll" data-image-src="img/faq-banner.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Frequently asked questions</h1>
         <p>Learn what you don't understand</p>
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

  

<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row">
    
   
        <div class="col-md-12">
        
       	 
         <div class="panel-group" id="payment">
           @foreach ($faq as $f)
               
          
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                          <a class="accordion-toggle" data-toggle="collapse"  href='#{{$f->id}}' >{{$f->Question}}<i class="indicator icon_plus_alt2 pull-right"></i></a>
                      </h4>
                    </div>
                    <div id= {{$f->id}} class="panel-collapse collapse">
                      <div class="panel-body">
                        {{$f->Answer}}
                      </div>
                    </div>
                  </div>
                  @endforeach
                
                   
                  </div>
                </div><!-- End panel-group -->
                
             
         
        </div><!-- End col-md-12 -->
    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->
@endsection