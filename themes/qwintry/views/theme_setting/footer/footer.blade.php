@php
$hasFooterLogo = isset($data['footer_logo']) && $data['footer_logo'];
$getFooterLogo = $hasFooterLogo ? Storage::url(Config::get('DIRECTORY_IMAGE') . '/' . $data['footer_logo']) : '';

@endphp

<div class="footer-setting">



    <!--begin::main_footer -->
    <div class="setting-box">
        <h4 class="setting-box-label fw-bold fs-3">@lang('theme_qwintry::view.main_footer') </h4>

        <!--begin::row display_footer -->
        <div class="row mb-6 display_footer">
            <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_qwintry::view.display_footer') </label>
            <div class="col-md-8">
                <div class="custom-control custom-switch form-check form-switch">
                    <input class="custom-control-input form-check-input display_footer_input" name="display_footer"
                        type="checkbox" value="1" id="display_footer"
                        {{ isset($data['display_footer']) && $data['display_footer'] == 1 ? 'checked="checked"' : '' }}>
                    <label class="custom-control-label form-check-label fw-bold fs-6" for="display_footer">
                    </label>
                </div>
            </div>
        </div>
        <!--end::row display_footer -->

        <div class="footer_control"
            style="{{ isset($data['display_footer']) && $data['display_footer'] ?: 'display: none;' }}">
            <!--begin::row footer_bg -->
            <div class="row mb-6 footer_bg">
                <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.footer_bg') </label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input class="form-control form-control-color w-100 color_picker_input footer_bg_input"
                            name="footer_bg" value="{{ isset($data['footer_bg']) ? $data['footer_bg'] : '#111026' }}">
                    </div>
                </div>
            </div>
            <!--end::row footer_bg -->

            <!--begin::row footer_text_color -->
            <div class="row mb-6 footer_text_color">
                <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.footer_text_color') </label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input class="form-control form-control-color w-100 color_picker_input footer_text_color_input"
                            name="footer_text_color"
                            value="{{ isset($data['footer_text_color']) ? $data['footer_text_color'] : '' }}">
                    </div>
                </div>
            </div>
            <!--end::row footer_text_color -->
        </div>
    </div>
    <!--end::main_footer -->

    <!--begin::footer_widgets -->
    <div class="setting-box footer_control"
        style="{{ isset($data['display_footer']) && $data['display_footer'] ?: 'display: none;' }}">
        <h4 class="setting-box-label fw-bold fs-3">@lang('theme_qwintry::view.footer_widgets') </h4>

        <!--begin::row display_widgets -->
        <div class="row mb-6 display_widgets">
            <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_qwintry::view.display_widgets') </label>
            <div class="col-md-8">
                <div class="custom-control custom-switch form-check form-switch">
                    <input class="custom-control-input form-check-input display_widgets_input" name="display_widgets"
                        type="checkbox" value="1" id="display_widgets"
                        {{ isset($data['display_widgets']) && $data['display_widgets'] == 1 ? 'checked="checked"' : '' }}>
                    <label class="custom-control-label form-check-label fw-bold fs-6" for="display_widgets">
                    </label>
                </div>
            </div>
        </div>
        <!--end::row display_widgets -->

        <!--begin::row widgets_count -->
        <div class="widgets_control"
            style="{{ isset($data['display_widgets']) && $data['display_widgets'] ?: 'display: none;' }}">
            <div class="row mb-6 widgets_count">
                <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_qwintry::view.widgets_count') </label>
                <div class="col-md-8">
                    <div class="input-group">
                        <div class="form-check mx-3">
                            <input class="custom-control-input form-check-input" type="radio" name="widgets_count"
                                id="widgets_count1" value="1"
                                {{ isset($data['widgets_count']) && $data['widgets_count'] == 1 ? 'checked="checked"' : '' }}>
                            <label class="custom-control-label form-check-label" for="widgets_count1">
                                <img style="height: 60px;"
                                    src="{{ asset('assets/custom/images/settings/layouts/footer_layout/column-1.svg') }}">
                            </label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="custom-control-input form-check-input" type="radio" name="widgets_count"
                                id="widgets_count2" value="2"
                                {{ isset($data['widgets_count']) && $data['widgets_count'] == 2 ? 'checked="checked"' : '' }}>
                            <label class="custom-control-label form-check-label" for="widgets_count2">
                                <img style="height: 60px;"
                                    src="{{ asset('assets/custom/images/settings/layouts/footer_layout/column-2.svg') }}">
                            </label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="custom-control-input form-check-input" type="radio" name="widgets_count"
                                id="widgets_count3" value="3"
                                {{ isset($data['widgets_count']) && $data['widgets_count'] == 3 ? 'checked="checked"' : '' }}>
                            <label class="custom-control-label form-check-label" for="widgets_count3">
                                <img style="height: 60px;"
                                    src="{{ asset('assets/custom/images/settings/layouts/footer_layout/column-3.svg') }}">
                            </label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="custom-control-input form-check-input" type="radio" name="widgets_count"
                                id="widgets_count4" value="4"
                                {{ isset($data['widgets_count']) && $data['widgets_count'] == 4 ? 'checked="checked"' : '' }}>
                            <label class="custom-control-label form-check-label" for="widgets_count4">
                                <img style="height: 60px;"
                                    src="{{ asset('assets/custom/images/settings/layouts/footer_layout/column-4.svg') }}">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::row widgets_count -->
    </div>
    <!--end::footer_widgets -->


    <!--begin::row footer_logo -->
    <div class="row mb-6 footer_logo"
        style="{{ isset($data['display_footer_logo']) && $data['display_footer_logo'] ?: 'display: none;' }}">
        <label class="col-md-4 fw-bold fs-6">@lang('theme_qwintry::view.footer_logo')</label>
        <div class="col-md-8">

            <div>
                @if (isset($model))
                    <x-media-library-collection data-title="footer_logo" data-type="image" max-items="1"
                        name="footer_logo" :model="$model" collection="footer_logo"
                        rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp" />
                @else
                    <x-media-library-attachment data-title="footer_logo" data-type="image" name="footer_logo"
                        rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp" />
                @endif
            </div>
        </div>
    </div>
    <!--end::row footer_logo-->

    <!--begin::row section about_us_Url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.about_us_Url')
        </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_about_us_Url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="about_us_Url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['about_us_Url']) && isset($data['about_us_Url']['type'])? ($data['about_us_Url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['about_us_Url']) &&isset($data['about_us_Url']['type']) &&$data['about_us_Url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['about_us_Url']) &&isset($data['about_us_Url']['type']) &&$data['about_us_Url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['about_us_Url']) &&isset($data['about_us_Url']['type']) &&$data['about_us_Url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="about_us_Url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['about_us_Url']) && isset($data['about_us_Url']['type'])? ($data['about_us_Url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['about_us_Url']) && isset($data['about_us_Url']['custom'])? $data['about_us_Url']['custom']: '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['about_us_Url']) &&isset($data['about_us_Url']['type']) &&$data['about_us_Url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="about_us_Url[page]" data-title="page"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['about_us_Url']) &&isset($data['about_us_Url']['page']) &&$data['about_us_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['about_us_Url']) &&isset($data['about_us_Url']['type']) &&$data['about_us_Url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="about_us_Url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['about_us_Url']) &&isset($data['about_us_Url']['page']) &&$data['about_us_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['about_us_Url']) &&isset($data['about_us_Url']['type']) &&$data['about_us_Url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="about_us_Url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['about_us_Url']) &&isset($data['about_us_Url']['page']) &&$data['about_us_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section about_us_Url -->

    <!--begin::row section privacy_policy_Url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center">
            @lang('theme_qwintry::view.privacy_policy_Url') </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_privacy_policy_Url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="privacy_policy_Url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['privacy_policy_Url']) && isset($data['privacy_policy_Url']['type'])? ($data['privacy_policy_Url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['privacy_policy_Url']) &&isset($data['privacy_policy_Url']['type']) &&$data['privacy_policy_Url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['privacy_policy_Url']) &&isset($data['privacy_policy_Url']['type']) &&$data['privacy_policy_Url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['privacy_policy_Url']) &&isset($data['privacy_policy_Url']['type']) &&$data['privacy_policy_Url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="privacy_policy_Url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['privacy_policy_Url']) && isset($data['privacy_policy_Url']['type'])? ($data['privacy_policy_Url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['privacy_policy_Url']) && isset($data['privacy_policy_Url']['custom'])? $data['privacy_policy_Url']['custom']: '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['privacy_policy_Url']) &&isset($data['privacy_policy_Url']['type']) &&$data['privacy_policy_Url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="privacy_policy_Url[page]" data-title="page"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['privacy_policy_Url']) &&isset($data['privacy_policy_Url']['page']) &&$data['privacy_policy_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['privacy_policy_Url']) &&isset($data['privacy_policy_Url']['type']) &&$data['privacy_policy_Url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="privacy_policy_Url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['privacy_policy_Url']) &&isset($data['privacy_policy_Url']['page']) &&$data['privacy_policy_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['privacy_policy_Url']) &&isset($data['privacy_policy_Url']['type']) &&$data['privacy_policy_Url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="privacy_policy_Url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['privacy_policy_Url']) &&isset($data['privacy_policy_Url']['page']) &&$data['privacy_policy_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section privacy_policy_Url -->

    <!--begin::row section terms_conditions_Url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center">
            @lang('theme_qwintry::view.terms_conditions_Url') </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_terms_conditions_Url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="terms_conditions_Url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['terms_conditions_Url']) && isset($data['terms_conditions_Url']['type'])? ($data['terms_conditions_Url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['terms_conditions_Url']) &&isset($data['terms_conditions_Url']['type']) &&$data['terms_conditions_Url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['terms_conditions_Url']) &&isset($data['terms_conditions_Url']['type']) &&$data['terms_conditions_Url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['terms_conditions_Url']) &&isset($data['terms_conditions_Url']['type']) &&$data['terms_conditions_Url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="terms_conditions_Url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['terms_conditions_Url']) && isset($data['terms_conditions_Url']['type'])? ($data['terms_conditions_Url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['terms_conditions_Url']) && isset($data['terms_conditions_Url']['custom'])? $data['terms_conditions_Url']['custom']: '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['terms_conditions_Url']) &&isset($data['terms_conditions_Url']['type']) &&$data['terms_conditions_Url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="terms_conditions_Url[page]" data-title="page"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['terms_conditions_Url']) &&isset($data['terms_conditions_Url']['page']) &&$data['terms_conditions_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['terms_conditions_Url']) &&isset($data['terms_conditions_Url']['type']) &&$data['terms_conditions_Url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="terms_conditions_Url[category]"
                            data-title="category" data-type="array"
                            data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['terms_conditions_Url']) &&isset($data['terms_conditions_Url']['page']) &&$data['terms_conditions_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['terms_conditions_Url']) &&isset($data['terms_conditions_Url']['type']) &&$data['terms_conditions_Url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="terms_conditions_Url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['terms_conditions_Url']) &&isset($data['terms_conditions_Url']['page']) &&$data['terms_conditions_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row sectionterms_conditions_Url -->

    <!--begin::row section refunds_Url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.refunds_Url')
        </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_refunds_Url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="refunds_Url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['refunds_Url']) && isset($data['refunds_Url']['type'])? ($data['refunds_Url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['refunds_Url']) && isset($data['refunds_Url']['type']) && $data['refunds_Url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['refunds_Url']) &&isset($data['refunds_Url']['type']) &&$data['refunds_Url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['refunds_Url']) && isset($data['refunds_Url']['type']) && $data['refunds_Url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="refunds_Url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['refunds_Url']) && isset($data['refunds_Url']['type'])? ($data['refunds_Url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['refunds_Url']) && isset($data['refunds_Url']['custom']) ? $data['refunds_Url']['custom'] : '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['refunds_Url']) && isset($data['refunds_Url']['type']) && $data['refunds_Url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="refunds_Url[page]" data-title="page" data-type="array"
                            data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['refunds_Url']) &&isset($data['refunds_Url']['page']) &&$data['refunds_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['refunds_Url']) &&isset($data['refunds_Url']['type']) &&$data['refunds_Url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="refunds_Url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['refunds_Url']) &&isset($data['refunds_Url']['page']) &&$data['refunds_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['refunds_Url']) && isset($data['refunds_Url']['type']) && $data['refunds_Url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="refunds_Url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['refunds_Url']) &&isset($data['refunds_Url']['page']) &&$data['refunds_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section refunds_Url -->

    <!--begin::row section api_Url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.api_Url')
        </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_api_Url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="api_Url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['api_Url']) && isset($data['api_Url']['type'])? ($data['api_Url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['api_Url']) && isset($data['api_Url']['type']) && $data['api_Url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['api_Url']) && isset($data['api_Url']['type']) && $data['api_Url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['api_Url']) && isset($data['api_Url']['type']) && $data['api_Url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="api_Url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['api_Url']) && isset($data['api_Url']['type'])? ($data['api_Url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['api_Url']) && isset($data['api_Url']['custom']) ? $data['api_Url']['custom'] : '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['api_Url']) && isset($data['api_Url']['type']) && $data['api_Url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="api_Url[page]" data-title="page" data-type="array"
                            data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['api_Url']) && isset($data['api_Url']['page']) && $data['api_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['api_Url']) && isset($data['api_Url']['type']) && $data['api_Url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="api_Url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['api_Url']) && isset($data['api_Url']['page']) && $data['api_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['api_Url']) && isset($data['api_Url']['type']) && $data['api_Url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="api_Url[post]" data-title="post" data-type="array"
                            data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['api_Url']) && isset($data['api_Url']['page']) && $data['api_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section api_Url -->

    <!--begin::row section reviews_Url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.reviews_Url')
        </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_reviews_Url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="reviews_Url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['reviews_Url']) && isset($data['reviews_Url']['type'])? ($data['reviews_Url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['reviews_Url']) && isset($data['reviews_Url']['type']) && $data['reviews_Url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['reviews_Url']) &&isset($data['reviews_Url']['type']) &&$data['reviews_Url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['reviews_Url']) && isset($data['reviews_Url']['type']) && $data['reviews_Url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="reviews_Url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['reviews_Url']) && isset($data['reviews_Url']['type'])? ($data['reviews_Url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['reviews_Url']) && isset($data['reviews_Url']['custom']) ? $data['reviews_Url']['custom'] : '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['reviews_Url']) && isset($data['reviews_Url']['type']) && $data['reviews_Url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="reviews_Url[page]" data-title="page"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['reviews_Url']) &&isset($data['reviews_Url']['page']) &&$data['reviews_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['reviews_Url']) &&isset($data['reviews_Url']['type']) &&$data['reviews_Url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="reviews_Url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['reviews_Url']) &&isset($data['reviews_Url']['page']) &&$data['reviews_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['reviews_Url']) && isset($data['reviews_Url']['type']) && $data['reviews_Url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="reviews_Url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['reviews_Url']) &&isset($data['reviews_Url']['page']) &&$data['reviews_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section reviews_Url -->

    <!--begin::row section track_package_Url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center">
            @lang('theme_qwintry::view.track_package_Url') </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_track_package_Url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="track_package_Url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['track_package_Url']) && isset($data['track_package_Url']['type'])? ($data['track_package_Url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['track_package_Url']) &&isset($data['track_package_Url']['type']) &&$data['track_package_Url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['track_package_Url']) &&isset($data['track_package_Url']['type']) &&$data['track_package_Url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['track_package_Url']) &&isset($data['track_package_Url']['type']) &&$data['track_package_Url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="track_package_Url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['track_package_Url']) && isset($data['track_package_Url']['type'])? ($data['track_package_Url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['track_package_Url']) && isset($data['track_package_Url']['custom'])? $data['track_package_Url']['custom']: '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['track_package_Url']) &&isset($data['track_package_Url']['type']) &&$data['track_package_Url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="track_package_Url[page]" data-title="page"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['track_package_Url']) &&isset($data['track_package_Url']['page']) &&$data['track_package_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['track_package_Url']) &&isset($data['track_package_Url']['type']) &&$data['track_package_Url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="track_package_Url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['track_package_Url']) &&isset($data['track_package_Url']['page']) &&$data['track_package_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['track_package_Url']) &&isset($data['track_package_Url']['type']) &&$data['track_package_Url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="track_package_Url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['track_package_Url']) &&isset($data['track_package_Url']['page']) &&$data['track_package_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section track_package_Url -->

    <!--begin::row section faq_Url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.faq_Url')
        </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_faq_Url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="faq_Url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['faq_Url']) && isset($data['faq_Url']['type'])? ($data['faq_Url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['faq_Url']) && isset($data['faq_Url']['type']) && $data['faq_Url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['faq_Url']) && isset($data['faq_Url']['type']) && $data['faq_Url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['faq_Url']) && isset($data['faq_Url']['type']) && $data['faq_Url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="faq_Url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['faq_Url']) && isset($data['faq_Url']['type'])? ($data['faq_Url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['faq_Url']) && isset($data['faq_Url']['custom']) ? $data['faq_Url']['custom'] : '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['faq_Url']) && isset($data['faq_Url']['type']) && $data['faq_Url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="faq_Url[page]" data-title="page" data-type="array"
                            data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['faq_Url']) && isset($data['faq_Url']['page']) && $data['faq_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['faq_Url']) && isset($data['faq_Url']['type']) && $data['faq_Url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="faq_Url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['faq_Url']) && isset($data['faq_Url']['page']) && $data['faq_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['faq_Url']) && isset($data['faq_Url']['type']) && $data['faq_Url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="faq_Url[post]" data-title="post" data-type="array"
                            data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['faq_Url']) && isset($data['faq_Url']['page']) && $data['faq_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section faq_Url -->

    <!--begin::row section contact_us_Url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center">
            @lang('theme_qwintry::view.contact_us_Url') </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_contact_us_Url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="contact_us_Url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['contact_us_Url']) && isset($data['contact_us_Url']['type'])? ($data['contact_us_Url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['contact_us_Url']) &&isset($data['contact_us_Url']['type']) &&$data['contact_us_Url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['contact_us_Url']) &&isset($data['contact_us_Url']['type']) &&$data['contact_us_Url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['contact_us_Url']) &&isset($data['contact_us_Url']['type']) &&$data['contact_us_Url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="contact_us_Url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['contact_us_Url']) && isset($data['contact_us_Url']['type'])? ($data['contact_us_Url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['contact_us_Url']) && isset($data['contact_us_Url']['custom'])? $data['contact_us_Url']['custom']: '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['contact_us_Url']) &&isset($data['contact_us_Url']['type']) &&$data['contact_us_Url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="contact_us_Url[page]" data-title="page"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['contact_us_Url']) &&isset($data['contact_us_Url']['page']) &&$data['contact_us_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['contact_us_Url']) &&isset($data['contact_us_Url']['type']) &&$data['contact_us_Url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="contact_us_Url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['contact_us_Url']) &&isset($data['contact_us_Url']['page']) &&$data['contact_us_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['contact_us_Url']) &&isset($data['contact_us_Url']['type']) &&$data['contact_us_Url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="contact_us_Url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['contact_us_Url']) &&isset($data['contact_us_Url']['page']) &&$data['contact_us_Url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section contact_us_Url -->

    <!--begin::row section instagram_url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center">
            @lang('theme_qwintry::view.instagram_url') </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_instagram_url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="instagram_url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['instagram_url']) && isset($data['instagram_url']['type'])? ($data['instagram_url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['instagram_url']) &&isset($data['instagram_url']['type']) &&$data['instagram_url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['instagram_url']) &&isset($data['instagram_url']['type']) &&$data['instagram_url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['instagram_url']) &&isset($data['instagram_url']['type']) &&$data['instagram_url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="instagram_url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['instagram_url']) && isset($data['instagram_url']['type'])? ($data['instagram_url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['instagram_url']) && isset($data['instagram_url']['custom'])? $data['instagram_url']['custom']: '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['instagram_url']) &&isset($data['instagram_url']['type']) &&$data['instagram_url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="instagram_url[page]" data-title="page"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['instagram_url']) &&isset($data['instagram_url']['page']) &&$data['instagram_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['instagram_url']) &&isset($data['instagram_url']['type']) &&$data['instagram_url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="instagram_url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['instagram_url']) &&isset($data['instagram_url']['page']) &&$data['instagram_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['instagram_url']) &&isset($data['instagram_url']['type']) &&$data['instagram_url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="instagram_url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['instagram_url']) &&isset($data['instagram_url']['page']) &&$data['instagram_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section instagram_url -->

    <!--begin::row section facebook_url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center">
            @lang('theme_qwintry::view.facebook_url') </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_facebook_url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="facebook_url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['facebook_url']) && isset($data['facebook_url']['type'])? ($data['facebook_url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['facebook_url']) &&isset($data['facebook_url']['type']) &&$data['facebook_url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['facebook_url']) &&isset($data['facebook_url']['type']) &&$data['facebook_url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['facebook_url']) &&isset($data['facebook_url']['type']) &&$data['facebook_url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="facebook_url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['facebook_url']) && isset($data['facebook_url']['type'])? ($data['facebook_url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['facebook_url']) && isset($data['facebook_url']['custom'])? $data['facebook_url']['custom']: '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['facebook_url']) &&isset($data['facebook_url']['type']) &&$data['facebook_url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="facebook_url[page]" data-title="page"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['facebook_url']) &&isset($data['facebook_url']['page']) &&$data['facebook_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['facebook_url']) &&isset($data['facebook_url']['type']) &&$data['facebook_url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="facebook_url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['facebook_url']) &&isset($data['facebook_url']['page']) &&$data['facebook_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['facebook_url']) &&isset($data['facebook_url']['type']) &&$data['facebook_url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="facebook_url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['facebook_url']) &&isset($data['facebook_url']['page']) &&$data['facebook_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section facebook_url -->

    <!--begin::row section youtube_url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.youtube_url')
        </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_youtube_url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="youtube_url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['youtube_url']) && isset($data['youtube_url']['type'])? ($data['youtube_url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['youtube_url']) && isset($data['youtube_url']['type']) && $data['youtube_url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['youtube_url']) &&isset($data['youtube_url']['type']) &&$data['youtube_url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['youtube_url']) && isset($data['youtube_url']['type']) && $data['youtube_url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="youtube_url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['youtube_url']) && isset($data['youtube_url']['type'])? ($data['youtube_url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['youtube_url']) && isset($data['youtube_url']['custom']) ? $data['youtube_url']['custom'] : '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['youtube_url']) && isset($data['youtube_url']['type']) && $data['youtube_url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="youtube_url[page]" data-title="page"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['youtube_url']) &&isset($data['youtube_url']['page']) &&$data['youtube_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['youtube_url']) &&isset($data['youtube_url']['type']) &&$data['youtube_url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="youtube_url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['youtube_url']) &&isset($data['youtube_url']['page']) &&$data['youtube_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['youtube_url']) && isset($data['youtube_url']['type']) && $data['youtube_url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="youtube_url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['youtube_url']) &&isset($data['youtube_url']['page']) &&$data['youtube_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section youtube_url -->

    <!--begin::row section linkedin_url -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center">
            @lang('theme_qwintry::view.linkedin_url') </label>
        <div class="col-md-8">
            <div class="input-group url_input_container" id="url_input_container_linkedin_url">
                <select
                    class="change_url_type form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px"
                    data-type="array" name="linkedin_url[type]" data-title="type">
                    <option value="custom"
                        {{ isset($data['linkedin_url']) && isset($data['linkedin_url']['type'])? ($data['linkedin_url']['type'] == 'custom'? 'selected': ''): 'selected' }}>
                        @lang('theme_qwintry::view.custom')</option>
                    @if (check_module('pages'))
                        <option value="page"
                            {{ isset($data['linkedin_url']) &&isset($data['linkedin_url']['type']) &&$data['linkedin_url']['type'] == 'page'? 'selected': '' }}>
                            @lang('theme_qwintry::view.page')</option>
                    @endif
                    @if (check_module('blog'))
                        <option value="category"
                            {{ isset($data['linkedin_url']) &&isset($data['linkedin_url']['type']) &&$data['linkedin_url']['type'] == 'category'? 'selected': '' }}>
                            @lang('theme_qwintry::view.category')</option>
                        <option value="post"
                            {{ isset($data['linkedin_url']) &&isset($data['linkedin_url']['type']) &&$data['linkedin_url']['type'] == 'post'? 'selected': '' }}>
                            @lang('theme_qwintry::view.post')</option>
                    @endif
                </select>
                <input type="text" name="linkedin_url[custom]" data-title="custom" data-type="array"
                    class="form-control section-title form-control-choose-type form-control-custom {{ isset($data['linkedin_url']) && isset($data['linkedin_url']['type'])? ($data['linkedin_url']['type'] == 'custom'? '': 'd-none'): '' }}"
                    value="{{ isset($data['linkedin_url']) && isset($data['linkedin_url']['custom'])? $data['linkedin_url']['custom']: '' }}">
                @if (check_module('pages'))
                    <div
                        class="form-control-choose-type form-control-page {{ isset($data['linkedin_url']) &&isset($data['linkedin_url']['type']) &&$data['linkedin_url']['type'] == 'page'? '': 'd-none' }}">
                        <select class="form-select mw-auto" name="linkedin_url[page]" data-title="page"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_page')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['linkedin_url']) &&isset($data['linkedin_url']['page']) &&$data['linkedin_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
                @if (check_module('blog'))
                    <div
                        class="form-control-choose-type form-control-category {{ isset($data['linkedin_url']) &&isset($data['linkedin_url']['type']) &&$data['linkedin_url']['type'] == 'category'? '': 'd-none' }}">
                        <select class="form-select  mw-auto " name="linkedin_url[category]" data-title="category"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_category')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))

                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['linkedin_url']) &&isset($data['linkedin_url']['page']) &&$data['linkedin_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div
                        class="form-control-choose-type form-control-post {{ isset($data['linkedin_url']) &&isset($data['linkedin_url']['type']) &&$data['linkedin_url']['type'] == 'post'? '': 'd-none' }}">
                        <select class="form-select mw-auto " name="linkedin_url[post]" data-title="post"
                            data-type="array" data-placeholder="@lang('theme_qwintry::view.choose_post')">
                            @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
                                @foreach ($data['categories'] as $categoryId)
                                    @php
                                        $category = Modules\Blog\Entities\Category::find($categoryId, ['id', 'name']);
                                    @endphp
                                    <option value="{{ $category->id }}"
                                        {{ isset($data['linkedin_url']) &&isset($data['linkedin_url']['page']) &&$data['linkedin_url']['page'] == $category->id? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--end::row section linkedin_url -->

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
</script>
