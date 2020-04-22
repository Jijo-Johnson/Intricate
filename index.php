<html>
<head>
 <title>Intricate Home Designs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <script src="js/jquery-1.12.4.js" type="text/javascript"></script>
<link rel='stylesheet prefetch' href='css/slick.css'>
<link href="css/slick-theme.css" type="text/css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css'>
 <link href="css/style.css" type="text/css" rel="stylesheet">
 <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 <link href="css/main.css" type="text/css" rel="stylesheet">
 
     <script src="js/jssor.slider-26.7.0.min.js" type="text/javascript"></script>

 <script src="js/index.js"></script>
 
<script defer src="js/jquery.flexslider.js"></script>
  
  
  
   <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Cols: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1500;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    
  
  
  <script type="text/javascript">
    $(function(){
 //   SyntaxHighlighter.all();
//	});
  //  $(window).load(function(){
  //    $('.flexslider').flexslider({
 //       animation: "slide",
 //       start: function(slider){
 //         $('body').removeClass('loading');
  //      }
  //    });-->
	  
	  
	 $('.button').click(function()
	 {
		$('#toggle').slideToggle();
	 });
	
	 $("#search-icon").click(function()
			{
				var div = $("#search-icon");
				div.animate({marginLeft: '180px'}, "slow");
				div.animate({marginTop: '180px'}, "slow");		
				$('.searchbox').slideDown(1000);
			});
			
			$('#close').click(function()
			{
				var div = $("#search-icon");
				$(".searchbox").slideUp(1000);
				div.animate({marginTop: '0px'}, "slow");
				div.animate({marginLeft: '0px'}, "slow");
			
			
			});
    
			
		// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('.backto').fadeIn(200);    // Fade in the arrow
    } else {
        $('.backto').fadeOut(200);   // Else fade out the arrow
    }
});
$('.backto').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});	

		   
	});
  </script>
 
 </head>
<body>
	<div class="outer">
		
		<div class="header-outer">
			<div class="header container">
				<div class="info">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+ (00) 777 4356 088
						</li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="#">info@example.com</a>
						</li>
					</ul>
				</div>
				<div class="search-outer">
					<div class="search">
					<div class="searchbox">
						<input id="text-input" type="textbox" placeholder="Search here">
						</input>
						<button id="send">SEND
						</button>
						<button id="close"><i class="fa fa-times" aria-hidden="true"></i>
						</button>
					</div>
						<span id="search-icon"><i class="fa fa-search " aria-hidden="true"></i></span>
					</div>
					
				<div class="log">
					<button><i class="fa fa-user" aria-hidden="true"></i>LOG IN</button>
					<button><i class="fa fa-user" aria-hidden="true"></i>SIGN UP</button>
				</div>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>	
		
		<div class="nav-outer">
			<div class="nav container">
				<div class="logo"><h1>INTRICATE<span>FOR YOUR HOME DESIGNS</span></h1>
				</div>
				<div class="navigation">
					<button class="button" id="btn">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
					<ul id="toggle">
						<li><a href="">home</a></li>
						<li><a href="">about</a></li>
						<li><a href="">services</a></li>
						<li><a href="">pages</a></li>
						<li><a href="">mail us</a></li>
					</ul>
					
					
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
		
		<div class="slider-outer">


<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170.00">
                <img data-u="image" src="img/banner1.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/banner2.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/banner3.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->

		
		<!--	<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="img/banner1.jpg" />
						</li>
						<li>
							<img src="img/banner2.jpg" />
						</li>
						<li>
							<img src="img/banner3.jpg" />
						</li> 	      	 				  
					</ul>
				</div>
			</section>
		<div></div>-->
		</div>
		
		<div class="content-outer">
		<div class="content">
			<div class="content content-box container">
				<div class="left-content">
					<h2>WE CREATE THE FUTURE</h2>
					<h6><i>We Shape Your Homes</i></h6>
					<p>Quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
					<button class="Left-button">READ MORE</button>
				</div>
				<div class="right-content">
					<div class="outer-image">
						<img class="image" src="img/ab.jpg">
						
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="fours">
					<div class="four-box">
						<div class="box">
							<img src="img/a1.jpg" />
							<i class="fa fa-eye" aria-hidden="true"></i>
							<h3>EXTERIOR DESIGN</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
						</div>
					</div>
					<div class="four-box">
						<div class="box">
							<img src="img/a2.jpg" />
							<i class="fa fa-building-o" aria-hidden="true"></i>
							<h3>INTERIOR DESIGN</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
						</div>
					</div>
					<div class="four-box">
						<div class="box">
							<img src="img/a3.jpg" />
							<i class="fa fa-eraser" aria-hidden="true"></i>
							<h3>LANDSCAPE DESIGN</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
						</div>
					</div>
					<div class="four-box">
						<div class="box">
							<img src="img/a4.jpg" />
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							<h3>DESIGN ESTIMATES</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
						</div>
					</div>
					<div style="clear:both;"></div>
				</div>
						
				
						
				
			</div>
			
			
			
			<div class="service-outer">
				<div class="service container">
					<h3>SERVICES WE DO</h3>
					<p><i>What We Do</i></p>
					
					<div class="triplets-container">
						<div class="triplets-box">
							<div class="triplet">
							<div class="img-box">	
								<img src="img/a3.jpg">
								<div class="tab">
									<h4>INTRICATE DESIGNS</h4>
								</div>	
							</div>	
								
								<h4>RESIDENTIAL DESIGN</h4>
								<p>Our working process</p>
							</div>
						</div>
						
						<div class="triplets-box">
							<div class="triplet">
								<div class="img-box">	
								<img src="img/s2.jpg">
								<div class="tab">
									<h4>INTRICATE DESIGNS</h4>
								</div>	
							</div>	
								
								<h4>COMMERCIAL DESIGN</h4>
								<p>Our working process</p>
							</div>
						</div>
						
						<div class="triplets-box">
							<div class="triplet">
								<div class="img-box">
								<img src="img/s3.jpg">
								<div class="tab">
									<h4>INTRICATE DESIGNS</h4>
								</div>	
							</div>	
								
								<h4>CORPORATE DESIGN</h4>
								<p>Our working process</p>
							</div>
						</div>
						
						<div class="triplets-box">
							<div class="triplet">
								<div class="img-box">
								<img src="img/s4.jpg">
								<div class="tab">
									<h4>INTRICATE DESIGNS</h4>
								</div>	
							</div>	
								
								<h4>HOSPITALITY DESIGN</h4>
								<p>Our working process</p>
							</div>
						</div>
						
						<div class="triplets-box">
							<div class="triplet">
								<div class="img-box">
								<img src="img/s5.jpg">
								<div class="tab">
									<h4>INTRICATE DESIGNS</h4>
								</div>	
							</div>	
								
								<h4>RESTURANT DESIGN</h4>
								<p>Our working process</p>
							</div>
						</div>
						
						<div class="triplets-box">
							<div class="triplet">
								<div class="img-box">
								<img src="img/s6.jpg">
								<div class="tab">
									<h4>INTRICATE DESIGNS</h4>
								</div>	
							</div>	
								
								<h4>INDUSTRIAL DESIGN</h4>
								<p>Our working process</p>
							</div>
						</div>
						
					<div style="clear:both"></div>
					</div>
					
					
				</div>
			</div>
	
			<div class="news-outer">
				<div class="news container">
					<h2>LATEST NEWS</h2>
					<p><i>View Our News</i></p>
					
					<div class="double-box">
						<div class="box-one-outer">
							<div class="box-one">
								
									<img src="img/a111.jpg">
								
							
							</div>
							<div class="box-two b1">
								
								<h4>ECO MATERIALS</h4>
								<i class="fa fa-user" aria-hidden="true"></i>
								<p>By Admin</p>
								<i class="fa fa-calendar-o" aria-hidden="true"></i>
								<p style="color: #1ABC9C;">Jan 15 , 2017 </p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum.</p>
							</div>
						</div>	
						
							<div class="box-one-outer2">
								<div class="box-two b2">
									
									<h4>INTERIOR SOLUTIONS</h4>
									<i class="fa fa-user" aria-hidden="true"></i>
									<p>By Admin</p>
									<i class="fa fa-calendar-o" aria-hidden="true"></i>
									<p style="color: #1ABC9C;"> Feb 21, 2017  </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum.</p>
								</div>
							
						
							
							
								<div class="box-one ">
									
										<img src="img/a222.jpg">
									
								
								</div>
							</div>
						<div style="clear:both"></div>	
						</div>
					
					</div>
					
					<div style="clear:both"></div>
					
				</div>
				
				<div class="testimonial">
					<div class="container">
						
						
						<div class='contents'>
						<div class="heads" style="text-align:center;">
							<h2>TESTIMONIALS</h2>
							<h4>What Our Customers Say</h4>
						</div>
						
  <div class='slider single-item'>
    <div class='quote-container'>
      <div class='portrait octogon'>
        <img alt='' src='http://www.tuacahntech.com/uploads/6/1/7/9/6179841/6166205_orig.jpg'>
      </div>
      <div class='quote'>
        <blockquote>
          <p>Meditation shabby chic master cleanse banh mi Godard. Asymmetrical Wes Anderson Intelligentsia you probably haven't heard of them.</p>
          <cite>
            <span>Kristi McSweeney</span>
            <br>
            Thundercats twee
            <br>
            Austin selvage beard
          </cite>
        </blockquote>
      </div>
    </div>
    <div class='quote-container'>
      <div class='portrait octogon'>
        <img alt='' src='http://static1.squarespace.com/static/51579fb2e4b0fc0d9469ff97/56cc83dfe707ebc39cf3269f/56d0b59e27d4bde4665fded3/1457365822199/'>
      </div>
      <div class='quote'>
        <blockquote>
          <p>Bespoke occupy cred seitan. Austin street art freegan Truffaut leggings aesthetic, salvia chia Brooklyn flexitarian. Single-origin coffee before they sold out health goth, cornhole irony keffiyeh Austin taxidermy mlkshk blog trust fund banh mi you probably haven't heard of them.</p>
          <cite>
            <span>Dina Anderson</span>
            <br>
            Blue Bottle keffiyeh
            <br>
            Sartorial locavore Schlitz ennui
          </cite>
        </blockquote>
      </div>
    </div>
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js'></script>

  

    <script  src="js/index.js"></script>
						
						
					</div>
</div>
				
						
					
				
				
				
				<div class="footer-outer">
					<div class="footer container">
						
						
						<div class="fbox">
							<h3>About Us</h3><hr>
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</p>
						</div>
						
						
						
						<div class="fbox">
							<h3>Links</h3><hr>
							<ul>
								<li>Home</li>
								<li>Services</li>
								<li>About</li>
								<li>Mail Us</li>
							
							</ul>
						</div>
						<div class="hr"></div>
					
						
						<div class="fbox">
							<h3>Twitter Posts</h3><hr>
							<ul>
								<li>Ut aut reiciendis voluptatibus maiores alias, ut aut reiciendis.</li>
								<li> <span><i class="fa fa-twitter" aria-hidden="true"></i></span>02 days ago</li>
								<li>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</li>
								<li> <span><i class="fa fa-twitter" aria-hidden="true"></i></span>03 days ago</li>
							
							</ul>
						
						</div>
						
						<div class="fbox">
							<h3>Instagram</h3><hr>
							<div class="gallery-box">
								<div class="gbox">
									<a href=""><img src="img/a1.jpg"></a>
								</div>
								<div class="gbox">
									<a href=""><img src="img/a2.jpg"></a>
								</div>
								<div class="gbox">
									<a href=""><img src="img/a5.jpg"></a>
								</div>
								<div class="gbox">
									<a href=""><img src="img/a4.jpg"></a>
								</div>
								<div class="gbox">
									<a href=""><img src="img/a1.jpg"></a>
								</div>
								<div class="gbox">
									<a href=""><img src="img/a2.jpg"></a>
								</div>
								<div class="gbox">
									<a href=""><img src="img/a5.jpg"></a>
								</div>
								<div class="gbox">
									<a href=""><img src="img/a4.jpg"></a>
								</div>
								<div class="gbox">
									<a href=""><img src="img/a1.jpg"></a>
								</div>
								<div style="clear:both;"></div>
							</div>

							
								
								
						
						</div>
						<div style="clear:both;"></div>
					</div>
					
					<div class="footer-end-outer">
						<div class="footer-end container">
							<div class="left">
								<p>&copy; 2017 Intricate. All rights reserved | Copied by <span><a href="">JIJO.JOHNSON</a></span></p>
							</div>
							<div class="right">
								<ul>
									<li><span class="tooltip">facebook</span><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									
									<li><span class="tooltip">twitter</span><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><span class="tooltip">google+</span><a href=""><i class="fa fa-google" aria-hidden="true"></i></a></li>
									<li><span class="tooltip">pinterest</span><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><span class="tooltip">instagram</span><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="backto" style="position:fixed;right:2%;bottom:3%;color:red;">
							<a class="top" href="#">
								<span id="arrow" style="font-size: 20px;color:red"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></span>
							</a>
						</div>	

							
						
						
					</div>
					
					
				</div>
			
			</div>
			
		</div>
	
	
	</div>

</body>
</html>