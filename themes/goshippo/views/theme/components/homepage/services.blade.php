@php 
    $card_1_bg_color  = array_key_exists('card_1_bg_color', $data) && $data['card_1_bg_color'] ? "background-color: {$data['card_1_bg_color']} !important;" : 'background-color: #222;';
    $card_2_bg_color  = array_key_exists('card_2_bg_color', $data) && $data['card_2_bg_color'] ? "background-color: {$data['card_2_bg_color']} !important;" : 'background-color: #222;';
    $card_3_bg_color  = array_key_exists('card_3_bg_color', $data) && $data['card_3_bg_color'] ? "background-color: {$data['card_3_bg_color']} !important;" : 'background-color: #222;';
    $card_4_bg_color  = array_key_exists('card_4_bg_color', $data) && $data['card_4_bg_color'] ? "background-color: {$data['card_4_bg_color']} !important;" : 'background-color: #222;';

    $card_title_1_color  = array_key_exists('card_title_1_color', $data) && $data['card_title_1_color'] ? "color: {$data['card_title_1_color']} !important;" : 'color: #222;';
    $card_title_2_color  = array_key_exists('card_title_2_color', $data) && $data['card_title_2_color'] ? "color: {$data['card_title_2_color']} !important;" : 'color: #222;';
    $card_title_3_color  = array_key_exists('card_title_3_color', $data) && $data['card_title_3_color'] ? "color: {$data['card_title_3_color']} !important;" : 'color: #222;';
    $card_title_4_color  = array_key_exists('card_title_4_color', $data) && $data['card_title_4_color'] ? "color: {$data['card_title_4_color']} !important;" : 'color: #222;';

    $card_desc_1_color  = array_key_exists('card_desc_1_color', $data) && $data['card_desc_1_color'] ? "color: {$data['card_desc_1_color']} !important;" : 'color: #222;';
    $card_desc_2_color  = array_key_exists('card_desc_2_color', $data) && $data['card_desc_2_color'] ? "color: {$data['card_desc_2_color']} !important;" : 'color: #222;';
    $card_desc_3_color  = array_key_exists('card_desc_3_color', $data) && $data['card_desc_3_color'] ? "color: {$data['card_desc_3_color']} !important;" : 'color: #222;';
    $card_desc_4_color  = array_key_exists('card_desc_4_color', $data) && $data['card_desc_4_color'] ? "color: {$data['card_desc_4_color']} !important;" : 'color: #222;';

    $card_1_button_text_color = array_key_exists('card_1_button_text_color', $data) && $data['card_1_button_text_color'] ? "color: {$data['card_1_button_text_color']} !important;" : 'color: #222;';
    $card_2_button_text_color = array_key_exists('card_2_button_text_color', $data) && $data['card_2_button_text_color'] ? "color: {$data['card_2_button_text_color']} !important;" : 'color: #222;';
    $card_3_button_text_color = array_key_exists('card_3_button_text_color', $data) && $data['card_3_button_text_color'] ? "color: {$data['card_3_button_text_color']} !important;" : 'color: #222;';
    $card_4_button_text_color = array_key_exists('card_4_button_text_color', $data) && $data['card_4_button_text_color'] ? "color: {$data['card_4_button_text_color']} !important;" : 'color: #222;';

    $card_1_button_bg_color = array_key_exists('card_1_button_bg_color', $data) && $data['card_1_button_bg_color'] ? "background-color: {$data['card_1_button_bg_color']} !important;" : 'background-color: #222;';
    $card_2_button_bg_color = array_key_exists('card_2_button_bg_color', $data) && $data['card_2_button_bg_color'] ? "background-color: {$data['card_2_button_bg_color']} !important;" : 'background-color: #222;';
    $card_3_button_bg_color = array_key_exists('card_3_button_bg_color', $data) && $data['card_3_button_bg_color'] ? "background-color: {$data['card_3_button_bg_color']} !important;" : 'background-color: #222;';
    $card_4_button_bg_color = array_key_exists('card_4_button_bg_color', $data) && $data['card_4_button_bg_color'] ? "background-color: {$data['card_4_button_bg_color']} !important;" : 'background-color: #222;';

@endphp

<!-- services -->
<section id="services" class="section" style="{{ array_key_exists('header_bg', $data) && $data['header_bg'] ? "background-color: {$data['header_bg']} !important;" : 'background-color: #fff;' }}">
    <div class="container">
        <div class="contents row">
            <div class="col-lg-3 col-md-4 col-sm-6" style="{{$card_1_bg_color}}">
                <div class="card" style="{{$card_1_bg_color}}">
                    <header class="header">
                        <img src="{{ theme_setting_image($section->id,'section_banner_1') != '' ? theme_setting_image($section->id,'section_banner_1') : (get_general_setting('website_logo', asset('themes/goshippo/assets/images/service-1.svg'))) }}" alt="service" />
                    </header>
                    <div class="body">
                        <h3 class="title" style="{{$card_title_1_color}}">{{$data['card_title_1'][app()->getLocale()] ?? ''}}</h3>
                        <p class="text" style="{{$card_desc_1_color}}">{{$data['card_description_1'][app()->getLocale()] ?? ''}}</p>

                        @php 
                            $button_type = $data['card_1_section_url']['type'];
                        @endphp
                        <form action="{{$data['card_1_section_url'][$button_type] ?? ''}}">
                            <button type="submit" class="link" style="{{$card_1_button_text_color }} {{$card_1_button_bg_color}}">
                                {{$data['card_1_section_button'][app()->getLocale()] ?? ''}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" style="{{$card_2_bg_color}}">
                <div class="card" style="{{$card_2_bg_color}}">
                    <header class="header">
                        <img src="{{ theme_setting_image($section->id,'section_banner_2') != '' ? theme_setting_image($section->id,'section_banner_2') : (get_general_setting('website_logo', asset('themes/goshippo/assets/images/service-2.svg'))) }}" alt="service" />
                    </header>
                    <div class="body">
                        <h3 class="title" style="{{$card_title_2_color}}">{{$data['card_title_2'][app()->getLocale()] ?? ''}}</h3>
                        <p class="text" style="{{$card_desc_2_color}}">{{$data['card_description_2'][app()->getLocale()] ?? ''}}</p>

                        @php 
                            $button_type = $data['card_2_section_url']['type'];
                        @endphp
                        <form action="{{$data['card_2_section_url'][$button_type] ?? ''}}">
                            <button type="submit" class="link" style="{{$card_2_button_text_color }} {{$card_2_button_bg_color}}">
                                {{$data['card_2_section_button'][app()->getLocale()] ?? ''}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" style="{{$card_3_bg_color}}">
                <div class="card" style="{{$card_3_bg_color}}">
                    <header class="header">
                        <img src="{{ theme_setting_image($section->id,'section_banner_3') != '' ? theme_setting_image($section->id,'section_banner_3') : (get_general_setting('website_logo', asset('themes/goshippo/assets/images/service-3.svg'))) }}" alt="service" />
                    </header>
                    <div class="body">
                        <h3 class="title" style="{{$card_title_3_color}}">{{$data['card_title_3'][app()->getLocale()] ?? ''}}</h3>
                        <p class="text" style="{{$card_desc_3_color}}">{{$data['card_description_3'][app()->getLocale()] ?? ''}}</p>

                        @php 
                            $button_type = $data['card_3_section_url']['type'];
                        @endphp
                        <form action="{{$data['card_3_section_url'][$button_type] ?? ''}}">
                            <button type="submit" class="link" style="{{$card_3_button_text_color }} {{$card_3_button_bg_color}}">
                                {{$data['card_3_section_button'][app()->getLocale()] ?? ''}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" style="{{$card_4_bg_color}}">
                <div class="card" style="{{$card_4_bg_color}}">
                    <header class="header">
                        <img src="{{ theme_setting_image($section->id,'section_banner_4') != '' ? theme_setting_image($section->id,'section_banner_4') : (get_general_setting('website_logo', asset('themes/goshippo/assets/images/service-4.svg'))) }}" alt="service" />
                    </header>
                    <div class="body">
                        <h3 class="title" style="{{$card_title_4_color}}">{{$data['card_title_4'][app()->getLocale()] ?? ''}}</h3>
                        <p class="text" style="{{$card_desc_4_color}}">{{$data['card_description_4'][app()->getLocale()] ?? ''}}</p>

                        @php 
                            $button_type = $data['card_4_section_url']['type'];
                        @endphp
                        <form action="{{$data['card_4_section_url'][$button_type] ?? ''}}">
                            <button type="submit" class="link" style="{{$card_4_button_text_color }} {{$card_4_button_bg_color}}">
                                {{$data['card_4_section_button'][app()->getLocale()] ?? ''}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>