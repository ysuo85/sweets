<?php include_once("home.html"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Licensed under the MIT license.

			Copyright (c) 2011-2012 Viljami Salminen, http://viljamis.com/

			Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

			The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

			THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
		-->

		<script src="responsiveslides.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="mystyle.css">

		<title>
			Welcome to SWEETS (Safety When I Enter and Exit Train Station)
		</title>

		<script>
			var introIn = function(selector){
				$(selector).each(function(index){
					$(this).delay(1000*index).fadeIn(1000);
				});
			};


			var introOut = function(selector){
				$(selector).delay(4000).fadeOut(1000);
			};


			$(document).ready(function(){
				$('.intro, .also-known').each(function(){
					$(this).hide();
				});

				tc = 0;
				var captionAnimation = setInterval(function(){
					switch(tc/1000){
						case 0:
							$('#presents').fadeIn(1000);
							break;
						case 1:
							$('#rainbow-sweets').fadeIn(1000);
							break;
						case 4:
							$('.intro-out').fadeOut(1000);
							break;
						case 5:
							$('.also-known').fadeIn(1000);
							break;
						case 7:
							clearInterval(captionAnimation);
							break;
					}
					tc += 1000;
				}, 1000);
			});
		</script>

	</head>
	
	<body>
		<div class="gho-header">
			General Human Outreach <i>in the Community, Inc.</i>
		</div> 

		<div class="slide-container">
			<ul class="rslides">
				<li>
					<div class="intro-out">
						<div class="text-center intro" id="presents">
							<h4>Presents</h4>
						</div>

						<div class="text-center intro" id="rainbow-sweets"> 
							<h1><span class="rainbow">SWEETS</span></h1>
						</div> 
					</div>


					<div class="text-center also-known">
						<h1><font color="red">S</font>afety <font color="orange">W</font>hen I <font color="gold">E</font>nter and <font color="green">E</font>xit <font color="blue">T</font>rain Station</h1>
					</div> 
				</li>
				<li>
					<h1>test</h1>
					test
				</li>
				<li>
					another test
				</li>
			</ul>
			<div class="slider-control"></div>
		</div>

		<script>
			$(".rslides").responsiveSlides({
			  auto: false,             // Boolean: Animate automatically, true or false
			  speed: 500,            // Integer: Speed of the transition, in milliseconds
			  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
			  pager: true,           // Boolean: Show pager, true or false
			  nav: false,             // Boolean: Show navigation, true or false
			  random: false,          // Boolean: Randomize the order of the slides, true or false
			  pause: false,           // Boolean: Pause on hover, true or false
			  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			  prevText: "Previous",   // String: Text for the "previous" button
			  nextText: "Next",       // String: Text for the "next" button
			  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
			  navContainer: ".slider-control",       // Selector: Where controls should be appended to, default is after the 'ul'
			  manualControls: "",     // Selector: Declare custom pager navigation
			  namespace: "rslides",   // String: Change the default namespace used
			  before: function(){},   // Function: Before callback
			  after: function(){}     // Function: After callback
			});
		</script>
	</body>
</html>