
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach ($ad->images as $image)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach ($ad->images as $image)
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset("storage/$image->image_link") }}">
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
