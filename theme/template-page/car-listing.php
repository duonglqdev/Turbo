<?php

/**
Template Name: Car listing
 */

get_header();
?>

<section class="flex p-[10px] container" data-id="30ae147" data-element_type="section">
    <div
        class="flex gap-[30px] lg:container mx-auto pt-6 md:pt-6 pb-10 px-4 inspect-filter-wrapper turbo-listing is-sidebar max-sm:flex-col">
        <div class="w-1/5 max-sm:overflow-hidden">
            <aside id="sidebar"
                class="w-full inspect-filter-widgets max-sm:w-full max-sm:h-screen max-sm:overflow-y-auto max-sm:no-scrollbar max-sm:z-[1000]">
                <div id="closeBtn"
                    class="inspect-filter-widget-header max-sm:mt-16 max-sm:p-4 max-sm:w-full max-sm:shadow-sm max-sm:flex max-sm:items-center">
                    <button class="inspect-close-mobile-filter">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="22" height="17.828" viewBox="0 0 22 17.828">
                            <path id="arrow-forward-outline_10_" data-name="arrow-forward-outline (10)"
                                d="M97.627,112,90,119.5l7.627,7.5m-6.568-7.5H110" transform="translate(-89 -110.586)"
                                fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                            </path>
                        </svg>
                    </button>
                    <span class="inspect-filter-widget-header-title">Filter</span>
                </div>
                <div class="inspect-filter-form-wrapper turbo-filter-form max-sm:px-7 max-sm:pt-4 max-sm:pb-[160px]">
                    <div class="flex justify-between sidebar-header bg-dark-bg rounded-lg px-5 py-4 mb-3">
                        <h3 class="sidebar-header-title !text-sm lg:!text-base uppercase">
                            Lọc</h3>
                        <span class="sidebar-header-button clear-all-filter cursor-pointer">Hoàn tác</span>
                    </div>
                    <form id="inspect-filter-form" action="#">
                        <input type="hidden" class="hidden" name="action" value="inspect_helper_ajax" />
                        <input type="hidden" class="hidden" name="action_type" value="search" />

                        <input type="hidden" class="hidden product-order-by" name="order_by" value="title" />
                        <input type="hidden" class="hidden product-default-view" name="view" value="grid" />
                        <input type="hidden" name="product_type" value="rental" />

                        <div
                            class="inspect-filter-widget inspect-filter-widget-quick shadow rounded-md py-5 mt-5 mb-3 bg-white">
                            <h2
                                class="inspect-filter-widget-title mb-5 px-5 pb-4 border-b border-[#E5E7EB] border-dashed">
                                Tìm kiếm nhanh</h2>
                            <div class="px-5">
                                <input type="search" name="text-search" placeholder="Ex. Audi"
                                    class="w-full rounded-lg product-text-search !bg-dark-bg border-0 py-3 pl-[15px] pr-8"
                                    id="text-search">
                            </div>
                        </div>


                        <div
                            class="inspect-filter-widget inspect-filter-widget-date shadow rounded-md py-5 mt-5 mb-3 bg-white">
                            <h2 class="inspect-filter-widget-title px-5 pb-4 border-b border-[#E5E7EB] border-dashed">
                                Chọn ngày</h2>
                            <div class="px-5 relative">
                                <span class="calender_icon absolute left-7 top-[65%] -translate-y-1/2"><noscript><img
                                            loading="lazy" decoding="async" height="20" width="20"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/date-picker-icon.png"
                                            alt="calendar_icon" /></noscript><img class="lazyload" loading="lazy"
                                        decoding="async" height="20" width="20"
                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2020%2020%22%3E%3C/svg%3E'
                                        data-src="https://turbo.redq.io/wp-content/uploads/2023/05/date-picker-icon.png"
                                        alt="calendar_icon" /></span>

                                <input type="hidden" value="02/20/2025 - 02/20/2025" class="today_date">
                                <input type="text"
                                    class="w-full rounded-lg daterange !bg-dark-bg border-0 mt-5 py-3 pl-[38px] pr-4"
                                    id="daterange" week-start="1" date-format="MM/DD/YYYY"
                                    data-day="Su_Mo_Tu_We_Th_Fr_Sa" data-cancel-label="Cancel" data-apply-label="Apply"
                                    name="daterange" value="02/20/2025 - 02/20/2025" readonly />
                            </div>
                        </div>
                        <!-- Pickup Location -->
                        <div
                            class="inspect-filter-widget inspect-filter-widget-pickup shadow rounded-md py-5 mt-5 mb-3 bg-white">
                            <h2 class="inspect-filter-widget-title px-5 pb-4 border-b border-[#E5E7EB] border-dashed">
                                Địa điểm đón</h2>
                            <div class="checkbox-group flex flex-col px-5">
                                <select class="w-full py-3 pl-3 pr-8 mt-5 rounded-lg bg-[#f3f4f6] inspect-search-select"
                                    name="tex_pickup_location" id="tex_pickup_location"
                                    data-placeholder="Choose Location">
                                    <option selected value="">Choose Location</option>
                                    <option value="chicago-il">Chicago, IL</option>
                                    <option value="los-angeles-ca">Los Angeles, CA</option>
                                    <option value="miami-fl">Miami, FL</option>
                                    <option value="new-york-city-ny">New York City, NY
                                    </option>
                                    <option value="seattle-wa">Seattle, WA</option>
                                </select>
                            </div>
                        </div>
                        <!-- Drop off Location -->
                        <div
                            class="inspect-filter-widget inspect-filter-widget-pickup shadow rounded-md py-5 mt-5 mb-3 bg-white">
                            <h2 class="inspect-filter-widget-title px-5 pb-4 border-b border-[#E5E7EB] border-dashed">
                                Địa điểm đến</h2>
                            <div class="checkbox-group flex flex-col px-5">
                                <select class="w-full py-3 pl-3 pr-8 mt-5 rounded-lg bg-[#f3f4f6] inspect-search-select"
                                    name="tex_dropoff_location" id="tex_pickup_location"
                                    data-placeholder="Choose Location">
                                    <option selected value="">DropOff Location</option>
                                    <option value="chicago-il">Chicago, IL</option>
                                    <option value="los-angeles-ca">Los Angeles, CA</option>
                                    <option value="miami-fl">Miami, FL</option>
                                    <option value="new-york-city-ny">New York City, NY
                                    </option>
                                    <option value="seattle-wa">Seattle, WA</option>
                                </select>
                            </div>
                        </div>

                        <div
                            class="inspect-filter-widget inspect-filter-widget-resource shadow rounded-md py-5 mt-5 bg-white mb-3">
                            <h2 class="inspect-filter-widget-title px-5 pb-4 border-b border-[#E5E7EB] border-dashed">
                                Danh mục</h2>
                            <div class="px-5 mt-5">
                                <div class="flex flex-col gap-5 product-filter-item-listing !pt-0">
                                    <label data-filter="Damage weiver" class="flex items-center product-filter-label">
                                        <input name="tex_rnb_categories[]" value="damage-weiver" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="ml-3 product-filter-title">Miễn trừ thiệt hại</span>
                                    </label>
                                    <label data-filter="Engine oil 2 Litre"
                                        class="flex items-center product-filter-label">
                                        <input name="tex_rnb_categories[]" value="engine-oil-2-litre" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="ml-3 product-filter-title">Dầu động cơ 2 lít</span>
                                    </label>
                                    <label data-filter="Spare Tyre" class="flex items-center product-filter-label">
                                        <input name="tex_rnb_categories[]" value="spare-tyre" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="ml-3 product-filter-title">Lốp dự phòng</span>
                                    </label>
                                    <label data-filter="Tool Box" class="flex items-center product-filter-label">
                                        <input name="tex_rnb_categories[]" value="tool-box" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="ml-3 product-filter-title">Hộp dụng cụ</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div
                            class="inspect-filter-widget inspect-filter-widget-resource shadow rounded-md py-5 mt-5 mb-3 bg-white">
                            <h2 class="inspect-filter-widget-title px-5 pb-4 border-b border-[#E5E7EB] border-dashed">
                                Tài nguyên</h2>
                            <div class="px-5 mt-5">
                                <div class="flex flex-col gap-5 product-filter-item-listing !pt-0">
                                    <label data-filter="Additional Drivers"
                                        class="flex items-center product-filter-label">
                                        <input name="tex_resource[]" value="additional-drivers" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="ml-3 product-filter-title">Trình điều khiển bổ sung</span>
                                    </label>
                                    <label data-filter="Baby Seat" class="flex items-center product-filter-label">
                                        <input name="tex_resource[]" value="baby-seat" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="ml-3 product-filter-title">Ghế trẻ em</span>
                                    </label>
                                    <label data-filter="GPS" class="flex items-center product-filter-label">
                                        <input name="tex_resource[]" value="gps" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="ml-3 product-filter-title">GPS</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inspect-filter-widget shadow rounded-md mb-3 py-5 mt-5 bg-white">
                            <h2 class="inspect-filter-widget-title px-5 pb-4 border-b border-[#E5E7EB] border-dashed">
                                Người
                            </h2>
                            <div class="px-5 mt-5">
                                <div class="flex flex-col gap-5 product-filter-item-listing !pt-0">
                                    <label class="flex items-center gap-3 product-filter-label"
                                        data-filter="No. of adult 3">
                                        <input name="tex_person" value="3" type="radio"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input-radio">
                                        <span class="product-filter-title">Số người lớn
                                            3</span>
                                    </label>
                                    <label class="flex items-center gap-3 product-filter-label"
                                        data-filter="No. of adult 4">
                                        <input name="tex_person" value="4" type="radio"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input-radio">
                                        <span class="product-filter-title">Số người lớn
                                            4</span>
                                    </label>
                                    <label class="flex items-center gap-3 product-filter-label"
                                        data-filter="No. of adult 6">
                                        <input name="tex_person" value="6" type="radio"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input-radio">
                                        <span class="product-filter-title">Số người lớn
                                            6</span>
                                    </label>
                                    <label class="flex items-center gap-3 product-filter-label"
                                        data-filter="No. of child 2">
                                        <input name="tex_person" value="2" type="radio"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input-radio">
                                        <span class="product-filter-title">Số trẻ em
                                            2</span>
                                    </label>
                                    <label class="flex items-center gap-3 product-filter-label"
                                        data-filter="No. of child 5">
                                        <input name="tex_person" value="5" type="radio"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input-radio">
                                        <span class="product-filter-title">Số trẻ em
                                            5</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Features -->
                        <div
                            class="inspect-filter-widget pb-7 shadow rounded-md py-5 mb-3 mt-5 bg-white overflow-hidden">
                            <h2 class="inspect-filter-widget-title px-5 pb-4 border-b border-[#E5E7EB] border-dashed">
                                Tính năng</h2>
                            <div class="px-5 mt-5">
                                <div class="relative filter-widget-item-search">
                                    <input type="search"
                                        class="w-full rounded-lg !bg-dark-bg border-0 py-3 pl-[15px] pr-8"
                                        placeholder="Enter to Search">
                                    <div
                                        class="absolute top-1/2 right-3 -translate-y-1/2 product-resource-search-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.206" height="15"
                                            viewBox="0 0 14.206 15" class="product-resource-search-icon">
                                            <g transform="translate(-602 -37)">
                                                <g transform="translate(602 37)">
                                                    <path
                                                        d="M378.15,381.874l2.687,2.682c.139.139.284.274.414.422a.745.745,0,1,1-1.072,1.031c-.906-.889-1.816-1.776-2.689-2.7a.77.77,0,0,0-1.1-.185,6.257,6.257,0,1,1-2.753-11.839,6.276,6.276,0,0,1,5,9.946C378.5,381.432,378.343,381.618,378.15,381.874Zm-4.614.434a4.756,4.756,0,1,0-4.729-4.766A4.729,4.729,0,0,0,373.536,382.308Z"
                                                        transform="translate(-367.297 -371.285)" fill="#999" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-col gap-5 mt-5 product-filter-item-listing pt-0 max-h-[350px] overflow-y-auto no-scrollbar">
                                    <label data-filter="ABS" class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="abs" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">ABS</span>
                                    </label>
                                    <label data-filter="Air Bags" class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="air-bags" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Túi khí</span>
                                    </label>
                                    <label data-filter="Air-conditions"
                                        class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="airconditions" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Điều hòa</span>
                                    </label>
                                    <label data-filter="Audio Input"
                                        class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="audio-input" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Đầu vào âm thanh</span>
                                    </label>
                                    <label data-filter="Audio system"
                                        class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="audio-system" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Hệ thống âm thanh</span>
                                    </label>
                                    <label data-filter="Bluetooth" class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="bluetooth" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Bluetooth</span>
                                    </label>
                                    <label data-filter="Car kit" class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="car-kit" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Dụng cụ trên xe</span>
                                    </label>
                                    <label data-filter="Electric window"
                                        class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="electric-windows" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Cửa số chỉnh điện</span>
                                    </label>
                                    <label data-filter="GPS" class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="gps-en" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">GPS</span>
                                    </label>
                                    <label data-filter="Language" class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="language" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Ngôn ngữ</span>
                                    </label>
                                    <label data-filter="Music" class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="music" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Nhạc</span>
                                    </label>
                                    <label data-filter="Seat Belts"
                                        class="flex items-center gap-3 product-filter-label">
                                        <input name="features[]" value="seat-belts" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Dây an toàn</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div
                            class="inspect-filter-widget inspect-filter-widget-attributes shadow rounded-md py-5 mt-5 bg-white mb-3">
                            <h2 class="inspect-filter-widget-title px-5 pb-4 border-b border-[#E5E7EB] border-dashed">
                                Thuộc tính</h2>

                            <div class="px-5 mt-5">
                                <div class="relative filter-widget-item-search">
                                    <input type="search"
                                        class="w-full rounded-lg !bg-dark-bg border-0 py-3 pl-[15px] pr-8"
                                        placeholder="Enter to Search">
                                    <div
                                        class="absolute top-1/2 right-3 -translate-y-1/2 product-resource-search-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.206" height="15"
                                            viewBox="0 0 14.206 15" class="product-resource-search-icon">
                                            <g transform="translate(-602 -37)">
                                                <g transform="translate(602 37)">
                                                    <path
                                                        d="M378.15,381.874l2.687,2.682c.139.139.284.274.414.422a.745.745,0,1,1-1.072,1.031c-.906-.889-1.816-1.776-2.689-2.7a.77.77,0,0,0-1.1-.185,6.257,6.257,0,1,1-2.753-11.839,6.276,6.276,0,0,1,5,9.946C378.5,381.432,378.343,381.618,378.15,381.874Zm-4.614.434a4.756,4.756,0,1,0-4.729-4.766A4.729,4.729,0,0,0,373.536,382.308Z"
                                                        transform="translate(-367.297 -371.285)" fill="#999" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-5 mt-5 product-filter-item-listing !pt-0">
                                    <label data-filter="Clutch" class="flex items-center gap-3 product-filter-label">
                                        <input name="tex_attributes[]" value="class-compact" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Bộ ly hợp</span>
                                    </label>
                                    <label data-filter="Doors" class="flex items-center gap-3 product-filter-label">
                                        <input name="tex_attributes[]" value="doors-4" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Cửa</span>
                                    </label>
                                    <label data-filter="Fuel" class="flex items-center gap-3 product-filter-label">
                                        <input name="tex_attributes[]" value="fuel-diesel" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Nhiên liệu</span>
                                    </label>
                                    <label data-filter="Gearbox" class="flex items-center gap-3 product-filter-label">
                                        <input name="tex_attributes[]" value="gearbox-automatic" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Hộp số</span>
                                    </label>
                                    <label data-filter="Luggage" class="flex items-center gap-3 product-filter-label">
                                        <input name="tex_attributes[]" value="luggage-5" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Hành lý</span>
                                    </label>
                                    <label data-filter="Mileage" class="flex items-center gap-3 product-filter-label">
                                        <input name="tex_attributes[]" value="mileage-unlimited" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Số dặm</span>
                                    </label>
                                    <label data-filter="Seat" class="flex items-center gap-3 product-filter-label">
                                        <input name="tex_attributes[]" value="seat" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Ghế</span>
                                    </label>
                                    <label data-filter="Transmission"
                                        class="flex items-center gap-3 product-filter-label">
                                        <input name="tex_attributes[]" value="transmission-automatic" type="checkbox"
                                            class="size-4 filter-checkbox form-checkbox product-filter-input">
                                        <span class="product-filter-title">Hộp số tự động</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="inspect-total-filtered-products-wrapper">
                    <!-- <div class="inspect-total-filtered-products">
                        <span class="inspect-show-items-text">Show</span>
                        <span class="inspect-filter-result-count"></span>
                    </div> -->
                    <!-- loading ui  -->
                    <div class="inspect-btn-loading-ui">
                        <span class="dot-1"></span>
                        <span class="dot-2"></span>
                        <span class="dot-3"></span>
                    </div>
                </div>
            </aside>
        </div>

        <div class="w-4/5 inspect-filter-result-wrapper turbo-filter-result-wrapper max-sm:w-full">
            <div class="flex items-center pb-[26px] inspect-filter-result-header">
                <div class="inspect-filter-result-header-left">
                    <div class="inspect-filter-result-count text-brand text-sm font-medium">
                    </div>
                </div>
                <div class="inspect-open-mobile-filter-wrapper turbo-mobile-filter-wrapper">
                    <button id="toggleBtn" class="flex gap-2 items-center inspect-open-mobile-filter">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="mr-2 block" fill="currentColor"
                            width="14" height="14" viewBox="0 0 512 512">
                            <path
                                d="M490.667,405.333h-56.811C424.619,374.592,396.373,352,362.667,352s-61.931,22.592-71.189,53.333H21.333 C9.557,405.333,0,414.891,0,426.667S9.557,448,21.333,448h270.144c9.237,30.741,37.483,53.333,71.189,53.333 s61.931-22.592,71.189-53.333h56.811c11.797,0,21.333-9.557,21.333-21.333S502.464,405.333,490.667,405.333z M362.667,458.667 c-17.643,0-32-14.357-32-32s14.357-32,32-32s32,14.357,32,32S380.309,458.667,362.667,458.667z">
                            </path>
                            <path
                                d="M490.667,64h-56.811c-9.259-30.741-37.483-53.333-71.189-53.333S300.736,33.259,291.477,64H21.333 C9.557,64,0,73.557,0,85.333s9.557,21.333,21.333,21.333h270.144C300.736,137.408,328.96,160,362.667,160 s61.931-22.592,71.189-53.333h56.811c11.797,0,21.333-9.557,21.333-21.333S502.464,64,490.667,64z M362.667,117.333 c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32C394.667,102.976,380.309,117.333,362.667,117.333z">
                            </path>
                            <path
                                d="M490.667,234.667H220.523c-9.259-30.741-37.483-53.333-71.189-53.333s-61.931,22.592-71.189,53.333H21.333 C9.557,234.667,0,244.224,0,256c0,11.776,9.557,21.333,21.333,21.333h56.811c9.259,30.741,37.483,53.333,71.189,53.333 s61.931-22.592,71.189-53.333h270.144c11.797,0,21.333-9.557,21.333-21.333C512,244.224,502.464,234.667,490.667,234.667z M149.333,288c-17.643,0-32-14.357-32-32s14.357-32,32-32c17.643,0,32,14.357,32,32S166.976,288,149.333,288z">
                            </path>
                        </svg>
                        <span>Lọc</span>
                    </button>
                </div>

                <div class="ml-auto inspect-filter-result-header-right">
                    <div class="inspect-filter-sort mr-0 ml-3">
                        <select name="sortBy" class="product-sorting w-full py-3 pl-3 pr-5 rounded-lg bg-[#f3f4f6]"
                            data-placeholder="Tùy chọn sắp xếp">
                            <option value="" selected disabled>Tùy chọn sắp xếp</option>
                            <option value="title">Theo tên (A - Z)</option>
                            <option value="title-desc">Theo tên (Z - A)</option>
                            <option value="date-desc">Mới nhất</option>
                            <option value="date">Cũ nhất</option>
                            <option value="_price-desc">Giá (Cao đến thấp)</option>
                            <option value="_price">Giá (Thấp đến cao)</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="inspect-filter-results-container">
                <div class="filter-results inspect-product-view-grid" id="filter-results" data-button-text="Book Now"
                    data-load_more_text="Load More"></div>
                <div class="inspect-filter-loader is-active">
                    <span class="dot-1"></span>
                    <span class="dot-2"></span>
                    <span class="dot-3"></span>
                </div>
            </div>

            <!-- List car -->
            <div class="grid grid-cols-3 gap-[30px] max-sm:grid-cols-1">
                <?php
                for ($i = 0; $i < 12; $i++) {
                    ?>
                    <div
                        class="relative flex flex-col justify-between rounded-lg bg-white p-5 shadow-card transition-all hover:-translate-y-0.5 hover:shadow-large">
                        <a class="block"
                            href="https://turbo.redq.io/shop/audi-2019-a4-allroad/?daterange=02%2F20%2F2025+-+02%2F20%2F2025&amp;tex_pickup_location=&amp;tex_return_location=">
                            <h5 class="mb-5 block text-sm font-medium transition 2xl:text-base">Audi 2019 A4 allroad</h5>
                            <figure class="relative overflow-hidden rounded-lg">
                                <img decoding="async" class="max-h-60 object-cover w-full"
                                    src="https://turbo.redq.io/wp-content/uploads/2023/06/Group-48095914.png" alt="">
                            </figure>
                        </a>
                        <div>
                            <div
                                class="mt-5 grid grid-cols-2 gap-x-4 gap-y-5 text-sm text-dark-text sm:grid-cols-2 xl:text-xs 2xl:text-sm">
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <img decoding="async" class="w-full"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/seat-belt.svg" alt="">
                                    </figure>
                                    <span>Dây an toàn</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <img decoding="async" class="w-full"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/gps.svg" alt="">
                                    </figure>
                                    <span>GPS</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <img decoding="async" class="w-full"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/audio-input.svg" alt="">
                                    </figure>
                                    <span>Đầu vào âm thanh</span>
                                </span>
                                <span class="flex items-center gap-2">
                                    <figure class="max-w-[20px] block">
                                        <img decoding="async" class="w-full"
                                            src="https://turbo.redq.io/wp-content/uploads/2023/05/air-bag.svg" alt="">
                                    </figure>
                                    <span>Túi khí</span>
                                </span>
                            </div>

                            <div class="mt-6 flex justify-between items-center gap-3">
                                <div class="flex items-center gap-2 [&amp;>.amount]:font-medium [&amp;>.amount]:text-brand">
                                    <span class="amount rnb_price_unit_463"> Chỉ từ <span
                                            class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span>/ngày</span>
                                </div>
                                <button
                                    onclick="location.href = 'https://turbo.redq.io/shop/audi-2019-a4-allroad/?daterange=02%2F20%2F2025+-+02%2F20%2F2025&amp;tex_pickup_location=&amp;tex_return_location='"
                                    class="relative inline-flex shrink-0 items-center justify-center overflow-hidden text-center text-xs tracking-wider outline-none transition-all sm:text-sm bg-brand border-brand hover:-translate-y-0.5 hover:shadow-large focus:shadow-large focus:outline-none text-white rounded-md sm:rounded-lg uppercase h-10 !px-3.5 pb-[11px] pt-[13px] font-medium !leading-none">Đặt
                                    ngay</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="mt-[60px] flex justify-center">
                <button class="button py-[14px] px-[18px] rounded-lg bg-[#111827] text-white">
                    <span class="loaded-text">Load More</span>
                    <span class="loading-text hidden">Loading...</span>
                    <svg class="loading-svg hidden" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px"
                        viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                        <path fill="#fff"
                            d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z"
                            transform="rotate(108.893 25 25)">
                            <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25"
                                to="360 25 25" dur="0.8s" repeatCount="indefinite"></animateTransform>
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>




<?php
get_footer();