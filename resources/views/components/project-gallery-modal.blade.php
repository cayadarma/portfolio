@props(['project'])

@php
    $slug = \Illuminate\Support\Str::slug($project['title']);
@endphp

<div class="modal fade"
     id="gallery-{{ $slug }}"
     tabindex="-1">

    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content card-theme">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">
                    {{ $project['title'] }} Gallery
                </h5>
                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>
            </div>

            <div class="modal-body p-0">
                <div id="carousel-{{ $slug }}"
                     class="carousel slide">
                    <div class="carousel-indicators">
                        @foreach($project['gallery'] as $index => $image)
                            <button type="button"
                                    data-bs-target="#carousel-{{ $slug }}"
                                    data-bs-slide-to="{{ $index }}"
                                    class="{{ $index == 0 ? 'active' : '' }}">
                            </button>
                        @endforeach
                    </div>

                    <div class="carousel-inner">
                        @foreach($project['gallery'] as $index => $image)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset($image) }}"
                                     class="d-block w-100 project-gallery-img">
                            </div>
                        @endforeach
                    </div>

                    @if(count($project['gallery']) > 1)
                    <button class="carousel-control-prev"
                            type="button"
                            data-bs-target="#carousel-{{ $slug }}"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next"
                            type="button"
                            data-bs-target="#carousel-{{ $slug }}"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>