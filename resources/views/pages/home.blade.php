@extends('layouts.app')

@section('title', 'Beranda — UKM FT ITC')

@section('content')
    <div class="overflow-hidden">
        <x-navbar />

        @include('sections.home.hero')
    </div>
@endsection