
@php
$hasImage = isset($model) && $model->image;
$getImage = $hasImage ? $model->imageUrl : '';
$getMobileImage = $hasImage ? $model->imageUrl : '';

$textColor   = array_key_exists('text_color', $data) && $data['text_color'] ? "color: {$data['text_color']} !important;" :  '' ;
$titleColor  = array_key_exists('title_color', $data) && $data['title_color'] ? "color: {$data['title_color']} !important;" :  '' ;
$pathColor  = array_key_exists('pathColor', $data) && $data['pathColor'] ? "color: {$data['pathColor']} !important;" :  '' ;
$link_color  = array_key_exists('link_color', $data) && $data['link_color'] ? "color: {$data['link_color']} !important;" :  '' ;
$buttonColor = array_key_exists('button_text_color', $data) && $data['button_text_color'] ? "color: {$data['button_text_color']} !important;" :  '' ;
$buttonBgColor = array_key_exists('button_bg_color', $data) && $data['button_bg_color'] ? "background-color: {$data['button_bg_color']} !important;" : '';

@endphp

 <!-- testimonials -->
@if(array_key_exists('display', $data) && $data['display'])
<section id="testimonials" class="section" style="{{ array_key_exists('header_bg', $data) && $data['header_bg'] ? "background-color: {$data['header_bg']} !important;" :  ''  }}">

            <div class="container-fluid">
              <div class="intro text-center">
                <h2 style="{{ $titleColor }}" >@lang('theme_qwintry::view.reviews') </h2>
                <p class="text-lg" style="{{$textColor}}" > {{$data['section_description'][app()->getLocale()] ?? ''}} </p>
              </div>

              <div class="row contents">
                <div class="col-md-4 col-sm-6">
                  <div class="card card-body">
                    <div class="reviews-star mb-1 text-lg text-primary">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="mb-1 text-muted"  style="{{ $pathColor }}" >{{$data['path1'][app()->getLocale()] ?? ''}}</p>
                    <p class="text-lg mb-0"> {{$data['section_description1'][app()->getLocale()] ?? ''}} </p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="card card-body">
                    <div class="reviews-star mb-1 text-lg text-primary">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="mb-1 text-muted" style="{{ $pathColor }}" >{{$data['path2'][app()->getLocale()] ?? ''}}</p>
                    <p class="text-lg mb-0"> {{$data['section_description2'][app()->getLocale()] ?? ''}} </p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="card card-body">
                    <div class="reviews-star mb-1 text-lg text-primary">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="mb-1 text-muted" style="{{ $pathColor }}" >{{$data['path3'][app()->getLocale()] ?? ''}} </p>
                    <p class="text-lg mb-0"> {{$data['section_description3'][app()->getLocale()] ?? ''}} </p>
                  </div>
                </div>
              </div>

              <div class="text-center">
                <a href="{{$data['all_reviews'][app()->getLocale()] ?? ''}}" class="link w-icon" style="{{ $titleColor }}" >@lang('theme_qwintry::view.all_reviews') </a>
              </div>
            </div>

</section>
@endif

<style>
.typer{
color: {{array_key_exists('typer_color', $data) && $data['typer_color'] ? "{$data['typer_color']} !important;" : '#222;';}}
}
</style>
