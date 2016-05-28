<!DOCTYPE html>
<html>
<head>
<title>Buy</title>
@include("html.top")
<div class="container">
	
	<!--price-->
	<div class="price">
		<div class="price-grid">
			<div class="col-sm-4 price-top">
				<h4>City</h4>
				<select class="in-drop">
					<option>Select City</option>
					<option>Bangkok</option>
					<option>Tokyo</option>
					<option>London</option>
					<option>Paris</option>
					<option>Dhubai</option>
					<option>New Jerrsey</option>
					<option>Hongkong</option>
					<option>New York</option>
					<option>Rome</option>
					<option>Sydney</option>
					<option>Florence</option>
					<option>Istanbul</option>
					<option>Brezil</option>
					<option>Canda</option>
					<option>Malaysia</option>
					<option>Singapore</option>
					<option>Taiwan</option>
					<option>Spain</option>
					<option>More</option>
				</select>
			</div>
			<div class="col-sm-4 price-top">
				<h4>Category</h4>
				<select class="in-drop">
					<option>Select Category</option>
					<option>Apartment</option>
					<option>Independent House</option>
					<option>Row House</option>
					<option>Villa</option>
					<option>Builder Floor</option>
					<option>Farm House</option>
					<option>Penthouse</option>
				</select>
			</div>
			<div class="col-sm-4 price-top">
				<h4>Rooms</h4>
				<select class="in-drop">
					<option>No. of Bedrooms</option>
					<option>1 BHK</option>
					<option>2 BHK</option>
					<option>3 BHK</option>
					<option>4 BHK</option>
					<option>4+ BHK</option>
				</select>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="price-grid">
			<div class="col-sm-6 price-top1">
				<h4>Price Range</h4>
				<ul>
					<li>
						<select class="in-drop">
							<option>Price From</option>
							<option>0</option>
							<option>5 Lacs </option>
							<option>10 Lacs</option>
							<option>15 Lacs</option>
							<option>20 Lacs</option>
							<option>25 Lacs</option>
							<option>30 Lacs</option>
							<option>35 Lacs</option>
							<option>40 Lacs</option>
							<option>45 Lacs</option>
							<option>50 Lacs</option>
							<option>55 Lacs</option>
							<option>60 Lacs</option>
							<option>65 Lacs</option>
							<option>70 Lacs</option>
							<option>75 Lacs</option>
							<option>80 Lacs</option>
							<option>85 Lacs</option>
							<option>90 Lacs</option>
							<option>95 Lacs</option>
						</select>
					</li>
					<span>-</span>
					<li>
						<select class="in-drop">
							<option>Price To</option>
							<option>5 Lacs</option>
							<option>10 Lacs</option>
							<option>15 Lacs</option>
							<option>20 Lacs</option>
							<option>25 Lacs</option>
							<option>30 Lacs</option>
							<option>35 Lacs</option>
							<option>40 Lacs</option>
							<option>45 Lacs</option>
							<option>50 Lacs</option>
							<option>55 Lacs</option>
							<option>60 Lacs</option>
							<option>65 Lacs</option>
							<option>70 Lacs</option>
							<option>75 Lacs</option>
							<option>80 Lacs</option>
							<option>85 Lacs</option>
							<option>90 Lacs</option>
							<option>95 Lacs</option>
							<option>100 Cr</option>
						</select>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 price-top1">
				<h4>Area</h4>
				<ul>
					<li>
						<select class="in-drop">
							<option>Sqmt From</option>
							<option>0</option>
							<option>500 Sq Ft</option>
							<option>1000 Sq Ft</option>
							<option>1500 Sq Ft</option>
							<option>2000 Sq Ft</option>
							<option>2500 Sq Ft</option>
							<option>3000 Sq Ft</option>
							<option>3500 Sq Ft</option>
							<option>4000 Sq Ft</option>
							<option>4500 Sq Ft</option>
						</select>
					</li>
					<span>-</span>
					<li>
						<select class="in-drop">
							<option>Sqmt To</option>
							<option>500 Sq Ft</option>
							<option>1000 Sq Ft</option>
							<option>1500 Sq Ft</option>
							<option>2000 Sq Ft</option>
							<option>2500 Sq Ft</option>
							<option>3000 Sq Ft</option>
							<option>3500 Sq Ft</option>
							<option>4000 Sq Ft</option>
							<option>4500 Sq Ft</option>
							<option>5000+ Sq Ft</option>
						</select>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!---->
	<div class="top-grid">
		<h3>Top City</h3>
		<div class="grid-at">
			<div class="col-md-3 grid-city">
				<div class="grid-lo">
					<a href="{{url('buy_single')}}">
						<figure class="effect-layla">
						<img class=" img-responsive" src="images/ce.jpg" alt="img06">
						<figcaption>
							<h4>London</h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
			</div>
			<div class="col-md-3 grid-city">
				<div class="grid-lo">
						<a href="{{url('buy_single')}}">
					<figure class="effect-layla">
						<img class=" img-responsive" src="images/ce1.jpg" alt="img06">
						<figcaption>
							<h4>Sydney</h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
			</div>
			<div class="col-md-6 grid-city grid-city1">
				<div class="grid-me">
				<div class="col-md-8 grid-lo1">
					<div class=" grid-lo">
							<a href="{{url('buy_single')}}">
					<figure class="effect-layla">
						<img class=" img-responsive" src="images/ce2.jpg" alt="img06">
						<figcaption>
							<h4 class="effect1">New York</h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
				</div>
				 <div class="col-md-4 grid-lo2">
				 	<div class=" grid-lo">
				 			<a href="{{url('buy_single')}}">
					<figure class="effect-layla">
						<img class=" img-responsive" src="images/ce3.jpg" alt="img06">
						<figcaption>
							<h4 class="effect2">Rome</h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
				 </div>
				 <div class="clearfix"> </div>
			</div>	
			<div class="grid-me">
				<div class="col-md-6 grid-lo3">
					<div class=" grid-lo">
							<a href="{{url('buy_single')}}">
					<figure class="effect-layla">
						<img class="img-responsive" src="images/ce4.jpg" alt="img06">
						<figcaption>
							<h4 class="effect3">Singapore</h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
				 </div>
				 <div class="col-md-6 grid-lo4">
				 	<div class=" grid-lo">
				 			<a href="{{url('buy_single')}}">
					<figure class="effect-layla">
						<img class="img-responsive" src="images/ce5.jpg" alt="img06">
						<figcaption>
							<h4 class="effect3">Paris</h4>
							
						</figcaption>			
					</figure>
					</a>
				 </div>
				 </div>
				 <div class="clearfix"> </div>
			</div>	
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
<!---->
<!--premium-project-->
<div class="premium">
	<div class="pre-top">
		<h5>Lorem Ipsum is simply dummy</h5>
		<p>$7.24 Lacs-4.36 Lacs 2-3 BHK, Lorem Ipsum</p>
	</div>
</div>
<!--//premium-project-->
<!---->
<div class="container">
	<div class="future">
		<h3 >Fetured Projects</h3>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">			
						<li><div class="project-fur">
								<a href="{{url('single')}}" ><img class="img-responsive" src="images/pi.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                    <h6 class="fur-name"><a href="{{url('single')}}">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
							<li><div class="project-fur">
									<a href="{{url('single')}}" ><img class="img-responsive" src="images/pi1.jpg" alt="" />	</a>
										<div class="fur">
											<div class="fur1">
			                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
			                                   <h6 class="fur-name"><a href="{{url('single')}}">Contrary to popular</a></h6>
			                                   	<span>Paris</span>
	                               			</div>
				                            <div class="fur2">
				                               	<span>2 BHK</span>
				                             </div>
										</div>					
								</div></li>
								<li><div class="project-fur">
								<a href="{{url('single')}}" ><img class="img-responsive" src="images/pi2.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                   <h6 class="fur-name"><a href="{{url('single')}}">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
							<li><div class="project-fur">
								<a href="{{url('single')}}" ><img class="img-responsive" src="images/pi3.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                    <h6 class="fur-name"><a href="{{url('single')}}">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
					</ul>
					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 3
						    		}
						    	}
						    });
						    
						});
			</script>
			<script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
		</div>
	</div>
</div>
@include("html.footer")
</body>
</html>