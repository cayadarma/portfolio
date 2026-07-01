@extends('layouts.app')
@section('title', 'Projects')
@section('content')

<div class="container section-padding">
    <div class="text-center mb-5">
        <h1 class="section-title">
            Project Saya
        </h1>
        <p class="section-subtitle">
            Beberapa project yang pernah saya kerjakan, dari web, mobile, hingga IoT
        </p>
    </div>

    <div class="row g-4">
        @foreach ($projects as $project)
            <div class="col-md-6 col-lg-4">
                <x-project-card :project="$project" />
            </div>
        @endforeach
    </div>
</div>

{{-- Modal gallery --}}
@foreach($projects as $project)
    @if(!empty($project['gallery']))
        <x-project-gallery-modal :project="$project" />
    @endif
@endforeach
@endsection