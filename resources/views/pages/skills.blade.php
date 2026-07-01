@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div class="container section-padding">

    <div class="text-center mb-5">
        <h1 class="section-title">Skills & Tools</h1>
        <p class="section-subtitle">Teknologi yang saya gunakan untuk membangun aplikasi dan sistem</p>
    </div>

    {{-- Programming Languages --}}
    <h4 class="fw-bold mb-3">Programming Language</h4>
    <div class="row g-3 mb-5">
        @foreach ($skills['languages'] as $skill)
            <div class="col-6 col-md-3">
                <x-skill-card :name="$skill['name']" :icon="$skill['icon']" />
            </div>
        @endforeach
    </div>

    {{-- Frameworks --}}
    <h4 class="fw-bold mb-3">Framework & Library</h4>
    <div class="row g-3 mb-5">
        @foreach ($skills['frameworks'] as $skill)
            <div class="col-6 col-md-3">
                <x-skill-card :name="$skill['name']" :icon="$skill['icon']" />
            </div>
        @endforeach
    </div>

    {{-- Tools --}}
    <h4 class="fw-bold mb-3">Tools</h4>
    <div class="row g-3 mb-5">
        @foreach ($skills['tools'] as $skill)
            <div class="col-6 col-md-3">
                <x-skill-card :name="$skill['name']" :icon="$skill['icon']" />
            </div>
        @endforeach
    </div>

    {{-- IoT / Hardware --}}
    <h4 class="fw-bold mb-3">IoT & Hardware</h4>
    <div class="row g-3">
        @foreach ($skills['iot_hardware'] as $skill)
            <div class="col-6 col-md-3">
                <x-skill-card :name="$skill['name']" :icon="$skill['icon']" />
            </div>
        @endforeach
    </div>

</div>
@endsection