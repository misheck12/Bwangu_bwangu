@php
$hasImage = isset($model) && $model->image;
$getImage = $hasImage ? $model->imageUrl : '';
$getMobileImage = $hasImage ? $model->imageUrl : '';


$titleColor = array_key_exists('title_color', $data) && $data['title_color'] ? "color: {$data['title_color']} !important;" : '';
$textColor = array_key_exists('text_color', $data) && $data['text_color'] ? "color: {$data['text_color']} !important;" : '';
$buttonColor = array_key_exists('button_text_color', $data) && $data['button_text_color'] ? "color: {$data['button_text_color']} !important;" : '';
$buttonBgColor = array_key_exists('button_bg_color', $data) && $data['button_bg_color'] ? "background-color: {$data['button_bg_color']} !important;" : '';
@endphp

<!-- register-form -->
@if (array_key_exists('display', $data) && $data['display'])
    <section id="register-form" class="section " style="{{ array_key_exists('header_bg', $data) && $data['header_bg']? "background-color: {$data['header_bg']} !important;": '' }}">
        <div class="container">

            @php
                $button_type = $data['section_url']['type'];
            @endphp

            <form id="register-form" action="{{ $data['section_url'][$button_type] ?? '' }}" method="post" class="card card-body text-black text-center">
                <header>
                    <img   src="{{ theme_setting_image('homepage.register_form.section_banner') != '' ? theme_setting_image('homepage.register_form.section_banner') : (get_general_setting('website_logo', asset('themes/qwintry/assets/images/icon-rocket.svg'))) }}" alt="banner" />
                    <h2 style="{{ $titleColor }}" >{{ $data['section_title'][app()->getLocale()] ?? '' }}</h2>
                    <p class="text-lg" style="{{ $textColor }}"> {{ $data['section_description'][app()->getLocale()] ?? '' }} </p>
                </header>

                <div class="row">

                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="First name*" />
                    </div>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Last name*" />
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Company" />
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="EIN" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- phone input -->
                        <input id="phone" class="form-control" type="text" placeholder="Country" />
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Business email*" />
                    </div>
                </div>



                <div class="text-center mt-3 actions">
                    <button type="submit" class="btn btn-primary" style="{{ $buttonColor }} {{ $buttonBgColor }}"> {{ $data['section_button'][app()->getLocale()] ?? '' }} </button>
                    <p class="text-muted text-sm mb-0"> @lang('theme_qwintry::view.the_Terms_of_Service')  </p>
                </div>

            </form>

        </div>
    </section>
@endif

<style>
    .typer {
        color: {{ array_key_exists('typer_color', $data) && $data['typer_color']? "{$data['typer_color']} !important;": '#222;' }}
    }

</style>
