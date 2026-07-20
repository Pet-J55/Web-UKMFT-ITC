<section
    id="deskripsi"
    class="relative overflow-hidden bg-transparent
            pb-6 pt-12 lg:min-h-[700px] lg:pb-8 lg:pt-16"
>
    {{-- Dekorasi lingkaran kanan --}}
    <div
        class="pointer-events-none absolute -right-[75px] bottom-[30px]
               h-[165px] w-[165px] rounded-full
               border-[22px] border-[#7294ff]"
    ></div>

    <div
        class="relative mx-auto grid max-w-[1320px]
               items-start gap-10 px-5 sm:px-8
               lg:grid-cols-2 lg:gap-12"
    >
        {{-- =========================
             KOLASE GAMBAR
        ========================== --}}
        <div
            class="relative mx-auto h-[520px] w-full max-w-[620px]
                   lg:h-[650px]"
        >
            {{-- Foto kiri atas --}}
            <div
                class="absolute left-0 top-0
                       h-[35%] w-[60%]
                       overflow-hidden
                       rounded-[72px_28px_28px_72px]
                       bg-gradient-to-br
                       from-[#002054] to-[#0256DD]
                       p-[8px]
                       shadow-[0_8px_18px_rgba(0,32,84,0.15)]"
            >
                <div
                    class="h-full w-full overflow-hidden
                           rounded-[64px_20px_20px_64px]
                           bg-white"
                >
                    <img
                        src="{{ asset('assets/images/profile-1.png') }}"
                        alt="Kegiatan kolaborasi anggota UKM FT ITC"
                        class="h-full w-full object-cover object-center"
                    >
                </div>
            </div>

            {{-- Foto kanan --}}
            <div
                class="absolute right-0 top-0
                       h-[71%] w-[38%]
                       overflow-hidden
                       rounded-[28px_140px_140px_28px]
                       bg-gradient-to-br
                       from-[#002054] to-[#0256DD]
                       p-[8px]
                       shadow-[0_8px_18px_rgba(0,32,84,0.15)]"
            >
                <div
                    class="h-full w-full overflow-hidden
                           rounded-[20px_132px_132px_20px]
                           bg-white"
                >
                    <img
                        src="{{ asset('assets/images/profile-3.png') }}"
                        alt="Kegiatan diskusi anggota UKM FT ITC"
                        class="h-full w-full object-cover object-center"
                    >
                </div>
            </div>

            {{-- Foto kiri bawah --}}
            <div
                class="absolute left-[15%] top-[38%]
                       h-[61%] w-[45%]
                       overflow-hidden
                       rounded-[28px_28px_150px_150px]
                       bg-gradient-to-br
                       from-[#002054] to-[#0256DD]
                       p-[8px]
                       shadow-[0_8px_18px_rgba(0,32,84,0.15)]"
            >
                <div
                    class="relative h-full w-full overflow-hidden
                           rounded-[20px_20px_142px_142px]
                           bg-white"
                >
                    <img
                        src="{{ asset('assets/images/profile-2.png') }}"
                        alt="Kegiatan belajar anggota UKM FT ITC"
                        class="absolute left-1/2 top-1/2
                               h-[45%] w-[61%] max-w-none
                               -translate-x-1/2 -translate-y-1/2
                               rotate-90 scale-[1.65]
                               object-cover object-center"
                    >
                </div>
            </div>
        </div>

        {{-- =========================
             KONTEN PROFIL
        ========================== --}}
        <div class="relative z-10 min-w-0 max-w-[620px] lg:pt-1">
            <div class="flex items-start gap-4">
                {{-- Garis biru samping judul --}}
                <span
                    class="mt-1 h-[82px] w-[13px] shrink-0 rounded-full
                           bg-gradient-to-b
                           from-[#0256DD] to-[#002054]
                           shadow-[0_6px_12px_rgba(0,32,84,0.3)]"
                ></span>

                <div class="min-w-0">
                    <h2
                        class="text-[30px] font-extrabold tracking-tight
                               text-[#174591]
                               sm:text-[34px] lg:text-[36px]"
                    >
                        Profil

                        <span
                            class="bg-gradient-to-r
                                   from-[#174591] to-[#6fa6ff]
                                   bg-clip-text text-transparent"
                        >
                            UKM FT ITC
                        </span>
                    </h2>

                    <div
                        class="mt-6 space-y-7
                               text-justify text-[15px]
                               leading-[1.45] text-slate-900
                               sm:text-base"
                    >
                        <p>
                            <strong class="font-extrabold text-black">
                                UKM FT ITC (Information Technology Center)
                            </strong>

                            merupakan Unit Kegiatan Mahasiswa Fakultas Teknik
                            yang menjadi wadah bagi mahasiswa untuk belajar,
                            berkolaborasi, dan mengembangkan kemampuan di bidang
                            teknologi informasi. Melalui berbagai program dan
                            kegiatan, kami membantu anggota meningkatkan
                            keterampilan di bidang pemrograman, desain,
                            multimedia, serta teknologi digital.
                        </p>

                        <p>
                            Dengan semangat inovasi, kolaborasi, dan
                            profesionalisme,

                            <strong class="font-extrabold text-black">
                                UKM FT ITC
                            </strong>

                            berkomitmen menciptakan lingkungan yang mendukung
                            lahirnya talenta-talenta digital yang kreatif,
                            kompeten, dan siap menghadapi tantangan di era
                            teknologi. Bersama, kami belajar, berkarya, dan
                            tumbuh menjadi insan yang memberikan dampak positif
                            melalui teknologi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>