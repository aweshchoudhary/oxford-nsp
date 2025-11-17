<footer class="section bg-[#002147] lg:p-16 md:p-10 p-5 text-white">
    <div class="flex flex-wrap lg:gap-20 md:gap-10 gap-5">
        <div class="shrink-0">
            <figure class="md:w-22 w-18">
                <?php
                $image_id = get_field('footer_logo', 'option');
                if ($image_id) :
                    echo wp_get_attachment_image($image_id, 'medium', false, [
                        'loading' => 'lazy',
                        'class' => 'image-contain',
                    ]);
                ?>
                    <figcaption><?php echo wp_kses_post(wp_get_attachment_caption($image_id)); ?></figcaption>
                <?php endif; ?>
            </figure>
            <br>
            <br>

            <ul class="list-none pl-0 mt-10 space-y-3 text-lg">
                <?php
                $contacts = get_field('contacts', 'option');
                if ($contacts && count($contacts)) :
                    foreach ($contacts as $item) :
                        if (isset($item['link']['url'], $item['link']['title'], $item['icon'])) :
                ?>
                            <li>
                                <a target="__blank" href="<?php echo esc_url($item['link']['url']); ?>" class="text-white hover:text-white/80 flex items-center gap-5" style="color: #FFF;">
                                    <figure class="w-[30px]">
                                        <?php echo wp_get_attachment_image($item['icon'], 'thumbnail', false, [
                                            'loading' => 'lazy',
                                            'class' => 'image-contain',
                                        ]); ?>
                                        <figcaption><?php echo wp_kses_post(wp_get_attachment_caption($item['icon'])); ?></figcaption>
                                    </figure>
                                    <?php echo esc_html($item['link']['title']); ?>
                                </a>
                            </li>
                <?php
                        endif;
                    endforeach;
                endif;
                ?>
            </ul>
        </div>
        <div class="flex flex-wrap flex-1">
            <?php
            $addresses = get_field('addresses', 'option');
            if ($addresses && count($addresses)) :
                foreach ($addresses as $item) :
                    if (isset($item['icon'], $item['title'], $item['address'])) :
            ?>
                        <div class="md:basis-1/2 basis-full flex items-start md:gap-3 gap-3">
                            <figure class="md:w-[30px] w-[25px] shrink-0">
                                <?php echo wp_get_attachment_image($item['icon'], 'thumbnail', false, [
                                    'loading' => 'lazy',
                                    'class' => 'image-contain',
                                ]); ?>
                                <figcaption><?php echo wp_kses_post(wp_get_attachment_caption($item['icon'])); ?></figcaption>
                            </figure>
                            <div>
                                <h3 class="md:text-2xl my-0! font-semibold"><?php echo esc_html($item['title']); ?></h3>
                                <p class="my-0!"><?php echo wp_kses_post($item['address']); ?></p>
                            </div>
                        </div>
            <?php
                    endif;
                endforeach;
            endif;
            ?>
        </div>
    </div>
    <?php
    $footer_note = get_field('footer_note', 'option');
    if (!empty($footer_note)) :
    ?>
        <div class="md:mt-10 mt-5">
            <?php echo wp_kses_post($footer_note); ?>
        </div>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js_SjpF8iGHD_9WHzuS3dpxlYO0htmrIWF2UxjzTzavT84.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/polyfill.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js_aCMg_BPMHJdFtY-e3QIxxSXKpYfouhJ0qqz0A1d0w6o.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/iframe_api"></script>


<iframe
    height="1"
    width="1"
    style="
        position: absolute;
        top: 0px;
        left: 0px;
        border: none;
        visibility: hidden;
      "
    src="<?php echo get_template_directory_uri(); ?>/assets/saved_resource.html"></iframe>
</body>

</html>