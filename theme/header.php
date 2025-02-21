<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<header id="navbar"
		class="sticky flex items-center top-0 z-30 w-full inset-x-0 transition-all duration-500 py-4 bg-transparent xl:py-0 h-[60px] md:h-[70px] lg:h-[80px] 2xl:h-[90px]">
		<div class="mx-auto w-full px-4 lg:container lg:px-6 3xl:px-4 flex items-center justify-between gap-4">

			<a class="flex shrink-0 lg:me-8 w-16 md:w-20 xl:w-auto" href="/">
				<noscript><img alt="logo" src="https://turbo.redq.io/wp-content/uploads/2023/07/logo.svg" width="88"
						height="36" decoding="async" data-nimg="1" style="color: transparent;"
						class="main-logo isScrolling:hidden"></noscript><img alt="logo"
					src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2088%2036%22%3E%3C/svg%3E"
					data-src="https://turbo.redq.io/wp-content/uploads/2023/07/logo.svg" width="88" height="36"
					decoding="async" data-nimg="1" style="color: transparent;"
					class="lazyload main-logo isScrolling:hidden">
				<noscript><img alt="logo" src="https://turbo.redq.io/wp-content/uploads/2023/07/logo.svg" width="88"
						height="36" decoding="async" data-nimg="1" style="color: transparent;"
						class="sticky-logo hidden isScrolling:block"></noscript><img alt="logo"
					src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2088%2036%22%3E%3C/svg%3E"
					data-src="https://turbo.redq.io/wp-content/uploads/2023/07/logo.svg" width="88" height="36"
					decoding="async" data-nimg="1" style="color: transparent;"
					class="lazyload sticky-logo hidden isScrolling:block">
			</a>
			<div class="header-right">
				<div class="ml-auto xl:flex items-center gap-4 hidden justify-end shrink-0 header-navigation-menu">
					<div class="menu-turbo-menu-container">
						<ul id="menu-turbo-menu" class="menu">
							<li
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children">
								<a href="/home">Trang chủ</a><span class="menu-drop-down-selector" title="open">
									<svg width="10" height="6" viewBox="0 0 10 6" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815496 0.921933 0.0815496 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816825 9.52135 0.0816825 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.34549L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z"
											fill="currentColor"></path>
									</svg>
								</span>
								<!-- <ul class="sub-menu">
									<li
										class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2491 current_page_item">
										<a href="https://turbo.redq.io/premium/">Home Premium</a>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="https://turbo.redq.io/luxury/">Home Luxury</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="https://turbo.redq.io/vintage/">Home Vintage</a></li>
								</ul> -->
							</li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								<a href="/car-listing">Danh sách xe hơi</a><span class="menu-drop-down-selector"
									title="open">
									<svg width="10" height="6" viewBox="0 0 10 6" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815496 0.921933 0.0815496 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816825 9.52135 0.0816825 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.34549L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z"
											fill="currentColor"></path>
									</svg>
								</span>
								<!-- <ul class="sub-menu">
									<li class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="https://turbo.redq.io/listing-with-map/">Listing with Map</a></li>
								</ul> -->
							</li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/about">Giới
									thiệu</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/news">Tin
									tức</a></li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/faq">Faq</a>
							</li>
							<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/contact">Liên
									hệ</a></li>
						</ul>
					</div>
				</div>


				<script defer=""
					src="data:text/javascript;base64,CiAgICBqUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCQpIHsKICAgICAgICBmdW5jdGlvbiBpc0VsZW1lbnRvcldpZGdldEV4aXN0KCkgewogICAgICAgICAgICB2YXIgd2lkZ2V0RWxlbWVudCA9ICQoJy5pbnNwZWN0LWhvbWUtc2VhcmNoLWZvcm0nKTsKICAgICAgICAgICAgaWYgKHdpZGdldEVsZW1lbnQubGVuZ3RoID4gMCkgewogICAgICAgICAgICAgICAgJCgnI2hlYWRlci1zZWFyY2gtaWNvbicpLmFkZENsYXNzKCdoaWRkZW4nKTsKICAgICAgICAgICAgfSBlbHNlIHsKICAgICAgICAgICAgICAgICQoJyNoZWFkZXItc2VhcmNoLWljb24nKS5yZW1vdmVDbGFzcygnaGlkZGVuJyk7CiAgICAgICAgICAgIH0KICAgICAgICB9CiAgICAgICAgdmFyIHdpZGdldEV4aXN0cyA9IGlzRWxlbWVudG9yV2lkZ2V0RXhpc3QoKTsKICAgIH0pOwo="></script>


				<aside class="turbo-drawer-root turbo-drawer-navigation self-center z-[99]">
					<div
						class="turbo-drawer-content flex flex-col justify-between w-full sm:w-96 start-0 -translate-x-full rtl:translate-x-full md:start-auto md:end-0 md:translate-x-full md:rtl:-translate-x-full bg-white fixed inset-y-0 z-[112] overflow-hidden transition-transform duration-300">
						<div
							class="turbo-drawer-header flex items-center justify-between shrink-0 p-6 sm:py-9 sm:px-8 border-b border-gray-300">


							<a class="flex shrink-0" href="https://turbo.redq.io/">
								<noscript><img alt="logo"
										src="https://turbo.redq.io/wp-content/uploads/2023/08/logo.png" width="88"
										height="22" decoding="async" data-nimg="1"
										style="color: transparent;"></noscript><img class="lazyload" alt="logo"
									src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2088%2022%22%3E%3C/svg%3E"
									data-src="https://turbo.redq.io/wp-content/uploads/2023/08/logo.png" width="88"
									height="22" decoding="async" data-nimg="1" style="color: transparent;">
							</a>

							<button type="button" id="flyout_close_btn_two" class="turbo-drawer-close">
								<svg width="15" height="15" viewBox="0 0 15 15" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M0.999835 11.9997L11.7891 1" stroke="#4B5563" stroke-width="1.8"
										stroke-linecap="round"></path>
									<path d="M0.999837 1.00028L11.7891 12" stroke="#4B5563" stroke-width="1.8"
										stroke-linecap="round"></path>
								</svg>
							</button>
						</div>
						<!-- end of .turbo-drawer-header -->

						<div class="flyout-body overflow-y-auto">
							<div class="menu-turbo-menu-container">
								<ul id="menu-turbo-menu-1" class="menu mobile-menu">
									<li
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children">
										<a href="https://turbo.redq.io/">Home</a><span class="menu-drop-down-selector"
											title="open">
											<svg width="10" height="6" viewBox="0 0 10 6" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815496 0.921933 0.0815496 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816825 9.52135 0.0816825 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.34549L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z"
													fill="currentColor"></path>
											</svg>
										</span>
										<ul class="sub-menu">
											<li
												class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2491 current_page_item">
												<a href="https://turbo.redq.io/premium/">Home Premium</a>
											</li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="https://turbo.redq.io/luxury/">Home Luxury</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="https://turbo.redq.io/vintage/">Home Vintage</a></li>
										</ul>
									</li>
									<li
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
										<a href="https://turbo.redq.io/car-listing/">Car Listing</a><span
											class="menu-drop-down-selector" title="open">
											<svg width="10" height="6" viewBox="0 0 10 6" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815496 0.921933 0.0815496 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816825 9.52135 0.0816825 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.34549L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z"
													fill="currentColor"></path>
											</svg>
										</span>
										<ul class="sub-menu">
											<li class="menu-item menu-item-type-post_type menu-item-object-page"><a
													href="https://turbo.redq.io/listing-with-map/">Listing with Map</a>
											</li>
										</ul>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="https://turbo.redq.io/about/">About</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="https://turbo.redq.io/news/">News</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="https://turbo.redq.io/faq/">Faq</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page"><a
											href="https://turbo.redq.io/contact-us/">Contact Us</a></li>
								</ul>
							</div>
						</div>

						<div class="pb-8 px-8 pt-4 mt-auto">
							<button
								class="justify-center items-center gap-4 uppercase font-medium text-dark-text hidden">
								<span class="bg-brand p-4 rounded-full inline-block">
									<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none"
										viewBox="0 0 20 20">
										<path fill="#fff"
											d="M5.667.25a1 1 0 0 1 .76.323 1 1 0 0 1 .323.76c0 .292-.108.545-.323.76a1 1 0 0 1-.76.324H4.583c-.43 0-.81.088-1.14.266a1.72 1.72 0 0 0-.76.741c-.178.33-.266.716-.266 1.16v10.833c0 .43.088.81.266 1.14.177.33.43.583.76.76.33.178.71.266 1.14.266h1.084a1 1 0 0 1 .76.323 1 1 0 0 1 .323.76c0 .292-.108.546-.323.761a1 1 0 0 1-.76.323H4.583a4.219 4.219 0 0 1-2.166-.59 4.478 4.478 0 0 1-1.578-1.577 4.219 4.219 0 0 1-.589-2.166V4.583c0-.785.196-1.507.59-2.166A4.282 4.282 0 0 1 2.416.839 4.22 4.22 0 0 1 4.583.25h1.084Zm9.427 14.844c-.19.215-.444.323-.76.323a1.04 1.04 0 0 1-.76-.323 1.04 1.04 0 0 1-.324-.76c0-.317.108-.57.323-.76l4.22-4.22c.063-.064.107.031.133.285.025.24.025.488 0 .741-.026.24-.07.33-.134.266l-4.219-4.22a1 1 0 0 1-.323-.76 1 1 0 0 1 .323-.76 1.04 1.04 0 0 1 .76-.323c.317 0 .57.108.76.323l4.22 4.22c.24.228.361.52.361.874 0 .342-.12.633-.361.874l-4.22 4.22Zm3.573-6.177c.304 0 .557.107.76.323.215.203.323.456.323.76 0 .291-.108.545-.323.76a1.001 1.001 0 0 1-.76.323h-13a1.04 1.04 0 0 1-.76-.323 1.04 1.04 0 0 1-.324-.76 1 1 0 0 1 .323-.76 1.04 1.04 0 0 1 .76-.323h13Z">
										</path>
									</svg>
								</span>
								Log out
							</button>

							<!-- end of .drawer logout button -->
						</div>
					</div>
					<!-- end of .turbo-drawer-content -->

					<div
						class="turbo-drawer-overlay fixed inset-0 bg-black/50 backdrop-blur-sm z-50 transition-all duration-300 cursor-pointer opacity-0 invisible pointer-events-none">
					</div>
					<!-- end of .turbo-drawer-overlay -->
				</aside>
			</div>
		</div>
	</header>