@extends('frontend/navbar')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-12">
           <p class="h1"><img src="frontend/assets/img/icon/galeri.png" alt="" style="text-align: left; width: 70px;">   Galeri</p>
        </div>
    </div>
</div>
<hr>

<section id="portfolio" class="portfolio">
      <div class="container">
        @foreach ($galeri as $i =>$galeri)
        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="image/{{ $galeri->image }}" class="img-fluid" alt="" name="">
                <a href="image/{{ $galeri->image }}" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4>{{ $galeri->namafoto }}</h4>
                <p>{{ $galeri->keterangan }}</p>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
</div>
</div>
</section>
@endsection