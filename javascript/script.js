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
	})(jQuery);
})();
