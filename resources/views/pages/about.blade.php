@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container section-padding">

    {{-- Profil Singkat --}}
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <h1 class="section-title">Tentang Saya</h1>
            <p class="section-subtitle">{{ $about['summary'] }}</p>
        </div>
    </div>

    <div class="row g-5">

        {{-- Pendidikan --}}
        <div class="col-lg-6">
            <h3 class="fw-bold mb-4"><i class="bi bi-mortarboard-fill" style="color: var(--color-primary);"></i> Pendidikan</h3>

            @foreach ($about['education'] as $edu)
                <div class="timeline-item">
                    <p class="timeline-title">{{ $edu['school'] }}</p>
                    <p class="timeline-period">{{ $edu['period'] }}</p>
                    <p class="timeline-desc">{{ $edu['major'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Pengalaman --}}
        <div class="col-lg-6">
            <h3 class="fw-bold mb-4"><i class="bi bi-briefcase-fill" style="color: var(--color-primary);"></i> Pengalaman Organisasi</h3>

            @foreach ($about['experience'] as $exp)
                <div class="timeline-item">
                    <p class="timeline-title">{{ $exp['title'] }}</p>
                    <p class="timeline-period">{{ $exp['period'] }}</p>
                    <p class="timeline-desc">{{ $exp['desc'] }}</p>
                </div>
            @endforeach
        </div>

    </div>

    {{-- Tech Stack Ringkas --}}
    <div class="text-center mt-5 pt-4">
        <h4 class="fw-bold mb-4">Tech Stack</h4>
        <div>
            @foreach ($about['techstack'] as $tech)
                <span class="badge-tech" style="font-size: 0.9rem; padding: 8px 16px;">{{ $tech }}</span>
            @endforeach
        </div>
    </div>

</div>
@endsection