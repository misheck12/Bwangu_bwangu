@php
    $header_setting = theme_setting('header.header');
    if(!$header_setting) $header_setting = array();
    $hoverMenuBg = array_key_exists('menu_hover_bg_color', $header_setting) ? $header_setting['menu_hover_bg_color'] : '#105EFB';

    if (check_module('Localization')) {
        $current_lang = Modules\Localization\Entities\Language::where('code', LaravelLocalization::getCurrentLocale())->first();
    }

    $current_theme  = strtolower(Qirolab\Theme\Theme::active());
    $additional_css = App\Models\CustomSetting::where('place', 'additional_css')->where('theme', $current_theme)->first();
@endphp

<meta http-equiv="x-dns-prefetch-control" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<script type="text/javascript" src="{{ asset('themes/html/assets/js/jquery/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/html/assets/js/jquery/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/html/assets/js/plugins.js') }}"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('themes/easyship/assets/css/style.css') }}" />

<link rel="stylesheet" id="wooohoo-ilightbox-skin-css" href="{{ asset('themes/html/assets/css/ilightbox/dark-skin/skin.css') }}" type="text/css" media="all" />
<link rel="stylesheet" id="wooohoo-ilightbox-skin-black-css" href="{{ asset('themes/html/assets/css/ilightbox/metro-black-skin/skin.css') }}" type="text/css" media="all" />
<link rel="stylesheet" id="bdaia-woocommerce-css" href="{{ asset('themes/html/assets/css/woocommerce.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('themes/html/assets/css/fontawesome-min.css') }}">
<link rel="stylesheet" href="{{ asset('themes/html/custom-assets/css/app.css') }}">
<link rel="stylesheet" id="kolyoum-default-css" href="{{ asset('themes/easyship/assets/css/post.style.css') }}" type="text/css" media="all" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="//fonts.googleapis.com/">
<link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect">
<link rel="preload" as="script" href="//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js">

@if(isset($current_lang) && $current_lang->dir == 'rtl')
    <link rel="stylesheet" href="{{ asset('themes/easyship/assets/css/rtl.css') }}" />
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

<style type="text/css" media="all">
    :root {
        --brand-color: #EE6517;
        --dark-brand-color: #F65051;
        --bright-color: #FFF;
        --base-color: #161D40;
    }

    body {
        color: var(--base-color);
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Poppins, Oxygen, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", "Open Sans", Arial, sans-serif;
        font-size: 13px;
        line-height: 21px;
    }

    * {
        padding: 0;
        margin: 0;
        list-style: none;
        border: 0;
        outline: none;
        box-sizing: border-box;
    }

    a {
        color: var(--base-color);
        text-decoration: none;
        transition: 0.15s;
    }

    a:hover {
        color: var(--brand-color);
    }
    a:active, a:hover {
        outline-width: 0;
    }

    div.hero section#banner.section {
        background: #FFFFFF !important;
    }
    #main-header:hover, #main-header.active {
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    #main-header .navbar .logo {
        -webkit-margin-end: 90px;
        margin-inline-end: 90px;
    }

    #main-header .navbar .nav-list > li {
        padding-inline: 0;
        -webkit-margin-end: 40px;
        margin-inline-end: 40px;
    }

    #main-header .navbar .nav-list > li a {
        font-size: 14px;
        font-weight: bold;
        letter-spacing: 0;
        text-transform: uppercase;
        color: var(--base-color) !important;
    }
    #main-header .navbar .nav-list > li a:hover {
        color: var(--brand-color) !important;
    }

    #main-header .navbar .nav-list .dropdown-menu.submenu,
    #main-header .navbar .nav-list .dropdown-menu {
        border-radius: 0 !important;
        width: 230px !important;
        padding: 10px 0 !important;
        line-height: 20px !important;
        box-shadow: 0 15px 30px rgb(0 0 0 / 06%), 0 0 0 1px rgb(0 0 0 / 4%);
    }
    #main-header .navbar .nav-list .dropdown-menu.submenu a,
    #main-header .navbar .nav-list .dropdown-menu a {
        display: block;
        margin: 0 !important;
        padding: 8px 20px !important;
        min-height: unset !important;
        font-size: 13px !important;
        text-transform: unset !important;
        font-weight: normal !important;
        color: var(--base-color) !important;
        max-width: 100% !important;
        white-space: nowrap !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
    }
    #main-header .navbar .nav-list .dropdown-menu.submenu a:hover,
    #main-header .navbar .nav-list .dropdown-menu a:hover {
        color: var(--brand-color) !important;
    }
    #main-header .navbar .nav-list li,
    #main-header .navbar .nav-list .dropdown-item {
        height: unset !important;
        max-height: unset !important;
        padding-block: unset !important;
    }
    #main-header .navbar .nav-list ul {
        line-height: 20px;
        z-index: 1;
        top: unset !important;
        left: unset !important;
    }
    #main-header .navbar .nav-list ul ul {
        top: 0 !important;
        left: 100% !important;
        margin-top: -10px !important;
    }
    #main-header .navbar .nav-list li svg {
        display: none !important;
    }
    #banner .btn
    {
        padding: 22px 40px;
        height: unset;
        border-radius: 10px !important;
        box-shadow: none !important;
        font-size: 18px;
        font-weight: 600;
        margin: 30px 0 0 0;
        font-family: 'Poppins';
        text-transform: unset !important;
    }
    .section .intro .heading {
        font-family: 'Poppins';
        font-weight: 600;
        letter-spacing: -2px;
    }

    @media only screen and (min-width: 75rem)
    {
        #banner .container {
            padding: 145px 0;
        }
    }

    {!! isset($additional_css->data['additional_css']) ? $additional_css->data['additional_css'] : '' !!}
</style>


