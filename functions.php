<?php

function enqueue_styles()
{
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('main-style', get_template_directory_uri() . '/styles/global.css', array(), filemtime(get_template_directory() . '/styles/global.css'));
}

add_action("wp_enqueue_scripts", "enqueue_styles");

function load_slick_carousel_styles()
{
    if (is_page_template('template-home.php') || is_page_template('template-marketing-home.php')) {
        // Enqueue slick-carousel styles
        wp_enqueue_style(
            'slick',
            'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
            array(),
            null,
            'all'
        );
        wp_enqueue_style(
            'slick-theme',
            'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',
            array(),
            null,
            'all'
        );
    }
}

add_action('wp_enqueue_scripts', 'load_slick_carousel_styles');

function load_slick_carousel_scripts()
{
    if (is_page_template('template-home.php') || is_page_template('template-marketing-home.php')) {
        // Enqueue jQuery
        wp_enqueue_script('jquery');

        wp_enqueue_script(
            'slick-js',
            'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
            array('jquery'),
            null,
            true
        );

        // Add custom inline script
        wp_add_inline_script('slick-js', "
    jQuery(document).ready(function($) {
        const config = {
            dots: false,
            arrows: false,
            infinite: true,
            speed: 500,
            lazyLoad: 'ondemand',
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                    }
                }
            ]
        };

        const photoGalleryConfig = {
            ...config,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                    }
                }
            ]
        };
        const photoGalleryConfig2 = {
            ...config,
            slidesToShow: 2,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                    }
                }
            ]
        };

        function initializeSlider(sliderClass, config) {
            $(sliderClass).slick(config);

            $(sliderClass + '-prev').click(function() {
                $(sliderClass).slick('slickPrev');
            });

            $(sliderClass + '-next').click(function() {
                $(sliderClass).slick('slickNext');
            });
        }

        initializeSlider('.slick-slider-1', config);
        initializeSlider('.slick-slider-2', config);
        initializeSlider('.slick-slider-3', photoGalleryConfig);
        initializeSlider('.slick-slider-4', photoGalleryConfig2);
    });
");
    }
}
add_action('wp_enqueue_scripts', 'load_slick_carousel_scripts');

function my_custom_funcs()
{
?>
    <script type="text/javascript">
        function toggleReadMore(button) {
            // Get the data-target attribute value from the button
            const target = button.getAttribute('data-target');

            // Select the corresponding readmore content based on the target
            const readMoreContent = document.querySelectorAll('.readmore-content')[target];

            // Toggle the display style of the readmore content
            if (readMoreContent.style.display === 'none') {
                readMoreContent.style.display = 'block';
                button.innerText = 'Read Less';
            } else {
                readMoreContent.style.display = 'none';
                button.innerText = 'Read More';
            }
        }

        function showModal(modal_id) {
            const modal_by_id = document.getElementById(modal_id);
            if (modal_by_id) {
                document.querySelectorAll(".modal-custom").forEach((e) => {
                    if (e !== modal_by_id) {
                        e.style.display = "none";
                    }
                });

                const modal_backdrop = modal_by_id.querySelector(".c-backdrop")
                if (modal_backdrop) {
                    modal_backdrop.addEventListener("click", () => {
                        if (modal_by_id.style.display === "block") {
                            modal_by_id.style.display = "none";
                            document.body.style.overflowY = "auto";
                            document.documentElement.style.overflowY = "auto";
                        }
                    })
                }
                modal_by_id.style.display = "block";
                document.body.style.overflow = "hidden";
                document.documentElement.style.overflow = "hidden";
            }
        }

        function lazyLoadVideo(videoId, triggerRef) {
            if (!videoId || !triggerRef) return;

            const videoEle = `
            <iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen autoplay class="aspect-video w-full h-full"></iframe>
            `;

            triggerRef.style.display = "none";
            triggerRef.insertAdjacentHTML("afterend", videoEle);
        }
    </script>
<?php
}

add_action("wp_footer", "my_custom_funcs");
