<main>
    <header class="bg-[#065c2d] z-2 sticky top-0 pt-6">
        <div class="px-4.5">
            <div class="relative pb-5 flex items-center justify-between z-1">
                <div class="flex items-center gap-2">
                    <button class="flex items-center gap-2 cursor-pointer">
                        <div class="size-9 relative flex items-center justify-center border border-white/50 rounded-md bg-white/10">
                            <svg class="size-5.5 stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 6l16 0" />
                                <path d="M4 12l16 0" />
                                <path d="M4 18l16 0" />
                            </svg>
                        </div>
                    </button>
                </div>

                <div class="flex items-center gap-2">
                    <button class="flex items-center gap-2 cursor-pointer">
                        <label wire:ignore class="swap swap-rotate size-9 relative place-items-center border border-white/50 rounded-md bg-white/10">
                            <!-- this hidden checkbox controls the state -->
                            <input type="checkbox" x-on:change="@this.$js.theme" class="theme-controller" />

                            <!-- sun icon -->
                            <svg class="swap-{{ setting('theme') == 'dark' ? 'off' : 'on' }} size-5.5 fill-none stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>

                            <!-- moon icon -->
                            <svg class="swap-{{ setting('theme') == 'light' ? 'off' : 'on' }} size-5.5 fill-none stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454l0 .008" />
                            </svg>
                        </label>
                    </button>
                    <a href="{{ route('pref') }}" wire:navigate.hover class="flex items-center gap-2 cursor-pointer">
                        <div class="size-9 relative flex items-center justify-center border border-white/50 rounded-md bg-white/10">
                            <svg class="size-5.5 stroke-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065" />
                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-[#065c2d] pt-0 rounded-b-[10px] pb-6">
        <div class="px-4.5">
            <div class="join flex w-full">
                <label class="join-item flex flex-1 min-w-0 items-center rounded-l-md bg-[#f5f5f5] dark:bg-[#343434] border-0 h-14">

                    <svg class="h-[1em] opacity-50 size-6! ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#7f8384" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>

                    <input wire:model.live="search" type="search" placeholder="Search hymns" required class="w-full ml-3 min-w-0 dark:text-white placeholder:text-[#7f8384] outline-0" />
                </label>


                <button class="join-item rounded-r-md bg-[#f5f5f5] dark:bg-[#343434] border-[#e9e9e9] dark:border-[#414141] border-0 border-l px-3">
                    <svg class="size-5.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#065c2d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-shuffle">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M18 4l3 3l-3 3" />
                        <path d="M18 20l3 -3l-3 -3" />
                        <path d="M3 7h3a5 5 0 0 1 5 5a5 5 0 0 0 5 5h5" />
                        <path d="M21 7h-5a4.978 4.978 0 0 0 -3 1m-4 8a4.984 4.984 0 0 1 -3 1h-3" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="py-6">
        <div class="px-4.5 flex gap-3.5 overflow-x-auto whitespace-nowrap scrollbar-none">
            <button class="{{ $filter === 'all' ? 'bg-[#065c2d] text-white' : 'bg-white dark:bg-[#343434] text-[#8f8f8f] dark:text-white/50' }} px-3 py-2.5 rounded-lg shrink-0" wire:click="set_filter('all')">All Hymns</button>
            <button class="{{ $filter === 'fav' ? 'bg-[#065c2d] text-white' : 'bg-white dark:bg-[#343434] text-[#8f8f8f] dark:text-white/50' }} px-3 py-2.5 rounded-lg shrink-0" wire:click="set_filter('fav')">Favorites</button>
            <button class="{{ $filter === 'sav' ? 'bg-[#065c2d] text-white' : 'bg-white dark:bg-[#343434] text-[#8f8f8f] dark:text-white/50' }} px-3 py-2.5 rounded-lg shrink-0" wire:click="set_filter('sav')">Bookmark</button>
            <button class="{{ $filter === 'spe' ? 'bg-[#065c2d] text-white' : 'bg-white dark:bg-[#343434] text-[#8f8f8f] dark:text-white/50' }} px-3 py-2.5 rounded-lg shrink-0" wire:click="set_filter('spe')">Special</button>
        </div>
        <div wire:transition="page-content" x-data x-transition:enter="transition-transform duration-100" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" class="px-4.5 slide-in">
            <div class="mt-6 bg-white dark:bg-[#343434] rounded-lg py-7 px-3.5 flex flex-col gap-4">
                @forelse($hymns as $hymn)
                    <a href="{{ route('hymn', ['hymn' => $hymn->id]) }}" wire:navigate class="flex w-full min-w-0 px-4 py-3 bg-[#f5f5f5] dark:bg-[#1f1f1f] rounded-md">
                        <span class="min-w-0 truncate text-[#1f1f1f]/90 dark:text-white font-semibold">{{ $hymn->title }}</span>
                    </a>
                @empty
                    <div class="place-items-center mt-3">
                        <img class="img-fluid icon" src="{{ asset('assets/images/empty-bell.svg') }}" alt="alert">
                        <p class="mt-1 fs-6">No hymns found.</p>
                    </div>
                @endforelse
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