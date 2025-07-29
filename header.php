<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-stone-100'); ?>>

    <!-- Accessibility Skip Link -->
    <a href="#site-content" class="sr-only focus:not-sr-only absolute top-0 left-0 bg-stone-200 text-black p-2 z-50">
        Skip to content
    </a>

    <header class="bg-white shadow-md border-b border-stone-200">

        <div class="ram-container !py-0">
            <div class="flex items-center justify-between h-auto relative">

                <!-- Logo -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 lg:pr-20 md:pr-10">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ram_logo.jpg" alt="RAM Construction Logo" class="md:block hidden h-54 w-54 aspect-square !max-w-80">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ram_logo.jpg" alt="RAM Construction Logo" class="md:hidden block h-20 w-20 aspect-square !max-w-20">
                    <span class="sr-only">RAM Construction Group</span>
                </a>

                <!-- Mobile menu toggle -->
                <button id="menu-toggle" class="md:hidden text-dark justify-self-end" aria-controls="primary-menu" aria-expanded="false">
                    <svg width="32" height="32" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" arialabelledby="title">
                        <title>Menu</title>
                        <g class="menu-bars">
                            <rect class="top" x="0" y="0" width="32" height="6" fill="currentColor" />
                            <rect class="middle" x="0" y="13" width="32" height="6" fill="currentColor" />
                            <rect class="bottom" x="0" y="26" width="32" height="6" fill="currentColor" />
                        </g>
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <div class="w-full hidden md:block lg:pr-4 ">
                    <div class="max-w-7xl mx-auto py-4">
                        <div class="flex flex-col items-start gap-2">
                            <!-- Site Title -->
                            <span class="lg:text-5xl md:text-4xl sm:text-3xl text-2xl font-bold tracking-tight">
                                <span class="text-primary block leading-none">RAM</span>
                                <span class="text-dark leading-none">CONSTRUCTION GROUP</span>
                            </span>

                            <!-- Tagline -->
                            <span class="text-base sm:text-lg mb-2 text-light">Building trust from the ground up.</span>
                        </div>
                    </div>
                    <!-- Desktop Menu -->
                    <nav id="primary-menu" aria-label="Main Menu">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'header_menu',
                            'container'      => false,
                            'menu_class'     => 'flex w-full h-14', // Full width container
                            'fallback_cb'    => false,
                        ]);
                        ?>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <?php
            wp_nav_menu([
                'theme_location' => 'header_menu',
                'container'      => false,
                'menu_class'     => 'flex flex-col',
                'fallback_cb'    => false,
            ]);
            ?>
        </div>
    </header>


    <main id="site-content">