<?php
$cards = require get_template_directory() . '/includes/data/data.php';
?>
<section class="min-h-screen center-x-y dark:bg-base-4">
    <div class="max-w-5xl mx-auto">
        <div class="px-5">
            <span class="text-sm md:text-xl font-medium text-gray-500 uppercase -tracking-tighter mb-1 block">
                The Fundamentals
            </span>
            <h2 class="text-3xl sm:text-3xl md:text-5xl font-semibold tracking-tight">
                Core Expertise.
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 p-5 mt-20">
            <?php foreach ($cards as $card): ?>
                <?php get_template_part('template-parts/components/cards', null, ['card' => $card]); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>