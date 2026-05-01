<header class="site-header top-0 z-50 w-full bg-base-2/50 dark:bg-base-black/50 backdrop-blur-lg">
    <nav class="mx-auto flex w-full max-w-5xl items-center justify-between px-6 py-2">
        <a href="<?php echo home_url('/') ?>" class="text-xl font-semibold tracking-tightest text-contrast-2 dark:text-accent-3 transition-opacity hover:opacity-80">
            Fathur<span class="bord text-2xl font-bold text-notices-2">.</span>
        </a>
        <div class="hidden md:flex items-center justify-center gap-10 text-sm dark:text-accent-3">
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'primary-menu',
                'container'         => false,
                'items_wrap'        => '%3$s',
                'depth'             => 2,
                'fallback_cb'       => function () {
                    echo '<a href="#">Menu belum diatur</a>';
                }
            ));
            ?>
        </div>
        <button class="relative z-50 cursor-pointer transition-all hover:opacity-80 active:scale-95 md:hidden">
            <span class="custom-navbar-btn mb-1 block h-0.5 w-5 rounded bg-contrast-1 dark:bg-accent-3 transition-all"></span>
            <span class="custom-navbar-btn block h-0.5 w-5 rounded bg-contrast-1 transition-all dark:bg-accent-3"></span>
        </button>
    </nav>
    <div id="mobile-menu" class="fixed inset-0 z-40 flex h-screen w-full flex-col items-start justify-start bg-base-1 dark:bg-base-black backdrop-blur-2xl opacity-0 pointer-events-none transition-opacity duration-500 pt-24 pl-16">
        <div class="flex flex-col items-start space-y-8 text-3xl font-semibold tracking-tight">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'depth'          => 2,
                'fallback_cb'    => function () {
                    echo '<a href="#">Menu belum diatur</a>';
                }
            ));
            ?>
        </div>
    </div>
</header>