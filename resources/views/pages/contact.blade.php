@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container section-padding">

    <div class="text-center mb-5">
        <h1 class="section-title">Hubungi Saya</h1>
        <p class="section-subtitle">Tertarik untuk berkolaborasi atau ada pertanyaan? Jangan ragu untuk menghubungi saya melalui channel di bawah.</p>
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
                <p class="contact-value">Lihat repository saya</p>
            </a>
        </div>

        <div class="col-md-5">
            <a href="{{ $contact['linkedin'] }}" target="_blank" class="contact-card d-block text-decoration-none">
                <i class="bi bi-linkedin contact-icon"></i>
                <p class="contact-label">LinkedIn</p>
                <p class="contact-value">Terhubung dengan saya</p>
            </a>
        </div>

        <div class="col-md-5">
            <a href="{{ $contact['instagram'] }}" target="_blank" class="contact-card d-block text-decoration-none">
                <i class="bi bi-instagram contact-icon"></i>
                <p class="contact-label">Instagram</p>
                <p class="contact-value">Ikuti aktivitas saya</p>
            </a>
        </div>

    </div>

</div>
@endsection