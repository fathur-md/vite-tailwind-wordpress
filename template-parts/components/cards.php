<?php
$card = $args['card'] ?? null;
if (!$card) return;
?>

<div>
    <h2 class="font-bold text-lg py-2">
        <?= $card['title']; ?>
    </h2>
    <p>
        <?= $card['desc']; ?>
    </p>
    <?php if (!empty($card['items'])): ?>
        <div class="flex gap-2 flex-wrap py-4">
            <?php foreach ($card['items'] as $item): ?>
                <span class="p-2 bg-gray-200 dark:bg-base-dark rounded-sm tracking-wider text-xs font-bold uppercase">
                    <?= $item ?>
                </span>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>