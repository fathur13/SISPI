<li class="nav-item @if($active ?? '') active @endif">
    <a class="nav-link" href="{{ url($url) }}">
        <i class="fas fa-fw fa-{{ $icon }}"></i>
        <span>{{ $title }}</span></a>
</li>