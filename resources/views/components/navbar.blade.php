<header class="absolute inset-x-0 top-0 z-50 px-3 pt-6">
    <nav
        class="relative mx-auto flex h-[48px] w-full max-w-[1320px]
               items-center rounded-full
               bg-gradient-to-r from-[#365b91] to-[#347bea]
               px-5
               shadow-[0_6px_14px_rgba(30,64,175,0.22)]"
        aria-label="Navigasi utama"
    >
        {{-- Logo --}}
        <a
            href="{{ route('home') }}"
            class="relative z-10 flex shrink-0 items-center"
        >
            <img
                src="{{ asset('images/logo-itc.png') }}"
                alt="Logo UKM FT ITC"
                class="h-8 w-8 object-contain"
            >
        </a>

        {{-- Navigasi desktop --}}
        <div
            class="absolute left-1/2 hidden -translate-x-1/2
                   items-center gap-12 whitespace-nowrap
                   text-[13px] font-semibold text-white md:flex"
        >
            <a
                href="#beranda"
                class="transition-colors hover:text-cyan-200"
            >
                Beranda
            </a>

            <a
                href="#deskripsi"
                class="transition-colors hover:text-cyan-200"
            >
                Deskripsi
            </a>

            <a
                href="#divisi"
                class="transition-colors hover:text-cyan-200"
            >
                Divisi
            </a>

            <a
                href="#kegiatan"
                class="transition-colors hover:text-cyan-200"
            >
                Kegiatan
            </a>

            <a
                href="#kontak"
                class="transition-colors hover:text-cyan-200"
            >
                Kontak
            </a>
        </div>

        {{-- Tombol menu mobile --}}
        <button
            type="button"
            class="ml-auto inline-flex items-center justify-center
                   rounded-lg p-2 text-white md:hidden"
            aria-label="Buka menu"
            aria-expanded="false"
            data-menu-button
        >
            <svg
                viewBox="0 0 24 24"
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>
        </button>
    </nav>

    {{-- Navigasi mobile --}}
    <div
        class="mx-auto mt-2 hidden w-full max-w-[1320px]
               rounded-2xl bg-white p-4
               shadow-[0_8px_20px_rgba(15,23,42,0.15)]
               md:hidden"
        data-mobile-menu
    >
        <div class="flex flex-col gap-4 text-sm font-semibold text-slate-700">
            <a href="#beranda">Beranda</a>
            <a href="#deskripsi">Deskripsi</a>
            <a href="#divisi">Divisi</a>
            <a href="#kegiatan">Kegiatan</a>
            <a href="#kontak">Kontak</a>
        </div>
    </div>
</header>