<?php
$PageTitle="首頁";
include_once('header.php');
?>

			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 700px;">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 800, 'gridheight': 700}">
						<ul>
							<li data-transition="fade">
								<img src="img/slides/home_slider_1.JPG"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="-220"
									data-y="center" data-voffset="-25"
									data-start="1500"
									style="z-index: 5"
									data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption top-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-25"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="y:[-300%];opacity:0;s:500;">新鮮人您好！歡迎加入亞洲大學：)</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="220"
									data-y="center" data-voffset="-25"
									data-start="1500"
									style="z-index: 5"
									data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption main-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-95"
									data-start="500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">106 學年度新生專區</div>

								<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
									data-hash
									data-hash-offset="85"
									href="#intro"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="80"
									data-start="2200"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">現在就開始吧！</a>
								
							</li>
						</ul>
					</div>
				</div>
			
				<div class="container">
					<div class="row center" id="intro">
						<br>
						<br>
						<div class="col-md-12">
							<h1 class="mb-sm word-rotator-title">
								請依序完成 - 
								<strong class="inverted">
									<span class="word-rotate" data-plugin-options="{'delay': 2000, 'animDelay': 300}">
										<span class="word-rotate-items">
											<span>入學應辦事項</span>
											<span>基本資料填寫</span>
											<span>優先住宿申請</span>
											<span>家長關懷系統</span>
										</span>
									</span>
								</strong>
							</h1>
						</div>
					</div>
				
				</div>
				
				<div class="home-concept appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
					<svg class="home-concept-bg" x="0px" y="0px" width="345px" height="93px" viewBox="0 0 345 83" enable-background="new 0 0 345 93" xml:space="preserve">
						<image overflow="visible" width="26" height="39" xlink:href="img/home-concept-pin.png" transform="matrix(0.169 0.1308 -0.1308 0.169 339.8496 0.6826)" class="final-pin appear-animation" data-appear-animation="animated-pin" data-appear-animation-delay="3650">
						</image>
						<path class="line appear-animation" fill="none" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-duration="4s" d="M7.086,87.455c8.133-8.646,54.247-51.634,155.173-36.766C268.762,66.38,327.34,17.642,337.992,10.241"/>
						<path fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" d="M7.086,87.455c8.133-8.646,54.247-51.634,155.173-36.766C268.762,66.38,327.34,17.642,337.992,10.241"/>
						<image overflow="visible" width="26" height="39" xlink:href="img/home-concept-pin.png" transform="matrix(0.2137 0 0 0.2137 1 81.5898)" class="initial-pin appear-animation" data-appear-animation="animated-pin">
						</image>
					</svg>
					<div class="container">
				
						<div class="row center">
							<span class="sun"></span>
							<span class="cloud"></span>
							<div class="col-md-2 col-md-offset-1">
								<div class="process-image">
									<div class="box-image">
										<svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39" enable-background="new 0 0 39 39" xml:space="preserve">
											<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="800" cx="19.5" cy="19.5" r="19.063"/>
											<circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
										</svg>
										<img src="img/item-1.jpg" alt="" class="appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="1400" />
									</div>
									<strong class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="1150" data-plugin-options="{'accY': 200}">入學應辦事項</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image">
									<div class="box-image">
										<svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39" enable-background="new 0 0 39 39" xml:space="preserve">
											<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="1200" cx="19.5" cy="19.5" r="19.063"/>
											<circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
										</svg>
										<img src="img/item-2.png" alt="" class="appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="1900" />
									</div>
									<strong class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="2150" data-plugin-options="{'accY': 200}">基本資料填寫</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image">
									<div class="box-image">
										<svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39" enable-background="new 0 0 39 39" xml:space="preserve">
											<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="1700" cx="19.5" cy="19.5" r="19.063"/>
											<circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
										</svg>
										<img src="img/item-3.png" alt="" class="appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="2400" />
									</div>
									<strong class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="2650" data-plugin-options="{'accY': 200}">優先住宿申請</strong>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="project-image">
									<div class="box-image">
										<svg class="big-circle" x="0px" y="0px" width="85px" height="85px" viewBox="0 0 85 85" enable-background="new 0 0 85 85" xml:space="preserve">
											<circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="2250" cx="42.5" cy="42.5" r="42.063"/>
											<circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="42.5" cy="42.5" r="42.063"/>
										</svg>
										<div id="fcSlideshow" class="fc-slideshow appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="2900">
											<ul class="fc-slides">
												<li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="img/item-4.png" alt="" /></a></li>
												<li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="img/item-4.png" alt="" /></a></li>
												<li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="img/item-4.png" alt="" /></a></li>
											</ul>
										</div>
									</div>
									<strong class="our-work appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="3150" data-plugin-options="{'accY': 300}">家長關懷系統</strong>
								</div>
							</div>
						</div>
				
					</div>
				</div>
				
				<div class="container">
				
					<div class="row">
						<hr class="tall">
					</div>
				
				</div>
				
			</div>
<?php
include_once('footer.php');
?>