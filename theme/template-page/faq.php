<?php

/**
Template Name: Faq
 */

get_header();
?>

<main id="content" class="site-main post-1852 page type-page status-publish hentry">
    <div
        class="blog_single_page lg:container mx-auto flex grow flex-wrap items-start px-4 md:px-6 pb-16 lg:pb-20 xl:pb-[100px] pt-10 lg:pt-14 2xl:pt-[70px] lg:max-w-[1382px]">
        <div id="primary" class="site-main site-main [.single-post_&amp;]:lg:pe-10 w-full">
            <article id="post-1852" class="post-1852 page type-page status-publish hentry">


                <section class="" data-id="044069b" data-element_type="section">


                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="fancy-title-container text-center pb-[15px]">
                            <h2 class="fancy-title font-semibold uppercase text-2xl">Frequently Asked Questions</h2>
                            <p class="fancy-desc text-light-text leading-7 mb-[22px]">
                                Have questions? We’re here to help.
                            </p>
                        </div>

                        <div class="faq_container lg:container mx-auto px-4">
                            <div class="faq_header relative mx-auto w-full lg:max-w-lg xl:ml-auto max-w-[480px] mb-20">
                                <span class="absolute top-2/4 start-4 -translate-y-1/2 text-light-text sm:start-6">
                                    <svg width="16" height="16" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.3851 12.4457C8.73488 14.5684 4.85544 14.4013 2.39866 11.9445C-0.237379 9.3085 -0.237379 5.03464 2.39866 2.3986C5.0347 -0.23744 9.30856 -0.23744 11.9446 2.3986C14.4014 4.85538 14.5685 8.73481 12.4458 11.3851L17.6014 16.5407C17.8943 16.8336 17.8943 17.3085 17.6014 17.6014C17.3085 17.8943 16.8337 17.8943 16.5408 17.6014L11.3851 12.4457ZM3.45932 10.8839C1.40907 8.83363 1.40907 5.50951 3.45932 3.45926C5.50957 1.40901 8.83369 1.40901 10.8839 3.45926C12.9327 5.50801 12.9342 8.82875 10.8885 10.8794C10.8869 10.8809 10.8854 10.8823 10.8839 10.8839C10.8824 10.8854 10.8809 10.8869 10.8794 10.8884C8.82882 12.9341 5.50807 12.9326 3.45932 10.8839Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                <input id="faq_search" type="search" placeholder="Search For Cars"
                                    class="faq_search border h-10 !ps-14 w-full !rounded-full sm:h-12 hover:!border hover:!border-main focus:!border-main"
                                    value="">
                            </div>

                            <div class="faq_wrapper accordion-wrapper mx-auto">
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    ?>
                                    <div class="group content_card relative accordion-item shadow-faq rounded-md mb-3 py-[30px] px-5"
                                        style="">
                                        <h2
                                            class="accordion_title accordion-toggle text-sm xs:text-base font-semibold leading-5 uppercase cursor-pointer font-body text-brand px-5 lg:px-7 flex justify-between items-start gap-6 group">
                                            <span class="flex items-start">
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
                                                Sample ordering is on ‘first-come-first-served’
                                                basis. To ensure that you get your desired samples,
                                                it is recommended that you make your payment within
                                                60 minutes of checking out.</p>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- .entry-content -->

                <footer class="entry-footer">
                </footer>
            </article>
        </div>
    </div>
</main>



<?php
get_footer();