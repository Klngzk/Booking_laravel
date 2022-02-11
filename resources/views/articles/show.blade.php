<link href="{{ asset('assets_0/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets_0/css/responsiveness.css') }}" rel="stylesheet">
<link href="{{ asset('assets_0/plugins/css/plugins.css') }}" rel="stylesheet">
<style>
  * {
  box-sizing: border-box;
}

img {
  max-width: 100%;
  vertical-align: top;
}

.gallery {
  display: flex;
  margin: 10px auto;
  max-width: 600px;
  position: relative;
  padding-top: 66.6666666667%;
  padding-bottom: 60px;
}
@media screen and (min-width: 600px) {
  .gallery {
    padding-top: 400px;
  }
}
/* .gallery__item{
  width: 155px;
} */
.gallery__img {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
  width: 576px;
  margin-left: 14px;
  max-height: 389px;
}
.gallery__thumb {
  padding-top: 6px;
  margin: 6px;
  display: block;
  max-height: 76px;
}
.gallery__thumb img{
  max-height: 76px;
  width: 155px;

}

.gallery__selector {
  position: absolute;
  opacity: 0;
  visibility: hidden;
}
.gallery__selector:checked + .gallery__img {
  opacity: 1;
}
.gallery__selector:checked ~ .gallery__thumb > img {
  box-shadow: 0 0 0 3px #0be2f6;
}
.btn.btn-primary{
  background:#ffc800 ;
  border-color:#ffc800 ;
}
</style>
@extends('layouts.myapp')
@section('content')

{{ Form::open(['route'=>'booking.store', 'method'=>'POST']) }}

<div class='row m-2'>


<div class="col-8">

<section class="gallery">
  <div class="gallery__item">
    <input type="radio" id="img-1" checked name="gallery" class="gallery__selector"/>
    <img class="gallery__img" src="/storage/{{$hebergement->photo2}}" alt=""/>
    <label for="img-1" class="gallery__thumb "><img  src="/storage/{{$hebergement->photo2}}" alt=""/></label>
  </div>
  <div class="gallery__item">
    <input type="radio" id="img-2" name="gallery" class="gallery__selector"/>
    <img class="gallery__img" src="/storage/{{$hebergement->photo3}}" alt=""/>
    <label for="img-2" class="gallery__thumb"><img src="/storage/{{$hebergement->photo3}}" alt=""/></label>
  </div>
  <div class="gallery__item">
    <input type="radio" id="img-3" name="gallery" class="gallery__selector"/>
    <img class="gallery__img" src="/storage/{{$hebergement->photo4}}" alt=""/>
    <label for="img-3" class="gallery__thumb"><img src="/storage/{{$hebergement->photo4}}" alt=""/></label>
  </div>
  <div class="gallery__item">
    <input type="radio" id="img-4" name="gallery" class="gallery__selector"/>
    <img class="gallery__img" src="/storage/{{$hebergement->photo1}}" alt=""/>
    <label for="img-4" class="gallery__thumb"><img src="/storage/{{$hebergement->photo1}}" alt=""/></label>
  </div>
  <div class="gallery__item">
    <input type="radio" id="img-5" name="gallery" class="gallery__selector"/>
    <img class="gallery__img" src="/storage/{{$hebergement->photo5}}" alt=""/>
    <label for="img-5" class="gallery__thumb"><img src="/storage/{{$hebergement->photo5}}" alt=""/></label>
  </div>
</section>

<div class="row">
  <div class="col-8">

									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4 style="color: #ffc800;" ><i class="far fa-copy"></i>  Description</h4>
										</div>
										<div class="tr-single-body">
											<p>{{$hebergement->description}}</p>
											<p>{{$hebergement->detail}}</p>
										</div>
									</div>
								</div>
                </div>

</div>



<div class='bookin col-4'>
  <input type="text" id="user" name="user_id" value='{{Auth::user()->id}}'style="display: none;">
  <input type="text" id="user" name="hebergement_id" value='{{$hebergement->id}}' style="display: none;">


 

<!-- ///////////// -->


						
						<!-- Tourist Overview -->
						<div class="tr-single-box">
							<div class="tr-single-header">
								<h4>{{$hebergement->title}}<sup class="cl-success">{{$hebergement->city}}</sup></h4>
							</div>
							
					
							
						</div>
						
						<!-- overview & booking Form -->
						<div class="tr-single-box">
							<div class="tr-single-header">
								<div class="entry-meta">
									<div class="meta-item meta-comment fl-right">
										<div class="view-box">
											<div class="fl-right">
												<h4 class="font-20"><span class="theme-cl font-20">$</span>{{$hebergement->prix}}<sub>/Per Night</sub></h4>
											</div>
										</div>
									</div>
									<div class="meta-item meta-author">
										<div class="hotel-review entry-location">
                      @if($hebergement->available == 'yes')
											<span class="review-status bg-success"></span>
											<h6><span class="cl-success font-bold">Available</span></h6>
										@else
                      <span class="review-status bg-danger"></span>
											<h6><span class="cl-danger font-bold">Not Available</span></h6>
                    @endif
                    </div>
									</div>
								</div>
							</div>
							<div class="tr-single-body">
								<form class="book-form">
								
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label>Check In</label>
                        <input id="dp1" name="date_a" type="text" class="form-control clickable input-md" id="DtChkIn" placeholder=" Check-In">
											</div>
										</div>
										<div class="col-xs-12">
											<div class="form-group">
												<label>Check Out</label>
                        <input id="dp2" name="date_de" type="text" class="form-control clickable input-md " id="DtChkOut" placeholder=" Check-Out">
											</div>
										</div>
									</div>
            @if($hebergement->type == 'Villa')
		
					
												<input type="number" min='1' name="person" value="8" class="form-control" style="display: none;">
										
            @elseif($hebergement->type == 'Appartement')

												<input type="number" min='1' name="person" value="4" class="form-control" style="display: none;">
										
            @else
            <div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Person</label>
												<input type="number" min='1' name="person" value="1" class="form-control" >
											</div>
										</div>
            @endif
									
						
                      @if($hebergement->type != 'Hotel')
                     
												<input type="text" min='1' name="rooms" value="{{$hebergement->rooms}}" class="form-control" style="display: none;">
							
                    @else
                    <div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label>Room</label>
												<div class="sl-side">
													<select class="wide form-control" id='rooms'name="rooms">
														<option data-display="Room" value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
													</select>
												</div>
											</div>
										</div>
									@endif
									</div>
									
									
									
									<div class="row">
                    
                  <div class="form-group"> 
                  @if($hebergement->available == 'yes')
                    {{ Form::button('Book' , ['class'=>'btn btn-primary','type'=>'submit']) }}

										@else

                      {{ Form::button('Book' , ['class'=>'btn btn-primary','type'=>'submit', 'disabled']) }}

                    @endif
                  </div> 
									</div>
									
								
							</div>
						</div>
</div>
<!-- ///////////////// -->
</div>




{{ form::close() }}

@endsection


