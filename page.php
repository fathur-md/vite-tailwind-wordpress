<?php
// Memanggil bagian header (header.php)
get_header();
?>

<!-- Wrapper utama dengan styling minimalis -->
<main class="max-w-3xl mx-auto px-4 py-12 md:py-20">

    <?php
    // Memulai WordPress Loop
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- Judul Halaman -->
                <header class="mb-8 md:mb-12">
                    <h1 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white tracking-tight">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <!-- Isi Konten Halaman (dari Gutenberg/Classic Editor) -->
                <div class="text-base md:text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php
        endwhile;
    else :
        // Pesan jika halaman tidak ditemukan (opsional tapi disarankan)
        ?>
        <div class="text-center py-20">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Halaman tidak ditemukan.</h1>
        </div>
    <?php
    endif;
    ?>

</main>

<?php
// Memanggil bagian footer (footer.php)
get_footer();
?>