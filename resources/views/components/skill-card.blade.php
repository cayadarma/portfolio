@props(['name', 'icon' => 'bi-code-slash'])

<div class="skill-card text-center">
    <i class="bi {{ $icon }} skill-icon"></i>
    <p class="skill-name mb-0">{{ $name }}</p>
</div>