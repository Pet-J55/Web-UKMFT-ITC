@extends('layouts.app')

@section('title', 'Beranda — UKM FT ITC')

@section('content')
    <div class="relative overflow-x-hidden">
        {{-- Satu lingkaran untuk Hero + Profile --}}
        <div
            class="pointer-events-none absolute
                   -left-[520px] top-[105px] z-0
                   h-[1180px] w-[1180px]
                   rounded-full bg-[#d7eefb]"
        ></div>

        <x-navbar />

        <div class="relative z-10">
            @include('sections.home.hero')
            @include('sections.home.profile')
            @include('sections.home.visi-misi')
            @include('sections.home.sejarah')
        </div>
    </div>
@endsection