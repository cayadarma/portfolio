@extends('layouts.app')

@section('title', 'cayadarmaa portfolio')

@section('content')

    {{-- ============================
         HERO / HOME SECTION
    ============================ --}}
    <section id="home" class="hero-section d-flex align-items-center position-relative" style="min-height: 90vh;">
    <div class="container">

        <div class="row align-items-center g-5">
            <div class="col-12 col-lg-7 text-center text-lg-start">
                <p class="hero-greeting mb-2 fade-in-up" style="animation-delay: 0.1s;">👋 Halo, saya</p>
                <h1 class="hero-name mb-2 fade-in-up" style="animation-delay: 0.25s;">{{ $profile['name'] }}</h1>
                <h2 class="hero-role mb-4 fade-in-up" style="animation-delay: 0.4s;">{{ $profile['role'] }}</h2>
                <p class="hero-desc mb-5 fade-in-up" style="animation-delay: 0.55s;">{{ $profile['description'] }}</p>
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start fade-in-up" style="animation-delay: 0.7s;">
                    <a href="#projects" class="btn-theme">Lihat Project</a>
                    <a href="{{ asset('assets/files/CV CAHYA DARMA W.pdf') }}" download class="btn-theme-outline">
                        <i class="bi bi-download"></i> Download CV
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-5 text-center fade-in-up" style="animation-delay: 0.3s;">
                <div class="hero-photo-wrapper mx-auto">
                    <img src="{{ asset($profile['photo']) }}" alt="{{ $profile['name'] }}" class="hero-photo"
                        onerror="this.src='https://via.placeholder.com/400x400?text=Foto+Profil'">
                </div>
            </div>
        </div>

        {{-- PINDAH KE SINI: di dalam .container, setelah .row ditutup --}}
        <div class="scroll-hint-wrapper text-center">
            <a href="#about" class="scroll-hint-link">
                <i class="bi bi-mouse-fill scroll-bounce"></i>
            </a>
        </div>

    </div> {{-- container ditutup setelah scroll-hint-wrapper --}}
</section>

    {{-- ============================
         ABOUT SECTION
    ============================ --}}
    <section id="about" class="section-padding" style="background-color: var(--bg-surface);">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h1 class="section-title">Tentang Saya</h1>
                    <p class="section-subtitle">{{ $about['summary'] }}</p>
                </div>
            </div>

            <div class="row g-5">
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

            <div class="text-center mt-5 pt-4">
                <h4 class="fw-bold mb-4">Tech Stack</h4>
                <div>
                    @foreach ($about['techstack'] as $tech)
                        <span class="badge-tech" style="font-size: 0.9rem; padding: 8px 16px;">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ============================
         SKILLS SECTION
    ============================ --}}
    <section id="skills" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="section-title">Skills & Tools</h1>
                <p class="section-subtitle">Teknologi yang saya gunakan dalam membangun aplikasi dan sistem</p>
            </div>

            <h4 class="fw-bold mb-3">Programming Language</h4>
            <div class="row g-3 mb-5">
                @foreach ($skills['languages'] as $skill)
                    <div class="col-6 col-md-3">
                        <x-skill-card :name="$skill['name']" :icon="$skill['icon']" />
                    </div>
                @endforeach
            </div>

            <h4 class="fw-bold mb-3">Framework & Library</h4>
            <div class="row g-3 mb-5">
                @foreach ($skills['frameworks'] as $skill)
                    <div class="col-6 col-md-3">
                        <x-skill-card :name="$skill['name']" :icon="$skill['icon']" />
                    </div>
                @endforeach
            </div>

            <h4 class="fw-bold mb-3">Tools</h4>
            <div class="row g-3 mb-5">
                @foreach ($skills['tools'] as $skill)
                    <div class="col-6 col-md-3">
                        <x-skill-card :name="$skill['name']" :icon="$skill['icon']" />
                    </div>
                @endforeach
            </div>

            <h4 class="fw-bold mb-3">IoT & Hardware</h4>
            <div class="row g-3">
                @foreach ($skills['iot_hardware'] as $skill)
                    <div class="col-6 col-md-3">
                        <x-skill-card :name="$skill['name']" :icon="$skill['icon']" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================
            PROJECTS SECTION
    ============================ --}}
    <section id="projects" class="section-padding" style="background-color: var(--bg-surface);">
        <div class="container">

            <div class="text-center mb-5">
                <h1 class="section-title">Project Saya</h1>
                <p class="section-subtitle">
                    Beberapa project yang pernah saya kerjakan, dari web, mobile, hingga IoT.
                </p>
            </div>

            <div class="row g-4">
                @foreach ($projects as $project)
                    <div class="col-md-6 col-lg-4">
                        <x-project-card :project="$project" />
                    </div>
                @endforeach
            </div>


            {{-- Gallery Modal --}}
            @foreach ($projects as $project)
                @if(!empty($project['gallery']))
                    <x-project-gallery-modal :project="$project" />
                @endif
            @endforeach


        </div>
    </section>
    {{-- ============================
         CONTACT SECTION
    ============================ --}}
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="section-title">Hubungi Saya</h1>
                <p class="section-subtitle">Tertarik untuk berkolaborasi atau ada pertanyaan? Jangan ragu untuk menghubungi saya.</p>
            </div>

            <div class="row justify-content-center g-4">
                <div class="col-md-5">
                    <a href="mailto:{{ $contact['email'] }}" class="contact-card d-block text-decoration-none">
                        <i class="bi bi-envelope-fill contact-icon"></i>
                        <p class="contact-label">Email</p>
                        <p class="contact-value">{{ $contact['email'] }}</p>
                    </a>
                </div>
                <div class="col-md-5">
                    <a href="{{ $contact['github'] }}" target="_blank" class="contact-card d-block text-decoration-none">
                        <i class="bi bi-github contact-icon"></i>
                        <p class="contact-label">GitHub</p>
                        <p class="contact-value">ㅤ</p>
                    </a>
                </div>
                <div class="col-md-5">
                    <a href="{{ $contact['linkedin'] }}" target="_blank" class="contact-card d-block text-decoration-none">
                        <i class="bi bi-linkedin contact-icon"></i>
                        <p class="contact-label">LinkedIn</p>
                        <p class="contact-value">ㅤ</p>
                    </a>
                </div>
                <div class="col-md-5">
                    <a href="{{ $contact['instagram'] }}" target="_blank" class="contact-card d-block text-decoration-none">
                        <i class="bi bi-instagram contact-icon"></i>
                        <p class="contact-label">Instagram</p>
                        <p class="contact-value">ㅤ</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection