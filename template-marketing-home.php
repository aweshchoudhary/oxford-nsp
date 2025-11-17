<?php
// Template Name: Marketing Home
get_header("mkt");
?>
<article>
    <section>
        <div class="flex lg:flex-row flex-col-reverse border-t">
            <div class="flex-1 relative h-full bg-black">
                <figure class="w-full opacity-60">
                    <?php echo wp_get_attachment_image(1165, "large", false, array("class" => "image-cover", "loading" => "eager")) ?>
                    <figcaption><?php echo wp_get_attachment_caption(1165) ?></figcaption>
                </figure>
                <h1 class="absolute xl:text-5xl lg:text-4xl text-3xl lg:bottom-20 lg:left-10 drop-shadow-md text-white z-1 bottom-5 left-5">
                    Oxford Senior Executive <br class="md:block hidden"> Leadership Programme
                </h1>
            </div>

            <div class="lg:w-1/2 bg-white md:p-10 p-5">
                <h3>Download brochure</h3>
                <?php echo do_shortcode('[wpforms id="1132"]') ?>
            </div>

        </div>
    </section>

    <?php
    $key_highlights = get_field("key_highlights");
    if ($key_highlights) :
        $background_image_url = !empty($key_highlights["section_background_image"]) ? esc_url(wp_get_attachment_image_url($key_highlights["section_background_image"], "large", false)) : '';
    ?>
        <section style="background: url('<?php echo $background_image_url; ?>');" class="section-bg section relative bg-primary text-white">
            <div>
                <h2 class="mb-5 font-tnr border-white">
                    <?php echo !empty($key_highlights["section_title"]) ? wp_kses_post($key_highlights["section_title"]) : ''; ?>
                </h2>
                <ul class="list-none pl-0 flex flex-wrap md:gap-10 gap-5">
                    <?php foreach ($key_highlights["key_highlight_points"] as $item) : ?>
                        <li class="flex items-center md:flex-1 flex-1 md:basis-1/3 basis-full gap-5">
                            <figure class="shrink-0 md:w-[60px] w-[60px]">
                                <?php echo !empty($item["icon"]) ? wp_get_attachment_image(
                                    $item["icon"],
                                    "medium",
                                    false,
                                    ["loading" => "lazy", "class" => "image-contain"]
                                ) : ''; ?>
                                <figcaption class="sr-only"><?php echo !empty($item["icon"]) ? wp_kses_post(wp_get_attachment_caption($item["icon"])) : ''; ?></figcaption>
                            </figure>
                            <div class="md:text-2xl sm:text-xl text-lg text-left">
                                <?php echo !empty($item["title"]) ? wp_kses_post($item["title"]) : ''; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $leadership_narratives = get_field("leadership_narratives");
    if ($leadership_narratives) :
    ?>
        <section class="section-y">
            <div class="section-x">
                <h2 class="mb-5">
                    <?php echo !empty($leadership_narratives["heading_1"]) ? wp_kses_post($leadership_narratives["heading_1"]) : ''; ?>
                </h2>
            </div>
            <div class="lg:block hidden section-x-sm">

                <div class="relative overflow-x-auto">
                    <table class="w-full border-spacing-x-5 border-separate text-left">
                        <thead class="border xl:text-2xl text-lg bg-primary text-white">
                            <tr>
                                <?php foreach ($leadership_narratives["programme_modules"] as $index => $item) : ?>
                                    <th scope="col" class="px-6 border-r py-3 font-medium">
                                        <?php echo !empty($item["heading"]) ? wp_kses_post($item["heading"]) : ''; ?>
                                    </th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-gray-50 transition-all h-full border-x">
                                <?php foreach ($leadership_narratives["programme_modules"] as $index => $item) : ?>
                                    <td class="px-6 border-b w-1/3 h-full transition-all border-x align-top py-4">
                                        <div>
                                            <div">
                                                <?php echo !empty($item["short_points"]) ? wp_kses_post($item["short_points"]) : ''; ?>
                                        </div>
                                        <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="<?php echo esc_attr($index); ?>" onclick="toggleReadMore(this)">Read more</button>
                                        <div class="readmore-content mt-5" style="display: none;">
                                            <?php echo !empty($item["read_more_description"]) ? wp_kses_post($item["read_more_description"]) : ''; ?>
                                        </div>

                </div>
                </td>
            <?php endforeach; ?>
            </tr>
            </tbody>
            </table>
            </div>

            </div>
            <div class="lg:hidden">
                <?php foreach ($leadership_narratives["programme_modules"] as $index => $item) : ?>
                    <div class="readmore-section mb-5">
                        <h4><?php echo !empty($item["heading"]) ? wp_kses_post($item["heading"]) : ''; ?></h4>
                        <p><?php echo !empty($item["short_points"]) ? wp_kses_post($item["short_points"]) : ''; ?></p>
                        <div class="readmore-content mt-5" style="display: none;">
                            <?php echo !empty($item["read_more_description"]) ? wp_kses_post($item["read_more_description"]) : ''; ?>
                        </div>
                        <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="<?php echo esc_attr($index); ?>" onclick="toggleReadMore(this)">Read more</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>


    <?php $oxford_business_alumni_network = get_field("oxford_business_alumni_network"); ?>
    <?php if ($oxford_business_alumni_network) : ?>
        <section class="section bg-primary space-y-5 text-white">
            <div class="space-y-5">
                <h2 class="font-tnr border-white">
                    <?php echo wp_kses_post($oxford_business_alumni_network["section_title"]); ?>
                </h2>
            </div>
            <figure class="md:h-auto h-[250px]">
                <?php echo wp_get_attachment_image($oxford_business_alumni_network["main_image"], "large", false, [
                    "loading" => "lazy",
                    "class" => "image-cover",
                ]); ?>
                <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($oxford_business_alumni_network["main_image"])); ?></figcaption>
            </figure>
            <div class="space-y-2.5">
                <?php echo wp_kses_post($oxford_business_alumni_network["description"]); ?>
            </div>
        </section>
    <?php endif; ?>

    <?php $faculty = get_field("learn_from_world-class_faculty"); ?>
    <?php if (!is_null($faculty)) { ?>
        <section class="section-y pb-0">
            <div class="section-x">
                <h2 class="font-tnr">
                    <?php echo $faculty["section_title"] ?>
                </h2>
            </div>
            <div class="relative">
                <button name="slide previous" aria-label="slide previous" class="slick-slider-1-prev md:left-20 left-2 slick-btn"><svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                        <g transform="translate(608 0) scale(-1 1)">
                            <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                        </g>
                    </svg></button>

                <button name="slide next" aria-label="slide next" class="slick-slider-1-next md:right-20 right-2 slick-btn"><svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                        <g transform="translate(608 0) scale(-1 1)">
                            <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                        </g>
                    </svg></button>

                <div class="slick-slider-1 section-x relative z-0">
                    <?php foreach ($faculty["slider"] as $item) : ?>
                        <div>
                            <div class="p-6 text-center h-full">
                                <figure onclick="showModal('<?php echo str_replace(' ', '_', $item['title']); ?>')" class="aspect-square w-full overflow-hidden group cursor-pointer">
                                    <?php $image_id = $item["profile_image"]; ?>
                                    <?php echo wp_get_attachment_image($image_id, "medium", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="md:text-xl text-lg font-semibold mt-3 mb-0"><?php echo wp_kses_post($item["title"]); ?></p>
                                <p class="mb-2 text-left"><?php echo wp_kses_post($item["subtitle"]); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php foreach ($faculty["slider"] as $item) : ?>
                <div id="<?php echo str_replace(' ', '_', $item["title"]); ?>" class="modal-custom">
                    <div class="modal-content">
                        <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                            <?php $image_id = $item["profile_image"]; ?>
                            <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                                <?php echo wp_get_attachment_image($image_id, "medium", false, array(
                                    "loading" => "lazy",
                                    "class" => "image-cover lozad",
                                )); ?>
                                <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                            </figure>
                            <div>
                                <h3><?php echo wp_kses_post($item["title"]); ?></h3>
                                <h4 class="mb-4"><?php echo wp_kses_post($item["subtitle"]); ?></h4>
                                <div><?php echo wp_kses_post($item["read_more_description"]); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="c-backdrop">
                        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                            </svg></button>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    <?php } ?>

    <?php $experts = get_field("global_industry_experts"); ?>
    <?php if (!is_null($experts)) { ?>
        <section class="section-y md:pt-0 pt-0">
            <div class="section-x">
                <h2 class="font-tnr">
                    <?php echo $experts["section_title"] ?>
                </h2>
            </div>
            <div class="relative">
                <button name="slide previous" aria-label="slide previous" class="md:hidden slick-slider-2-prev md:left-20 left-2 slick-btn"><svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                        <g transform="translate(608 0) scale(-1 1)">
                            <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                        </g>
                    </svg></button>

                <button name="slide next" aria-label="slide next" class="md:hidden slick-slider-2-next md:right-20 right-2 slick-btn"><svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                        <g transform="translate(608 0) scale(-1 1)">
                            <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                        </g>
                    </svg></button>

                <div class="slick-slider-2 section-x relative z-0">
                    <?php foreach ($experts["slider"] as $item) : ?>
                        <div>
                            <div class="p-6 text-center h-full">
                                <figure onclick="showModal('<?php echo str_replace(' ', '_', $item['title']); ?>')" class="aspect-square w-full overflow-hidden group cursor-pointer">
                                    <?php $image_id = $item["profile_image"]; ?>
                                    <?php echo wp_get_attachment_image($image_id, "medium", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover",
                                    )); ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                                </figure>
                                <p class="md:text-xl text-lg font-semibold mt-3 mb-0"><?php echo wp_kses_post($item["title"]); ?></p>
                                <p class="mb-2 text-left"><?php echo wp_kses_post($item["subtitle"]); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php foreach ($experts["slider"] as $item) : ?>
                <div id="<?php echo str_replace(' ', '_', $item["title"]); ?>" class="modal-custom">
                    <div class="modal-content">
                        <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                            <?php $image_id = $item["profile_image"]; ?>
                            <figure class="shrink-0 md:w-1/3 w-full h-full aspect-square">
                                <?php echo wp_get_attachment_image($image_id, "medium", false, array(
                                    "loading" => "lazy",
                                    "class" => "image-cover lozad",
                                )); ?>
                                <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                            </figure>
                            <div>
                                <h3><?php echo wp_kses_post($item["title"]); ?></h3>
                                <h4 class="mb-4"><?php echo wp_kses_post($item["subtitle"]); ?></h4>
                                <div><?php echo wp_kses_post($item["read_more_description"]); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="c-backdrop">
                        <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                            </svg></button>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    <?php } ?>

    <?php
    $cohort_statistics = get_field("cohort_statistics");
    if ($cohort_statistics) :
    ?>
        <section class="section">
            <h2 class="font-tnr mb-5"><?php echo !empty($cohort_statistics["section_title"]) ? wp_kses_post($cohort_statistics["section_title"]) : ''; ?></h2>
            <div class="flex md:flex-row flex-col justify-between md:gap-10 gap-5">
                <div class="basis-[40%]">
                    <h4 class="mb-3 text-center"><?php echo !empty($cohort_statistics["work_experience_chart"]["heading"]) ? wp_kses_post($cohort_statistics["work_experience_chart"]["heading"]) : ''; ?></h4>
                    <figure>
                        <?php echo !empty($cohort_statistics["work_experience_chart"]["chart_image"]) ? wp_get_attachment_image($cohort_statistics["work_experience_chart"]["chart_image"], "large", false, [
                            "loading" => "lazy",
                            "class" => "image-contain",
                        ]) : ''; ?>
                        <figcaption class="sr-only"><?php echo !empty($cohort_statistics["work_experience_chart"]["chart_image"]) ? wp_kses_post(wp_get_attachment_caption($cohort_statistics["work_experience_chart"]["chart_image"])) : ''; ?></figcaption>
                    </figure>
                    <p class="my-3 text-center"><?php echo !empty($cohort_statistics["work_experience_chart"]["lower_text"]) ? wp_kses_post($cohort_statistics["work_experience_chart"]["lower_text"]) : ''; ?></p>
                </div>
                <div>
                    <h4 class="mb-3"><?php echo !empty($cohort_statistics["designation"]["heading"]) ? wp_kses_post($cohort_statistics["designation"]["heading"]) : ''; ?></h4>
                    <?php echo !empty($cohort_statistics["designation"]["list"]) ? wp_kses_post($cohort_statistics["designation"]["list"]) : ''; ?>
                </div>
                <div>
                    <h4 class="mb-3"><?php echo !empty($cohort_statistics["industry"]["heading"]) ? wp_kses_post($cohort_statistics["industry"]["heading"]) : ''; ?></h4>
                    <?php echo !empty($cohort_statistics["industry"]["list"]) ? wp_kses_post($cohort_statistics["industry"]["list"]) : ''; ?>
                </div>
            </div>
            <h3 class="text-center md:my-10 my-5"><?php echo !empty($cohort_statistics["companies"]["heading"]) ? wp_kses_post($cohort_statistics["companies"]["heading"]) : ''; ?></h3>
            <figure class="md:mt-10 mt-5">
                <?php echo !empty($cohort_statistics["companies"]["companies_image"]) ? wp_get_attachment_image($cohort_statistics["companies"]["companies_image"], "large", false, [
                    "loading" => "lazy",
                    "class" => "image-cover",
                ]) : ''; ?>
                <figcaption class="sr-only"><?php echo !empty($cohort_statistics["companies"]["companies_image"]) ? wp_kses_post(wp_get_attachment_caption($cohort_statistics["companies"]["companies_image"])) : ''; ?></figcaption>
            </figure>
        </section>
    <?php endif; ?>

    <?php
    $photo_gallery = get_field("photo_gallery");
    if ($photo_gallery) :
    ?>
        <section class="section-y md:pt-0 pt-0">
            <div>
                <?php if ($photo_gallery["section_title"] && !empty($photo_gallery["section_title"])): ?>
                    <div class="section-x">
                        <h2 class="mb-5 font-tnr"><?php echo $photo_gallery["section_title"] ?></h2>
                    </div>
                <?php endif; ?>

                <?php if ($photo_gallery["first_slider"] && count($photo_gallery["first_slider"]) > 0): ?>
                    <div class="relative mb-10">
                        <button name="slide previous" aria-label="slide previous" class="slick-slider-3-prev md:left-20 left-1 slick-btn"><svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                                <g transform="translate(608 0) scale(-1 1)">
                                    <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                                </g>
                            </svg></button>

                        <button name="slide next" aria-label="slide next" class="slick-slider-3-next md:right-20 right-1 slick-btn"><svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                                <g transform="translate(608 0) scale(-1 1)">
                                    <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                                </g>
                            </svg></button>


                        <div class="slick-slider-3 section-x relative z-0">
                            <?php foreach ($photo_gallery["first_slider"] as $item): ?>
                                <div class="md:px-2.5 px-1">
                                    <figure class="w-full">
                                        <?php
                                        $image_id = $item["slider_image"];
                                        echo wp_get_attachment_image(
                                            $image_id,
                                            "large",
                                            false,
                                            ["loading" => "lazy", "class" => "image-cover"]
                                        ); ?>
                                        <figcaption class="mt-1 text-gray-500 italic md:text-sm text-xs"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                                    </figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($photo_gallery["second_slider"] && count($photo_gallery["second_slider"]) > 0): ?>
                    <div class="relative">
                        <button name="slide previous" aria-label="slide previous" class="slick-slider-4-prev md:left-20 left-1 slick-btn"><svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                                <g transform="translate(608 0) scale(-1 1)">
                                    <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                                </g>
                            </svg></button>

                        <button name="slide next" aria-label="slide next" class="slick-slider-4-next md:right-20 right-1 slick-btn"><svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                                <g transform="translate(608 0) scale(-1 1)">
                                    <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                                </g>
                            </svg></button>

                        <div class="slick-slider-4 section-x relative z-0">
                            <?php foreach ($photo_gallery["second_slider"] as $item): ?>
                                <div class="md:px-2.5 px-1">
                                    <figure class="w-full">
                                        <?php $image_id = $item["slider_image"];
                                        echo wp_get_attachment_image(
                                            $image_id,
                                            "large",
                                            false,
                                            ["loading" => "lazy", "class" => "image-cover"]
                                        ); ?>
                                        <figcaption class="mt-1 text-gray-500 italic md:text-sm text-xs"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                                    </figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
        </section>
    <?php endif; ?>

    <?php
    $the_oxford_institute = get_field("the_oxford_institute");
    if ($the_oxford_institute) :
    ?>
        <section class="section">
            <div>
                <h2 class="mb-5 font-tnr">
                    <?php echo !empty($the_oxford_institute["heading_1"]) ? wp_kses_post($the_oxford_institute["heading_1"]) : ''; ?>
                </h2>
                <hr class="mt-10 border-primary" />
            </div>
            <div>
                <h2 class="mb-5 font-tnr">
                    <?php echo !empty($the_oxford_institute["section_title"]) ? wp_kses_post($the_oxford_institute["section_title"]) : ''; ?>
                </h2>

                <h3 class="mb-3">
                    <?php echo !empty($the_oxford_institute["pre_module"]["heading"]) ? wp_kses_post($the_oxford_institute["pre_module"]["heading"]) : ''; ?>
                </h3>
                <p><?php echo !empty($the_oxford_institute["pre_module"]["description"]) ? wp_kses_post($the_oxford_institute["pre_module"]["description"]) : ''; ?></p>

                <h2 class="mb-5 font-tnr">
                    <?php echo !empty($the_oxford_institute["heading"]) ? wp_kses_post($the_oxford_institute["heading"]) : ''; ?>
                </h2>

                <?php foreach ($the_oxford_institute["programme_modules"] as $index => $item) : ?>
                    <div class="readmore-section mb-5">
                        <h3><?php echo !empty($item["heading"]) ? wp_kses_post($item["heading"]) : ''; ?></h3>
                        <p><?php echo !empty($item["short_points"]) ? wp_kses_post($item["short_points"]) : ''; ?></p>

                        <div class="readmore-content mt-5" style="display: none;">
                            <?php echo !empty($item["read_more_description"]) ? wp_kses_post($item["read_more_description"]) : ''; ?>
                        </div>

                        <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="<?php echo esc_attr($index); ?>" onclick="toggleReadMore(this)">Read more</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $right_for_me = get_field("is_the_programme_right_for_me");

    if ($right_for_me) :
    ?>
        <section class="section space-y-5 bg-primary text-white">
            <div>
                <?php if (!empty($right_for_me["section_title"])) : ?>
                    <h2 class="font-tnr border-white mb-5">
                        <?php echo wp_kses_post($right_for_me["section_title"]); ?>
                    </h2>
                <?php endif; ?>
                <?php if (!empty($right_for_me["description"])) : ?>
                    <?php echo wp_kses_post($right_for_me["description"]); ?>
                <?php endif; ?>
            </div>
            <?php if (!empty($right_for_me["main_image"])) : ?>
                <figure class="md:h-auto h-[250px] object-cover w-full md:object-contain">
                    <?php echo wp_get_attachment_image($right_for_me["main_image"], "large", false, [
                        "loading" => "lazy",
                        "class" => "image-cover",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_kses_post(wp_get_attachment_caption($right_for_me["main_image"])); ?></figcaption>
                </figure>
            <?php endif; ?>
        </section>
    <?php endif; ?>

    <section class="section">
        <div class="text-center">
            <h3>Limited seats</h3>
            <?php
            $program_details = get_field("program_details");
            if ($program_details) :
            ?>
                <section class="section-x section-y-sm bg-[#D6D3CE]">
                    <ul class="list-none pl-0 flex flex-wrap gap-5 items-center justify-between">
                        <?php foreach ($program_details["list"] as $item) : ?>
                            <li class="flex items-center md:basis-1/4 flex-1 basis-full gap-5">
                                <figure class="md:w-[60px] w-[40px] h-full">
                                    <?php
                                    $icon = $item["icon"];
                                    echo wp_get_attachment_image($icon["ID"], "large", false, array(
                                        "loading" => "lazy",
                                        "class" => "image-cover",
                                    ));
                                    ?>
                                    <figcaption class="sr-only"><?php echo wp_kses_post($icon["alt"]); ?></figcaption>
                                </figure>

                                <div>
                                    <p class="md:text-xl text-lg mb-0"><?php echo wp_kses_post($item["subtitle"]); ?></p>
                                    <h3 class="mb-0 md:text-2xl text-left text-lg font-bold"><?php echo $item["title"]; ?></h3>

                                    <?php if (!empty($item["modal"]["modal_name"])) : ?>
                                        <button name="show more details" aria-label="Show more details" class="mt-1 block underline text-left" onclick="showModal(`<?php echo esc_attr($item['modal']['modal_name']); ?>`)"><?php echo wp_kses_post($item["modal"]["title"]); ?></button>

                                        <div id="<?php echo esc_attr($item['modal']['modal_name']); ?>" class="modal-custom">
                                            <div class="modal-content">
                                                <?php echo do_shortcode('[wpforms id="235" title="true"]'); ?>
                                            </div>
                                            <div class="c-backdrop">
                                                <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                                                    </svg></button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            <?php endif; ?>
            <a href="/apply-now" class="cbtn-primary mx-auto mt-5">Apply now</a>
        </div>
    </section>
</article>
<?php get_footer(); ?>