<footer class="bg-base-2 dark:bg-base-black">
    <!-- Main Footer Content -->
    <div class="mx-auto max-w-5xl px-6 py-5">
        <div class="mx-auto max-w-5xl pt-5 flex border-t-2 border-accent-3 dark:border-contrast-1">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-contrast-4 w-full">
            <!-- Branding -->
            <div class="flex flex-col items-center md:items-start">
                <a href="<?php echo home_url('/'); ?>" class="text-sm font-semibold tracking-tightest hover:opacity-80 transition-opacity leading-none text-contrast-1 dark:text-accent-3 mb-4">
                    <?php bloginfo('name'); ?><span class="font-bold text-2xl text-notices-2 leading-0">.</span>
                </a>
                <p class="mt-2 text-xs">
                    <?php bloginfo('description') ?>
                </p>
            </div>

            <!-- Menu Links -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-sm font-semibold text-contrast-1 dark:text-accent-3 mb-4">
                    Navigasi
                </h3>
                <nav class="flex flex-wrap gap-x-3 space-y-2 text-xs md:flex-cold">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'footer-menu',
                        'container'         => false,
                        'items_wrap'        => '%3$s',
                        'depth'             => 1,
                        'fallback_cb'       => function () {
                            echo '<a href="' . home_url('/') . '" class="text-sm text-contrast-4 dark:text-base-gray hover:text-contrast-1 dark:hover:text-accent-3 transition-colors">Home</a>';
                        }
                    ));
                    ?>
                </nav>
            </div>


            <!-- Social Links -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-sm font-semibold text-contrast-1 dark:text-accent-3 mb-4">
                    Ikuti
                </h3>
                <div class="flex gap-4 text-xs">
                    <a href="#" class="text-contrast-4 dark:text-base-gray hover:text-accent-1 dark:hover:text-accent-1 transition-colors">Twitter</a>
                    <a href="#" class="text-contrast-4 dark:text-base-gray hover:text-accent-1 dark:hover:text-accent-1 transition-colors">GitHub</a>
                    <a href="#" class="text-contrast-4 dark:text-base-gray hover:text-accent-1 dark:hover:text-accent-1 transition-colors">LinkedIn</a>
                </div>
            </div>
        </div>

        <!-- Bottom Bar: Copyright -->
        <div class="mx-auto max-w-5xl mt-3 pt-3 flex flex-col md:flex-row items-center justify-between text-xs text-contrast-4 dark:text-base-gray border-t-2 border-accent-3 dark:border-contrast-1">
            <p>&copy; <?php current_time('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            <p>Crafted with care 🚀</p>
        </div>
    </div>
</footer>