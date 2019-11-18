@extends('layouts.app')


@section('content')
<?php 
$productdata = $data['productdata'];
// echo"<pre>";print_r($data); echo"</pre>";
// exit();
?>
	<main id="main">
	  <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>{{ $data['pagename'] }}</h2>
        </div>
 <div class="row">
        @foreach ($productdata as $productdata)
       
            
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="../../{{ $productdata->image }}" alt=""></div>
              <div class="details">
                <h4>{{ $productdata->itemname }}</h4>
                <!-- <span>Chief Executive Officer</span> -->
               <div class="social">
                  <a href="../../rotary_readmore/{{ $productdata->id }}">Read more</a>
                </div>
              </div>
            </div>
          </div>

        
        @endforeach
        </div>
      </div>
    </section><!-- #team -->
 </main>
@endsection