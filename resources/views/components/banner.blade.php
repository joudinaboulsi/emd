<section class="page-banner bg-image section-padding" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ $class ?? '' }}')">
    <div class="gaps-left d-none d-sm-block float-bob-x">
        <img src="/images/shape/shape.png" alt="Shape">
    </div>
    <div class="container">
        <h2 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">{{ $title }}</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
            <span>{{ $subtitle }}</span>
        </div>
    </div>
</section>
