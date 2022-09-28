<div class="hero">

    <!--begin::row toggle display -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 required d-inline-flex align-items-center"> @lang('theme_qwintry::view.display') </label>
        <div class="col-md-8">
            <div class="custom-control custom-switch form-check form-switch">
                <input class="custom-control-input form-check-input" name="display" type="checkbox" value="1" id="display_hero_{{isset($id) ? $id : 'id'}}" {{ isset($id) ? (isset($data['display']) && $data['display'] == 1 ? 'checked="checked"' : '') : 'checked="checked"' }} >
                <label class="custom-control-label form-check-label fw-bold fs-6" for="display_hero_{{isset($id) ? $id : 'id'}}"></label>
            </div>
        </div>
    </div>
    <!--end::row toggle display -->

    <!--begin::row header_bg -->
    <div class="row mb-6 header_bg">
        <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.section_bg') </label>
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control form-control-color w-100 color_picker_input_{{isset($id) ? $id : 'id'}} header_bg_input" name="header_bg"value="{{ isset($data['header_bg']) ? $data['header_bg'] :  ''  }}">
            </div>
        </div>
    </div>
    <!--end::row header_bg -->

    <!--begin::row title_color -->
    <div class="row mb-6 title_color">
        <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.title_color') </label>
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control form-control-color w-100 color_picker_input_{{isset($id) ? $id : 'id'}} title_color_input"name="title_color"value="{{ isset($data['title_color']) ? $data['title_color'] :   ''   }}">
            </div>
        </div>
    </div>
    <!--end::row title_color -->


    <!--begin::row title_color -->
    <div class="row mb-6 title_color">
        <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.link_colors')  </label>
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control form-control-color w-100 color_picker_input_{{isset($id) ? $id : 'id'}} title_color_input"name="link_color"value="{{ isset($data['link_color']) ? $data['link_color'] :   ''   }}">
            </div>
        </div>
    </div>
    <!--end::row title_color -->

    <!--begin::row text_color -->
    <div class="row mb-6 text_color">
        <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.section_description_color') </label>
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control form-control-color w-100 color_picker_input_{{isset($id) ? $id : 'id'}} text_color_input"name="text_color"value="{{ isset($data['text_color']) ? $data['text_color'] :   ''   }}">
            </div>
        </div>
    </div>
    <!--end::row text_color -->

    <!--begin::row section title -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.First_section_title') </label>
        <div class="col-md-8">

                <div class="input-group lang_container" id="lang_container_section_title">
                    <select class="change_language form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px">
                        <option value="{{ app()->getLocale() }}" data-flag="{{Config::get('current_lang_image')}}" selected>
                            {{ Config::get('current_lang')['name'] }}
                        </option>
                        @foreach(Config::get('langauges_except_current') as $locale)
                            <option value="{{ $locale['code'] }}" data-flag="{{$locale['icon']}}">
                                {{ $locale['name'] }}
                            </option>
                        @endforeach
                    </select>
                        <input type="text" name="section_title[{{app()->getLocale()}}]"title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['section_title']) && isset($data['section_title'][app()->getLocale()]) ? $data['section_title'][app()->getLocale()] : '' }}">
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="section_title[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['section_title']) && isset($data['section_title'][$locale['code']]) ? $data['section_title'][$locale['code']] : '' }}" >
                    @endforeach
                </div>
        </div>
    </div>
    <!--end::row section title -->


    <!--begin::row section title -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.second_section_title') </label>
        <div class="col-md-8">
                <div class="input-group lang_container" id="lang_container_section_title">
                    <select class="change_language form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px">
                        <option value="{{ app()->getLocale() }}" data-flag="{{Config::get('current_lang_image')}}" selected>
                            {{ Config::get('current_lang')['name'] }}
                        </option>
                        @foreach(Config::get('langauges_except_current') as $locale)
                            <option value="{{ $locale['code'] }}" data-flag="{{$locale['icon']}}">
                                {{ $locale['name'] }}
                            </option>
                        @endforeach
                    </select>
                        <input type="text" name="section_title1[{{app()->getLocale()}}]"title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['section_title1']) && isset($data['section_title1'][app()->getLocale()]) ? $data['section_title1'][app()->getLocale()] : '' }}">
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="section_title1[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['section_title1']) && isset($data['section_title1'][$locale['code']]) ? $data['section_title1'][$locale['code']] : '' }}" >
                    @endforeach
                </div>
        </div>
    </div>
    <!--end::row section title -->



    <!--begin::row section description  1-->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.first_description') </label>
        <div class="col-md-8">

                <div class="input-group lang_container text" id="lang_container_section_description">
                    <select class="change_language form-control form-control-sm badge badge-light fw-bold py-4 px-3 ">
                        <option value="{{ app()->getLocale() }}" data-flag="{{Config::get('current_lang_image')}}" selected>
                            {{ Config::get('current_lang')['name'] }}
                        </option>
                        @foreach(Config::get('langauges_except_current') as $locale)
                            <option value="{{ $locale['code'] }}" data-flag="{{$locale['icon']}}">
                                {{ $locale['name'] }}
                            </option>
                        @endforeach
                    </select>

                    <textarea name="section_description[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control form-control-lg form-control-multilingual form-control-{{app()->getLocale()}}">{{ isset($data['section_description']) && isset($data['section_description'][app()->getLocale()]) ? $data['section_description'][app()->getLocale()] : '' }}</textarea>
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <textarea name="section_description[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none">{{ isset($data['section_description']) && isset($data['section_description'][$locale['code']]) ? $data['section_description'][$locale['code']] : '' }}</textarea>
                    @endforeach
                </div>
        </div>
    </div>
    <!--end::row section description -->



    <!--begin::row section description 2 -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.second_description') </label>
        <div class="col-md-8">

                <div class="input-group lang_container text" id="lang_container_section_description">
                    <select class="change_language form-control form-control-sm badge badge-light fw-bold py-4 px-3 ">
                        <option value="{{ app()->getLocale() }}" data-flag="{{Config::get('current_lang_image')}}" selected>
                            {{ Config::get('current_lang')['name'] }}
                        </option>
                        @foreach(Config::get('langauges_except_current') as $locale)
                            <option value="{{ $locale['code'] }}" data-flag="{{$locale['icon']}}">
                                {{ $locale['name'] }}
                            </option>
                        @endforeach
                    </select>

                    <textarea name="section_description1[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control form-control-lg form-control-multilingual form-control-{{app()->getLocale()}}">{{ isset($data['section_description1']) && isset($data['section_description1'][app()->getLocale()]) ? $data['section_description1'][app()->getLocale()] : '' }}</textarea>
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <textarea name="section_description1[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none">{{ isset($data['section_description1']) && isset($data['section_description1'][$locale['code']]) ? $data['section_description1'][$locale['code']] : '' }}</textarea>
                    @endforeach
                </div>
        </div>
    </div>
    <!--end::row section description -->

    <!--begin::row First_link_name -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center">@lang('theme_qwintry::view.First_link_name')</label>

        <div class="col-md-8">
                <div class="input-group lang_container" id="lang_container_section_title">
                    <select class="change_language form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px">
                        <option value="{{ app()->getLocale() }}" data-flag="{{Config::get('current_lang_image')}}" selected>
                            {{ Config::get('current_lang')['name'] }}
                        </option>
                        @foreach(Config::get('langauges_except_current') as $locale)
                            <option value="{{ $locale['code'] }}" data-flag="{{$locale['icon']}}">
                                {{ $locale['name'] }}
                            </option>
                        @endforeach
                    </select>
                        <input type="text" name="link_name1[{{app()->getLocale()}}]"title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['link_name1']) && isset($data['link_name1'][app()->getLocale()]) ? $data['link_name1'][app()->getLocale()] : '' }}">
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="link_name1[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['link_name1']) && isset($data['link_name1'][$locale['code']]) ? $data['link_name1'][$locale['code']] : '' }}" >
                    @endforeach
                </div>
        </div>
    </div>
    <!--end::row section title -->

    <!--begin::row second_link_name -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center">     @lang('theme_qwintry::view.second_link_name')  </label>
        <div class="col-md-8">
                <div class="input-group lang_container" id="lang_container_section_title">
                    <select class="change_language form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px">
                        <option value="{{ app()->getLocale() }}" data-flag="{{Config::get('current_lang_image')}}" selected>
                            {{ Config::get('current_lang')['name'] }}
                        </option>
                        @foreach(Config::get('langauges_except_current') as $locale)
                            <option value="{{ $locale['code'] }}" data-flag="{{$locale['icon']}}">
                                {{ $locale['name'] }}
                            </option>
                        @endforeach
                    </select>
                        <input type="text" name="link_name2[{{app()->getLocale()}}]"title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['link_name2']) && isset($data['link_name2'][app()->getLocale()]) ? $data['link_name2'][app()->getLocale()] : '' }}">
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="link_name2[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['link_name2']) && isset($data['link_name2'][$locale['code']]) ? $data['link_name2'][$locale['code']] : '' }}" >
                    @endforeach
                </div>
        </div>
    </div>
    <!--end::row section title -->


    <!--begin::row first_link -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.first_link') </label>
        <div class="col-md-8">
                <div class="input-group lang_container" id="lang_container_section_title">
                    <select class="change_language form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px">
                        <option value="{{ app()->getLocale() }}" data-flag="{{Config::get('current_lang_image')}}" selected>
                            {{ Config::get('current_lang')['name'] }}
                        </option>
                        @foreach(Config::get('langauges_except_current') as $locale)
                            <option value="{{ $locale['code'] }}" data-flag="{{$locale['icon']}}">
                                {{ $locale['name'] }}
                            </option>
                        @endforeach
                    </select>
                        <input type="text" name="link1[{{app()->getLocale()}}]"title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['link1']) && isset($data['link1'][app()->getLocale()]) ? $data['link1'][app()->getLocale()] : '' }}">
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="link1[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['link1']) && isset($data['link1'][$locale['code']]) ? $data['link1'][$locale['code']] : '' }}" >
                    @endforeach
                </div>
        </div>
    </div>
    <!--end::row section title -->


    <!--begin::row second_link -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.second_link')  </label>

        <div class="col-md-8">
                <div class="input-group lang_container" id="lang_container_section_title">
                    <select class="change_language form-control form-control-sm badge badge-light fw-bold py-4 px-3 mw-100px">
                        <option value="{{ app()->getLocale() }}" data-flag="{{Config::get('current_lang_image')}}" selected>
                            {{ Config::get('current_lang')['name'] }}
                        </option>
                        @foreach(Config::get('langauges_except_current') as $locale)
                            <option value="{{ $locale['code'] }}" data-flag="{{$locale['icon']}}">
                                {{ $locale['name'] }}
                            </option>
                        @endforeach
                    </select>
                        <input type="text" name="link2[{{app()->getLocale()}}]"title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['link2']) && isset($data['link2'][app()->getLocale()]) ? $data['link2'][app()->getLocale()] : '' }}">
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="link2[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['link2']) && isset($data['link2'][$locale['code']]) ? $data['link2'][$locale['code']] : '' }}" >
                    @endforeach
                </div>
        </div>
    </div>
    <!--end::row section title -->



    <!--begin::Input Image -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 required d-inline-flex align-items-center">  @lang('theme_qwintry::view.first_banner') </label>
        <div class="col-md-8">
            @if(isset($model))
                <x-media-library-collection data-title="section_banner" data-type="image" max-items="1" name="section_banner" :model="$model" collection="section_banner" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
            @else
                <x-media-library-attachment data-title="section_banner" data-type="image" name="section_banner" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
            @endif
        </div>
    </div>
    <!--end::Input Image -->



    <!--begin::Input Image -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 required d-inline-flex align-items-center"> @lang('theme_qwintry::view.section_banner') </label>
        <div class="col-md-8">
            @if(isset($model))
                <x-media-library-collection data-title="section_banner1" data-type="image" max-items="1" name="section_banner1" :model="$model" collection="section_banner1" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
            @else
                <x-media-library-attachment data-title="section_banner1" data-type="image" name="section_banner1" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
            @endif
        </div>
    </div>
    <!--end::Input Image -->








</div>

<link rel="stylesheet" href="{{ asset('assets/plugins/spectrum/spectrum.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/css/setting.css') }}">
<script src="{{ asset('assets/plugins/spectrum/spectrum.min.js') }}"></script>
<script>

    /*!*******************************************************!*\
      !*** Select fields ***!
    \*******************************************************/
    $("select.form-select").select2();
    $(".change_language").select2({
        templateResult: formatFlag,
        templateSelection: formatState,
        minimumResultsForSearch: -1,
        width: '100%'
    });
    /*!*******************************************************!*\
      !*** Color picker fields ***!
    \*******************************************************/
    $(".color_picker_input_{{isset($id) ? $id : 'id'}}").spectrum({
    type: "component",
    showInput: true,
    showInitial: true,
    clickoutFiresChange: true,
    allowEmpty: true,
    maxSelectionSize: 8,
});

    function formatFlag (lang) {
        if (!lang.id) { return lang.text; }
        var $img    = $(lang.element).attr("data-flag");
        if($img) {
            var $lang = $(
                '<span ><img sytle="display: inline-block;" src=" '+ $(lang.element).attr("data-flag") +' " />&emsp;' + lang.text + '</span>'
            );
        }else{
            var $lang = $(
                '<span >' + lang.text + '</span>'
            );
        }
        return $lang;
    }
    function formatState (lang) {
        if (!lang.id) {
        return lang.text;
        }
        var $img    = $(lang.element).attr("data-flag");
        if($img) {
            var $lang = $(
                '<span ><img sytle="display: inline-block;" src=" '+ $(lang.element).attr("data-flag") +' " />&emsp;' + lang.text + '</span>'
            );
        }else{
            var $lang = $(
                '<span >' + lang.text + '</span>'
            );
        }
        return $lang;
    };
    // select category_select
    var selectCategories = $('.select_categories');
    selectCategories.select2({
        closeOnSelect: false,
        ajax: {
            url: "{{ fr_route('categories.search') }}",
            dataType: 'json',
            delay: 500,
            data: function (params) {
                return { search: params.term };
            },
            processResults: function (data) {
                if (data && data.categories) {
                    return {
                        results: data.categories.map(function(category) {
                            return {id: category.id, text: category.name}
                        })
                    };
                }
            },
            cache: true,
        },
    });

    @if (isset($id) && isset($data['categories']) && is_array($data['categories']))
        $('.select_categories_{{$id}}').val([{{ implode(", ", $data['categories']) }}]).trigger('change');
    @endif
    // end select category_select
    /*******************************************************************************************/

    // select tags
    var selectTags = $('.select_tags');
    selectTags.select2({
        closeOnSelect: false,
        ajax: {
            url: "{{ fr_route('tags.search') }}",
            dataType: 'json',
            delay: 500,
            data: function (params) {
                return { search: params.term };
            },
            processResults: function (data) {
                if (data && data.tags) {
                    return {
                        results: data.tags.map(function(tag) {
                            return {id: tag.id, text: tag.name}
                        })
                    };
                }
            },
            cache: true,
        },
    });

    @if (isset($id) && isset($data['tags']) && is_array($data['tags']))
        $('.select_tags_{{$id}}').val([{{ implode(", ", $data['tags']) }}]).trigger('change');
    @endif
    // end select tags
    /*******************************************************************************************/

</script>
