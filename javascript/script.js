(() => {
	// javascript/script.js
	(function ($) {
		window.onload = function () {
			$(document).ready(function () {
				menuMobile();
				backToTop();
				toggleContent();
				handleNavbarScroll();
				openContent();
				initUIHandlers();
			});
		};
		function menuMobile() {
			const elements = ['.bar__mb', '.header__menu'];
			if (elements.some((el) => $(el).length)) {
				$('.bar__mb').click(function () {
					$('.header__menu').toggleClass('active');
					$('.overlay').toggleClass('active');
					$('html').toggleClass('overflow-hidden');
				});
				$('.overlay').click(function () {
					$('.header__menu').removeClass('active');
					$('.overlay').removeClass('active');
					$('html').removeClass('overflow-hidden');
				});
			}
			$('.header__menu ul li.menu-item-has-children>ul').before(
				`<span class="li-plus"></span>`
			);

			if ($('.li-plus').length) {
				$('.li-plus').click(function (e) {
					$(this).toggleClass('clicked');
					$(this).next('.sub-menu').slideToggle(200);
					$(this)
						.parent()
						.siblings()
						.find('.li-plus')
						.removeClass('clicked')
						.siblings('.sub-menu')
						.slideUp();
				});
			}
		}

		function backToTop() {
			var $backToTop = $('.back-to-top');
			$backToTop.hide();

			$(window).on('scroll', function () {
				if ($(this).scrollTop() > 200) {
					$backToTop.fadeIn();
				} else {
					$backToTop.fadeOut();
				}
			});

			$backToTop.on('click', function (e) {
				$('html, body').animate({ scrollTop: 0 }, 50);
			});
		}

		function toggleContent() {
			$('.search-icon').click(function (event) {
				event.stopPropagation();
				let $formSearch = $(this).next();
				$formSearch.toggleClass('active');
			});

			$(document).click(function (event) {
				if (
					!$(event.target).closest('.search-icon,.search-wrapper')
						.length
				) {
					$('.search-wrapper').removeClass('active');
				}
			});
		}

		//Open sidebar on mobile screen
		// const toggleBtn = document.getElementById('toggleBtn');
		// const closeBtn = document.getElementById('closeBtn');
		// const sidebar = document.getElementById('sidebar');

		// toggleBtn.addEventListener('click', () => {
		// 	sidebar.classList.add('active');
		// });

		// closeBtn.addEventListener('click', () => {
		// 	sidebar.classList.remove('active');
		// });

		//Navbar header
		function handleNavbarScroll() {
			const navbar = document.getElementById('navbar');
			if (!navbar) return;

			window.addEventListener('scroll', function () {
				if (window.scrollY > 100) {
					navbar.classList.remove('bg-transparent');
					navbar.classList.add('bg-white', 'shadow-md');
					console.log('style added');
				} else {
					navbar.classList.remove('bg-white', 'shadow-md');
					navbar.classList.add('bg-transparent');
					console.log('style removed');
				}
			});
		}

		function openContent() {
			$(this).parent().toggleClass('active');
			$(this).toggleClass('active');
			$(this).siblings('.accordion-body').slideToggle();
		}

		$('.accordion-toggle').on('click', openContent);

		var $searchInput = $('#faq_search');
		$searchInput.on('input', function () {
			var searchQuery = $(this).val().toLowerCase();
			$('.content_card').each(function () {
				var $faqTitle = $(this).find('.accordion_title');
				var faqTitleText = $faqTitle.text().toLowerCase();
				if (faqTitleText.indexOf(searchQuery) !== -1) {
					$(this).show();
				} else {
					$(this).hide();
				}
			});
		});

		function initUIHandlers() {
			function useFreezeBodyScroll(freezeState) {
				if (typeof freezeState !== 'boolean') {
					console.error(
						'useFreezeBodyScroll param should be a boolean type value.'
					);
					return false;
				}
				var scrollbarWidth = getBodyScrollbarWidth();
				var html = $('html');
				var wpadminbar = $('#wpadminbar');
				var demoSwitcherBtnWrapper = $('#demo-switch-btn-wrapper');

				if (freezeState) {
					html.addClass('overflow-hidden');
					html.css('padding-right', `${scrollbarWidth}px`);
					wpadminbar.css('padding-right', `${scrollbarWidth}px`);
					if (demoSwitcherBtnWrapper.length) {
						demoSwitcherBtnWrapper.css('display', 'none');
					}
				} else {
					html.removeClass('overflow-hidden');
					html.css('padding-right', '0px');
					wpadminbar.css('padding-right', '0px');
					if (demoSwitcherBtnWrapper.length) {
						demoSwitcherBtnWrapper.css('display', 'block');
					}
				}
			}

			function getBodyScrollbarWidth() {
				const outer = document.createElement('div');
				outer.style.visibility = 'hidden';
				outer.style.overflow = 'scroll';
				outer.style.msOverflowStyle = 'scrollbar';
				document.body.appendChild(outer);
				const inner = document.createElement('div');
				outer.appendChild(inner);
				const scrollbarWidth = outer.offsetWidth - inner.offsetWidth;
				outer.parentNode.removeChild(outer);
				return scrollbarWidth;
			}

			// Sự kiện click cho tìm kiếm
			$('#header-search-icon').click(function () {
				$('.inspect-quick-search-wrapper').addClass('mobile-view');
				$('.inspect-quick-search-overlay').addClass('is-active');
				$('.inspect-quick-search-form').addClass('is-active');
				$('.inspect-quick-search-result-wrapper').addClass('is-active');
			});

			$('.inspect-quick-search-overlay').click(function () {
				$('.inspect-quick-search-wrapper').removeClass('mobile-view');
				$('.inspect-quick-search-overlay').removeClass('is-active');
				$('.inspect-quick-search-form').removeClass('is-active');
				$('.inspect-quick-search-result-wrapper').removeClass(
					'is-active'
				);
			});

			// Drawer mở
			$('.medium-drawer-handler').click(function () {
				$('.medium-drawer-content').removeClass('translate-x-full');
				useFreezeBodyScroll(true);
				$('.medium-drawer-overlay').removeClass(
					'opacity-0 invisible pointer-events-none'
				);
			});

			// Drawer đóng
			$('#drawer_close_btn, .medium-drawer-overlay').click(function () {
				$('.medium-drawer-content').addClass('translate-x-full');
				useFreezeBodyScroll(false);
				$('.medium-drawer-overlay').addClass(
					'opacity-0 invisible pointer-events-none'
				);
			});
		}
	})(jQuery);
})();
