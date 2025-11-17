<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo the_title(); ?></title>
    <?php wp_head(); ?>

    <script>
        document.documentElement.className = "theme-js";
    </script>

    <meta name="Generator" content="Drupal 10 (https://www.drupal.org)" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
        name="description"
        content="Realise your full potential as a negotiator on this practical programme and share your experiences with fellow participants from across the world." />
    <meta name="keywords" content="program, course" />
    <link
        rel="canonical"
        href="https://oxford-negotiation-strategies.xedinstitute.org/" />
    <link
        rel="image_src"
        href="<?php echo get_template_directory_uri(); ?>/assets/3054-30 - lady with explaining hands.jpg" />
    <meta name="referrer" content="no-referrer-when-downgrade" />
    <meta property="og:type" content="programme" />
    <meta
        property="og:url"
        content="https://oxford-negotiation-strategies.xedinstitute.org/" />
    <meta
        property="og:title"
        content="Oxford Programme on Negotiation | Saïd Business School" />
    <meta
        property="og:description"
        content="Realise your full potential as a negotiator" />
    <meta
        property="og:image"
        content="https://www.sbs.ox.ac.ukhttps://www.sbs.ox.ac.uk/sites/default/files/3054-30%20-%20lady%20with%20explaining%20hands.jpg" />
    <meta
        property="og:image:url"
        content="https://www.sbs.ox.ac.ukhttps://www.sbs.ox.ac.uk/sites/default/files/3054-30%20-%20lady%20with%20explaining%20hands.jpg" />
    <meta
        property="og:image:secure_url"
        content="https://www.sbs.ox.ac.ukhttps://www.sbs.ox.ac.uk/sites/default/files/3054-30%20-%20lady%20with%20explaining%20hands.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@OxfordSBS" />
    <meta
        name="twitter:title"
        content="Oxford Programme on Negotiation | Saïd Business School" />
    <meta
        name="twitter:image"
        content="https://www.sbs.ox.ac.ukhttps://www.sbs.ox.ac.uk/sites/default/files/3054-30%20-%20lady%20with%20explaining%20hands.jpg" />
    <meta name="msapplication-TileColor" content="#002147" />
    <meta name="theme-color" content="#002147" />
    <link
        rel="icon"
        href="https://www.sbs.ox.ac.uk/themes/custom/said/favicon.ico"
        type="image/vnd.microsoft.icon" />
    <link
        rel="apple-touch-icon"
        href="https://www.sbs.ox.ac.uk/themes/custom/said/favicons/apple-touch-icon.png"
        type="image/png"
        sizes="180x180" />
    <link
        rel="icon"
        href="https://www.sbs.ox.ac.uk/themes/custom/said/favicons/favicon-32x32.png"
        type="image/png"
        sizes="32x32" />
    <link
        rel="icon"
        href="https://www.sbs.ox.ac.uk/themes/custom/said/favicons/favicon-16x16.png"
        type="image/png"
        sizes="16x16" />
    <link
        rel="manifest"
        href="https://www.sbs.ox.ac.uk/themes/custom/said/favicons/site.webmanifest" />
    <link
        rel="mask-icon"
        href="https://www.sbs.ox.ac.uk/themes/custom/said/favicons/safari-pinned-tab.svg"
        color="#002147" />
    <script src="<?php echo get_template_directory_uri(); ?>/assets/google_tag.script.js" defer=""></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/google_tag(1).script.js" defer=""></script>

    <link
        rel="stylesheet"
        media="all"
        href="<?php echo get_template_directory_uri(); ?>/assets/css_nT2MR4kYuu0ld5d4VjAPx06OWcOpSmghz2pYROfLfmo.css" />
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css" />
    <link
        rel="stylesheet"
        media="all"
        href="<?php echo get_template_directory_uri(); ?>/assets/css_49_wrZ3UznpnIaHq_Cq4Clmcsn-m0hfot5H2bIWwh4g.css" />
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/custom-output.css" />

</head>

<body <?php body_class(); ?>>

    <header>
        <div class="flex items-center justify-between lg:px-16 md:px-10 px-5 md:py-6 py-4 md:gap-0 gap-20">
            <a aria-label="goto home page" href="/">
                <figure class="lg:w-[160px] md:w-[130px] w-[100px]">
                    <?php $image_id = get_field("main_logo", "option") ?>
                    <?php echo wp_get_attachment_image($image_id, "medium", false, array(
                        "loading" => "eager",
                        "class" => "image-contain",
                    )); ?>
                    <figcaption><?php echo wp_get_attachment_caption(
                                    $image_id
                                ); ?></figcaption>
                </figure>
            </a>
            <a aria-label="goto home page" href="/">
                <figure class="md:w-[90px] w-[80px]">
                    <?php $image_id = get_field("secondary_logo", "option") ?>
                    <?php echo wp_get_attachment_image($image_id, "medium", false, array(
                        "loading" => "eager",
                        "class" => "image-contain",
                    )); ?>
                    <figcaption><?php echo wp_get_attachment_caption(
                                    $image_id
                                ); ?></figcaption>
                </figure>
            </a>
        </div>
    </header>