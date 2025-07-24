<footer class="bg-white border-t border-slate-200 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Top Row: Footer Nav + ISO Logos -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">

            <!-- Footer Menu -->
            <nav class="space-y-2" aria-label="Footer Menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'container'      => false,
                    'menu_class'     => 'flex flex-col space-y-2',
                    'fallback_cb'    => false,
                ]);
                ?>
            </nav>

            <!-- ISO Logos -->
            <div class="flex items-center justify-center gap-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iso9001.png" alt="ISO 9001 Accreditation" class="h-12 w-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iso14001.png" alt="ISO 14001 Accreditation" class="h-12 w-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iso45001.png" alt="ISO 45001 Accreditation" class="h-12 w-auto">
            </div>

            <!-- Contact + Social -->
            <div class="text-center md:text-right space-y-4">
                <div>
                    <a href="tel:+441234567890" class="block text-lg font-semibold text-dark hover:text-primary transition">+44 1234 567890</a>
                    <a href="mailto:info@example.com" class="block text-lg text-dark hover:text-primary transition">info@example.com</a>
                </div>
                <div class="flex justify-center md:justify-end gap-4">
                    <!-- Social Icons -->
                    <a href="#" aria-label="Facebook" class="text-dark hover:text-primary transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54v-2.14c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.632.771-1.632 1.562V12h2.773l-.443 2.891h-2.33v6.987C18.343 21.128 22 16.991 22 12z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="text-dark hover:text-primary transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5C3.34 3.5 2 4.85 2 6.48s1.34 2.98 2.98 2.98 2.98-1.34 2.98-2.98S6.62 3.5 4.98 3.5zM2.4 8.98H7.5V21.5H2.4V8.98zm7.68 0H15v1.7h.06c.48-.9 1.66-1.84 3.43-1.84 3.67 0 4.34 2.42 4.34 5.56V21.5h-5.1v-5.82c0-1.39-.03-3.18-1.94-3.18-1.94 0-2.24 1.5-2.24 3.06V21.5h-5.1V8.98z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Row: Copyright -->
        <div class="border-t border-slate-200 pt-4 text-center text-sm text-slate-500">
            © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>