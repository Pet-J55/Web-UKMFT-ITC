```blade
<!-- Program Kerja Section -->
<section id="program-kerja" class="relative mt-28 pt-7 overflow-visible">

    <!-- Judul Melayang -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 z-30">
        <h2 class="bg-gradient-to-r from-[#002054] to-[#0256DD] text-white font-extrabold text-2xl md:text-3xl px-12 py-3.5 rounded-full shadow-[0_10px_25px_rgba(0,32,84,0.35)] border-4 border-[#EBF3FA] whitespace-nowrap">
            Program Kerja
        </h2>
    </div>

    <!-- Container -->
    <div class="bg-[#EBF3FA] rounded-t-[40px] md:rounded-t-[50px] pt-16 pb-16 relative shadow-inner overflow-hidden">

        <!-- Alpine JS -->
        <div
            x-data="{
                activeDivisi: '{{ $proker_data->keys()->first() ?? '' }}',

                selectDivisi(name) {
                    this.activeDivisi = name;

                    this.$nextTick(() => {
                        const el = document.getElementById('proker-carousel-' + name);

                        if (el) {
                            el.scrollTo({
                                left: 0,
                                behavior: 'smooth'
                            });
                        }
                    });
                }
            }"
            class="relative z-10"
        >

            <!-- Tabs Navigasi Divisi -->
            <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-center mb-10 mt-4">

                    <div class="bg-white rounded-full p-2 shadow-[0_4px_16px_rgba(0,0,0,0.06)] inline-flex items-center gap-1 md:gap-2 overflow-x-auto max-w-full hide-scroll-bar">

                        @foreach($proker_data as $divName => $cards)

                            <button
                                @click="selectDivisi('{{ $divName }}')"

                                :class="activeDivisi === '{{ $divName }}'
                                    ? 'bg-gradient-to-r from-[#002054] to-[#0256DD] text-white font-black shadow-md'
                                    : 'bg-transparent text-slate-900 font-extrabold hover:bg-slate-100'"

                                class="px-6 md:px-8 py-2.5 text-sm rounded-full transition-all duration-300 whitespace-nowrap cursor-pointer"
                            >
                                {{ $divName }}
                            </button>

                        @endforeach

                    </div>
                </div>
            </div>


            <!-- Area Carousel -->
            <div class="relative w-full overflow-hidden">

                <!-- Background -->
                <img
                    src="{{ asset('assets/images/bacground-proker.png') }}"
                    alt="Background Program Kerja Carousel"
                    class="absolute inset-0 w-full h-full object-cover object-center pointer-events-none z-0"
                />


                <!-- Carousel Per Divisi -->
                @foreach($proker_data as $divName => $cards)

                    <div
                        x-show="activeDivisi === '{{ $divName }}'"

                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0"

                        id="proker-carousel-{{ $divName }}"

                        class="flex overflow-x-auto gap-6 pb-6 pt-4 pr-4 sm:pr-6 lg:pr-8 snap-x hide-scroll-bar w-full relative z-10 scroll-smooth"

                        style="padding-left: max(1.25rem, calc((100% - 1320px) / 2 + 2rem));"
                    >

                        @foreach($cards as $card)

                            <!-- Card Proker -->
                            <div class="bg-white rounded-[22px] shadow-[0_10px_25px_rgba(0,0,0,0.07)] overflow-hidden min-w-[275px] w-[275px] flex-shrink-0 snap-start flex flex-col border border-slate-100 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl">

                                <!-- Image -->
                                <div class="h-44 w-full bg-slate-100 overflow-hidden">

                                    <img
                                        src="{{ asset('assets/images/proker/' . $card->foto) . '.webp'}}"
                                        alt="{{ $card->nama }}"
                                        class="w-full h-full object-cover object-center"
                                    />

                                </div>


                                <!-- Content -->
                                <div class="p-5 flex flex-col flex-grow">

                                    <!-- Nama Proker -->
                                    <h3 class="text-[#0256DD] font-extrabold text-[19px] leading-snug mb-2">
                                        {{ $card->nama }}
                                    </h3>


                                    <!-- Deskripsi -->
                                    <p class="text-[13px] font-bold text-slate-900 mb-5 leading-tight">
                                        {{ $card->deskripsi }}
                                    </p>


                                    <!-- Details -->
                                    <div class="space-y-2.5 mb-6 text-[13px] font-bold text-slate-800">

                                        <!-- Tanggal -->
                                        <div class="flex items-center gap-2.5">

                                            <svg
                                                class="w-4 h-4 text-slate-600 shrink-0"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                viewBox="0 0 24 24"
                                            >
                                                <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>

                                            <span>
                                                @if($card->tanggal_berlangsung)
                                                    {{ $card->tanggal_berlangsung->format('d F Y') }}
                                                @else
                                                    -
                                                @endif
                                            </span>

                                        </div>


                                        <!-- Lokasi -->
                                        <div class="flex items-center gap-2.5">

                                            <svg
                                                class="w-4 h-4 text-slate-600 shrink-0"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                viewBox="0 0 24 24"
                                            >
                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>

                                            <span>
                                                {{ $card->lokasi ?: '-' }}
                                            </span>

                                        </div>


                                        <!-- Peserta -->
                                        <div class="flex items-center gap-2.5">

                                            <svg
                                                class="w-4 h-4 text-slate-600 shrink-0"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                viewBox="0 0 24 24"
                                            >
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>

                                            <span>
                                                @if($card->peserta && $card->peserta !== '-')
                                                    {{ $card->peserta }} Peserta
                                                @else
                                                    -
                                                @endif
                                            </span>

                                        </div>

                                    </div>


                                    <!-- Button -->
                                    <div class="mt-auto">

                                        <a
                                            href="{{ route('detail-proker', $card->id) }}"
                                            class="inline-block bg-gradient-to-r from-[#002054] to-[#0256DD] text-white text-[13px] font-bold px-6 py-2.5 rounded-full shadow-sm hover:opacity-90 transition"
                                        >
                                            Selengkapnya
                                        </a>

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                @endforeach


                <!-- Kalau Tidak Ada Data -->
                @if($proker_data->isEmpty())

                    <div class="relative z-10 flex justify-center items-center py-16">

                        <div class="bg-white rounded-2xl px-8 py-6 shadow-md text-center">

                            <p class="text-slate-700 font-bold">
                                Belum ada program kerja.
                            </p>

                        </div>

                    </div>

                @endif

            </div>


            <!-- Tombol Lihat Semua -->
            <div class="max-w-[1320px] mx-auto px-4 sm:px-6 lg:px-8 mt-6">

                <div class="flex justify-center">

                    <a
                        href="#"
                        class="bg-gradient-to-r from-[#002054] to-[#0256DD] text-white px-9 py-3.5 rounded-full font-extrabold text-sm flex items-center gap-2.5 shadow-md hover:shadow-lg transition"
                    >
                        Lihat Semua Program

                        <svg
                            class="w-4 h-4"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"
                            ></path>
                        </svg>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

    /* Sembunyikan scrollbar tetapi tetap bisa di-scroll */
    .hide-scroll-bar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .hide-scroll-bar::-webkit-scrollbar {
        display: none;
    }

</style>