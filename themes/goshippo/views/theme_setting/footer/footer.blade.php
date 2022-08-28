@php
    $hasFooterLogo = isset($data['footer_logo']) && $data['footer_logo'];
    $getFooterLogo = $hasFooterLogo ? Storage::url(Config::get('DIRECTORY_IMAGE') . '/' . $data['footer_logo']) : '';
    
@endphp

<div class="footer-setting">

    
    
    <!--begin::main_footer -->
    <div class="setting-box">
        <h4 class="setting-box-label fw-bold fs-3">@lang('theme_html::view.main_footer') </h4>

        <!--begin::row display_footer -->
        <div class="row mb-6 display_footer">
            <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.display_footer') </label>
            <div class="col-md-8">
                <div class="custom-control custom-switch form-check form-switch">
                    <input
                        class="custom-control-input form-check-input display_footer_input"
                        name="display_footer"
                        type="checkbox"
                        value="1"
                        id="display_footer"
                        {{ isset($data['display_footer']) && $data['display_footer'] == 1 ? 'checked="checked"' : '' }}
                    >
                    <label
                        class="custom-control-label form-check-label fw-bold fs-6" for="display_footer"
                    >
                    </label>
                </div>
            </div>
        </div>
        <!--end::row display_footer -->

        <div class="footer_control" style="{{ isset($data['display_footer']) && $data['display_footer'] ?: 'display: none;' }}">
            <!--begin::row footer_bg -->
            <div class="row mb-6 footer_bg">
                <label class="col-md-4 fw-bold fs-6"> @lang('theme_html::view.footer_bg') </label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input
                            class="form-control form-control-color w-100 color_picker_input footer_bg_input"
                            name="footer_bg"
                            value="{{ isset($data['footer_bg']) ? $data['footer_bg'] : '#111026' }}"
                        >
                    </div>
                </div>
            </div>
            <!--end::row footer_bg -->

            <!--begin::row footer_text_color -->
            <div class="row mb-6 footer_text_color">
                <label class="col-md-4 fw-bold fs-6"> @lang('theme_html::view.footer_text_color') </label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input
                            class="form-control form-control-color w-100 color_picker_input footer_text_color_input"
                            name="footer_text_color"
                            value="{{ isset($data['footer_text_color']) ? $data['footer_text_color'] : '#FFF' }}"
                        >
                    </div>
                </div>
            </div>
            <!--end::row footer_text_color -->
        </div>
    </div>
    <!--end::main_footer -->

    <!--begin::footer_widgets -->
    <div class="setting-box footer_control" style="{{ isset($data['display_footer']) && $data['display_footer'] ?: 'display: none;' }}">
        <h4 class="setting-box-label fw-bold fs-3">@lang('theme_html::view.footer_widgets') </h4>

        <!--begin::row display_widgets -->
        <div class="row mb-6 display_widgets">
            <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.display_widgets') </label>
            <div class="col-md-8">
                <div class="custom-control custom-switch form-check form-switch">
                    <input
                        class="custom-control-input form-check-input display_widgets_input"
                        name="display_widgets"
                        type="checkbox"
                        value="1"
                        id="display_widgets"
                        {{ isset($data['display_widgets']) && $data['display_widgets'] == 1 ? 'checked="checked"' : '' }}
                    >
                    <label
                        class="custom-control-label form-check-label fw-bold fs-6" for="display_widgets"
                    >
                    </label>
                </div>
            </div>
        </div>
        <!--end::row display_widgets -->

        <!--begin::row widgets_count -->
        <div class="widgets_control" style="{{ isset($data['display_widgets']) && $data['display_widgets'] ?: 'display: none;' }}">
            <div class="row mb-6 widgets_count">
                <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.widgets_count') </label>
                <div class="col-md-8">
                    <div class="input-group">
                        <div class="form-check mx-3">
                            <input
                                class="custom-control-input form-check-input"
                                type="radio"
                                name="widgets_count"
                                id="widgets_count1"
                                value="1"
                                {{ isset($data['widgets_count']) && $data['widgets_count'] == 1 ? 'checked="checked"' : '' }}
                            >
                            <label class="custom-control-label form-check-label" for="widgets_count1">
                                <img style="height: 60px;" src="{{ asset('assets/custom/images/settings/layouts/footer_layout/column-1.svg') }}">
                            </label>
                        </div>
                        <div class="form-check mx-3">
                            <input
                                class="custom-control-input form-check-input"
                                type="radio"
                                name="widgets_count"
                                id="widgets_count2"
                                value="2"
                                {{ isset($data['widgets_count']) && $data['widgets_count'] == 2 ? 'checked="checked"' : '' }}
                            >
                            <label class="custom-control-label form-check-label" for="widgets_count2">
                                <img style="height: 60px;" src="{{ asset('assets/custom/images/settings/layouts/footer_layout/column-2.svg') }}">
                            </label>
                        </div>
                        <div class="form-check mx-3">
                            <input
                                class="custom-control-input form-check-input"
                                type="radio"
                                name="widgets_count"
                                id="widgets_count3"
                                value="3"
                                {{ isset($data['widgets_count']) && $data['widgets_count'] == 3 ? 'checked="checked"' : '' }}
                            >
                            <label class="custom-control-label form-check-label" for="widgets_count3">
                                <img style="height: 60px;" src="{{ asset('assets/custom/images/settings/layouts/footer_layout/column-3.svg') }}">
                            </label>
                        </div>
                        <div class="form-check mx-3">
                            <input
                                class="custom-control-input form-check-input"
                                type="radio"
                                name="widgets_count"
                                id="widgets_count4"
                                value="4"
                                {{ isset($data['widgets_count']) && $data['widgets_count'] == 4 ? 'checked="checked"' : '' }}
                            >
                            <label class="custom-control-label form-check-label" for="widgets_count4">
                                <img style="height: 60px;" src="{{ asset('assets/custom/images/settings/layouts/footer_layout/column-4.svg') }}">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::row widgets_count -->
    </div>
    <!--end::footer_widgets -->


    <!--begin::footer_top_area -->
    <div class="setting-box footer_control" style="{{ isset($data['display_footer']) && $data['display_footer'] ?: 'display: none;' }}">
        <h4 class="setting-box-label fw-bold fs-3">@lang('theme_html::view.footer_top_area') </h4>

        <!--begin::row display_footer_top_area -->
        <div class="row mb-6 display_footer_top_area">
            <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.display_footer_top_area') </label>
            <div class="col-md-8">
                <div class="custom-control custom-switch form-check form-switch">
                    <input
                        class="custom-control-input form-check-input display_footer_top_area_input"
                        name="display_footer_top_area"
                        type="checkbox"
                        value="1"
                        id="display_footer_top_area"
                        {{ isset($data['display_footer_top_area']) && $data['display_footer_top_area'] == 1 ? 'checked="checked"' : '' }}
                    >
                    <label
                        class="custom-control-label form-check-label fw-bold fs-6" for="display_footer_top_area"
                    >
                    </label>
                </div>
            </div>
        </div>
        <!--end::row display_footer_top_area -->

        <div class="footer_top_area_control" style="{{ isset($data['display_footer_top_area']) && $data['display_footer_top_area'] ?: 'display: none;' }}">
            <!--begin::row display_footer_logo -->
            <div class="row mb-6 display_footer_logo">
                <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.display_footer_logo') </label>
                <div class="col-md-8">
                    <div class="custom-control custom-switch form-check form-switch">
                        <input
                            class="custom-control-input form-check-input display_footer_logo_input"
                            name="display_footer_logo"
                            type="checkbox"
                            value="1"
                            id="display_footer_logo"
                            {{ isset($data['display_footer_logo']) && $data['display_footer_logo'] == 1 ? 'checked="checked"' : '' }}
                        >
                        <label
                            class="custom-control-label form-check-label fw-bold fs-6" for="display_footer_logo"
                        >
                        </label>
                    </div>
                </div>
            </div>
            <!--end::row display_footer_logo -->

            <!--begin::row footer_logo -->
            <div class="row mb-6 footer_logo" style="{{ isset($data['display_footer_logo']) && $data['display_footer_logo'] ?: 'display: none;' }}">
                <label class="col-md-4 fw-bold fs-6">@lang('theme_html::view.footer_logo')</label>
                <div class="col-md-8">
                    
                    <div>
                        @if(isset($model))
                            <x-media-library-collection data-title="footer_logo" data-type="image" max-items="1" name="footer_logo" :model="$model" collection="footer_logo" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
                        @else
                            <x-media-library-attachment data-title="footer_logo" data-type="image" name="footer_logo" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
                        @endif
                    </div>
                </div>
            </div>
            <!--end::row footer_logo-->

            <!--begin::row display_footer_paragraph -->
            <div class="row mb-6 display_footer_paragraph">
                <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.display_footer_paragraph') </label>
                <div class="col-md-8">
                    <div class="custom-control custom-switch form-check form-switch">
                        <input
                            class="custom-control-input form-check-input display_footer_paragraph_input"
                            name="display_footer_paragraph"
                            type="checkbox"
                            value="1"
                            id="display_footer_paragraph"
                            {{ isset($data['display_footer_paragraph']) && $data['display_footer_paragraph'] == 1 ? 'checked="checked"' : '' }}
                        >
                        <label
                            class="custom-control-label form-check-label fw-bold fs-6" for="display_footer_paragraph"
                        >
                        </label>
                    </div>
                </div>
            </div>
            <!--end::row display_footer_paragraph -->

            <!--begin::row footer_paragraph -->
            <div class="row mb-6 footer_paragraph" style="{{ isset($data['display_footer_paragraph']) && $data['display_footer_paragraph'] ?: 'display: none;' }}">
                <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.footer_paragraph') </label>
                <div class="col-md-8">
                    <div class="input-group">
                        <textarea
                            name="footer_paragraph"
                            placeholder="@lang('theme_html::view.footer_paragraph')"
                            class="form-control min-h-100px footer_paragraph_input"
                        >{{ isset($data['footer_paragraph']) ? $data['footer_paragraph'] : '' }}</textarea>
                    </div>
                    <div class="form-text">@lang('theme_html::view.hint_footer_paragraph')</div>
                </div>
            </div>
            <!--end::row footer_paragraph -->

            <!--begin::row section button -->
            <div class="row mb-6">
                <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_easyship::view.section_button') </label>
                <div class="col-md-8">

                        <div class="input-group lang_container" id="lang_container_section_button">
                            <select class="change_language form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px">
                                <option value="{{ app()->getLocale() }}" data-flag="{{Config::get('current_lang_image')}}" selected>
                                    {{ get_current_lang()['name'] }}
                                </option>
                                @foreach(get_langauges_except_current() as $locale)
                                    <option value="{{ $locale['code'] }}" data-flag="{{$locale['icon']}}">
                                        {{ $locale['name'] }}
                                    </option>
                                @endforeach
                            </select>
                            <input
                                type="text"
                                name="section_button[{{app()->getLocale()}}]"
                                title="{{app()->getLocale()}}"
                                class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}"
                                value="{{ isset($data['section_button']) && isset($data['section_button'][app()->getLocale()]) ? $data['section_button'][app()->getLocale()] : '' }}"
                            >
                            @foreach(get_langauges_except_current() as $locale)
                                <input
                                    type="text"
                                    name="section_button[{{ $locale['code'] }}]"
                                    title="{{ $locale['code'] }}"
                                    class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none"
                                    value="{{ isset($data['section_button']) && isset($data['section_button'][$locale['code']]) ? $data['section_button'][$locale['code']] : '' }}"
                                >
                            @endforeach
                        </div>
                </div>
            </div>
            <!--end::row section button -->

            <!--begin::row section URL Field -->
            <div class="row mb-6">
                <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_easyship::view.section_url') </label>
                <div class="col-md-8">

                        <div class="input-group url_input_container" id="url_input_container_section_url">
                            <select class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px" data-type="array" name="section_url[type]" data-title="type">
                                <option value="custom"  {{ (isset($data['section_url']) && isset($data['section_url']['type'])) ? ($data['section_url']['type'] == 'custom' ? 'selected' : '') : 'selected' }}>@lang('theme_easyship::view.custom')</option>
                                @if (check_module('pages'))
                                    <option value="page" {{ (isset($data['section_url']) && isset($data['section_url']['type']) && $data['section_url']['type'] == 'page') ? 'selected' : '' }}>@lang('theme_easyship::view.page')</option>
                                @endif
                                @if (check_module('blog'))
                                    <option value="category" {{ (isset($data['section_url']) && isset($data['section_url']['type']) && $data['section_url']['type'] == 'category') ? 'selected' : '' }}>@lang('theme_easyship::view.category')</option>
                                    <option value="post" {{ (isset($data['section_url']) && isset($data['section_url']['type']) && $data['section_url']['type'] == 'post') ? 'selected' : '' }}>@lang('theme_easyship::view.post')</option>
                                @endif
                            </select>
                            <input
                                type="text"
                                name="section_url[custom]"
                                data-title="custom"
                                data-type="array"
                                class="form-control section-title form-control-choose-type form-control-custom {{ (isset($data['section_url']) && isset($data['section_url']['type'])) ? ($data['section_url']['type'] == 'custom' ? '' : 'd-none') : '' }}"
                                value="{{ isset($data['section_url']) && isset($data['section_url']['custom']) ? $data['section_url']['custom'] : '' }}"
                            >
                            @if (check_module('pages'))
                                <div class="form-control-choose-type form-control-page {{ (isset($data['section_url']) && isset($data['section_url']['type']) && $data['section_url']['type'] == 'page') ? '' : 'd-none' }}">
                                    <select
                                        class="form-select mw-auto"
                                        name="section_url[page]"
                                        data-title="page"
                                        data-type="array"
                                        data-placeholder="@lang('theme_easyship::view.choose_page')"
                                    >
                                        @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                        
                                            @foreach ($data['categories'] as $categoryId)
                                                @php
                                                    $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                                @endphp
                                                <option value="{{$category->id}}" {{ isset($data['section_url']) && isset($data['section_url']['page']) && $data['section_url']['page'] == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            @endif
                            @if (check_module('blog'))
                                <div class="form-control-choose-type form-control-category {{ (isset($data['section_url']) && isset($data['section_url']['type']) && $data['section_url']['type'] == 'category') ? '' : 'd-none' }}">
                                    <select
                                        class="form-select  mw-auto "
                                        name="section_url[category]"
                                        data-title="category"
                                        data-type="array"
                                        data-placeholder="@lang('theme_easyship::view.choose_category')"
                                    >
                                        @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                        
                                            @foreach ($data['categories'] as $categoryId)
                                                @php
                                                    $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                                @endphp
                                                <option value="{{$category->id}}" {{ isset($data['section_url']) && isset($data['section_url']['page']) && $data['section_url']['page'] == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-control-choose-type form-control-post {{ (isset($data['section_url']) && isset($data['section_url']['type']) && $data['section_url']['type'] == 'post') ? '' : 'd-none' }}">
                                    <select
                                        class="form-select mw-auto "
                                        name="section_url[post]"
                                        data-title="post"
                                        data-type="array"
                                        data-placeholder="@lang('theme_easyship::view.choose_post')"
                                    >
                                        @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                        
                                            @foreach ($data['categories'] as $categoryId)
                                                @php
                                                    $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                                @endphp
                                                <option value="{{$category->id}}" {{ isset($data['section_url']) && isset($data['section_url']['page']) && $data['section_url']['page'] == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            @endif
                        </div>
                </div>
            </div>
            <!--end::row section button -->

            <!--begin::row display_social -->
            <div class="row mb-6 display_social">
                <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.display_social') </label>
                <div class="col-md-8">
                    <div class="custom-control custom-switch form-check form-switch">
                        <input
                            class="custom-control-input form-check-input display_social_input"
                            name="display_social"
                            type="checkbox"
                            value="1"
                            id="display_social"
                            {{ isset($data['display_social']) && $data['display_social'] == 1 ? 'checked="checked"' : '' }}
                        >
                        <label
                            class="custom-control-label form-check-label fw-bold fs-6" for="display_social"
                        >
                        </label>
                    </div>
                </div>
            </div>
            <!--end::row display_social -->

            <!--begin::row social_links -->
            <div class="social_links" style="{{ isset($data['display_social']) && $data['display_social'] ?: 'display: none;' }}">

                <!--begin::row section facebook_url -->
                <div class="row mb-6">
                    <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_easyship::view.facebook_url') </label>
                    <div class="col-md-8">
                        <div class="input-group url_input_container" id="url_input_container_facebook_url">
                            <input
                                type="text"
                                name="facebook_url"
                                class="form-control section-title form-control-choose-type form-control-custom "
                                value="{{ isset($data['facebook_url']) && isset($data['facebook_url']) ? $data['facebook_url'] : '' }}"
                            >
                        </div>
                    </div>
                </div>
                <!--end::row section facebook_url -->

                <!--begin::row section twitter_url -->
                <div class="row mb-6">
                    <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_easyship::view.twitter_url') </label>
                    <div class="col-md-8">
                        <div class="input-group url_input_container" id="url_input_container_twitter_url">
                            <input
                                type="text"
                                name="twitter_url"
                                class="form-control section-title form-control-choose-type form-control-custom "
                                value="{{ isset($data['twitter_url']) && isset($data['twitter_url']) ? $data['twitter_url'] : '' }}"
                            >
                        </div>
                    </div>
                </div>
                <!--end::row section twitter_url -->

                <!--begin::row section google_url -->
                <div class="row mb-6">
                    <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_easyship::view.google_url') </label>
                    <div class="col-md-8">
                        <div class="input-group url_input_container" id="url_input_container_google_url">
                            <input
                                type="text"
                                name="google_url"
                                class="form-control section-title form-control-choose-type form-control-custom "
                                value="{{ isset($data['google_url']) && isset($data['google_url']) ? $data['google_url'] : '' }}"
                            >
                        </div>
                    </div>
                </div>
                <!--end::row section google_url -->

                <!--begin::row section dribbble_url -->
                <div class="row mb-6">
                    <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_easyship::view.dribbble_url') </label>
                    <div class="col-md-8">
                        <div class="input-group url_input_container" id="url_input_container_dribbble_url">
                            <input
                                type="text"
                                name="dribbble_url"
                                class="form-control section-title form-control-choose-type form-control-custom "
                                value="{{ isset($data['dribbble_url']) && isset($data['dribbble_url']) ? $data['dribbble_url'] : '' }}"
                            >
                        </div>
                    </div>
                </div>
                <!--end::row section dribbble_url -->

                <!--begin::row section youtube_url -->
                <div class="row mb-6">
                    <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_easyship::view.youtube_url') </label>
                    <div class="col-md-8">
                        <div class="input-group url_input_container" id="url_input_container_youtube_url">
                            <input
                                type="text"
                                name="youtube_url"
                                class="form-control section-title form-control-choose-type form-control-custom "
                                value="{{ isset($data['youtube_url']) && isset($data['youtube_url']) ? $data['youtube_url'] : '' }}"
                            >
                        </div>
                    </div>
                </div>
                <!--end::row section youtube_url -->
            </div>
            <!--end::row social_links -->
        </div>
    </div>
    <!--end::footer_top_area -->


    <!--begin::footer_copyright -->
    <div class="setting-box footer_control" style="{{ isset($data['display_footer']) && $data['display_footer'] ?: 'display: none;' }}">
        <h4 class="setting-box-label fw-bold fs-3">@lang('theme_html::view.footer_copyright') </h4>
        <!--begin::row display_copyright -->
        <div class="row mb-6 display_copyright">
            <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.display_copyright') </label>
            <div class="col-md-8">
                <div class="custom-control custom-switch form-check form-switch">
                    <input
                        class="custom-control-input form-check-input display_copyright_input"
                        name="display_copyright"
                        type="checkbox"
                        value="1"
                        id="display_copyright"
                        {{ isset($data['display_copyright']) && $data['display_copyright'] == 1 ? 'checked="checked"' : '' }}
                    >
                    <label
                        class="custom-control-label form-check-label fw-bold fs-6" for="display_copyright"
                    >
                    </label>
                </div>
            </div>
        </div>
        <!--end::row display_copyright -->
        
        <div class="copyright_control" style="{{ isset($data['display_copyright']) && $data['display_copyright'] ?: 'display: none;' }}">
        
            <!--begin::row copyright -->
            <div class="row mb-6">
                <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.copyright') </label>
                <div class="col-md-8">
                    <div class="input-group">
                        <textarea
                            name="copyright"
                            placeholder="@lang('theme_html::view.copyright')"
                            class="form-control min-h-100px copyright_input"
                        >{{ isset($data['copyright']) ? $data['copyright'] : '' }}</textarea>
                    </div>
                    <div class="form-text">@lang('theme_html::view.hint_copyright')</div>
                </div>
            </div>
            <!--end::row copyright -->
        
            <!--begin::row display_footer_links -->
            <div class="row mb-6 display_footer_links">
                <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_html::view.display_footer_links') </label>
                <div class="col-md-8">
                    <div class="custom-control custom-switch form-check form-switch">
                        <input
                            class="custom-control-input form-check-input display_footer_links_input"
                            name="display_footer_links"
                            type="checkbox"
                            value="1"
                            id="display_footer_links"
                            {{ isset($data['display_footer_links']) && $data['display_footer_links'] == 1 ? 'checked="checked"' : '' }}
                        >
                        <label
                            class="custom-control-label form-check-label fw-bold fs-6" for="display_footer_links"
                        >
                        </label>
                    </div>
                </div>
            </div>
            <!--end::row display_footer_links -->
        </div>

    </div>
    <!--end::footer_copyright -->

</div>

<script>


    $('.display_footer_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.footer_control, .footer_bg').show()
        } else {
            $('.footer_control, .footer_bg').hide()
        }
    });

    $('.display_widgets_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.widgets_control').show()
        } else {
            $('.widgets_control').hide()
        }
    });


    $('.display_footer_top_area_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.footer_top_area_control').show()
        } else {
            $('.footer_top_area_control').hide()
        }
    });

    $('.display_footer_logo_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.footer_logo').show()
        } else {
            $('.footer_logo').hide()
        }
    });

    $('.display_footer_paragraph_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.footer_paragraph').show()
        } else {
            $('.footer_paragraph').hide()
        }
    });

    $('.display_social_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.social_links').show()
        } else {
            $('.social_links').hide()
        }
    });

    $('.display_copyright_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.copyright_control').show()
        } else {
            $('.copyright_control').hide()
        }
    });

</script>