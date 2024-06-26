<div class="small-box bg-{{ $color }}">
    <div class="inner">
        <h1 class="fw-bolder">
            {{ $value }}
        </h1>
        <p class="title">
            {{ $title }}
        </p>

    </div>
    <div class="icon">
        <i class="fas fa-{{ $icon }}"></i>
    </div>
    <div class="small-box-footer">
        <a href="{{ $route }}" class="link-light">
            Ver mais <i class='fas fa-arrow-right'></i>
        </a>
    </div>
</div>
