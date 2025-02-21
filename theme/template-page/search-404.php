<?php

/**
Template Name: Search 404
 */

get_header();
?>



<!-- preloader  -->
<!-- <div id="turbo-preloader"
        class='preloader flex justify-center items-center bg-white fixed z-50 inset-0 overflow-hidden transition-opacity duration-1000'>
        <div class='max-w-xs w-full h-auto flex justify-center items-center aspect-square'>
            <img src="https://turbo.redq.io/wp-content/uploads/2023/08/CarGif.gif" alt="car preloader" loading="eager"
                width="120" height="120">
        </div>
    </div> -->

<div class="lazyload bg-no-repeat bg-[right_center] bg-cover py-12 md:py-16 xl:py-20 3xl:py-32 col-span-full"
    data-bg="https://turbo.redq.io/wp-content/uploads/2023/07/Blog-banner-1.png"
    style="background-color: #000000; background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E)">
    <h1 class="text-center text-xl font-medium uppercase md:text-2xl xl:text-3xl" style="color: #FFFFFF">Latest Blog
    </h1>
    <p class="mt-2 md:mt-3 lg:mt-4 mx-auto mb-0 max-w-[65ch] px-4 text-center text-sm leading-6" style="color: #FFFFFF">
        Explore the latest blog newsfeed </p>
</div>

<main id="content" class="site-main">
    <div
        class="container mx-auto flex grow flex-wrap items-start py-16 lg:pb-20 xl:pb-[100px] px-4 md:px-6 max-w-[1398px]">
        <div id="primary" class="page-content w-full lg:w-3/4 site-main lg:pr-10">
            <!-- No post found code goes here -->
            <div class="container mx-auto pt-12 pb-8 xl:py-16 px-4 text-center">
                <figure class="flex justify-center mb-12">
                    <noscript><img src="https://turbo.redq.io/wp-content/themes/turbo/assets/images//post_404.svg"
                            alt=""></noscript><img class=" lazyloaded"
                        src="https://turbo.redq.io/wp-content/themes/turbo/assets/images//post_404.svg"
                        data-src="https://turbo.redq.io/wp-content/themes/turbo/assets/images//post_404.svg" alt="">
                </figure>
                <header class="page-header">
                    <h1 class="entry-title text-xl sm:text-2xl mb-4">Sorry, no result found</h1>
                </header>
                <div class="page-content">
                    <p class="text-sm text-light-text leading-8 mb-0">Sorry, but nothing matched your search terms.
                        Please try again with some different keywords.</p>
                </div>
                <form action="" class="mt-12">
                    <div class="relative mx-auto max-w-[360px]">
                        <input class="w-full py-2 px-4 border rounded-md" name="s" type="search"
                            placeholder="Search post..">
                        <button type="submit" class="cursor-pointer absolute right-4 top-1/2 -translate-y-1/2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.0146 17.9258L13.7593 12.6705C14.7773 11.4131 15.3902 9.81532 15.3902 8.07511C15.3902 4.0418 12.1084 0.76001 8.07507 0.76001C4.04176 0.76001 0.76001 4.04176 0.76001 8.07507C0.76001 12.1084 4.0418 15.3902 8.07511 15.3902C9.81532 15.3902 11.4131 14.7773 12.6705 13.7593L17.9258 19.0146C18.076 19.1648 18.2731 19.2402 18.4702 19.2402C18.6674 19.2402 18.8645 19.1648 19.0146 19.0146C19.3157 18.7135 19.3157 18.2269 19.0146 17.9258ZM8.07511 13.8501C4.89034 13.8501 2.30004 11.2598 2.30004 8.07507C2.30004 4.8903 4.89034 2.3 8.07511 2.3C11.2599 2.3 13.8502 4.8903 13.8502 8.07507C13.8502 11.2598 11.2598 13.8501 8.07511 13.8501Z"
                                    fill="#8C969F"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <!-- End -->
        </div>

        <aside id="secondary" class="widget-area w-full lg:w-1/4 mt-10 lg:mt-0">
            <div class="widget mb-12 turbo_posts">

                <!-- Slider -->
                <ul class="turbo-recent-posts slick-slider rounded-md overflow-hidden">
                    <li class="item relative rounded-md overflow-hidden">
                        <div class="absolute w-full h-full bg-gradient-to-t from-black/80 to-black/10 z-10"></div>
                        <figure class="m-0">
                            <noscript><img width="360" height="190"
                                    src="https://turbo.redq.io/wp-content/uploads/2021/08/13.webp"
                                    class="w-full rounded-md aspect-[360/260] lg:aspect-[360/420] object-cover object-center wp-post-image"
                                    alt="post thumbnail" loading="lazy" decoding="async"
                                    srcset="https://turbo.redq.io/wp-content/uploads/2021/08/13.webp 1500w, https://turbo.redq.io/wp-content/uploads/2021/08/13-300x158.webp 300w, https://turbo.redq.io/wp-content/uploads/2021/08/13-1024x539.webp 1024w, https://turbo.redq.io/wp-content/uploads/2021/08/13-768x404.webp 768w, https://turbo.redq.io/wp-content/uploads/2021/08/13-600x316.webp 600w"
                                    sizes="(max-width: 360px) 100vw, 360px" /></noscript><img width="360" height="190"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20360%20190%22%3E%3C/svg%3E'
                                data-src="https://turbo.redq.io/wp-content/uploads/2021/08/13.webp"
                                class="lazyload w-full rounded-md aspect-[360/260] lg:aspect-[360/420] object-cover object-center wp-post-image"
                                alt="post thumbnail" loading="lazy" decoding="async"
                                data-srcset="https://turbo.redq.io/wp-content/uploads/2021/08/13.webp 1500w, https://turbo.redq.io/wp-content/uploads/2021/08/13-300x158.webp 300w, https://turbo.redq.io/wp-content/uploads/2021/08/13-1024x539.webp 1024w, https://turbo.redq.io/wp-content/uploads/2021/08/13-768x404.webp 768w, https://turbo.redq.io/wp-content/uploads/2021/08/13-600x316.webp 600w"
                                data-sizes="(max-width: 360px) 100vw, 360px" />
                        </figure>
                        <div class="content absolute left-0 bottom-[60px] z-20 w-full p-6 pb-0">
                            <h2 class="truncate"><a
                                    class="!text-white !text-base xl:!text-xl !font-medium xl:!leading-7 max-w-full"
                                    href="https://turbo.redq.io/smartdrive-ultimate-mobility-solution/"> SmartDrive:
                                    Ultimate Mobility Solution </a></h2>
                            <p class="mb-0 text-sm text-white flex gap-2 lg:hidden xl:flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                March 10, 2022
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="widget mb-12 widget_search">
                <h4 class="widget-title leading-6 capitalize font-medium text-xl mb-6 2xl:mb-7">Search</h4>
                <form role="search" method="get" id="searchform" class="searchform py-2 px-4 rounded-md border"
                    action="https://turbo.redq.io/">
                    <div>
                        <label class="screen-reader-text" for="s">Search for:</label>
                        <input type="text" value="" name="s" id="s" />
                        <input type="submit" id="searchsubmit" value="Search" />
                    </div>
                </form>
            </div>
            <div class="widget mb-12 turbo_posts">
                <h4 class="widget-title leading-6 capitalize font-medium text-xl mb-6 2xl:mb-7">Trending Posts</h4>
                <ul class="turbo-recent-posts">

                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        ?>
                        <li class="item underlineEffectGroup flex items-start gap-5 lg:gap-3 xl:gap-5 mb-6">
                            <noscript><img width="1500" height="790"
                                    class="w-20 min-h-[80px] xl:w-[100px] xl:min-h-[100px] object-cover"
                                    src="https://turbo.redq.io/wp-content/uploads/2021/08/13.webp"
                                    alt="img" /></noscript><img width="1500" height="790"
                                class="lazyload w-20 min-h-[80px] xl:w-[100px] xl:min-h-[100px] object-cover"
                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201500%20790%22%3E%3C/svg%3E'
                                data-src="https://turbo.redq.io/wp-content/uploads/2021/08/13.webp" alt="img" />
                            <div class="content">
                                <h2 class="leading-none"><a
                                        class="!text-base !leading-6 !text-brand !font-medium underlineEffect"
                                        href="https://turbo.redq.io/smartdrive-ultimate-mobility-solution/"> SmartDrive:
                                        Ultimate Mobility Solution </a></h2>
                                <p class="text-sm text-light-text mb-0 flex items-center gap-2 mt-1">
                                    <svg class="w-[18px] h-auto" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M12.207 10.5894L9.69728 8.70714V4.87293C9.69728 4.48741 9.38565 4.17578 9.00013 4.17578C8.6146 4.17578 8.30298 4.48741 8.30298 4.87293V9.05575C8.30298 9.27534 8.40616 9.48241 8.58184 9.61347L11.3704 11.7049C11.4958 11.799 11.6423 11.8443 11.788 11.8443C12.0006 11.8443 12.2097 11.7488 12.3464 11.5647C12.5779 11.2573 12.5151 10.8202 12.207 10.5894Z"
                                                fill="#8C969F" />
                                            <path
                                                d="M9 0C4.0371 0 0 4.0371 0 9C0 13.9629 4.0371 18 9 18C13.9629 18 18 13.9629 18 9C18 4.0371 13.9629 0 9 0ZM9 16.6057C4.80674 16.6057 1.39426 13.1933 1.39426 9C1.39426 4.80674 4.80674 1.39426 9 1.39426C13.194 1.39426 16.6057 4.80674 16.6057 9C16.6057 13.1933 13.1933 16.6057 9 16.6057Z"
                                                fill="#8C969F" />
                                        </g>
                                    </svg>
                                    March 10, 2022
                                </p>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>

            <div class="widget mb-12 widget_categories">
                <h4 class="widget-title leading-6 capitalize font-medium text-xl mb-6 2xl:mb-7">Categories</h4>
                <ul class="flex flex-col gap-[14px]">
                    <li class="cat-item cat-item-276 flex items-center justify-between"><a
                            href="https://turbo.redq.io/category/classic-cars/">Classic
                            Cars</a> (5)
                    </li>
                    <li class="cat-item cat-item-278 flex items-center justify-between"><a
                            href="https://turbo.redq.io/category/enthusiast-communities/">Enthusiast Communities</a>
                        (4)
                    </li>
                    <li class="cat-item cat-item-270 flex items-center justify-between"><a
                            href="https://turbo.redq.io/category/luxury-convertible-rentals/">Luxury Convertible
                            Rentals</a> (3)
                    </li>
                    <li class="cat-item cat-item-272 flex items-center justify-between"><a
                            href="https://turbo.redq.io/category/sports-car/">Sports
                            Car</a> (2)
                    </li>
                    <li class="cat-item cat-item-277 flex items-center justify-between"><a
                            href="https://turbo.redq.io/category/technology-and-innovations/">Technology and
                            Innovations:</a> (2)
                    </li>
                    <li class="cat-item cat-item-1 flex items-center justify-between"><a
                            href="https://turbo.redq.io/category/uncategorized/">Uncategorized</a> (3)
                    </li>
                    <li class="cat-item cat-item-273 flex items-center justify-between"><a
                            href="https://turbo.redq.io/category/vacation-and-leisure/">Vacation and Leisure</a> (6)
                    </li>
                </ul>
            </div>

            <div class="widget mb-12 widget_archive">
                <h4 class="widget-title leading-6 capitalize font-medium text-xl mb-6 2xl:mb-7">Archives</h4>
                <ul class="flex flex-col gap-[14px]">
                    <li class="flex items-center justify-between"><a href='https://turbo.redq.io/2023/08/'>August
                            2023</a>&nbsp;(1)</li>
                    <li class="flex items-center justify-between"><a href='https://turbo.redq.io/2022/03/'>March
                            2022</a>&nbsp;(1)</li>
                    <li class="flex items-center justify-between"><a href='https://turbo.redq.io/2021/12/'>December
                            2021</a>&nbsp;(1)</li>
                    <li class="flex items-center justify-between"><a href='https://turbo.redq.io/2020/02/'>February
                            2020</a>&nbsp;(1)</li>
                    <li class="flex items-center justify-between"><a href='https://turbo.redq.io/2019/09/'>September
                            2019</a>&nbsp;(1)</li>
                    <li class="flex items-center justify-between"><a href='https://turbo.redq.io/2018/06/'>June
                            2018</a>&nbsp;(1)</li>
                    <li class="flex items-center justify-between"><a href='https://turbo.redq.io/2018/03/'>March
                            2018</a>&nbsp;(1)</li>
                    <li class="flex items-center justify-between"><a href='https://turbo.redq.io/2015/12/'>December
                            2015</a>&nbsp;(1)</li>
                    <li class="flex items-center justify-between"><a href='https://turbo.redq.io/2013/09/'>September
                            2013</a>&nbsp;(1)</li>
                </ul>

            </div>
        </aside>
    </div>
</main>


<?php get_template_part('components/nav-menu') ?>




<?php
get_footer();
