<section class="slider-home">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

  <div class="carousel-inner">
  @foreach($sliders as $slider)
    <div class="main-slider-home carousel-item {{$loop->iteration == 1 ? 'active' : ''}}" data-bs-interval="10000" style="background-image:url({{asset('/storage/sliders/'.$slider->image)}});">
      <div class="slide-text d-none d-md-block">
        <div class="row">
          <div class="col-md-9">
            <h1 class="slide-title">{{ $slider->title }}</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
           <h5 class="t-white mb-30">{{ $slider->description }}</h5>
            <a href="{{ $slider->link }}" class="btn btn-salaam"> {{ $slider->button }}</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>