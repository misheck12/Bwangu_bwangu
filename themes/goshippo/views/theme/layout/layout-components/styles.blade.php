@php
    $header_setting = theme_setting('header.header');
    if(!$header_setting) $header_setting = array();
    $hoverMenuBg = array_key_exists('menu_hover_bg_color', $header_setting) ? $header_setting['menu_hover_bg_color'] : '#105EFB';

    if (check_module('Localization')) {
        $current_lang = Modules\Localization\Entities\Language::where('code', LaravelLocalization::getCurrentLocale())->first();
    }
@endphp

<script type="text/javascript" src="{{ asset('themes/html/assets/js/jquery/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/html/assets/js/jquery/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/html/assets/js/plugins.js') }}"></script>

<link rel="stylesheet" id="wooohoo-ilightbox-skin-css" href="{{ asset('themes/html/assets/css/ilightbox/dark-skin/skin.css') }}" type="text/css" media="all" />
<link rel="stylesheet" id="wooohoo-ilightbox-skin-black-css" href="{{ asset('themes/html/assets/css/ilightbox/metro-black-skin/skin.css') }}" type="text/css" media="all" />
<link rel="stylesheet" id="bdaia-woocommerce-css" href="{{ asset('themes/html/assets/css/woocommerce.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('themes/html/assets/css/fontawesome-min.css') }}">
<link rel="stylesheet" href="{{ asset('themes/html/custom-assets/css/app.css') }}">
<link rel="stylesheet" id="kolyoum-default-css" href="{{ asset('themes/goshippo/assets/css/post.style.css') }}" type="text/css" media="all" />

<!-- styles -->
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
    crossorigin="anonymous"
/>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet"
/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" href="{{ asset('themes/goshippo/assets/css/style.css') }}" />

@if(isset($current_lang) && $current_lang->dir == 'rtl')
    <link rel="stylesheet" href="{{ asset('themes/goshippo/assets/css/rtl.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
@endif

<style type='text/css'>
    @media only screen and (max-width: 900px) {
        .bd-push-menu-open aside.bd-push-menu,
        aside.bd-push-menu.light-skin {
            background: #fe4f2d;
            background: -webkit-linear-gradient(176deg, #cf109f, #fe4f2d);
            background: linear-gradient(176deg, #cf109f, #fe4f2d);
        }
    }

    @media only screen and (max-width: 900px) {
        div.bd-push-menu-inner::before {
            background-image: url("{{ asset('themes/html/assets/images/dsfdsfsddfsfd.jpg') }}") !important;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center;
            background-position: center;
        }
    }

    div.bdaia-footer,
    div.bdaia-footer.bd-footer-light {
        background: #111026;
        background: -webkit-linear-gradient(176deg, #111026, #111026);
        background: linear-gradient(176deg, #111026, #111026);
    }

    div.bdaia-footer::before {
        background-image: url("{{ asset('themes/html/assets/images/footer-background.svg') }}") !important;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center top;
    }

    .bd-cat-10 {
        background: #e5b22b !important;
        color: #FFF !important;
    }

    .bd-cat-10::after {
        border-top-color: #e5b22b !important
    }

    .bd-cat-13 {
        background: #39a657 !important;
        color: #FFF !important;
    }

    .bd-cat-13::after {
        border-top-color: #39a657 !important
    }

    .bd-cat-8 {
        background: #6b45e0 !important;
        color: #FFF !important;
    }

    .bd-cat-8::after {
        border-top-color: #6b45e0 !important
    }

    .bd-cat-12 {
        background: #e81055 !important;
        color: #FFF !important;
    }

    .bd-cat-12::after {
        border-top-color: #e81055 !important
    }

    .bdaia-header-default .topbar:not(.topbar-light) {
        background: #fb8332
    }

    .bdaia-header-default .topbar:not(.topbar-light) {
        background: linear-gradient(176deg, #fb8332 0, #b31919 100%);
    }

    .bdaia-header-default .header-container {
        border-bottom: 0 none;
    }

    ul.bd-components>li.bd-alert-posts {
        padding-right: 0;
    }

    .bdaia-header-default .header-container .bd-container {
        background: url("{{ asset('themes/html/assets/images/top-shadow.png') }}") no-repeat top;
    }

    .bdaia-header-default .topbar.topbar-gradient .breaking-title {
        background-color: rgba(0, 0, 0, .75);
        border-radius: 2px;
    }

    .inner-wrapper {
        background-color: #FFF;
    }

    .article-meta-info .bd-alignleft .meta-item:last-child {
        margin-right: 0;
    }

    .article-meta-info .bd-alignright .meta-item:first-child {
        margin-left: 0;
    }

    .articles-box-dark.articles-box.articles-box-block625 .articles-box-items>li:first-child {
        border-bottom: 1px solid rgba(255, 255, 255, .1);
    }

    .articles-box.articles-box-block614 .articles-box-items>li .article-details h3 {
        padding: 0;
        font-size: 19px;
        line-height: 1.33;
        font-weight: normal;
    }
</style>


<style type="text/css">
    .bdaia-header-default #navigation.nav-boxed.mainnav-dark .primary-menu ul#menu-primary > li:hover > a, .bdaia-header-default #navigation.nav-boxed.mainnav-dark .primary-menu ul#menu-primary > li.current-menu-item > a, .bdaia-header-default #navigation.nav-boxed.mainnav-dark .primary-menu ul#menu-primary > li.current-menu-ancestor > a, .bdaia-header-default #navigation.nav-boxed.mainnav-dark .primary-menu ul#menu-primary > li.current-menu-parent > a
    {
        background-color: {{ $hoverMenuBg }} !important;
    }
    .bdaia-header-default #navigation .primary-menu ul#menu-primary > li > .bd_mega.sub-menu, .bdaia-header-default #navigation .primary-menu ul#menu-primary > li > .sub-menu
    {
        border-color: {{ $hoverMenuBg }} !important;
    }
    .bdaia-header-default #navigation.dropdown-light .primary-menu ul#menu-primary li.bd_mega_menu div.bd_mega ul.bd_mega.sub-menu li a:hover, .bdaia-header-default #navigation.dropdown-light .primary-menu ul#menu-primary li ul.sub-menu li a:hover
    {
        color: {{ $hoverMenuBg }} !important;
    }
</style>