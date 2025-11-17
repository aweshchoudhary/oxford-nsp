<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <div class="sticky inset-0 z-50 bg-primary text-white py-4 px-5 text-center">
        <p class="m-0 text-center">Starts 4 Feb 2025 | 9 months | USD 28,000</p>
    </div>
    <header>

        <div class="flex items-center justify-between md:px-28 px-5 py-4 md:gap-0 gap-20">
            <a aria-label="goto home page" href="/">
                <figure class="md:w-[130px] w-[100px]">
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
    <main>