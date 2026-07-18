<section
    id="beranda"
    class="relative min-h-screen overflow-hidden bg-[#ffffff] pt-24"
>
    {{-- Lingkaran background kiri --}}
    <div
        class="pointer-events-none absolute -left-[420px] top-[120px]
               h-[900px] w-[900px] rounded-full
               bg-[#d8f1ff]"
    ></div>

    <div
        class="relative mx-auto grid min-h-[720px] max-w-[1320px]
               items-center gap-8 px-8 pb-14 pt-8
               lg:grid-cols-[0.9fr_1.1fr]"
    >
        {{-- Konten kiri --}}
        <div class="relative z-10 max-w-[540px]">
            <span
                class="inline-flex rounded-full border-2 border-[#0b3472]
                       bg-[#d8f1ff] px-2 py-0.5
                       text-xs font-extrabold text-[#000000]"
            >
                UKM FT ITC
            </span>

            <h1
                class="mt-3 text-4xl font-black uppercase leading-tight
                       tracking-tight text-[#123f86]
                       sm:text-5xl lg:text-[3.25rem]"
            >
                <span
                    class="bg-gradient-to-r from-[#002C73] via-[#6FA6FF] to-[#0256DD]
                        bg-clip-text text-transparent">
                DON’T BE GAPTEK
                </span>
            </h1>

            <p
                class="mt-5 max-w-[500px]
                       text-sm leading-relaxed text-slate-800
                       sm:text-base"
            >
                ITC adalah wadah pengembangan diri di bidang teknologi
                informasi untuk menciptakan karya, solusi, dan inovasi
                yang berdampak nyata.
            </p>

            <a
                href="#deskripsi"
                class="mt-9 inline-flex items-center gap-5 rounded-full
                       bg-gradient-to-r from-[#0c408b] to-[#0765df]
                       px-8 py-3.5 text-sm font-bold text-white
                       shadow-[0_8px_18px_rgba(8,85,190,0.28)]
                       transition duration-200
                       hover:-translate-y-0.5 hover:shadow-xl"
            >
                Read More

                <svg
                    viewBox="0 0 24 24"
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2.5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 12h14m-5-5 5 5-5 5"
                    />
                </svg>
            </a>

            <div class="mt-10 flex flex-wrap gap-4">
                <x-stat-card
                    value="20+"
                    label="Anggota Aktif"
                    icon="users"
                />

                <x-stat-card
                    value="10+"
                    label="Kegiatan"
                    icon="calendar"
                />

                <x-stat-card
                    value="5"
                    label="Divisi Unggulan"
                    icon="user-group"
                />
            </div>
        </div>

        {{-- Gambar kanan --}}
        <div class="relative z-10 flex items-center justify-center lg:justify-end">
            <img
                src="{{ asset('images/hero-illustration.png') }}"
                alt="Ilustrasi UKM FT ITC"
                class="w-full max-w-[650px] translate-x-8 object-contain">
        </div>
    </div>
</section>