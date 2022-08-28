@php
    $header_setting = theme_setting('header.header');
    if(!$header_setting) $header_setting = array();
@endphp

<header id="main-header" class="active" style="{{ array_key_exists('header_bg', $header_setting) && $header_setting['header_bg'] ? "background-color: {$header_setting['header_bg']};" : 'background-color: #fff;' }}">
    <nav class="navbar" aria-label="primary">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div  class="logo site--logo">
                    <a href="{{ fr_route('home') }}" rel="home" title="{{ config('app.name') }}">
                        <img style="max-height: 50px;max-width: 110px;" src="{{ theme_setting_image('header.header.header_logo') != '' ? theme_setting_image('header.header.header_logo') : asset('assets/lte/cargo-logo-small-h38.svg') }}" alt="{{ config('app.name') }}" />
                    </a>
                </div>

                {{-- begin::nav --}}
                @include('theme.layout.layout-components.header.nav')
                {{-- end::nav --}}
            </div>

            <div class="mobile-items">
                @if (array_key_exists('display_sign_in', $header_setting) && $header_setting['display_sign_in'])
                    <a href="{{ fr_route('admin.dashboard') }}" class="btn d-none d-lg-inline px-3" style="{{ array_key_exists('header_text_color', $header_setting) && $header_setting['header_text_color'] ? "color: {$header_setting['header_text_color']};" : 'color: #222;' }}">@lang('theme_easyship::view.signin')</a>
                @endif
                <button id="nav-open" class="btn btn-sm px-3 bars d-lg-none stop-propagation" aria-label="navbar toggle" style="{{ array_key_exists('header_text_color', $header_setting) && $header_setting['header_text_color'] ? "color: {$header_setting['header_text_color']};" : 'color: #222;' }}">
                    <i data-feather="menu"></i>
                </button>
                <!-- dropdowns -->
                @if(check_module('Localization'))
                <div class="dropdowns">
                    <div class="btn-group dropup custom">
                        <button type="button" class="btn text-white dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="{{ array_key_exists('header_text_color', $header_setting) && $header_setting['header_text_color'] ? "color: {$header_setting['header_text_color']};" : 'color: #222;' }}" >
                            <img class="dropdown-icon invert" src="{{asset('themes/easyship/assets/images/language.svg')}}" alt="language" />
                            <span style="{{ array_key_exists('header_text_color', $header_setting) && $header_setting['header_text_color'] ? "color: {$header_setting['header_text_color']};" : 'color: #222;' }}" >{{LaravelLocalization::getCurrentLocaleName()}}</span>
                            <i data-feather="chevron-up"></i>
                        </button>
                        <div class="dropdown-menu" style="top: 100% !important;bottom: auto !important;">
                            @foreach(Modules\Localization\Entities\Language::all() as $key => $language)
                                <a @if($language->name == LaravelLocalization::getCurrentLocaleName()) class="dropdown-item active" @else class="dropdown-item" @endif  href="{{ LaravelLocalization::getLocalizedURL($language->code) }}" >{{$language->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </nav>
</header>


<!-- Mobile Menu -->
<nav aria-label="primary mobile" class="drawer d-lg-none">
    <header style="padding: 40px 0px !important;" class="header d-lg-none d-flex justify-content-between align-items-center">
      <img style="max-height: 50px;max-width: 110px;" src="{{ theme_setting_image('header.header.header_logo') != '' ? theme_setting_image('header.header.header_logo') : asset('assets/lte/cargo-logo-small-h38.svg') }}" alt="{{ config('app.name') }}" />
      <button id="nav-close" class="btn p-0 stop-propagation">
        <i data-feather="x"></i>
      </button>
    </header>

    <div class="body">
      <ul class="nav-list list-unstyled mb-0">
        @if (array_key_exists('display_home_icon', $header_setting) && $header_setting['display_home_icon'])
            <li class="nav-item">
                <a class="nav-link" href="{{ fr_route('home') }}" style="{{ array_key_exists('header_text_color', $header_setting) && $header_setting['header_text_color'] ? "color: {$header_setting['header_text_color']};" : 'color: #222;' }}" data-toggle="dropdown">@lang('theme_easyship::view.home') </a>
            </li>
        @endif
        {!! get_menu_header() !!}
      </ul>
    </div>
</nav>
