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

<body <?php body_class('font-body text-body font-normal'); ?>>

	<?php wp_body_open(); ?>

	<header id="navbar"
		class="sticky flex items-center top-0 z-30 w-full inset-x-0 transition-all duration-500 py-4 bg-transparent h-fit xl:py-0 2xl:h-fit">
		<div class="mx-auto w-full px-4 lg:container lg:px-6 3xl:px-4 flex items-center justify-between gap-4">

			<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$image = wp_get_attachment_image_src($custom_logo_id, 'full');

			if ($image) {
				$site_url = get_bloginfo('url');
				$site_description = get_bloginfo('description');
				$logo_url = $image[0];
				?>
				<a href="<?php echo esc_url($site_url); ?>" title="<?php echo esc_attr($site_description); ?>"
					class="flex shrink-0 lg:me-8 w-16 md:w-20 xl:w-auto">
					<img src="<?php echo esc_url($logo_url); ?>" alt="Logo"
						class="main-logo isScrolling:hidden w-[88px] h-9 text-transparent">
				</a>
				<?php
			}
			?>

			<section class="inspect-quick-search-wrapper">
				<!-- search overlay  -->
				<div class="inspect-quick-search-overlay"></div>
				<!-- search form  -->
				<div class="inspect-quick-search-form">
					<span class="inspect-search-icon">
						<svg width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M11.3851 12.4457C8.73488 14.5684 4.85544 14.4013 2.39866 11.9445C-0.237379 9.3085 -0.237379 5.03464 2.39866 2.3986C5.0347 -0.23744 9.30856 -0.23744 11.9446 2.3986C14.4014 4.85538 14.5685 8.73481 12.4458 11.3851L17.6014 16.5407C17.8943 16.8336 17.8943 17.3085 17.6014 17.6014C17.3085 17.8943 16.8337 17.8943 16.5408 17.6014L11.3851 12.4457ZM3.45932 10.8839C1.40907 8.83363 1.40907 5.50951 3.45932 3.45926C5.50957 1.40901 8.83369 1.40901 10.8839 3.45926C12.9327 5.50801 12.9342 8.82875 10.8885 10.8794C10.8869 10.8809 10.8854 10.8823 10.8839 10.8839C10.8824 10.8854 10.8809 10.8869 10.8794 10.8884C8.82882 12.9341 5.50807 12.9326 3.45932 10.8839Z"
								fill="currentColor"></path>
						</svg>
					</span>
					<input type="search" placeholder="Search..." class="inspect-quick-search-input bg-white" value="">
					<input type="hidden" name="inspect_quick_num_product" value="3">
					<input type="hidden" name="product_type" value="rental">
				</div>
				<!-- search results  -->
				<div class="inspect-quick-search-result-wrapper">
					<!-- search results header  -->
					<div class="inspect-quick-search-result-header">
						<p class="inspect-without-search-query"><b></b> <span>Search Result</span></p>
						<p class="inspect-quick-search-result-count"><span>0</span> <span>Items Found</span></p>
					</div>
					<!-- search results  -->
					<div class="quick-search-results" id="quick-search-results"></div>
					<!-- search loader  -->
					<div class="inspect-quick-search-loader">
						<span class="dot-1"></span>
						<span class="dot-2"></span>
						<span class="dot-3"></span>
					</div>
					<!-- not found image and text -->
					<div id="inspectQuickSearchNotFound" class="inspect-empty-product rq-hide">
						<div class="inspect-empty-image-container">
							<img width="198" height="198"
								src="https://turbo.redq.io/wp-content/uploads/2023/07/not-found.png" alt="empty">
						</div>
						<div class="inspect-empty-content-container">
							<p class="inspect-empty-title">No result found</p>
							<p class="inspect-empty-content">Sorry, nothing matched your search terms</p>
						</div>
					</div>
				</div>
			</section>

			<div class="header-right">
				<div class="ml-auto xl:flex items-center gap-4 hidden justify-end shrink-0 header-navigation-menu">
					<div class="menu-turbo-menu-container">
						<ul id="menu-turbo-menu" class="the_menu">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'menu-1',
								'container' => false,
								'fallback_cb' => false,
								'items_wrap' => '%3$s',
								'depth' => 2,

							));
							?>
						</ul>
					</div>
				</div>


				<aside class="turbo-drawer-root turbo-drawer-navigation self-center z-[99]">
					<div
						class="turbo-drawer-content flex flex-col justify-between w-full sm:w-96 start-0 -translate-x-full rtl:translate-x-full md:start-auto md:end-0 md:translate-x-full md:rtl:-translate-x-full bg-white fixed inset-y-0 z-[112] overflow-hidden transition-transform duration-300">
						<div
							class="turbo-drawer-header flex items-center justify-between shrink-0 p-6 sm:py-9 sm:px-8 border-b border-gray-300">


							<a class="flex shrink-0" href="https://turbo.redq.io/">
								<noscript>
									<img alt="logo" src="https://turbo.redq.io/wp-content/uploads/2023/08/logo.png"
										width="88" height="22" decoding="async" data-nimg="1"
										style="color: transparent;"></noscript>
								<img class="lazyload" alt="logo"
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
				<button id="header-search-icon"
					class="text-xl inline-block md:hidden p-3 rounded-full hover:shadow-button transition-all hover:-translate-y-0.5 text-inherit">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
					</svg>
				</button>
			</div>
		</div>
	</header>