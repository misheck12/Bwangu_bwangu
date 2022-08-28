@php
    $textColor   = array_key_exists('text_color', $data) && $data['text_color'] ? "color: {$data['text_color']} !important;" : 'color: #222;';
    $titleColor  = array_key_exists('title_color', $data) && $data['title_color'] ? "color: {$data['title_color']} !important;" : 'color: #222;';
    $buttonColor = array_key_exists('button_text_color', $data) && $data['button_text_color'] ? "color: {$data['button_text_color']} !important;" : 'color: #222;';
    $buttonBgColor = array_key_exists('button_bg_color', $data) && $data['button_bg_color'] ? "background-color: {$data['button_bg_color']} !important;" : 'background-color: #222;';
@endphp
<!-- testimonials -->
<section id="testimonials" class="section" style="{{ array_key_exists('header_bg', $data) && $data['header_bg'] ? "background-color: {$data['header_bg']} !important;" : 'background-color: #fff;' }}">
    <div class="container">
        <div class="contents">
            <div class="app-carousel">
                <div class="card text-center bg-light" style="{{ array_key_exists('card_bg', $data) && $data['card_bg'] ? "background-color: {$data['card_bg']} !important;" : 'background-color: #fff;' }}">
                    <header class="header" style="{{ array_key_exists('card_bg', $data) && $data['card_bg'] ? "background-color: {$data['card_bg']} !important;" : 'background-color: #fff;' }}">
                        <div class="avatar">
                            <img src="{{ theme_setting_image($section->id,'section_banner') != '' ? theme_setting_image($section->id,'section_banner') : (get_general_setting('website_logo', asset('themes/goshippo/assets/images/greenbelly-meals.jpg'))) }}" alt="avatar"/>
                        </div>
                    </header>

                    <div class="body" style="{{ array_key_exists('card_bg', $data) && $data['card_bg'] ? "background-color: {$data['card_bg']} !important;" : 'background-color: #fff;' }}">
                        <h4 class="title" style="{{$titleColor}}">{{$data['section_title'][app()->getLocale()] ?? ''}}</h4>
                        <p class="sub" style="{{$textColor}}">{{$data['section_sub_title'][app()->getLocale()] ?? ''}}</p>
                        <q class="text quote" style="{{$textColor}}">
                            {{$data['section_description'][app()->getLocale()] ?? ''}}
                        </q>
                    </div>

                    <footer class="footer" style="{{ array_key_exists('card_bg', $data) && $data['card_bg'] ? "background-color: {$data['card_bg']} !important;" : 'background-color: #fff;' }}">
                        @php 
                            $button_type = $data['section_url']['type'];
                        @endphp
                        <a href="{{$data['section_url'][$button_type] ?? ''}}" style="{{$buttonColor }}" class="link">{{$data['section_button'][app()->getLocale()] ?? ''}}</a>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    #testimonials .contents .row {
        margin-bottom: 0px !important;
    }
    #testimonials .container {
        padding: 0 0 0px !important;
    }
</style>