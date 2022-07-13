@extends('user.master2')

@section('content')
<!-- Title page -->
	
<!--//banner-below-->
<!-- contact -->
@if ($errors->any()) 
    <div class="alert alert-danger" >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	
	<div class="welcome contact">
		<div class="container">  
				<h3 class="heading-agileinfo">Contact Us <i class="fa fa-anchor" aria-hidden="true"></i></h3>
			<div class="contact-w3ls-row">
				<form action="{{route('user.product.store')}}" method="post">
					@csrf
					<input type="text" name="fname" placeholder="First Name" >
					<input class="email" name="lname" type="text" placeholder="Last Name" >
					<input type="text" name="phone" placeholder="Mobile Number" >
					<input class="email" name="email" type="email" placeholder="Email" >
					<textarea name="message" placeholder="Message"></textarea>
					<input type="submit" value="SUBMIT" id="contact">
				</form>
			</div>
						
		</div>
	</div>
	<!-- //contact -->
	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115186.52143927255!2d34.54155930000002!3d25.55240370000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x837f161b92f17ab5!2sCoraya+Divers!5e0!3m2!1sen!2sin!4v1496309493446"></iframe>
	</div>
	<!-- //map --> 
<!-- footer -->
<div class="footer">
		<div class="container">
			<div class="w3_agile_footer_grids">
				<div class="col-md-4 w3_agile_footer_grid">
					<h3 class="white-w3ls">Latest Tweets</h3>
					<ul class="agile_footer_grid_list">
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Nam libero tempore, cum soluta nobis est eligendi optio 
							cumque nihil impedit. <span>1 day ago</span></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus <a href="mailto:info@mail.com">info@mail.com</a>
							cumque nihil impedit. <span>2 days ago</span></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3 class="white-w3ls">Navigation</h3>
					<ul class="agileits_w3layouts_footer_grid_list">
						<li><i class="fa fa-tint" aria-hidden="true"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-tint" aria-hidden="true"></i><a href="about.html">About</a></li>
						<li><i class="fa fa-tint" aria-hidden="true"></i><a href="gallery.html">Gallery</a></li>
						<li><i class="fa fa-tint" aria-hidden="true"></i><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3 class="white-w3ls">Instagram Posts</h3>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/t1.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/t2.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/t3.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/t2.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/t3.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/t1.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_address_mail_footer_grids">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>Marsa Allam Rd Red Sea <span>Governorate, Egypt.</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>+(012) 345 6789 <span>+(012) 678 3459</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:info@example.com">info@example1.com</a> 
						<span><a href="mailto:info@example.com">info@example2.com</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_copyright">
				<p>© 2017 Plunge. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Plunge</h4>
					<img src="images/bann3.jpg" alt="blog-image" />
					<p class="para-agileits-w3layouts">Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium, totam rem aperiamconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</div>
</div>
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#contact').click(function(){ 
		if( !empty($error[])){
		alert('Your messages was successfully')
	}
	})
})
</script>

@endsection

