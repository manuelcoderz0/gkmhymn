<main>
    <header class="bg-white dark:bg-[#343434] z-2 sticky top-0 pt-10">
        <div class="px-4.5">
            <div class="relative pb-5 flex items-center justify-between z-1">
                <div class="flex items-center gap-2">
                    <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-2 cursor-pointer">
                        <div class="size-9 relative flex items-center justify-center border border-[#e9e9e9] dark:border-white/30 rounded-md bg-white/10 dark:bg-white/5">
                            <svg class="size-5.5 stroke-[#1f1f1f] dark:stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                        </div>
                    </a>
                    <span class="text-[#1f1f1f]/90 dark:text-white font-semibold">
                        {{ str_limit($title, 20) }}
                    </span>
                </div>

                <div class="flex items-center gap-2">
                    <button wire:click="favorite" class="flex items-center gap-2 cursor-pointer">
                        <div class="size-9 relative flex items-center justify-center border border-[#e9e9e9] dark:border-white/30 rounded-md bg-white/10 dark:bg-white/5">
                            <svg class="size-5.5 stroke-[#1f1f1f] dark:stroke-white {{ $hymn->fav ? 'fill-[#ffb400] stroke-[#ffb400]!' : 'fill-none' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                            </svg>
                        </div>
                    </button>
                    <button wire:click="bookmark" class="flex items-center gap-2 cursor-pointer">
                        <div class="size-9 relative flex items-center justify-center border border-[#e9e9e9] dark:border-white/30 rounded-md bg-white/10 dark:bg-white/5">
                            <svg class="size-5.5 stroke-[#1f1f1f] dark:stroke-white {{ $hymn->sav ? 'fill-[#ffb400] stroke-[#ffb400]!' : 'fill-none' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bookmark">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18 7v14l-6 -4l-6 4v-14a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </header>


    <section x-data x-transition:enter="transition-transform duration-100" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" class="py-6 slide-in">
        <div class="px-4.5">
            <div style="font-size: {{ setting('font') }}px" class="bg-white dark:bg-[#343434] text-[#1f1f1f]/90 dark:text-white p-4 rounded-md text-center">
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