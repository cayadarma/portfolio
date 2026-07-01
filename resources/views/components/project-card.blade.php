@props(['project'])

@php
    $slug = \Illuminate\Support\Str::slug($project['title']);
@endphp

<div class="card card-theme h-100 overflow-hidden">

    {{-- Gambar utama project --}}
    @if(!empty($project['image']))
        <img 
            src="{{ asset($project['image']) }}"
            alt="{{ $project['title'] }}"
            class="project-card-img"
            onerror="this.src='https://via.placeholder.com/500x300?text={{ urlencode($project['title']) }}'"
        >
    @endif


    <div class="card-body d-flex flex-column">

        <h5 class="card-title fw-bold mb-2">
            {{ $project['title'] }}
        </h5>


        @if(!empty($project['description']))
            <p class="card-text mb-3" style="color: var(--text-muted);">
                {{ $project['description'] }}
            </p>
        @endif



        {{-- Badge teknologi --}}
        @if(!empty($project['tech']))
            <div class="mb-3">

                @foreach ($project['tech'] as $tech)
                    <span class="badge-tech">
                        {{ $tech }}
                    </span>
                @endforeach

            </div>
        @endif



        {{-- Tombol --}}
        <div class="mt-auto d-flex flex-wrap gap-2">


            @if(!empty($project['github']))
                <a href="{{ $project['github'] }}"
                   target="_blank"
                   class="btn-theme-outline btn-sm flex-fill text-center">

                    <i class="bi bi-github"></i>
                    GitHub

                </a>
            @endif



            @if(!empty($project['demo']))
                <a href="{{ $project['demo'] }}"
                   target="_blank"
                   class="btn-theme btn-sm flex-fill text-center">

                    <i class="bi bi-box-arrow-up-right"></i>
                    Demo

                </a>
            @endif



            @if(!empty($project['documentation']))
                <a href="{{ asset($project['documentation']) }}"
                   target="_blank"
                   class="btn-theme-outline btn-sm flex-fill text-center">

                    <i class="bi bi-file-earmark-pdf"></i>
                    Docs

                </a>
            @endif



            @if(!empty($project['gallery']))
                <button type="button"
                        class="btn-theme-outline btn-sm flex-fill"
                        data-bs-toggle="modal"
                        data-bs-target="#gallery-{{ $slug }}">

                    <i class="bi bi-images"></i>
                    Gallery

                </button>
            @endif


        </div>

    </div>

</div>