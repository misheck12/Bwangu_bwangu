@php
$hasImage = isset($model) && $model->image;
$getImage = $hasImage ? $model->imageUrl : '';
$getMobileImage = $hasImage ? $model->imageUrl : '';

$textColor = array_key_exists('text_color', $data) && $data['text_color'] ? "color: {$data['text_color']} !important;" : '';
$titleColor = array_key_exists('title_color', $data) && $data['title_color'] ? "color: {$data['title_color']} !important;" : '';
$buttonColor = array_key_exists('button_text_color', $data) && $data['button_text_color'] ? "color: {$data['button_text_color']} !important;" : '';
$buttonBgColor = array_key_exists('button_bg_color', $data) && $data['button_bg_color'] ? "background-color: {$data['button_bg_color']} !important;" : '';
@endphp

<!-- globus -->
@if (array_key_exists('display', $data) && $data['display'])
    <section id="globus" class="section mt-5 mb-5 "
        style="{{ array_key_exists('header_bg', $data) && $data['header_bg']? "background-color: {$data['header_bg']} !important;": '' }}">
        <div class="container-fluid">
            <div style="text-align: center;" class="row align-items-center">
                <div class="col-md-6">
                    <div class="intro " style="text-align: start; ">
                        <h2 style="{{ $titleColor }}">{{ $data['section_title'][app()->getLocale()] ?? '' }} </h2>
                
                        <p class="text-lg" style="{{ $textColor }}">
                            {{ $data['section_description'][app()->getLocale()] ?? '' }} </p>
                        <p class="text-lg" style="{{ $textColor }}">
                            {{ $data['section_description1'][app()->getLocale()] ?? '' }} </p>
  
                        @php
                            $button_type = $data['section_url']['type'];
                        @endphp

                        <div class="d-flex flex-column align-items-center flex-md-row">
                            <form class="" action="{{ $data['section_url'][$button_type] ?? '' }}">
                                <button type="submit" class="btn  btn-lg"
                                    style="{{ $buttonColor }} {{ $buttonBgColor }}">
                                    {{ $data['section_button'][app()->getLocale()] ?? '' }}
                                    <i class="fa-solid fa-greater-than ml-3 fa-sm"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrapper">
                        <img  src="{{ theme_setting_image('homepage.globus.section_banner') != ''? theme_setting_image('homepage.globus.section_banner'): get_general_setting('website_logo', asset('themes/qwintry/assets/images/globus.png')) }}" alt="globus" />
                    </div>
                </div>

            </div>
        </div>


    </section>
@endif

<style>
    .typer {
        color: {{ array_key_exists('typer_color', $data) && $data['typer_color']? "{$data['typer_color']} !important;": '#222;' }}
    }

</style>
