<?php

/**
Template Name: Home
 */

get_header();
?>
<main class="w-full">
    <div>


        <div class="relative group horizontal bg-cover bg-center h-[110vh] w-full"
            style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/home-banner-4.png');">

            <div class="container flex items-center w-full h-full relative">
                <div class="p-10 rounded-lg bg-white shadow-custom max-w-[530px] max-sm:w-full">
                    <div class="flex flex-col justify-start">
                        <h3 class="text-3xl font-bold uppercase max-sm:text-lg">Làm cho chuyến đi của bạn dễ dàng và
                            nhanh chóng với Turbo Rental</h3>
                        <p class="text-base leading-[38px] mt-4 max-sm:text-sm">Thuê một chiếc xe để chuyển từ chủ nhà
                            địa phương ở hơn 190 quốc gia.</p>
                    </div>
                    <form class="flex flex-col gap-[30px] mt-[30px]" data-url="https://turbo.redq.io/car-listing/"
                        action="#">
                        <div class="">
                            <h2
                                class="mb-1 uppercase text-primary text-base font-medium leading-[26px] mt-0 text-start max-sm:text-sm">
                                Bạn đến từ đâu</h2>
                            <div class="checkbox-group flex flex-col">
                                <select class="h-11 border rounded-md px-5" name="tex_pickup_location">
                                    <option selected="" value="">Chọn địa điểm</option>
                                    <option value="chicago-il">Chicago, IL</option>
                                    <option value="los-angeles-ca">Los Angeles, CA</option>
                                    <option value="miami-fl">Miami, FL</option>
                                    <option value="new-york-city-ny">New York City, NY</option>
                                    <option value="seattle-wa">Seattle, WA</option>
                                </select>
                                <span class="box-border " dir="ltr" style="width: 319.325px"><span
                                        class="selection"><span class="select2-selection select2-selection--single"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-tex_pickup_location-r9-container"><span
                                                class="select2-selection__rendered"
                                                id="select2-tex_pickup_location-r9-container"></span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="inspect-filter-widget inspect-filter-widget-dropoff">
                            <h2
                                class="mb-1 uppercase text-primary text-base font-medium leading-[26px] mt-0 text-start max-sm:text-sm">
                                Bạn đi đâu</h2>
                            <div class="checkbox-group flex flex-col">
                                <select class="h-11 border rounded-md px-5" name="tex_return_location">
                                    <option selected="" value="">Chọn địa điểm</option>
                                    <option value="chicago-il">Chicago, IL</option>
                                    <option value="los-angeles-ca">Los Angeles, CA</option>
                                    <option value="miami-fl">Miami, FL</option>
                                    <option value="new-york-city-ny">New York City, NY</option>
                                    <option value="seattle-wa">Seattle, WA</option>
                                </select>
                            </div>
                        </div>
                        <div class="inspect-filter-widget inspect-filter-widget-date">
                            <h2 class="mb-1 uppercase text-primary text-base font-medium leading-[26px] mt-0 text-start max-sm:text-sm"
                                id="date-picker">Chọn ngày
                            </h2>
                            <input type="hidden" value="02/12/2025 - 02/12/2025" class="">
                            <label class="relative">
                                <span class="cal-icon inline-block absolute start-3 top-1/2 -translate-y-1/2"><noscript><img
                                            decoding="async"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/date-picker-icon.png"
                                            alt="icon" width='14' height='14'></noscript><img class="lazyload"
                                        decoding="async"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2014%2014%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/05/date-picker-icon.png"
                                        alt="icon" width="14" height="14"></span>
                                <input type="text" readonly=""
                                    class="daterange w-full h-11 border rounded-md pr-5 pl-10" id="daterange"
                                    aria-labelledby="date-picker" week-start="1" date-format="MM/DD/YYYY"
                                    data-day="Su_Mo_Tu_We_Th_Fr_Sa" name="daterange" data-cancel-label="Cancel"
                                    data-apply-label="Apply" value="02/12/2025">
                            </label>
                        </div>
                        <div class="inspect-search-footer">
                            <input type="submit"
                                class="submit-search p-[14px] rounded-md bg-[#111827] text-white text-center w-full"
                                name="send_search" value="Search">
                        </div>
                    </form>
                </div>
            </div>

        </div>


        <section class="pt-[160px] pb-[135px] w-full max-sm:pt-[60px] max-sm:pb-[50px]" data-id="632b9bc"
            data-element_type="section">
            <div>
                <div class="pb-[60px] flex flex-col justify-center items-center" data-id="680e481"
                    data-element_type="widget" data-widget_type="tm_fancy_title.default">

                    <div class="fancy-title-container">
                        <h2 class="font-bold uppercase text-2xl text-center max-sm:text-xl">Cách Turbo Car Rental
                            hoạt động</h2>
                        <p class="mt-[10px] text-base text-center max-sm:text-sm">
                            Giải pháp kinh doanh thích hợp cho doanh nghiệp đang phát triển của bạn
                        </p>
                    </div>
                </div>
                <div class="flex px-2">
                    <div class="lg:container mx-auto px-4 layout-features">
                        <div
                            class="flex max-sm:grid max-sm:grid-cols-1 2xl:grid 2xl:grid-cols-4 gap-5 max-sm:gap-8 2xl:gap-x-10 3xl:gap-16">
                            <div
                                class="wf_card flex flex-col flex-wrap lg:flex-nowrap lg:items-center gap-2 3xl:gap-7 text-center sm:text-start">
                                <figure
                                    class="flex self-start icon_bg rounded-2xl 2xl:rounded-[32px] w-12 lg:w-20 2xl:w-32 sm:m-0">
                                    <img loading="lazy" decoding="async" width="100" height="100"
                                        src="https://turbo.redq.io/wp-content/uploads/2023/07/01.png"
                                        class="w-full h-auto aspect-square" alt="workflow horizontal icon">
                                </figure>
                                <div class="flex-1 text-center sm:text-start">
                                    <h2
                                        class="wf_title text-lg lg:text-xl font-semibold uppercase text-brand max-sm:text-base">
                                        Chọn điều kiện xe hơi</h2>
                                    <p class="wf_content mt-1 2xl:mt-3 text-sm mb-0 leading-loose max-sm:text-sm">
                                        Proper Business solution for your developing business strategies and corporation
                                    </p>
                                </div>
                            </div>

                            <div
                                class="wf_card flex flex-col flex-wrap lg:flex-nowrap lg:items-center gap-2 3xl:gap-7 text-center sm:text-start">
                                <figure
                                    class="flex self-start icon_bg rounded-2xl 2xl:rounded-[32px] w-12 lg:w-20 2xl:w-32 sm:m-0">
                                    <img loading="lazy" decoding="async" width="100" height="100"
                                        src="https://turbo.redq.io/wp-content/uploads/2023/07/02.png"
                                        class="w-full h-auto aspect-square" alt="workflow horizontal icon">
                                </figure>
                                <div class="flex-1 text-center sm:text-start">
                                    <h2
                                        class="wf_title text-lg lg:text-xl font-semibold uppercase text-brand max-sm:text-base">
                                        Chọn danh mục</h2>
                                    <p class="wf_content mt-1 2xl:mt-3 text-sm mb-0 leading-loose max-sm:text-sm">
                                        Proper Business solution for your developing business strategies and corporation
                                    </p>
                                </div>
                            </div>
                            <div
                                class="wf_card flex flex-col flex-wrap lg:flex-nowrap lg:items-center gap-2 3xl:gap-7 text-center sm:text-start">
                                <figure
                                    class="flex self-start icon_bg rounded-2xl 2xl:rounded-[32px] w-12 lg:w-20 2xl:w-32 sm:m-0">
                                    <img loading="lazy" decoding="async" width="100" height="100"
                                        src="https://turbo.redq.io/wp-content/uploads/2023/07/03.png"
                                        class="w-full h-auto aspect-square" alt="workflow horizontal icon">
                                </figure>
                                <div class="flex-1 text-center sm:text-start">
                                    <h2
                                        class="wf_title text-lg lg:text-xl font-semibold uppercase text-brand max-sm:text-base">
                                        Chọn thương hiệu</h2>
                                    <p class="wf_content mt-1 2xl:mt-3 text-sm mb-0 leading-loose max-sm:text-sm">
                                        Proper Business solution for your developing business strategies and corporation
                                    </p>
                                </div>
                            </div>
                            <div
                                class="wf_card flex flex-col flex-wrap lg:flex-nowrap lg:items-center gap-2 3xl:gap-7 text-center sm:text-start">
                                <figure
                                    class="flex self-start icon_bg rounded-2xl 2xl:rounded-[32px] w-12 lg:w-20 2xl:w-32 sm:m-0">
                                    <img loading="lazy" decoding="async" width="100" height="100"
                                        src="https://turbo.redq.io/wp-content/uploads/2023/07/04.png"
                                        class="w-full h-auto aspect-square" alt="workflow horizontal icon">
                                </figure>
                                <div class="flex-1 text-center sm:text-start">
                                    <h2
                                        class="wf_title text-lg lg:text-xl font-semibold uppercase text-brand max-sm:text-base">
                                        Xác nhận mua hàng</h2>
                                    <p class="wf_content mt-1 2xl:mt-3 text-sm mb-0 leading-loose max-sm:text-sm">
                                        Proper Business solution for your developing business strategies and corporation
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="bg-primary pt-[60px] pb-20 px-2 max-sm:pb-[50px] max-sm:pt-10" data-id="ee4c08f"
            data-element_type="section">

            <div class="">

                <div class="cta-container block lg:flex items-center justify-center gap-8 xl:gap-14 2xl:gap-[100px]">

                    <div class="grid grid-cols-2 items-start gap-4 sm:gap-8 lg:gap-4 xl:gap-8 mb-6 sm:mb-10 md:mb-0">

                        <figure class="m-0 xl:max-w-sm w-full">
                            <noscript><img loading="lazy" decoding="async" width="450" height="580"
                                    src="https://turbo.redq.io/wp-content/uploads/2023/07/23.webp"
                                    class="!rounded-xl w-full h-auto aspect-[450/580]" alt="cta posters" loading="lazy"
                                    srcset="https://turbo.redq.io/wp-content/uploads/2023/07/23.webp 450w, https://turbo.redq.io/wp-content/uploads/2023/07/23-233x300.webp 233w"
                                    sizes="(max-width: 450px) 100vw, 450px" /></noscript><img loading="lazy"
                                decoding="async" width="450" height="580"
                                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20450%20580%22%3E%3C/svg%3E"
                                data-src="https://turbo.redq.io/wp-content/uploads/2023/07/23.webp"
                                class="lazyload !rounded-xl w-full h-auto aspect-[450/580]" alt="cta posters"
                                data-srcset="https://turbo.redq.io/wp-content/uploads/2023/07/23.webp 450w, https://turbo.redq.io/wp-content/uploads/2023/07/23-233x300.webp 233w"
                                data-sizes="(max-width: 450px) 100vw, 450px">
                        </figure>

                        <figure class="m-0 xl:max-w-sm w-full">
                            <noscript><img loading="lazy" decoding="async" width="450" height="580"
                                    src="https://turbo.redq.io/wp-content/uploads/2023/07/33.webp"
                                    class="!rounded-xl lg:mt-16 w-full h-auto aspect-[450/580]"
                                    alt="cta optional posters" loading="lazy"
                                    srcset="https://turbo.redq.io/wp-content/uploads/2023/07/33.webp 450w, https://turbo.redq.io/wp-content/uploads/2023/07/33-233x300.webp 233w"
                                    sizes="(max-width: 450px) 100vw, 450px" /></noscript><img loading="lazy"
                                decoding="async" width="450" height="580"
                                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20450%20580%22%3E%3C/svg%3E"
                                data-src="https://turbo.redq.io/wp-content/uploads/2023/07/33.webp"
                                class="lazyload !rounded-xl lg:mt-16 w-full h-auto aspect-[450/580]"
                                alt="cta optional posters"
                                data-srcset="https://turbo.redq.io/wp-content/uploads/2023/07/33.webp 450w, https://turbo.redq.io/wp-content/uploads/2023/07/33-233x300.webp 233w"
                                data-sizes="(max-width: 450px) 100vw, 450px">
                        </figure>

                    </div>

                    <div
                        class="cta-text-container w-full lg:max-w-[540px] mt-6 sm:mt-10 text-white max-sm:flex max-sm:flex-col max-sm:items-center">

                        <p class="cta-text text-[17px] block uppercase mb-3 max-sm:text-[15px] max-sm:text-center">Tại
                            sao bạn nên chọn Turbo Rental</p>

                        <h2
                            class="cta-title font-semibold uppercase text-5xl leading-snug mb-5 max-sm:text-[28px] max-sm:text-center">
                            Thuê một chiếc xe hơi từ chủ sở hữu địa phương ở Iceland</h2>


                        <p class="cta-desc text-base leading-loose mb-7 max-sm:text-sm max-sm:text-center">Được lấy cảm
                            hứng từ một loạt các ngôi nhà xe máy có sẵn cho thuê, tất cả đều được trang bị tốt để phục
                            vụ cho bạn và cuộc phiêu lưu kỳ nghỉ của gia đình bạn. Cho dù bạn đang tìm kiếm một kỳ nghỉ
                            ngắn hay một tour du lịch rộng lớn hơn nữa, chúng tôi có một ngôi nhà xe máy hoàn hảo cho
                            bạn. Kỳ nghỉ với chúng tôi trong sự tự tin.</p>

                        <a href="/shop" target="_blank" rel="nofollow"
                            class="cta-link bg-white text-primary inline-block font-semibold rounded-md px-6 py-3 uppercase hover:text-lighter-text hover:-translate-y-0.5 transition-transform max-sm:w-fit">Khám
                            phá danh sách</a>

                    </div>

                </div>

            </div>
        </section>



        <section class="pt-[100px] pb-[75px] max-sm:py-[60px]" data-id="06c5347" data-element_type="section">
            <div class="flex flex-col justify-center items-center pb-[60px]">
                <h2 class="text-2xl font-bold uppercase text-center">Gặp gỡ những người khác có sẵn xe ô tô</h2>
                <p class="text-light-text leading-7 text-center">
                    Giải pháp kinh doanh thích hợp cho doanh nghiệp đang phát triển của bạn
                </p>
            </div>
            <div class="grid grid-cols-4 gap-7 mx-10 px-4 max-sm:grid-cols-1 max-sm:mx-0" data-id="2b754cd"
                data-element_type="widget" data-widget_type="tm_product_grid.default">

                <div
                    class="product-card flex flex-col justify-between relative rounded-lg bg-bg-white border border-main p-5 transition-all hover:-translate-y-0.5 hover:shadow-large">

                    <a class="flex flex-col h-full"
                        href="https://turbo.redq.io/shop/honda-civic-redefining-excellence/">
                        <h2 class="product-title mb-5 font-medium text-brand transition text-base line-clamp-2">
                            Honda Civic: Redefining Excellence</h2>
                        <span class="flex-grow flex items-center justify-center">
                            <figure
                                class="relative w-full overflow-hidden rounded-lg [&>img]:object-cover [&>img]:w-full [&>img]:aspect-[392/250]">
                                <noscript><img loading="lazy" decoding="async" width="392" height="250"
                                        src="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095917-600x383.png"
                                        class="attachment-392x250 size-392x250 wp-post-image" alt="product image"
                                        loading="lazy"
                                        srcset="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095917-600x383.png 600w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095917-300x191.png 300w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095917-768x490.png 768w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095917.png 919w"
                                        sizes="(max-width: 392px) 100vw, 392px" /></noscript><img loading="lazy"
                                    decoding="async" width="392" height="250"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20392%20250%22%3E%3C/svg%3E"
                                    data-src="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095917-600x383.png"
                                    class="lazyload attachment-392x250 size-392x250 wp-post-image" alt="product image"
                                    data-srcset="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095917-600x383.png 600w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095917-300x191.png 300w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095917-768x490.png 768w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095917.png 919w"
                                    data-sizes="(max-width: 392px) 100vw, 392px">
                            </figure>
                        </span>
                    </a>

                    <div>

                        <div
                            class="mt-5 grid grid-cols-2 gap-4 text-sm text-light-text sm:grid-cols-2 xl:text-xs 2xl:text-sm">
                            <span class="flex items-center gap-2">
                                <figure class="max-w-[20px] block my-0">
                                    <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/seat-belt.svg"
                                            alt="product icon" width='20' height='20'></noscript><img decoding="async"
                                        class="lazyload w-full h-auto aspect-square"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/05/seat-belt.svg"
                                        alt="product icon" width="20" height="20">
                                </figure>
                                <span class="feature-name">Dây an toàn</span>
                            </span>
                            <span class="flex items-center gap-2">
                                <figure class="max-w-[20px] block my-0">
                                    <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/music.svg"
                                            alt="product icon" width='20' height='20'></noscript><img decoding="async"
                                        class="lazyload w-full h-auto aspect-square"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/05/music.svg"
                                        alt="product icon" width="20" height="20">
                                </figure>
                                <span class="feature-name">Âm nhạc</span>
                            </span>
                            <span class="flex items-center gap-2">
                                <figure class="max-w-[20px] block my-0">
                                    <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/car-kits.svg"
                                            alt="product icon" width='20' height='20'></noscript><img decoding="async"
                                        class="lazyload w-full h-auto aspect-square"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/05/car-kits.svg"
                                        alt="product icon" width="20" height="20">
                                </figure>
                                <span class="feature-name">Bộ xe hơi</span>
                            </span>
                            <span class="flex items-center gap-2">
                                <figure class="max-w-[20px] block my-0">
                                    <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/air-bag.svg"
                                            alt="product icon" width='20' height='20'></noscript><img decoding="async"
                                        class="lazyload w-full h-auto aspect-square"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/05/air-bag.svg"
                                        alt="product icon" width="20" height="20">
                                </figure>
                                <span class="feature-name">Túi khí</span>
                            </span>
                        </div>

                        <div class="mt-6 flex justify-between items-center gap-3">
                            <div class="flex items-center gap-2">
                                <span class="product-price text-base font-medium tracking-wide text-brand"><span
                                        class="amount rnb_price_unit_7059"> Chỉ từ <span
                                            class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>10.00</span>/Ngày</span></span>
                            </div>
                            <a href="https://turbo.redq.io/shop/honda-civic-redefining-excellence/" target="_blank"
                                class="book-now-btn inline-block self-center shrink-0 text-sm font-medium text-lighter-text bg-brand px-4 py-2.5 rounded-md uppercase">Đặt
                                ngay</a>
                        </div>
                    </div>
                </div>
                <div
                    class="product-card flex flex-col justify-between relative rounded-lg bg-bg-white border border-main p-5 transition-all hover:-translate-y-0.5 hover:shadow-large">

                    <a class="flex flex-col h-full" href="https://turbo.redq.io/shop/ford-taurus/">
                        <h2 class="product-title mb-5 font-medium text-brand transition text-base line-clamp-2">
                            Ford Taurus</h2>
                        <span class="flex-grow flex items-center justify-center">
                            <figure
                                class="relative w-full overflow-hidden rounded-lg [&>img]:object-cover [&>img]:w-full [&>img]:aspect-[392/250]">
                                <noscript><img loading="lazy" decoding="async" width="392" height="250"
                                        src="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095916-600x383.png"
                                        class="attachment-392x250 size-392x250 wp-post-image" alt="product image"
                                        loading="lazy"
                                        srcset="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095916-600x383.png 600w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095916-300x191.png 300w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095916-768x490.png 768w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095916.png 919w"
                                        sizes="(max-width: 392px) 100vw, 392px" /></noscript><img loading="lazy"
                                    decoding="async" width="392" height="250"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20392%20250%22%3E%3C/svg%3E"
                                    data-src="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095916-600x383.png"
                                    class="lazyload attachment-392x250 size-392x250 wp-post-image" alt="product image"
                                    data-srcset="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095916-600x383.png 600w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095916-300x191.png 300w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095916-768x490.png 768w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095916.png 919w"
                                    data-sizes="(max-width: 392px) 100vw, 392px">
                            </figure>
                        </span>
                    </a>

                    <div>

                        <div
                            class="mt-5 grid grid-cols-2 gap-4 text-sm text-light-text sm:grid-cols-2 xl:text-xs 2xl:text-sm">
                            <span class="flex items-center gap-2">
                                <figure class="max-w-[20px] block my-0">
                                    <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/gps.svg"
                                            alt="product icon" width='20' height='20'></noscript><img decoding="async"
                                        class="lazyload w-full h-auto aspect-square"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/05/gps.svg"
                                        alt="product icon" width="20" height="20">
                                </figure>
                                <span class="feature-name">GPS</span>
                            </span>
                            <span class="flex items-center gap-2">
                                <figure class="max-w-[20px] block my-0">
                                    <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/car-kits.svg"
                                            alt="product icon" width='20' height='20'></noscript><img decoding="async"
                                        class="lazyload w-full h-auto aspect-square"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/05/car-kits.svg"
                                        alt="product icon" width="20" height="20">
                                </figure>
                                <span class="feature-name">Bộ xe hơi</span>
                            </span>
                            <span class="flex items-center gap-2">
                                <figure class="max-w-[20px] block my-0">
                                    <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/air-bag.svg"
                                            alt="product icon" width='20' height='20'></noscript><img decoding="async"
                                        class="lazyload w-full h-auto aspect-square"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/05/air-bag.svg"
                                        alt="product icon" width="20" height="20">
                                </figure>
                                <span class="feature-name">Túi khí</span>
                            </span>
                            <span class="flex items-center gap-2">
                                <figure class="max-w-[20px] block my-0">
                                    <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/abs.svg"
                                            alt="product icon" width='20' height='20'></noscript><img decoding="async"
                                        class="lazyload w-full h-auto aspect-square"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/05/abs.svg"
                                        alt="product icon" width="20" height="20">
                                </figure>
                                <span class="feature-name">ABS</span>
                            </span>
                        </div>

                        <div class="mt-6 flex justify-between items-center gap-3">
                            <div class="flex items-center gap-2">
                                <span class="product-price text-base font-medium tracking-wide text-brand"><span
                                        class="amount rnb_price_unit_7056"> <span
                                            class="woocommerce-Price-amount amount"> CHỉ từ <span
                                                class="woocommerce-Price-currencySymbol">$</span>50.00</span>/ngày</span></span>
                            </div>
                            <a href="https://turbo.redq.io/shop/ford-taurus/" target="_blank"
                                class="book-now-btn inline-block self-center shrink-0 text-sm font-medium text-lighter-text bg-brand px-4 py-2.5 rounded-md uppercase">Đặt
                                ngay</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex justify-center mt-8 lg:mt-10">
                <a href="/car-listing" target="_blank" rel="nofollow"
                    class="explore-btn inline-block px-5 py-4 text-lighter-text bg-brand font-body tracking-widest text-sm font-semibold uppercase rounded-md hover:-translate-y-0.5 transition-all hover:text-lighter-text focus:text-lighter-text">Xem
                    tất cả</a>
            </div>
        </section>



        <section class="px-2 pb-[170px] text-secondary h-fit max-sm:px-0 max-sm:pb-20" data-id="13df88f"
            data-element_type="section">
            <div
                class="bg-primary rounded-lg py-[50px] pr-[60px] mx-[48px] max-sm:px-4 max-sm:pt-10 max-sm:py-[50px] max-sm:mx-0 max-sm:rounded-none">

                <div class="lg:rounded-lg flex items-center gap-6 relative h-full w-full max-sm:flex-col-reverse">

                    <!-- image  -->
                    <figure class="relative z-10 max-w-7xl w-1/2 max-sm:w-full">

                        <img loading="lazy" decoding="async" width="1127" height="271"
                            src="https://turbo.redq.io/wp-content/uploads/2023/07/image-448-1-1536x370.png"
                            class="w-full h-auto aspect-auto" alt="main image" loading="lazy"
                            srcset="https://turbo.redq.io/wp-content/uploads/2023/07/image-448-1-1536x370.png 1536w, https://turbo.redq.io/wp-content/uploads/2023/07/image-448-1-300x72.png 300w, https://turbo.redq.io/wp-content/uploads/2023/07/image-448-1-1024x246.png 1024w, https://turbo.redq.io/wp-content/uploads/2023/07/image-448-1-768x185.png 768w, https://turbo.redq.io/wp-content/uploads/2023/07/image-448-1-600x144.png 600w, https://turbo.redq.io/wp-content/uploads/2023/07/image-448-1.png 1691w"
                            sizes="(max-width: 1127px) 100vw, 1127px" />
                    </figure>

                    <div class="relative z-10 text-white w-1/2 max-sm:w-full max-sm:text-center">

                        <p class="uppercase text-[17px] mb-[14px] max-sm:text-sm">Cung cấp sản phẩm</p>

                        <h2 class="uppercase text-[48px] font-bold max-sm:text-[26px]">Trải nghiệm hỗ trợ khách hàng có
                            giá trị cao</h2>

                        <p class="text-[17px] mt-5 max-sm:text-[15px]">Proper Business solution for your developing
                            business strategies and corporation</p>

                        <a href="/car-listing" target="_blank" rel="nofollow"
                            class="bg-white text-primary font-semibold mt-7 inline-block rounded-md hover:-translate-y-0.5 transition-all px-6 py-3">
                            Khám phá thêm </a>

                    </div>

                </div>
            </div>
        </section>


        <section class="px-[10px] pb-[140px] flex justify-center max-sm:pt-[30px] max-sm:pb-10">
            <div class="cta-container flex flex-col lg:flex-row items-center gap-8 xl:gap-14 2xl:gap-[100px]">

                <div class="text-primary w-full lg:max-w-[540px] mb-10 md:mb-0 order-2 lg:order-1 max-sm:text-center">

                    <p class="block uppercase mb-3 text-[17px] font-medium">Tại sao bạn nên chọn Turbo Rental</p>

                    <h2
                        class="font-bold uppercase text-5xl leading-snug mb-5 max-sm:text-[28px] max-sm:leading-[48px] max-sm:font-bold">
                    </h2>

                    <p class="leading-loose mb-7 text-[17px]">Giải pháp kinh doanh phù hợp cho các chiến lược kinh doanh
                        và tập đoàn đang phát triển của bạn</p>

                    <div
                        class="cta-list-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6 2xl:gap-10 w-full">


                        <div
                            class="cta-list-item flex flex-col items-start gap-2 lg:flex-row lg:items-center lg:gap-5 xl:gap-7 bg-bg-white relative z-10 max-sm:items-center">


                            <figure class="cta-list-icon w-16 m-0">

                                <noscript><img loading="lazy" decoding="async" width="60" height="60"
                                        src="https://turbo.redq.io/wp-content/uploads/2024/01/one.png"
                                        class="w-full h-full object-contain" alt="List icon"
                                        loading="lazy" /></noscript><img loading="lazy" decoding="async" width="60"
                                    height="60"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2060%2060%22%3E%3C/svg%3E"
                                    data-src="https://turbo.redq.io/wp-content/uploads/2024/01/one.png"
                                    class="lazyload w-full h-full object-contain" alt="List icon">
                            </figure>


                            <div>

                                <h4 class="mb-3 text-lg font-semibold uppercase">Chi phí giá cả phải chăng</h4>

                                <p class="mb-0 text-sm leading-loose">Proper
                                    Business solution for your developing business strategies and
                                    corporation</p>

                            </div>

                        </div>


                        <div
                            class="cta-list-item flex flex-col items-start gap-2 lg:flex-row lg:items-center lg:gap-5 xl:gap-7 bg-bg-white relative z-10 max-sm:items-center">


                            <figure class="cta-list-icon w-16 m-0">

                                <noscript><img loading="lazy" decoding="async" width="60" height="60"
                                        src="https://turbo.redq.io/wp-content/uploads/2024/01/two.png"
                                        class="w-full h-full object-contain" alt="List icon"
                                        loading="lazy" /></noscript><img loading="lazy" decoding="async" width="60"
                                    height="60"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2060%2060%22%3E%3C/svg%3E"
                                    data-src="https://turbo.redq.io/wp-content/uploads/2024/01/two.png"
                                    class="lazyload w-full h-full object-contain" alt="List icon">
                            </figure>


                            <div>

                                <h4 class="mb-3 text-lg font-semibold uppercase">Phản hồi của khách hàng 100%</h4>

                                <p class=" mb-0 text-sm leading-loose">Proper
                                    Business solution for your developing business strategies and
                                    corporation</p>

                            </div>

                        </div>


                    </div>

                </div>


                <div class="grid grid-cols-2 items-center 2xl:items-start gap-4 sm:gap-8 lg:gap-4 xl:gap-8 lg:order-2">

                    <figure class="m-0 xl:max-w-sm w-full">
                        <noscript><img loading="lazy" decoding="async" width="450" height="580"
                                src="https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-3.webp"
                                class="!rounded-xl w-full h-auto aspect-[450/580]" alt="CTA image" loading="lazy"
                                srcset="https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-3.webp 450w, https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-3-233x300.webp 233w"
                                sizes="(max-width: 450px) 100vw, 450px" /></noscript><img loading="lazy"
                            decoding="async" width="450" height="580"
                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20450%20580%22%3E%3C/svg%3E"
                            data-src="https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-3.webp"
                            class="lazyload !rounded-xl w-full h-auto aspect-[450/580]" alt="CTA image"
                            data-srcset="https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-3.webp 450w, https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-3-233x300.webp 233w"
                            data-sizes="(max-width: 450px) 100vw, 450px">
                    </figure>

                    <figure class="m-0 xl:max-w-sm w-full">
                        <noscript><img loading="lazy" decoding="async" width="450" height="580"
                                src="https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-4.webp"
                                class="!rounded-xl lg:mt-16 w-full h-auto aspect-[450/580]" alt="CTA image"
                                loading="lazy"
                                srcset="https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-4.webp 450w, https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-4-233x300.webp 233w"
                                sizes="(max-width: 450px) 100vw, 450px" /></noscript><img loading="lazy"
                            decoding="async" width="450" height="580"
                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20450%20580%22%3E%3C/svg%3E"
                            data-src="https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-4.webp"
                            class="lazyload !rounded-xl lg:mt-16 w-full h-auto aspect-[450/580]" alt="CTA image"
                            data-srcset="https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-4.webp 450w, https://turbo.redq.io/wp-content/uploads/2023/07/motivation-img-4-233x300.webp 233w"
                            data-sizes="(max-width: 450px) 100vw, 450px">
                    </figure>

                </div>

            </div>
        </section>



        <section class="bg-[#f8f8f9] py-20 flex flex-col justify-center max-sm:py-[50px]">
            <div class="pb-[70px] flex flex-col justify-center text-center">
                <h2 class="font-bold uppercase text-2xl max-sm:text-xl">Gặp gỡ những chiếc xe khác có sẵn</h2>
                <p class="text-base leading-7 mt-3 max-sm:text-sm">
                    The proper business solution for your developing business
                </p>
            </div>

            <div class="mx-auto 3xl:container 3xl:mx-auto w-full px-4 sm:px-6 !max-w-[1600px] 3xl:px-0 layout-list">
                <div class="products-grid-container grid grid-cols-2 gap-4 2xl:gap-8 3xl:gap-10 max-sm:grid-cols-1">
                    <div
                        class="product-card relative rounded-lg bg-bg-white border border-main p-5 transition-all hover:-translate-y-0.5 hover:shadow-large grid grid-cols-1 sm:grid-cols-[250px_1fr] lg:grid-cols-[150px_1fr] xl:grid-cols-[180px_1fr] 2xl:grid-cols-[250px_1fr] gap-6">
                        <button
                            class="absolute hidden w-8 h-8 rounded-[4px] bg-dark-bg top-4 right-4 justify-center items-center hover:bg-brand hover:text-lighter-text text-brand transition-all z-10"
                            aria-label="add to bookmark">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                </path>
                            </svg>
                        </button>
                        <a class="relative overflow-hidden rounded-lg flex w-full items-center"
                            href="https://turbo.redq.io/shop/tata-safari/">
                            <span class="flex items-center aspect-[244/166]">
                                <figure class="[&>img]:object-cover [&>img]:w-full [&>img]:aspect-[244/166]">
                                    <noscript><img loading="lazy" decoding="async" width="244" height="156"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095915-300x191.png"
                                            class="attachment-244x156 size-244x156 wp-post-image" alt="product image"
                                            loading="lazy"
                                            srcset="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095915-300x191.png 300w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095915-768x490.png 768w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095915-600x383.png 600w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095915.png 919w"
                                            sizes="(max-width: 244px) 100vw, 244px" /></noscript><img loading="lazy"
                                        decoding="async" width="244" height="156"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20244%20156%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095915-300x191.png"
                                        class="lazyload attachment-244x156 size-244x156 wp-post-image"
                                        alt="product image"
                                        data-srcset="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095915-300x191.png 300w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095915-768x490.png 768w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095915-600x383.png 600w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095915.png 919w"
                                        data-sizes="(max-width: 244px) 100vw, 244px">
                                </figure>
                            </span>
                        </a>
                        <div class="flex flex-col justify-between">
                            <a class="block" href="https://turbo.redq.io/shop/tata-safari/">
                                <h2
                                    class="product-title mb-2 block text-sm font-medium text-dark-text transition hover:text-dark-text 2xl:text-base">
                                    Tata Safari</h2>
                            </a>
                            <p class="product-desc text-sm text-light-text tracking-tighter mb-4">Một người bạn đồng
                                hành gồ ghề cho các nhà thám hiểm</p>

                            <div
                                class="mt-3 md:mt-0 grid grid-cols-2 gap-4 text-sm text-dark-text sm:grid-cols-2 xl:text-xs 2xl:text-sm">
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                                src="https://turbo.redq.io/wp-content/uploads/2023/05/seat-belt.svg"
                                                alt="product icon" width='20' height='20'></noscript><img
                                            decoding="async" class="lazyload w-full h-auto aspect-square"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                            data-src="https://turbo.redq.io/wp-content/uploads/2023/05/seat-belt.svg"
                                            alt="product icon" width="20" height="20">
                                    </figure>
                                    <span class="feature-name">Dây an toàn</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                                src="https://turbo.redq.io/wp-content/uploads/2023/05/music.svg"
                                                alt="product icon" width='20' height='20'></noscript><img
                                            decoding="async" class="lazyload w-full h-auto aspect-square"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                            data-src="https://turbo.redq.io/wp-content/uploads/2023/05/music.svg"
                                            alt="product icon" width="20" height="20">
                                    </figure>
                                    <span class="feature-name">Âm nhạc</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                                src="https://turbo.redq.io/wp-content/uploads/2023/05/car-kits.svg"
                                                alt="product icon" width='20' height='20'></noscript><img
                                            decoding="async" class="lazyload w-full h-auto aspect-square"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                            data-src="https://turbo.redq.io/wp-content/uploads/2023/05/car-kits.svg"
                                            alt="product icon" width="20" height="20">
                                    </figure>
                                    <span class="feature-name">Phụ kiện</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                                src="https://turbo.redq.io/wp-content/uploads/2023/05/air-bag.svg"
                                                alt="product icon" width='20' height='20'></noscript><img
                                            decoding="async" class="lazyload w-full h-auto aspect-square"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                            data-src="https://turbo.redq.io/wp-content/uploads/2023/05/air-bag.svg"
                                            alt="product icon" width="20" height="20">
                                    </figure>
                                    <span class="feature-name">Túi khí</span>
                                </span>
                            </div>

                            <div
                                class="product-footer mt-6 flex justify-between gap-3 items-center border-t border-dashed border-main pt-4">
                                <div class="flex items-center gap-2">
                                    <span class="product-price text-base font-medium tracking-wide text-dark-text"><span
                                            class="amount rnb_price_unit_7065"> Chỉ từ <span
                                                class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">$</span>8.00</span>/ngày</span></span>
                                </div>
                                <a href="https://turbo.redq.io/shop/tata-safari/" target="_blank"
                                    class="book-now-btn inline-block self-center shrink-0 text-sm font-medium text-lighter-text bg-black px-4 py-2.5 rounded-md uppercase">Đặt
                                    ngay</a>
                            </div>
                        </div>

                    </div>
                    <div
                        class="product-card relative rounded-lg bg-bg-white border border-main p-5 transition-all hover:-translate-y-0.5 hover:shadow-large grid grid-cols-1 sm:grid-cols-[250px_1fr] lg:grid-cols-[150px_1fr] xl:grid-cols-[180px_1fr] 2xl:grid-cols-[250px_1fr] gap-6">


                        <button
                            class="absolute hidden w-8 h-8 rounded-[4px] bg-dark-bg top-4 right-4 justify-center items-center hover:bg-brand hover:text-lighter-text text-brand transition-all z-10"
                            aria-label="add to bookmark">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                </path>
                            </svg>
                        </button>
                        <a class="relative overflow-hidden rounded-lg flex w-full items-center"
                            href="https://turbo.redq.io/shop/kia-rio-2016/">
                            <span class="flex items-center aspect-[244/166]">
                                <figure class="[&>img]:object-cover [&>img]:w-full [&>img]:aspect-[244/166]">
                                    <noscript><img loading="lazy" decoding="async" width="244" height="156"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914-300x191.png"
                                            class="attachment-244x156 size-244x156 wp-post-image" alt="product image"
                                            loading="lazy"
                                            srcset="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914-300x191.png 300w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914-768x490.png 768w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914-600x383.png 600w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914.png 919w"
                                            sizes="(max-width: 244px) 100vw, 244px" /></noscript><img loading="lazy"
                                        decoding="async" width="244" height="156"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20244%20156%22%3E%3C/svg%3E"
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914-300x191.png"
                                        class="lazyload attachment-244x156 size-244x156 wp-post-image"
                                        alt="product image"
                                        data-srcset="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914-300x191.png 300w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914-768x490.png 768w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914-600x383.png 600w, https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914.png 919w"
                                        data-sizes="(max-width: 244px) 100vw, 244px">
                                </figure>
                            </span>
                        </a>
                        <div class="flex flex-col justify-between">
                            <a class="block" href="https://turbo.redq.io/shop/kia-rio-2016/">
                                <h2
                                    class="product-title mb-2 block text-sm font-medium text-dark-text transition hover:text-dark-text 2xl:text-base">
                                    Kia Rio 2016</h2>
                            </a>
                            <p class="product-desc text-sm text-light-text tracking-tighter mb-4">Một chiếc xe nhỏ gọn
                                động với phong cách và giá trị</p>

                            <div
                                class="mt-3 md:mt-0 grid grid-cols-2 gap-4 text-sm text-dark-text sm:grid-cols-2 xl:text-xs 2xl:text-sm">
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                                src="https://turbo.redq.io/wp-content/uploads/2023/05/music.svg"
                                                alt="product icon" width='20' height='20'></noscript><img
                                            decoding="async" class="lazyload w-full h-auto aspect-square"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                            data-src="https://turbo.redq.io/wp-content/uploads/2023/05/music.svg"
                                            alt="product icon" width="20" height="20">
                                    </figure>
                                    <span class="feature-name">Âm nhạc</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                                src="https://turbo.redq.io/wp-content/uploads/2023/05/gps.svg"
                                                alt="product icon" width='20' height='20'></noscript><img
                                            decoding="async" class="lazyload w-full h-auto aspect-square"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                            data-src="https://turbo.redq.io/wp-content/uploads/2023/05/gps.svg"
                                            alt="product icon" width="20" height="20">
                                    </figure>
                                    <span class="feature-name">GPS</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                                src="https://turbo.redq.io/wp-content/uploads/2023/05/car-kits.svg"
                                                alt="product icon" width='20' height='20'></noscript><img
                                            decoding="async" class="lazyload w-full h-auto aspect-square"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                            data-src="https://turbo.redq.io/wp-content/uploads/2023/05/car-kits.svg"
                                            alt="product icon" width="20" height="20">
                                    </figure>
                                    <span class="feature-name">Phụ kiện</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <noscript><img decoding="async" class="w-full h-auto aspect-square"
                                                src="https://turbo.redq.io/wp-content/uploads/2023/05/audio-input.svg"
                                                alt="product icon" width='20' height='20'></noscript><img
                                            decoding="async" class="lazyload w-full h-auto aspect-square"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E"
                                            data-src="https://turbo.redq.io/wp-content/uploads/2023/05/audio-input.svg"
                                            alt="product icon" width="20" height="20">
                                    </figure>
                                    <span class="feature-name">Đầu vào âm thanh</span>
                                </span>
                            </div>

                            <div
                                class="product-footer mt-6 flex justify-between gap-3 items-center border-t border-dashed border-main pt-4">
                                <div class="flex items-center gap-2">
                                    <span class="product-price text-base font-medium tracking-wide text-dark-text"><span
                                            class="amount rnb_price_unit_7062"> <span
                                                class="woocommerce-Price-amount amount"> Chỉ từ <span
                                                    class="woocommerce-Price-currencySymbol">$</span>100.00</span>/ngày</span></span>
                                </div>
                                <a href="https://turbo.redq.io/shop/kia-rio-2016/" target="_blank"
                                    class="book-now-btn inline-block self-center shrink-0 text-sm font-medium text-lighter-text bg-black px-4 py-2.5 rounded-md uppercase">Đặt
                                    ngay</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex justify-center mt-8 lg:mt-10">
                    <a href="/car-listing" target="_blank" rel="nofollow"
                        class="explore-btn px-4 py-3 lg:px-5 lg:py-4 text-lighter-text bg-brand font-body tracking-widest text-sm font-semibold uppercase rounded-md hover:-translate-y-0.5 transition-all hover:text-lighter-text focus:text-lighter-text cursor-pointer">Xem
                        tất cả</a>
                </div>
            </div>




        </section>



        <section class="pt-[100px] pb-[70px] flex flex-col justify-center max-sm:pt-[50px] max-sm:pb-[50px]">
            <div class="pb-[70px] flex flex-col justify-center text-center">
                <h2 class="font-bold uppercase text-2xl max-sm:text-xl">Những gì tác giả của chúng tôi đăng trên
                    newsfeed</h2>
                <p class="text-base leading-7 mt-3 max-sm:text-sm">
                    The proper business solution for your developing business
                </p>
            </div>

            <div class="mx-auto w-full px-4 lg:container layout-grid">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 gap-y-8 xl:gap-8">
                    <div class="post-card group relative block rounded-lg bg-bg-white">
                        <a href="https://turbo.redq.io/smartdrive-ultimate-mobility-solution/" aria-label="post view">
                            <figure class="relative overflow-hidden rounded-[10px] !mb-5 aspect-[507/300]">
                                <noscript><img loading="lazy" decoding="async" width="507" height="267"
                                        src="https://turbo.redq.io/wp-content/uploads/2021/08/13.webp"
                                        class="w-full !h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-105 wp-post-image"
                                        alt="post image" loading="lazy"
                                        srcset="https://turbo.redq.io/wp-content/uploads/2021/08/13.webp 1500w, https://turbo.redq.io/wp-content/uploads/2021/08/13-300x158.webp 300w, https://turbo.redq.io/wp-content/uploads/2021/08/13-1024x539.webp 1024w, https://turbo.redq.io/wp-content/uploads/2021/08/13-768x404.webp 768w, https://turbo.redq.io/wp-content/uploads/2021/08/13-600x316.webp 600w"
                                        sizes="(max-width: 507px) 100vw, 507px" /></noscript><img loading="lazy"
                                    decoding="async" width="507" height="267"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20507%20267%22%3E%3C/svg%3E"
                                    data-src="https://turbo.redq.io/wp-content/uploads/2021/08/13.webp"
                                    class="lazyload w-full !h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-105 wp-post-image"
                                    alt="post image"
                                    data-srcset="https://turbo.redq.io/wp-content/uploads/2021/08/13.webp 1500w, https://turbo.redq.io/wp-content/uploads/2021/08/13-300x158.webp 300w, https://turbo.redq.io/wp-content/uploads/2021/08/13-1024x539.webp 1024w, https://turbo.redq.io/wp-content/uploads/2021/08/13-768x404.webp 768w, https://turbo.redq.io/wp-content/uploads/2021/08/13-600x316.webp 600w"
                                    data-sizes="(max-width: 507px) 100vw, 507px">
                            </figure>
                        </a>
                        <div>
                            <p class="post_date mb-1 text-sm font-medium text-paragraph-primary">
                                March 10, 2022</p>
                            <h2
                                class="post-title mb-3 block text-sm font-medium transition hover:text-dark-text pt-2 text-brand uppercase xl:text-lg">
                                <a href="https://turbo.redq.io/smartdrive-ultimate-mobility-solution/"
                                    class="line-clamp-2">SmartDrive: Ultimate Mobility Solution</a>
                            </h2>
                            <a class="post-link flex items-center gap-2 font-medium"
                                href="https://turbo.redq.io/smartdrive-ultimate-mobility-solution/">
                                Xem thêm <svg
                                    class="group-hover:translate-x-1 rtl:group-hover:-translate-x-1 rtl:rotate-180 transition-transform duration-200"
                                    width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.38625 10.2275L11 5.61375L6.38625 1" stroke="currentColor"
                                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M10.3555 5.61377H0.999812" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="post-card group relative block rounded-lg bg-bg-white">
                        <a href="https://turbo.redq.io/smartdrive-your-ultimate-car-rental/" aria-label="post view">
                            <figure class="relative overflow-hidden rounded-[10px] !mb-5 aspect-[507/300]">
                                <noscript><img loading="lazy" decoding="async" width="507" height="267"
                                        src="https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2.webp"
                                        class="w-full !h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-105 wp-post-image"
                                        alt="post image" loading="lazy"
                                        srcset="https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2.webp 1500w, https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2-300x158.webp 300w, https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2-1024x539.webp 1024w, https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2-768x404.webp 768w, https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2-600x316.webp 600w"
                                        sizes="(max-width: 507px) 100vw, 507px" /></noscript><img loading="lazy"
                                    decoding="async" width="507" height="267"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20507%20267%22%3E%3C/svg%3E"
                                    data-src="https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2.webp"
                                    class="lazyload w-full !h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-105 wp-post-image"
                                    alt="post image"
                                    data-srcset="https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2.webp 1500w, https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2-300x158.webp 300w, https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2-1024x539.webp 1024w, https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2-768x404.webp 768w, https://turbo.redq.io/wp-content/uploads/2020/09/blog-img-2-600x316.webp 600w"
                                    data-sizes="(max-width: 507px) 100vw, 507px">
                            </figure>
                        </a>
                        <div>
                            <p class="post_date mb-1 text-sm font-medium text-paragraph-primary">
                                February 6, 2020</p>
                            <h2
                                class="post-title mb-3 block text-sm font-medium transition hover:text-dark-text pt-2 text-brand uppercase xl:text-lg">
                                <a href="https://turbo.redq.io/smartdrive-your-ultimate-car-rental/"
                                    class="line-clamp-2">SmartDrive: Your Ultimate Car Rental</a>
                            </h2>
                            <a class="post-link flex items-center gap-2 font-medium"
                                href="https://turbo.redq.io/smartdrive-your-ultimate-car-rental/">
                                Xem thêm <svg
                                    class="group-hover:translate-x-1 rtl:group-hover:-translate-x-1 rtl:rotate-180 transition-transform duration-200"
                                    width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.38625 10.2275L11 5.61375L6.38625 1" stroke="currentColor"
                                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M10.3555 5.61377H0.999812" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="post-card group relative block rounded-lg bg-bg-white">
                        <a href="https://turbo.redq.io/the-three-fundamental-rules-to-keep-your-website-goal-orientated-3/"
                            aria-label="post view">
                            <figure class="relative overflow-hidden rounded-[10px] !mb-5 aspect-[507/300]">
                                <noscript><img loading="lazy" decoding="async" width="507" height="267"
                                        src="https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1.webp"
                                        class="w-full !h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-105 wp-post-image"
                                        alt="post image" loading="lazy"
                                        srcset="https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1.webp 1500w, https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1-300x158.webp 300w, https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1-1024x539.webp 1024w, https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1-768x404.webp 768w, https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1-600x316.webp 600w"
                                        sizes="(max-width: 507px) 100vw, 507px" /></noscript><img loading="lazy"
                                    decoding="async" width="507" height="267"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20507%20267%22%3E%3C/svg%3E"
                                    data-src="https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1.webp"
                                    class="lazyload w-full !h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-105 wp-post-image"
                                    alt="post image"
                                    data-srcset="https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1.webp 1500w, https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1-300x158.webp 300w, https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1-1024x539.webp 1024w, https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1-768x404.webp 768w, https://turbo.redq.io/wp-content/uploads/2020/02/blog-img-1-600x316.webp 600w"
                                    data-sizes="(max-width: 507px) 100vw, 507px">
                            </figure>
                        </a>
                        <div>
                            <p class="post_date mb-1 text-sm font-medium text-paragraph-primary">
                                December 10, 2021</p>
                            <h2
                                class="post-title mb-3 block text-sm font-medium transition hover:text-dark-text pt-2 text-brand uppercase xl:text-lg">
                                <a href="https://turbo.redq.io/the-three-fundamental-rules-to-keep-your-website-goal-orientated-3/"
                                    class="line-clamp-2">An assortment of berries for energizing the
                                    fruits</a>
                            </h2>
                            <a class="post-link flex items-center gap-2 font-medium"
                                href="https://turbo.redq.io/the-three-fundamental-rules-to-keep-your-website-goal-orientated-3/">
                                Xem thêm <svg
                                    class="group-hover:translate-x-1 rtl:group-hover:-translate-x-1 rtl:rotate-180 transition-transform duration-200"
                                    width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.38625 10.2275L11 5.61375L6.38625 1" stroke="currentColor"
                                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M10.3555 5.61377H0.999812" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="my-[70px] flex flex-col justify-center">
            <div class="pb-[70px] text-primary">
                <h2 class="text-2xl font-bold uppercase text-center max-sm:text-xl">Câu hỏi thường gặp</h2>
                <p class="mt-[10px] leading-7 text-center max-sm:text-sm">The proper business solution for your
                    developing business</p>
            </div>

            <div class="mx-[46px] max-sm:mx-0">
                <div class="mx-[279px] max-sm:mx-0 max-sm:px-4">
                    <div class="group  content_card relative accordion-item shadow-faq rounded-md mb-3 py-6">
                        <h2
                            class="accordion_title accordion-toggle text-sm xs:text-base font-semibold leading-5 uppercase cursor-pointer font-body text-brand px-5 lg:px-7 flex justify-between items-start gap-6 group">
                            <span class="flex items-start">
                                <span class="block me-4">01.</span>
                                Why must I make payment immediately at checkout? </span>
                            <span class="accordion-icon group-[&.active]:hidden">
                                <i aria-hidden="true"><?php echo svg('plus', '25', '25') ?></i>
                            </span>
                            <span class="accordion-icon hidden group-[&.active]:inline-block -mt-1">
                                <i aria-hidden="true"><?php echo svg('dash', '25', '25') ?></i>
                            </span>
                        </h2>
                        <div class="accordion-body mt-4 hidden ps-16 px-10 py-4">
                            <p class="accordion_content mb-0 text-[15px] leading-7 text-light-text">
                                Sample ordering is on ‘first-come-first-served’ basis. To ensure
                                that you get your desired samples, it is recommended that you make
                                your payment within 60 minutes of checking out.</p>
                        </div>
                    </div>
                    <div class="group  content_card relative accordion-item shadow-faq rounded-md mb-3 py-6">
                        <h2
                            class="accordion_title accordion-toggle text-sm xs:text-base font-semibold leading-5 uppercase cursor-pointer font-body text-brand px-5 lg:px-7 flex justify-between items-start gap-6 group">
                            <span class="flex items-start">
                                <span class="block me-4">02.</span>
                                Is your website secure? </span>
                            <span class="accordion-icon group-[&.active]:hidden">
                                <i aria-hidden="true"><?php echo svg('plus', '25', '25') ?></i>
                            </span>
                            <span class="accordion-icon hidden group-[&.active]:inline-block -mt-1">
                                <i aria-hidden="true"><?php echo svg('dash', '25', '25') ?></i>
                            </span>
                        </h2>
                        <div class="accordion-body mt-4 hidden ps-16 px-10 py-4">
                            <p class="accordion_content mb-0 text-[15px] leading-7 text-light-text">
                                Yep! On any page where we ask you to enter your address, phone
                                number, or credit card information, we use secure socket layer (SSL)
                                to encrypt the communication.</p>
                        </div>
                    </div>
                </div>

                <div class="faq_footer relative block text-center mt-12">
                    <p class="text-[15px] leading-5 text-light-text mb-7">Không nhận được câu trả lời? Gửi lời nhắn của
                        bạn</p>
                    <a href="/contact-us" target="_blank" rel="nofollow"
                        class="relative inline-flex shrink-0 items-center justify-center px-6 py-[15px] lg:px-5 text-lighter-text bg-brand font-body tracking-widest text-sm font-medium uppercase rounded-md hover:-translate-y-0.5 transition-all hover:text-lighter-text focus:text-lighter-text">Liên
                        hệ</a>
                </div>
            </div>
        </section>



        <section class="bg-[#fff8e8] px-2 pt-[50px] pb-[50px] flex flex-col justify-center max-sm:pt-10">


            <div class="">

                <div class="mb-5">
                    <h2 class="mb-[50px] font-bold uppercase text-2xl text-center max-sm:text-xl">Một số hình ảnh
                        từ Instagram</h2>
                </div>

                <div>

                    <div id="sbi_images" style="padding: 5px;"
                        class="grid grid-cols-6 gap-6 max-sm:grid-cols-3 max-sm:gap-[10px]">
                        <div class="rounded-lg p-[5px] pb-0 mb-[10px] max-sm:p-0 max-sm:mb-0">
                            <a href="https://www.instagram.com/redqltd/" target="_blank" rel="nofollow noopener"
                                title="@redqltd" class="rounded-lg">
                                <img src="https://turbo.redq.io/wp-content/uploads/sb-instagram-feed-images/358375111_3409683149281568_4286267237773189896_nlow.jpg"
                                    alt="" class="rounded-lg" />
                            </a>
                        </div>
                        <div class="rounded-lg p-[5px] pb-0 mb-[10px] max-sm:p-0 max-sm:mb-0">
                            <a href="https://www.instagram.com/redqltd/" target="_blank" rel="nofollow noopener"
                                title="@redqltd" class="rounded-lg">
                                <img src="https://turbo.redq.io/wp-content/uploads/sb-instagram-feed-images/358375111_3409683149281568_4286267237773189896_nlow.jpg"
                                    alt="" class="rounded-lg" />
                            </a>
                        </div>
                        <div class="rounded-lg p-[5px] pb-0 mb-[10px] max-sm:p-0 max-sm:mb-0">
                            <a href="https://www.instagram.com/redqltd/" target="_blank" rel="nofollow noopener"
                                title="@redqltd" class="rounded-lg">
                                <img src="https://turbo.redq.io/wp-content/uploads/sb-instagram-feed-images/358375111_3409683149281568_4286267237773189896_nlow.jpg"
                                    alt="" class="rounded-lg" />
                            </a>
                        </div>
                        <div class="rounded-lg p-[5px] pb-0 mb-[10px] max-sm:p-0 max-sm:mb-0">
                            <a href="https://www.instagram.com/redqltd/" target="_blank" rel="nofollow noopener"
                                title="@redqltd" class="rounded-lg">
                                <img src="https://turbo.redq.io/wp-content/uploads/sb-instagram-feed-images/358375111_3409683149281568_4286267237773189896_nlow.jpg"
                                    alt="" class="rounded-lg" />
                            </a>
                        </div>
                        <div class="rounded-lg p-[5px] pb-0 mb-[10px] max-sm:p-0 max-sm:mb-0">
                            <a href="https://www.instagram.com/redqltd/" target="_blank" rel="nofollow noopener"
                                title="@redqltd" class="rounded-lg">
                                <img src="https://turbo.redq.io/wp-content/uploads/sb-instagram-feed-images/358375111_3409683149281568_4286267237773189896_nlow.jpg"
                                    alt="" class="rounded-lg" />
                            </a>
                        </div>
                        <div class="rounded-lg p-[5px] pb-0 mb-[10px] max-sm:p-0 max-sm:mb-0">
                            <a href="https://www.instagram.com/redqltd/" target="_blank" rel="nofollow noopener"
                                title="@redqltd" class="rounded-lg">
                                <img src="https://turbo.redq.io/wp-content/uploads/sb-instagram-feed-images/358375111_3409683149281568_4286267237773189896_nlow.jpg"
                                    alt="" class="rounded-lg" />
                            </a>
                        </div>

                    </div>
                </div>




            </div>


        </section>



        <section class="py-[56px] bg-[#111827] ">
            <div
                class="text-4xl py-14 mb-0 flex justify-center items-center gap-6 text-white max-sm:flex-col max-sm:text-xl max-sm:py-0">
                Cần hỗ trợ trực tuyến? 
                <a class="font-medium inline-block" href="tel: (855) 962-3621">
                    (855) 962-3621 </a>

            </div>
        </section>
    </div>
</main>


<?php get_template_part('components/nav-menu') ?>

<?php
get_footer();