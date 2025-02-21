<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

?>
<footer class="mt-8 md:mt-12">
	<div class="footer-widgets container mb-8 mx-auto px-4 lg:px-6 3xl:px-4">
		<div class="grid gap-8 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-6 2xl:mt-24 md:mt-16 mt-12">

			<div class="col-span-full text-sm text-light-text lg:col-span-2 widget_turbo_logo_widget">
				<div class="mb-5 md:mb-7 lg:mb-0">
					<a class="flex" href="/">
						<noscript><img loading="lazy" alt="site_logo"
								src="https://turbo.redq.io/wp-content/uploads/2023/06/logo.svg" width="88" height="36"
								decoding="async" data-nimg="1" style="color: transparent;"></noscript><img
							class="lazyload" loading="lazy" alt="site_logo"
							src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2088%2036%22%3E%3C/svg%3E"
							data-src="https://turbo.redq.io/wp-content/uploads/2023/06/logo.svg" width="88" height="36"
							decoding="async" data-nimg="1" style="color: transparent;">
					</a>
					<p class="my-5 max-w-xs leading-loose text-[15px]">We design products that delight and inspire
						people, and grow your business.</p>
					<div class="footer-social flex items-center gap-4">
						<a href="https://www.facebook.com/" aria-label="Read more in social media">
							<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<circle cx="20" cy="20" r="20" fill="#3B5998"></circle>
								<path
									d="M20 31C26.0751 31 31 26.0751 31 20C31 13.9249 26.0751 9 20 9C13.9249 9 9 13.9249 9 20C9 26.0751 13.9249 31 20 31Z"
									fill="#3B5998"></path>
								<path
									d="M23.5217 19.4836H21.1971V28H17.6751V19.4836H16V16.4906H17.6751V14.5538C17.6751 13.1688 18.333 11 21.2284 11L23.8373 11.0109V13.9161H21.9444C21.6339 13.9161 21.1973 14.0713 21.1973 14.732V16.4934H23.8294L23.5217 19.4836Z"
									fill="white"></path>
							</svg>
						</a>
						<a href="" aria-label="Read more in social media">
							<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<circle cx="20" cy="20" r="20" fill="#0077B5"></circle>
								<path
									d="M16.4792 14.1849C16.4792 14.6163 16.3513 15.038 16.1117 15.3966C15.872 15.7553 15.5314 16.0349 15.1329 16.1999C14.7343 16.365 14.2958 16.4082 13.8727 16.324C13.4496 16.2399 13.061 16.0322 12.756 15.7271C12.451 15.4221 12.2433 15.0335 12.1591 14.6104C12.0749 14.1873 12.1181 13.7488 12.2832 13.3503C12.4483 12.9518 12.7278 12.6111 13.0865 12.3715C13.4452 12.1318 13.8668 12.0039 14.2982 12.0039C14.8767 12.0039 15.4314 12.2337 15.8404 12.6427C16.2494 13.0517 16.4792 13.6065 16.4792 14.1849Z"
									fill="white"></path>
								<path
									d="M15.9846 17.8202V27.4559C15.985 27.527 15.9713 27.5975 15.9444 27.6633C15.9174 27.7291 15.8778 27.7889 15.8276 27.8393C15.7775 27.8897 15.7179 27.9297 15.6523 27.957C15.5866 27.9843 15.5162 27.9983 15.4452 27.9983H13.1464C13.0753 27.9985 13.0049 27.9846 12.9391 27.9575C12.8734 27.9304 12.8137 27.8906 12.7635 27.8403C12.7132 27.79 12.6734 27.7303 12.6463 27.6646C12.6191 27.5989 12.6053 27.5285 12.6055 27.4574V17.8202C12.6055 17.6767 12.6625 17.5392 12.7639 17.4377C12.8653 17.3363 13.0029 17.2793 13.1464 17.2793H15.4452C15.5884 17.2797 15.7256 17.3368 15.8267 17.4382C15.9278 17.5396 15.9846 17.677 15.9846 17.8202Z"
									fill="white"></path>
								<path
									d="M28.0014 22.8363V27.5008C28.0016 27.5662 27.9889 27.6309 27.964 27.6913C27.9391 27.7518 27.9024 27.8066 27.8562 27.8529C27.81 27.8991 27.7551 27.9357 27.6947 27.9606C27.6343 27.9855 27.5695 27.9983 27.5042 27.9981H25.0323C24.967 27.9983 24.9022 27.9855 24.8418 27.9606C24.7814 27.9357 24.7265 27.8991 24.6803 27.8529C24.6341 27.8066 24.5975 27.7518 24.5725 27.6913C24.5476 27.6309 24.5349 27.5662 24.5351 27.5008V22.9803C24.5351 22.3056 24.7328 20.0257 22.7713 20.0257C21.2519 20.0257 20.9422 21.5859 20.8811 22.2867V27.5008C20.8811 27.6314 20.8298 27.7568 20.7381 27.8499C20.6464 27.9429 20.5217 27.9962 20.3911 27.9981H18.0036C17.9384 27.9981 17.8738 27.9852 17.8136 27.9602C17.7533 27.9352 17.6986 27.8985 17.6525 27.8523C17.6065 27.8062 17.57 27.7513 17.5451 27.691C17.5203 27.6307 17.5076 27.566 17.5078 27.5008V17.7778C17.5076 17.7126 17.5203 17.6479 17.5451 17.5876C17.57 17.5273 17.6065 17.4725 17.6525 17.4263C17.6986 17.3801 17.7533 17.3434 17.8136 17.3184C17.8738 17.2934 17.9384 17.2805 18.0036 17.2805H20.3911C20.523 17.2805 20.6495 17.3329 20.7428 17.4262C20.836 17.5194 20.8884 17.6459 20.8884 17.7778V18.6182C21.4526 17.772 22.2886 17.1191 24.0727 17.1191C28.0247 17.1191 28.0014 20.8094 28.0014 22.8363Z"
									fill="white"></path>
							</svg>
						</a>
						<a href="https://www.youtube.com/" aria-label="Read more in social media">
							<svg width="40" height="40" viewBox="0 0 40 40" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<circle cx="20" cy="20" r="20" fill="#E74D4D"></circle>
								<g clip-path="url(#clip0_95_3703)">
									<path
										d="M29.5577 14.9421L29.5827 15.1055C29.3411 14.248 28.6886 13.5863 27.8594 13.3455L27.8419 13.3413C26.2827 12.918 20.0086 12.918 20.0086 12.918C20.0086 12.918 13.7502 12.9096 12.1752 13.3413C11.3302 13.5863 10.6769 14.248 10.4394 15.088L10.4352 15.1055C9.85275 18.148 9.84858 21.8038 10.4611 25.0613L10.4352 24.8963C10.6769 25.7538 11.3294 26.4155 12.1586 26.6563L12.1761 26.6605C13.7336 27.0846 20.0094 27.0846 20.0094 27.0846C20.0094 27.0846 26.2669 27.0846 27.8427 26.6605C28.6886 26.4155 29.3419 25.7538 29.5794 24.9138L29.5836 24.8963C29.8486 23.4813 30.0002 21.853 30.0002 20.1896C30.0002 20.1288 30.0002 20.0671 29.9994 20.0055C30.0002 19.9488 30.0002 19.8813 30.0002 19.8138C30.0002 18.1496 29.8486 16.5213 29.5577 14.9421ZM18.0069 23.0438V16.9663L23.2286 20.0096L18.0069 23.0438Z"
										fill="white"></path>
								</g>
							</svg>
						</a>
					</div>
				</div>
			</div>
			<div class="text-sm widget_nav_menu">
				<h2 class="widget-title leading-5 uppercase font-semibold text-base mb-6 text-brand">Thông tin chi tiết
				</h2>
				<div class="menu-footer-menu-1-container">
					<ul id="menu-footer-menu-1" class="menu flex flex-col">
						<li id="menu-item-4887"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4887"><a
								href="/">Trunn tâm hỗ trợ</a></li>
						<li id="menu-item-4888"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4888"><a
								href="/">Hỗ trợ khách hàng</a></li>
						<li id="menu-item-4889"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4889"><a
								href="https://turbo.redq.io/about/">Giới thiệu</a></li>
						<li id="menu-item-4890"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4890"><a
								href="/">Bản quyền</a></li>
						<li id="menu-item-4891"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4891"><a
								href="/news">Chiến dịch phổ biến</a></li>
					</ul>
				</div>
			</div>
			<div class="text-sm widget_nav_menu">
				<h2 class="widget-title leading-5 uppercase font-semibold text-base mb-6 text-brand">Dịch vụ</h2>
				<div class="menu-footer-menu-2-container">
					<ul id="menu-footer-menu-2" class="menu flex flex-col">
						<li id="menu-item-4892"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4892"><a
								href="/">Dữ liệu của chúng tôi</a></li>
						<li id="menu-item-4893"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4893"><a
								href="/">Xác minh trang web của bạn</a></li>
						<li id="menu-item-4894"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4894"><a
								href="/">Tiện ích trình duyệt</a></li>
						<li id="menu-item-4895"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4895"><a
								href="https://turbo.redq.io/privacy-policy/">Chính sách bảo mật</a></li>
					</ul>
				</div>
			</div>
			<div class="text-sm widget_nav_menu">
				<h2 class="widget-title leading-5 uppercase font-semibold text-base mb-6 text-brand">Việc làm</h2>
				<div class="menu-footer-menu-3-container">
					<ul id="menu-footer-menu-3" class="menu flex flex-col">
						<li id="menu-item-4901"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4901"><a
								href="#">Chính sách hoàn trả</a></li>
						<li id="menu-item-4902"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4902"><a
								href="https://turbo.redq.io/privacy-policy/">Chính sách bảo mật</a></li>
						<li id="menu-item-4903"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4903"><a
								href="/">Điều khoản & Điều kiện</a></li>
						<li id="menu-item-4904"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4904"><a
								href="#">Bản đồ trang web</a></li>
						<li id="menu-item-4905"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4905"><a
								href="#">Store Hours</a></li>
					</ul>
				</div>
			</div>
			<div class="text-sm widget_nav_menu">
				<h2 class="widget-title leading-5 uppercase font-semibold text-base mb-6 text-brand">Về chúng tôi</h2>
				<div class="menu-footer-menu-4-container">
					<ul id="menu-footer-menu-4" class="menu flex flex-col">
						<li id="menu-item-4896"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4896"><a
								href="#">Yêu cầu báo chí</a></li>
						<li id="menu-item-4897"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4897"><a
								href="#">Mạng xã hội</a></li>
						<li id="menu-item-4898"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4898"><a
								href="#">Directories</a></li>
						<li id="menu-item-4899"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4899"><a
								href="#">Images & B-roll</a></li>
						<li id="menu-item-4900"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4900"><a
								href="https://turbo.redq.io/contact-us/">Liên hệ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div
		class="container px-4 lg:px-6 3xl:px-0 py-6 lg:py-8 mx-auto w-full border-t border-t-gray-300 flex flex-col-reverse items-center justify-between text-xs text-light-text sm:text-sm gap-4 lg:flex-row font-body">

		<p
			class="mb-0 max-w-xl w-full [&>a]:font-semibold [&>a]:hover:underline [&>a]:inline-block text-center lg:text-start">
			© 2023 All rights reserved by <a href="https://redq.io/">RedQ</a> </p>
		<!-- End copyright text -->

		<!-- <div class="flex items-center justify-center w-full gap-3 pt-5 mt-5 border-t border-dashed lg:m-0 lg:border-0 lg:p-0">
									<a href="https://www.example.com" target="_current">
											<span> Text </span>
									</a>
							</div> -->
		<!-- End social profile -->

		<div
			class="flex items-center whitespace-nowrap flex-wrap lg:shrink-0 capitalize justify-center gap-x-8 gap-y-3 2xl:gap-x-12 mb-3 lg:mb-0">
			<a href="#" target="">Terms of use</a>
			<span class="mx-0.5 text-lg hidden">·</span>
			<a href="https://turbo.redq.io/privacy-policy/" target="">Privacy</a>
			<span class="mx-0.5 text-lg hidden">·</span>
			<a href="#" target="">Cookie settings</a>
			<span class="mx-0.5 text-lg hidden">·</span>
			<a href="#" target="">Legal Disclaimer</a>
		</div>
		<!-- End quick links -->

	</div>
</footer>
<div
	class="back-to-top fixed bottom-14 right-7 w-10 h-10 rounded-full m-auto bg-slate-200  cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
	<?php echo svg('back-top', '20', '20', 'm-auto h-full') ?>
</div>
<?php wp_footer(); ?>

</body>

</html>