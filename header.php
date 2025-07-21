<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-slate-200'); ?>>

    <!-- Accessibility Skip Link -->
    <a href="#site-content" class="sr-only focus:not-sr-only absolute top-0 left-0 bg-slate-200 text-black p-2 z-50">
        Skip to content
    </a>

    <header class="bg-white shadow-sm border-b border-gray-200">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-x-20 h-auto relative">

                <!-- Logo -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ram_logo.jpg" alt="RAM Construction Logo" class="h-54 w-54 aspect-square !max-w-80">
                    <span class="sr-only">RAM Construction Group</span>
                </a>

                <!-- Mobile menu toggle -->
                <button id="menu-toggle" class="md:hidden text-dark focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="primary-menu" aria-expanded="false">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <div class="w-full hidden md:block pr-4">
                    <div class="max-w-7xl mx-auto py-4">
                        <div class="flex flex-col items-start gap-2">
                            <!-- Site Title -->
                            <h1 class="text-4xl sm:text-5xl font-bold tracking-tight">
                                <span class="text-primary block leading-none">RAM</span>
                                <span class="text-dark leading-none">CONSTRUCTION</span>
                            </h1>

                            <!-- Tagline -->
                            <span class="text-sm sm:text-base text-light">Building trust from the ground up.</span>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-300"></div>
                    <!-- Desktop Menu -->
                    <nav id="primary-menu" class="flex space-x-4 py-4" aria-label="Main Menu">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'header_menu',
                            'container'      => false,
                            'menu_class'     => 'flex flex-col md:flex-row justify-between w-full',
                            'fallback_cb'    => false,
                        ]);
                        ?>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
            <?php
            wp_nav_menu([
                'theme_location' => 'header_menu',
                'container'      => false,
                'menu_class'     => 'flex flex-col gap-2',
                'fallback_cb'    => false,
            ]);
            ?>
        </div>
    </header>


    <main id="site-content">