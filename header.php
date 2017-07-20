<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title><?= isset($PageTitle) ? $PageTitle : " "?> | 亞洲大學 107 學年度新生專區 Asia University, Taiwan</title>	

		<meta name="keywords" content="亞洲大學, 新生" />
		<meta name="description" content="亞洲大學新生入學須知與注意事項">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		 <link rel="apple-touch-icon" href="img/favicon.ico"> 

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0'}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="index.php">
										<img alt="Asia University" height="50" src="img/logo.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<!-- <ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul> -->
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="<?= isset($MenuToggle1) ? $MenuToggle1 : " "?>">
														<a href="admission.php">
															入學應辦事項
														</a>
													</li>
													<li class="<?= isset($MenuToggle2) ? $MenuToggle2 : " "?>">
														<a href="#">
															基本資料填寫
														</a>														
													</li>
													<li class="<?= isset($MenuToggle3) ? $MenuToggle3 : " "?>">
														<a href="#">
															優先住宿申請
														</a>														
                                                    </li>
                                                    <li class="<?= isset($MenuToggle4) ? $MenuToggle4 : " "?>">
														<a href="#">
															家長關懷系統
														</a>														
                                                    </li>                                                    
                                                    <li class="dropdown <?= isset($MenuToggle5) ? $MenuToggle5 : " "?>">
														<a class="dropdown-toggle" href="index.html">
															聯絡資訊及行事曆
														</a>
														<ul class="dropdown-menu">
															<li>
																<a href="#">
																	服務窗口
																</a>
															</li>
															<li>
																<a href="#">
																	系所聯絡
																</a>
                                                            </li>
                                                            <li>
																<a href="#">
																	年度行事曆
																</a>
                                                            </li>
														</ul>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>