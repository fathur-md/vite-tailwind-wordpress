<header class="site-header top-0 z-50 w-full bg-base-2/50 dark:bg-base-black/50 backdrop-blur-lg">
    <nav class="mx-auto flex w-full max-w-5xl items-center justify-between px-6 py-2">
        <a href="<?php echo home_url('/') ?>" class="text-xl font-semibold tracking-tightest text-contrast-2 dark:text-accent-3 transition-opacity hover:opacity-80">
            <?php bloginfo('name') ?><span class="bord text-2xl font-bold text-notices-2">.</span>
        </a>
        <div class="hidden md:flex gap-8 text-sm">
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

        <button class="menu-toggle group relative cursor-pointer md:hidden z-50 transition-all hover:opacity-80">
            <span class="w-5 h-0.5 bg-contrast-1 rounded-full mb-1 block dark:bg-accent-3 transition-all duration-300 group-[.active]:translate-y-1.5 group-[.active]:rotate-45"></span>
            <span class="w-5 h-0.5 bg-contrast-1 rounded-full mb-1 block dark:bg-accent-3 transition-all duration-300 group-[.active]:-rotate-45"></span>
        </button>

        <div id="mobile-menu"
            class="fixed inset-0 z-40 flex flex-col items-start justify-start w-full min-h-screen py-24 pl-12 md:hidden overflow-y-auto transition-all duration-500 bg-base-1 dark:bg-base-black
            invisible opacity-0 -translate-y-4 pointer-events-none
            [&.active]:visible [&.active]:opacity-100 [&.active]:translate-y-0 [&.active]:pointer-events-auto
            ">
            <div class="space-y-8 text-2xl font-medium tracking-tight">
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
    </nav>
</header>