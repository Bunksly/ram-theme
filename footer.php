<footer class="bg-white border-t border-stone-200 py-10">
    <div class="ram-container">

        <!-- Top Row: Footer Nav + ISO Logos -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 mb-8">
            <div>
                <h4 class="inline-block mb-4 lg:text-end !text-dark border-b-2 border-primary">Quick Links</h4>
                <!-- Footer Menu -->
                <nav class="space-y-2 footer-menu" aria-label="Footer Menu">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer_menu',
                        'container'      => false,
                        'menu_class'     => 'flex flex-col space-y-2',
                        'fallback_cb'    => false,
                    ]);
                    ?>
                </nav>
            </div>
            <!-- ISO Logos -->
            <div class="lg:col-span-2">
                <h4 class="inline-block mb-4 lg:text-end !text-dark border-b-2 border-primary">Accreditations</h4>
                <div class="flex gap-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/CHAS-Elite-Accred-Logo.jpeg" alt="ISO 9001 Accreditation" class="md:h-34 h-24 w-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Constructionline-Gold-Logo.jpg" alt="ISO 14001 Accreditation" class="md:h-34 h-24 w-auto">
                </div>
            </div>

            <!-- Contact + Social -->
            <?php
            // Get the contact page by slug, fallback to its ID
            $contact_page = get_page_by_path('contact');
            $contact_id   = $contact_page ? $contact_page->ID : 20;
            ?>
            <div class="lg:col-span-2">
                <h4 class="inline-block mb-4 lg:text-end !text-dark border-b-2 border-primary">Contact</h4>
                <div class="md:text-right space-y-4">
                    <?php if (have_rows('contact', $contact_id)): ?>
                        <ul class="space-y-2">
                            <?php while (have_rows('contact', $contact_id)): the_row(); ?>

                                <?php if (get_row_layout() == 'phone'):
                                    $label  = get_sub_field('label');
                                    $number = get_sub_field('number');
                                ?>
                                    <li class="flex gap-2">
                                        <span class="font-bold"><?php echo esc_html($label); ?>:</span>
                                        <a href="tel:<?php echo esc_attr($number); ?>" class="hover:!text-primary hover:underline">
                                            <?php echo esc_html($number); ?>
                                        </a>
                                    </li>

                                <?php elseif (get_row_layout() == 'email'):
                                    $address = get_sub_field('address');
                                ?>
                                    <li class="flex flex-wrap gap-2">
                                        <span class="font-bold">Email:</span>
                                        <a href="mailto:<?php echo antispambot($address); ?>"
                                            class="hover:!text-primary hover:underline">
                                            <?php echo esc_html($address); ?>
                                        </a>
                                    </li>

                                <?php elseif (get_row_layout() == 'social_media_group'): ?>
                                    <?php if (have_rows('social_media')): ?>
                                        <li class="flex gap-4">
                                            <?php while (have_rows('social_media')): the_row();
                                                $icon = get_sub_field('icon');
                                                $link = get_sub_field('link');
                                            ?>
                                                <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer"
                                                    class="dashicons <?php echo esc_attr($icon); ?> !text-3xl transition-colors duration-200 hover:!text-primary">
                                                </a>
                                            <?php endwhile; ?>
                                        </li>
                                    <?php endif; ?>
                                <?php endif; ?>

                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Bottom Row: Copyright -->
        <div class="border-t border-stone-200 pt-4  text-sm text-stone-500">
            © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>