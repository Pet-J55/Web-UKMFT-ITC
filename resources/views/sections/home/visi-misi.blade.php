<section
    id="visi-misi"
    class="relative z-20 isolate overflow-visible bg-white
       pb-[180px] pt-6
       lg:pb-[220px] lg:pt-8"
>
    {{-- Lingkaran dekorasi belakang card --}}
    <div
        class="pointer-events-none absolute
                left-[26%] top-[290px] z-0
                h-[430px] w-[430px]
                rounded-full bg-[#d8f1ff]
                lg:top-[300px]"
        ></div>

    <div
        class="pointer-events-none absolute
                left-[47%] top-[330px] z-0
                h-[420px] w-[420px]
                rounded-full bg-[#76c6ef]/75
                lg:top-[340px]"
    ></div>

    {{-- Ornamen gelombang bawah --}}
    <img
        src="{{ asset('assets/images/wave-blue.png') }}"
        alt=""
        aria-hidden="true"
        class="pointer-events-none absolute
            left-1/2 bottom-[-5px] z-0
            w-[1000px] max-w-none
            -translate-x-1/2
            object-contain opacity-200
            origin-bottom scale-y-[1.3]
            lg:bottom-[-600px] lg:w-[1350px]"
    >

    <div
        class="relative z-10 mx-auto max-w-[1320px]
               px-5 sm:px-8"
    >
        {{-- Judul section --}}
        <div class="text-center">
            <div
                class="inline-flex min-w-[230px] items-center justify-center
                       rounded-full
                       bg-gradient-to-r from-[#002054] to-[#0256DD]
                       px-10 py-3.5
                       text-[24px] font-extrabold text-white
                       shadow-[0_10px_22px_rgba(0,32,84,0.30)]
                       sm:text-[28px]"
            >
                Visi &amp; Misi
            </div>

            <p
                class="mx-auto mt-7 max-w-[720px]
                       text-center text-[16px] leading-[1.45]
                       text-slate-900
                       sm:text-[18px]"
            >
                Komitmen kami dalam membangun generasi digital yang inovatif,
                kompeten, dan berintegrasi
            </p>
        </div>

        {{-- Card Visi dan Misi --}}
        <div
            class="mt-12 grid items-start gap-10
                   lg:mt-14 lg:grid-cols-2 lg:gap-[85px] lg:px-14"
        >
            {{-- ======================
                 CARD VISI
            ======================= --}}
            <article
                class="overflow-hidden rounded-[34px]
                       bg-gradient-to-r from-[#002054] to-[#0256DD]
                       pt-[16px]
                       shadow-[0_14px_28px_rgba(0,32,84,0.24)]"
            >
                <div
                    class="flex min-h-[390px] flex-col items-center
                           rounded-[27px] bg-white
                           px-8 pb-12 pt-8
                           sm:px-12"
                >
                    {{-- Icon mata --}}
                    <div
                        class="grid h-[76px] w-[76px] place-items-center
                               rounded-full bg-[#dff4ff]
                               shadow-[0_8px_14px_rgba(0,32,84,0.20)]"
                    >
                        <div
                            class="grid h-[56px] w-[56px] place-items-center
                                   rounded-full bg-white
                                   shadow-[0_4px_9px_rgba(0,32,84,0.16)]"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                class="h-10 w-10"
                                fill="none"
                                stroke="#0256DD"
                                stroke-width="2.3"
                                aria-hidden="true"
                            >
                                <path
                                    d="M2.5 12s3.8-6.5 9.5-6.5S21.5 12 21.5 12
                                       17.7 18.5 12 18.5 2.5 12 2.5 12Z"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="3.2"
                                    fill="#0256DD"
                                    stroke="none"
                                />
                            </svg>
                        </div>
                    </div>

                    <h3
                        class="mt-7 text-center text-[34px]
                               font-extrabold leading-none text-black"
                    >
                        Visi
                    </h3>

                    <span
                        class="mt-3 block h-[5px] w-[82px]
                               rounded-full
                               bg-gradient-to-r from-[#002054] to-[#0256DD]"
                    ></span>

                    <p
                        class="mt-8 max-w-[430px] text-center
                               text-[16px] leading-[1.5]
                               text-slate-900
                               sm:text-[18px]"
                    >
                        Menjadi Unit Kegiatan Mahasiswa yang unggul dalam
                        pengembangan teknologi informasi, menciptakan sumber
                        daya manusia yang kompeten, inovatif, dan berintegritas,
                        serta mampu memberikan kontribusi nyata bagi masyarakat
                        di era digital.
                    </p>
                </div>
            </article>

            {{-- ======================
                 CARD MISI
            ======================= --}}
            <article
                class="overflow-hidden rounded-[34px]
                       bg-gradient-to-r from-[#002054] to-[#0256DD]
                       pt-[16px]
                       shadow-[0_14px_28px_rgba(0,32,84,0.24)]"
            >
                <div
                    class="min-h-[520px] rounded-[27px] bg-white
                           px-8 pb-10 pt-8
                           sm:px-12"
                >
                    {{-- Header Misi --}}
                    <div class="flex items-center gap-8">
                        {{-- Icon target --}}
                        <div
                            class="grid h-[76px] w-[76px] shrink-0 place-items-center
                                   rounded-full bg-[#dff4ff]
                                   shadow-[0_8px_14px_rgba(0,32,84,0.20)]"
                        >
                            <div
                                class="grid h-[56px] w-[56px] place-items-center
                                       rounded-full bg-white
                                       shadow-[0_4px_9px_rgba(0,32,84,0.16)]"
                            >
                                <svg
                                    viewBox="0 0 24 24"
                                    class="h-10 w-10"
                                    fill="none"
                                    stroke="#0256DD"
                                    stroke-width="2.2"
                                    aria-hidden="true"
                                >
                                    <circle cx="11" cy="13" r="7" />

                                    <circle cx="11" cy="13" r="3" />

                                    <path
                                        d="M14 10l6-6M16 4h4v4"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div>
                            <h3
                                class="text-[34px] font-extrabold
                                       leading-none text-black"
                            >
                                Misi
                            </h3>

                            <span
                                class="mt-3 block h-[5px] w-[82px]
                                       rounded-full
                                       bg-gradient-to-r
                                       from-[#002054] to-[#0256DD]"
                            ></span>
                        </div>
                    </div>

                    {{-- Daftar misi --}}
                    <ul
                        class="mt-8 list-disc space-y-2.5
                               pl-6 text-justify
                               text-[15px] leading-[1.35]
                               text-black
                               sm:text-[17px]"
                    >
                        <li>
                            Menjadi wadah pengembangan minat dan bakat mahasiswa
                            di bidang teknologi informasi.
                        </li>

                        <li>
                            Menyelenggarakan pelatihan, seminar, workshop, dan
                            kegiatan edukatif untuk meningkatkan kompetensi
                            anggota.
                        </li>

                        <li>
                            Mendorong budaya inovasi, kolaborasi, dan kreativitas
                            dalam menghasilkan karya berbasis teknologi.
                        </li>

                        <li>
                            Mempersiapkan anggota agar mampu bersaing di dunia
                            akademik maupun industri melalui pengembangan
                            keterampilan teknis dan nonteknis.
                        </li>

                        <li>
                            Menjalin kerja sama dengan berbagai pihak untuk
                            mendukung perkembangan organisasi dan anggotanya.
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</section>