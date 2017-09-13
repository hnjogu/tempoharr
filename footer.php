<div class="footer-section">
				<div class="container">
					<div class="footer-top">
								<div class="social-icons">
										<a href="https://www.facebook.com/WandaSokoLtd/"><i class="icon1"></i></a>
										<a href="https://twitter.com/WandaSokoLtd"><i class="icon2"></i></a>
										<!--a href="#"><i class="icon3"></i></a-->
									</div>
								</div>

					<div class="footer-bottom">
						<p> Copyright &copy;
							<script>
							  var currentDate = new Date(),
							      day = currentDate.getDate(),
							      month = currentDate.getMonth() + 1,
							      year = currentDate.getFullYear();
							  document.write(day + "/" + month + "/" + year)
                            </script> 
                            All rights  Reserved | by<a href="http://www.wandasoko.org/" target="target_blank">WandaSoko</a>
                        </p>
					</div>
			<a class="scroll" href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

				</div>
			</div>
					<!-- jQuery -->
					    <!-- jQuery -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="assets/js/responsiveslides.min.js"></script>
					<script type="text/javascript">
						$(document).ready(function() {
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
		<!-- script for menu -->				
		 <script>
			 $("label.menu").click(function(){
			 $(".top-menu ul").slideToggle("slow" , function(){
			 });
			 });
		 </script>
        <!-- //script for menu -->

		<!-- other useful jquery -->
	    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script>
			    $(function () {
			      $("#slider").responsiveSlides({
			      	auto: true,
			      	nav: true,
			      	speed: 500,
			        namespace: "callbacks",
			        pager: true,
			      });
			    });
	    </script>

	                  <!-- start-smoth-scrolling-->
		<script type="text/javascript" src="assets/js/move-top.js"></script>
		<script type="text/javascript" src="assets/js/easing.js"></script>
		    <script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
	        </script>
	    <script src="assets/js/slider_flow.js"></script>
	    <!--End-smoth-scrolling-->

			<script src="assets/js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
				<script type="text/javascript">
			         	$(document).ready(function() {
                      	$('#myCarousel').carousel({
                        interval: 10000
                           })
                        });
				</script>
		        
	</body>
</html>



