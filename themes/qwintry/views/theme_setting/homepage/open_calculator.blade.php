@php
    $hasBanner = isset($data['header_logo_url']) && $data['header_logo_url'];
    $getBanner = $hasBanner ? $data['header_logo_url'] : '';
    $hasMobileBanner = isset($data['header_logo_url']) && $data['header_logo_url'];
    $getMobileBanner = $hasMobileBanner ? $data['header_logo_url'] : '';
@endphp
<div class="startshipping">

    <!--begin::row toggle display -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 required d-inline-flex align-items-center"> @lang('theme_qwintry::view.display') </label>
        <div class="col-md-8">
            <div class="custom-control custom-switch form-check form-switch">
                <input class="custom-control-input form-check-input" name="display" type="checkbox" value="1" id="display_startshipping_{{isset($id) ? $id : 'id'}}" {{ isset($id) ? (isset($data['display']) && $data['display'] == 1 ? 'checked="checked"' : '') : 'checked="checked"' }} >
                <label class="custom-control-label form-check-label fw-bold fs-6" for="display_startshipping_{{isset($id) ? $id : 'id'}}"></label>
            </div>
        </div>
    </div>
    <!--end::row toggle display -->

    <!--begin::row header_bg  -->
    <div class="row mb-6 header_bg">
        <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.section_bg') </label>
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control form-control-color w-100 color_picker_input_{{isset($id) ? $id : 'id'}} header_bg_input" name="header_bg" value="{{ isset($data['header_bg']) ? $data['header_bg'] :  ''  }}" >
            </div>
        </div>
    </div>
    <!--end::row header_bg -->

    <!--begin::row title_color   -->
    <div class="row mb-6 title_color">
        <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.section_title_color') </label>
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control form-control-color w-100 color_picker_input_{{isset($id) ? $id : 'id'}} title_color_input" name="title_color" value="{{ isset($data['title_color']) ? $data['title_color'] :   ''   }}" >
            </div>
        </div>
    </div>
    <!--end::row title_color -->

    <!--begin::row sub_description_color -->
    <div class="row mb-6 title_color">
        <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.sub_description_color') </label>
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control form-control-color w-100 color_picker_input_{{isset($id) ? $id : 'id'}} title_color_input" name="sub_description_color" value="{{ isset($data['sub_description_color']) ? $data['sub_description_color'] :   ''   }}" >
            </div>
        </div>
    </div>
    <!--end::row sub_description_color -->

    <!--begin::row sub_title_color -->
    <div class="row mb-6 title_color">
        <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.sub_title_color') </label>
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control form-control-color w-100 color_picker_input_{{isset($id) ? $id : 'id'}} title_color_input" name="sub_title_color" value="{{ isset($data['sub_title_color']) ? $data['sub_title_color'] :   ''   }}" >
            </div>
        </div>
    </div>
    <!--end::row sub_title_color -->

    <!--begin::row price_color  -->
    <div class="row mb-6 title_color">
        <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.price_color') </label>
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control form-control-color w-100 color_picker_input_{{isset($id) ? $id : 'id'}} title_color_input" name="price_color" value="{{ isset($data['price_color']) ? $data['price_color'] :   ''   }}" >
            </div>
        </div>
    </div>
    <!--end::row price_color -->

    <!--begin::row after_discount_color  -->
    <div class="row mb-6 title_color">
        <label class="col-md-4 fw-bold fs-6"> @lang('theme_qwintry::view.after_discount_color') </label>
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control form-control-color w-100 color_picker_input_{{isset($id) ? $id : 'id'}} title_color_input" name="after_discount_color" value="{{ isset($data['after_discount_color']) ? $data['after_discount_color'] :   ''   }}" >
            </div>
        </div>
    </div>
    <!--end::row after_discount_color -->


    <!--begin::row main_title -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.main_title') </label>
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
                    <input type="text" name="section_title1[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['section_title1']) && isset($data['section_title1'][app()->getLocale()]) ? $data['section_title1'][app()->getLocale()] : '' }}" >
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="section_title1[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['section_title1']) && isset($data['section_title1'][$locale['code']]) ? $data['section_title1'][$locale['code']] : '' }}" >
                    @endforeach
                </div>


        </div>
    </div>
    <!--end::row main_title -->

    <!--begin::row main_description -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.main_description') </label>
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
                    <input type="text" name="section_title2[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['section_title2']) && isset($data['section_title2'][app()->getLocale()]) ? $data['section_title2'][app()->getLocale()] : '' }}" >
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="section_title2[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['section_title2']) && isset($data['section_title2'][$locale['code']]) ? $data['section_title2'][$locale['code']] : '' }}" >
                    @endforeach
                </div>
        </div>
    </div>
    <!--end::row main_description -->


    <!--begin::row before_discount 1  -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.before_discount1') </label>
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
                    <input type="text" name="before_discount1[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['before_discount1']) && isset($data['before_discount1'][app()->getLocale()]) ? $data['before_discount1'][app()->getLocale()] : '' }}" >
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="before_discount1[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['before_discount1']) && isset($data['before_discount1'][$locale['code']]) ? $data['before_discount1'][$locale['code']] : '' }}" >
                    @endforeach
                </div>


        </div>
    </div>
    <!--end::row before_discount 1 -->

    <!--begin::row after_discount 1 -->
     <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.after_discount1') </label>
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
                    <input type="text" name="after_discount1[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['after_discount1']) && isset($data['after_discount1'][app()->getLocale()]) ? $data['after_discount1'][app()->getLocale()] : '' }}" >
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="after_discount1[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['after_discount1']) && isset($data['after_discount1'][$locale['code']]) ? $data['after_discount1'][$locale['code']] : '' }}" >
                    @endforeach
                </div>


        </div>
    </div>
    <!--end::row after_discount -->
 
    <!--begin::row sub_description 1   -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.sub_description1') </label>
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
                    <input type="text" name="sub_description1[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['sub_description1']) && isset($data['sub_description1'][app()->getLocale()]) ? $data['sub_description1'][app()->getLocale()] : '' }}" >
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="sub_description1[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['sub_description1']) && isset($data['sub_description1'][$locale['code']]) ? $data['sub_description1'][$locale['code']] : '' }}" >
                    @endforeach
                </div>


        </div>
    </div>
    <!--end::row sub_description 1 -->

    <!--begin::row before_discount 2 -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.before_discount2') </label>
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
                    <input type="text" name="before_discount2[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['before_discount2']) && isset($data['before_discount2'][app()->getLocale()]) ? $data['before_discount2'][app()->getLocale()] : '' }}" >
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="before_discount2[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['before_discount2']) && isset($data['before_discount2'][$locale['code']]) ? $data['before_discount2'][$locale['code']] : '' }}" >
                    @endforeach
                </div>


        </div>
    </div>
    <!--end::row before_discount  2-->

    <!--begin::row after_discount  2 -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.after_discount2') </label>
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
                    <input type="text" name="after_discount2[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['after_discount2']) && isset($data['after_discount2'][app()->getLocale()]) ? $data['after_discount2'][app()->getLocale()] : '' }}" >
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="after_discount2[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['after_discount2']) && isset($data['after_discount2'][$locale['code']]) ? $data['after_discount2'][$locale['code']] : '' }}" >
                    @endforeach
                </div>


        </div>
    </div>
    <!--end::row after_discount -->


    <!--begin::row sub_description 2   -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.sub_description2') </label>
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
                    <input type="text" name="sub_description2[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['sub_description2']) && isset($data['sub_description2'][app()->getLocale()]) ? $data['sub_description2'][app()->getLocale()] : '' }}" >
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="sub_description2[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['sub_description2']) && isset($data['sub_description2'][$locale['code']]) ? $data['sub_description2'][$locale['code']] : '' }}" >
                    @endforeach
                </div>


        </div>
    </div>
    <!--end::row sub_description 2 -->
 


        <!--begin::row sub_description 3   -->
        <div class="row mb-6">
            <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.sub_description3') </label>
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
                        <input type="text" name="sub_description3[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['sub_description3']) && isset($data['sub_description3'][app()->getLocale()]) ? $data['sub_description3'][app()->getLocale()] : '' }}" >
                        @foreach(Config::get('langauges_except_current') as $locale)
                            <input type="text" name="sub_description3[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['sub_description3']) && isset($data['sub_description3'][$locale['code']]) ? $data['sub_description3'][$locale['code']] : '' }}" >
                        @endforeach
                    </div>


            </div>
        </div>
        <!--end::row sub_description 3 -->


    <!--begin::row section subtitle   -->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.section_subtitle') </label>
        <div class="col-md-8">

                <div class="input-group lang_container" id="lang_container_section_subtitle">
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
                    <input type="text" name="section_subtitle[{{app()->getLocale()}}]" title="{{app()->getLocale()}}" class="form-control section-title form-control-multilingual form-control-{{app()->getLocale()}}" value="{{ isset($data['section_subtitle']) && isset($data['section_subtitle'][app()->getLocale()]) ? $data['section_subtitle'][app()->getLocale()] : '' }}" >
                    @foreach(Config::get('langauges_except_current') as $locale)
                        <input type="text" name="section_subtitle[{{ $locale['code'] }}]" title="{{ $locale['code'] }}" class="form-control section-title form-control-multilingual form-control-{{$locale['code']}}  d-none" value="{{ isset($data['section_subtitle']) && isset($data['section_subtitle'][$locale['code']]) ? $data['section_subtitle'][$locale['code']] : '' }}" >
                    @endforeach
                </div>


        </div>
    </div>
    <!--end::row section subtitle -->

    <!--begin::row section description -->
    {{-- <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 d-inline-flex align-items-center"> @lang('theme_qwintry::view.section_description') </label>
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
    </div> --}}
    <!--end::row section description1 -->


    <!--begin::Input Image 1 -->
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


    <!--begin::Input Image 2-->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 required d-inline-flex align-items-center"> @lang('theme_qwintry::view.section_banner2') </label>
        <div class="col-md-8">

            @if(isset($model))
                <x-media-library-collection data-title="section_banner2" data-type="image" max-items="1" name="section_banner2" :model="$model" collection="section_banner2" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
            @else
                <x-media-library-attachment data-title="section_banner2" data-type="image" name="section_banner2" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
            @endif


        </div>
    </div>
    <!--end::Input Image -->

    <!--begin::Input Image  3-->
    <div class="row mb-6">
        <label class="col-md-4 fw-bold fs-6 required d-inline-flex align-items-center"> @lang('theme_qwintry::view.section_banner3') </label>
        <div class="col-md-8">

            @if(isset($model))
                <x-media-library-collection data-title="section_banner3" data-type="image" max-items="1" name="section_banner3" :model="$model" collection="section_banner3" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
            @else
                <x-media-library-attachment data-title="section_banner3" data-type="image" name="section_banner3" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
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
