<section id="featured" class="py-24 px-5 bg-white dark:bg-base-4 flex flex-col">
    <div class="max-w-5xl mx-auto flex flex-col w-full">
        <div>
            <span class="text-sm md:text-xl font-medium text-gray-500 uppercase -tracking-tighter mb-1 block">
                Featured
            </span>
            <h2 class="text-3xl sm:text-3xl md:text-5xl font-semibold tracking-tight">
                Innovation in practice.
            </h2>
        </div>

        <div class="w-full">
            <div class="bg-gray-100 dark:bg-slate-800 rounded-2xl relative shadow-md mt-10 overflow-hidden">
                <div class="py-4 px-5 flex gap-2">
                    <span class="w-2.5 h-2.5 bg-notices-3 block rounded-full"></span>
                    <span class="w-2.5 h-2.5 bg-notices-5 block rounded-full"></span>
                    <span class="w-2.5 h-2.5 bg-green-500 block rounded-full"></span>
                </div>
                <img
                    src="<?php echo get_img_url(30, 'full'); ?>" alt="hoaxai"
                    class="block dark:brightness-80">
            </div>
        </div>


    </div>
</section>

<section class="bg-white dark:bg-base-black flex flex-col pb-4">
    <!-- Mockup -->
    <div class="bg-base-3 max-w-432 max-[1728px]:rounded-none mx-auto rounded-4xl overflow-hidden relative w-full dark:brightness-80">
        <div class="flex flex-col pt-20 min-[1200px]:pb-170 justify-center items-center relative z-10">
            <h1 class="text-center text-3xl sm:text-5xl font-semibold text-base-dark">
                Design with Intent. Nothing More.
            </h1>
            <p class="text-xl mt-8 max-w-3xl mx-auto text-center font-medium sm:font-medium pb-8 px-5 text-base-gray">
                Stripping away the noise to focus on what truly matters: the truth.
            </p>
        </div>

        <img
            src="<?php echo get_img_url(36, 'full') ?>"
            alt="hoaxai mobile"
            class="relative min-[1200px]:absolute max-w-5xl bottom-0 left-0 z-10 w-full">

        <img
            src="<?php echo get_img_url(37, 'full') ?>"
            alt="hoaxai mobile"
            class="absolute max-w-100 bottom-0 right-0 hidden min-[1200px]:block">
    </div>

    <div class="px-4 mt-4">
        <div class="bg-base-3  dark:bg-base-4 dark:inset-shadow-sm dark:inset-shadow-base-black mx-auto py-12 w-full flex flex-col rounded-md">
            <h1 class="text-center text-4xl md:text-5xl font-bold text-accent-1 px-5">Hoax Detect AI</h1>
            <p class="text-base dark:text-base-light/60 md:text-xl mt-4 max-w-3xl mx-auto text-center font-medium sm:font-medium pb-8 px-5">
                A sophisticated SaaS-based fake news detection platform. Built as a prototype to empower digital literacy by verifying article authenticity in real-time.
            </p>


            <a href="https://fathur-md.github.io/hoaxdetect-ai-saas/" target="_blank" class="font-semibold group border-b-2 hover:border-accent-1 hover:text-accent-1 transition-colors duration-300 pb-1 mx-auto">
                Launch Demo
                <span class="inline-block group-hover:-rotate-45 transition-transform duration-300">
                    →
                </span>
            </a>
        </div>
    </div>
</section>