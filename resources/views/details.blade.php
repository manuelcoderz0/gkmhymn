<main>
    <header class="bg-white dark:bg-[#343434] z-2 sticky top-0 pt-6">
        <div class="px-4.5">
            <div class="relative pb-5 flex items-center justify-between z-1">
                <div class="flex items-center gap-2">
                    <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-2 cursor-pointer">
                        <div class="size-9 relative flex items-center justify-center border border-[#e9e9e9] dark:border-white/30 rounded-md bg-white/10">
                            <svg class="size-5.5 stroke-[#1f1f1f] dark:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M15 6l-6 6l6 6" />
                            </svg>
                        </div>
                    </a>
                    <span class="text-[#1f1f1f]/90 dark:text-white font-semibold">
                        {{ str_limit($title, 20) }}
                    </span>
                </div>

                <div class="flex items-center gap-2">
                    <button class="flex items-center gap-2 cursor-pointer">
                        <label wire:ignore class="swap swap-rotate size-9 relative place-items-center border border-[#e9e9e9] dark:border-white/30 rounded-md bg-white/10">
                            <!-- this hidden checkbox controls the state -->
                            <input type="checkbox" x-on:change="@this.$js.theme" class="theme-controller" />
              
                            <!-- sun icon -->
                            <svg class="swap-{{ setting('theme') == 'dark' ? 'off' : 'on' }} size-5.5 fill-none stroke-[#1f1f1f] dark:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>

                            <!-- moon icon -->
                            <svg class="swap-{{ setting('theme') == 'light' ? 'off' : 'on' }} size-5.5 fill-none stroke-[#1f1f1f] dark:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-moon">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454l0 .008" />
                            </svg>
                        </label>
                    </button>
                    <button class="flex items-center gap-2 cursor-pointer">
                        <div class="size-9 relative flex items-center justify-center border border-[#e9e9e9] dark:border-white/30 rounded-md bg-white/10">
                            <svg class="size-5.5 stroke-[#1f1f1f] dark:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 6l16 0" />
                                <path d="M4 12l16 0" />
                                <path d="M4 18l16 0" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </header>


    <section class="py-6">
        <div class="px-4.5">
            <div class="bg-white dark:bg-[#343434] text-[#1f1f1f]/90 dark:text-white p-4 rounded-md text-center">
                {!! $hymn->details !!}
            </div>
        </div>
    </section>

</main>


@script
    <script>
        $js.theme = () => {
            const html = this.$el.closest('html');

            const theme = html.dataset.theme === 'dark' ? 'light' : 'dark';

            html.dataset.theme = theme;

            $wire.save(theme);
        }
    </script>
@endscript