<div class="review-slider">
	<div class="sub-hd">
		<h3 class="tittle">BLOG'S<span> SỨC KHỎE</span></h3>
	</div>
	<ul id="flexiselDemo1">
		<li>
			<a href="single.html"><img src="images/n1.jpg" alt=""/></a>
			<div class="slide-title"><h4>LOREM IPSUM DOLOR </div>
			<div class="prom-bottom">
				<div class="prom-left">
					<h5>May 22</h5>
				</div>
				<div class="prom-right">
					<h5> 2016 </h5>
				</div>
				<div class="clearfix"></div>
			</div>
		</li>
		<li>
			<a href="single.html"><img src="images/n2.jpg" alt=""/></a>
			<div class="slide-title"><h4>LOREM IPSUM DOLOR</h4></div>
			<div class="prom-bottom">
				<div class="prom-left">
					<h5>May 28</h5>
				</div>
				<div class="prom-right">
					<h5> 2016 </h5>
				</div>
				<div class="clearfix"></div>
			</div>
		</li>
		<li>
			<a href="single.html"><img src="images/n3.jpg" alt=""/></a>
			<div class="slide-title"><h4>LOREM IPSUM DOLOR</h4></div>
			<div class="prom-bottom">
				<div class="prom-left">
					<h5>June 16</h5>
				</div>
				<div class="prom-right">
					<h5> 2016 </h5>
				</div>
				<div class="clearfix"></div>
			</div>

		</li>
		<li>
			<a href="single.html"><img src="images/n4.jpg" alt=""/></a>
			<div class="slide-title"><h4>LOREM IPSUM DOLOR</h4></div>
			<div class="prom-bottom">
				<div class="prom-left">
					<h5>July 24</h5>
				</div>
				<div class="prom-right">
					<h5> 2016 </h5>
				</div>
				<div class="clearfix"></div>
			</div>

		</li>
		<li>
			<a href="single.html"><img src="images/n1.jpg" alt=""/></a>
			<div class="slide-title"><h4>LOREM IPSUM DOLOR </h4></div>
			<div class="prom-bottom">
				<div class="prom-left">
					<h5>Aug 27</h5>
				</div>
				<div class="prom-right">
					<h5> 2016 </h5>
				</div>
				<div class="clearfix"></div>
			</div>

		</li>
		<li>
			<a href="single.html"><img src="images/n5.jpg" alt=""/></a>
			<div class="slide-title"><h4>LOREM IPSUM DOLOR </h4></div>
			<div class="prom-bottom">
				<div class="prom-left">
					<h5>Aug 25</h5>
				</div>
				<div class="prom-right">
					<h5> 2016 </h5>
				</div>
				<div class="clearfix"></div>
			</div>

		</li>
		<li>
			<a href="single.html"><img src="images/n6.jpg" alt=""/></a>
			<div class="slide-title"><h4>LOREM IPSUM DOLOR </h4></div>
			<div class="prom-bottom">
				<div class="prom-left">
					<h5>Aug 30</h5>
				</div>
				<div class="prom-right">
					<h5> 2016 </h5>
				</div>
				<div class="clearfix"></div>
			</div>

		</li>
	</ul>
	<script type="text/javascript">
		$(window).load(function() {

			$("#flexiselDemo1").flexisel({
				visibleItems:4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:800,
						visibleItems: 4
					}
				}
			});
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
</div>