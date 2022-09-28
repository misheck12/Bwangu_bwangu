<div class="header-setting">

    <!--begin::header_contanier_logo -->
    <div class="setting-box">
        <h4 class="setting-box-label fw-bold fs-3">@lang('theme_easyship::view.header_contanier_logo') </h4>
        <!--begin::setting-boxs -->
        <div class="setting-boxs">
 
            <!--begin::row header_bg -->
            <div class="row mb-6 header_bg">
                <label class="col-md-4 fw-bold fs-6"> @lang('theme_easyship::view.header_bg') </label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input
                            class="form-control form-control-color w-100 color_picker_input header_bg_input"
                            name="header_bg"
                            value="{{ isset($data['header_bg']) ? $data['header_bg'] : '#FFF' }}"
                        >
                    </div>
                </div>
            </div>
            <!--end::row header_bg -->
 
            <!--begin::row header_text_color -->
            <div class="row mb-6 header_text_color">
                <label class="col-md-4 fw-bold fs-6"> @lang('theme_easyship::view.header_text_color') </label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input
                            class="form-control form-control-color w-100 color_picker_input header_text_color_input"
                            name="header_text_color"
                            value="{{ isset($data['header_text_color']) ? $data['header_text_color'] : '#222' }}"
                        >
                    </div>
                </div>
            </div>
            <!--end::row header_text_color -->

            <!--begin::row header_logo -->
            <div class="row mb-6 header_logo">
                <label class="col-md-4 col-form-label fw-bold fs-6">@lang('theme_easyship::view.header_logo')</label>
                <div class="col-md-8">

                    @if(isset($model))
                        <x-media-library-collection data-title="header_logo" data-type="image" max-items="1" name="header_logo" :model="$model" collection="header_logo" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
                    @else
                        <x-media-library-attachment data-title="header_logo" data-type="image" name="header_logo" rules="mimes:jpg,jpeg,png,gif,bmp,svg,webp"/>
                    @endif
                </div>
            </div>
            <!--end::row header_logo-->

        </div>
        <!--end::setting-boxs -->
    </div>
    <!--end::header_contanier_logo -->

    <!--begin::horizontal_menu -->
    <div class="setting-box">
        <h4 class="setting-box-label fw-bold fs-3">@lang('theme_easyship::view.horizontal_menu') </h4>
        <!--begin::setting-boxs -->
        <div class="setting-boxs last">
            <!--begin::row display_home_icon -->
            <div class="row mb-6 display_home_icon">
                <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_easyship::view.display_home_link') </label>
                <div class="col-md-8">
                    <div class="custom-control custom-switch  form-check form-switch">
                        <input
                            class="custom-control-input form-check-input display_home_icon_input"
                            name="display_home_icon"
                            type="checkbox"
                            id="display_home_link"
                            value="1"
                            {{ isset($data['display_home_icon']) && $data['display_home_icon'] == 1 ? 'checked="checked"' : '' }}
                        >
                        <label class="custom-control-label fw-bold fs-6" for="display_home_link"></label>
                    </div>
                </div>
            </div>
            <!--end::row display_home_icon -->


            <!--begin::row display_sign_in -->
            <div class="row mb-6 display_sign_in">
                <label class="col-md-4 fw-bold fs-6 required"> @lang('theme_easyship::view.display_sign_in') </label>
                <div class="col-md-8">
                    <div class="custom-control custom-switch  form-check form-switch">
                        <input
                            class="custom-control-input form-check-input display_sign_in_input"
                            name="display_sign_in"
                            type="checkbox"
                            id="display_sign_in"
                            value="1"
                            {{ isset($data['display_sign_in']) && $data['display_sign_in'] == 1 ? 'checked="checked"' : '' }}
                        >
                        <label class="custom-control-label fw-bold fs-6" for="display_sign_in"></label>
                    </div>
                </div>
            </div>
            <!--end::row display_sign_in -->


        </div>
        <!--end::setting-boxs -->
    </div>
    <!--end::horizontal_menu -->


</div>

<script>

    // select category
    var selectCategories = $('.select_categories'),
        selectEditCategorySelect = $('#select_category_{{isset($id) ? $id : "id"}}');
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
    @if (isset($id) && isset($data['category']) && $data['category'] != '')
        selectEditCategorySelect.val("{{ $data['category'] }}").trigger('change');
    @endif
    // end select category
    /*******************************************************************************************/

    // select post
    var selectPosts = $('.select_posts'),
        selectEditPostSelect = $('#select_post_{{isset($id) ? $id : "id"}}');
    selectPosts.select2({
        closeOnSelect: false,
        ajax: {
            url: "{{ fr_route('posts.search') }}",
            dataType: 'json',
            delay: 500,
            data: function (params) {
                return { search: params.term };
            },
            processResults: function (data) {
                if (data && data.posts) {
                    return {
                        results: data.posts.map(function(post) {
                            return {id: post.id, text: post.title}
                        })
                    };
                }
            },
            cache: true,
        },
    });
    @if (isset($id) && isset($data['post']) && $data['post'] != '')
        selectEditPostSelect.val("{{ $data['post'] }}").trigger('change');
    @endif
    // end select post
    /*******************************************************************************************/

    // select tag
    var selectTags = $('.select_tags'),
        selectEditTagSelect = $('#select_tag_{{isset($id) ? $id : "id"}}');
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
    @if (isset($id) && isset($data['tag']) && $data['tag'] != '')
        selectEditTagSelect.val("{{ $data['tag'] }}").trigger('change');
    @endif
    // end select tag
    /*******************************************************************************************/


    // change ad type
    $('.ad_type_input').on('change', function (e) {
        onChangeType($(this))
    });
    function onChangeType(select) {
        var value = select.val()
        if (value == 'html') {
            $('.image_ad_display').hide()
        } else {
            $('.image_ad_display').show()
        }
        $('.wrapper-types').filter('[data-type="' + value + '"]').show().siblings('.wrapper-types').hide()
    }
    onChangeType($('.ad_type_input'));


    $('.menu_sticky_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.menu_sticky_logo').show()
        } else {
            $('.menu_sticky_logo').hide()
        }
    });

    $('.display_topbar_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.topbar_control').show()
        } else {
            $('.topbar_control').hide()
        }
    });

    $('.display_trending_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.trending_control').show()
        } else {
            $('.trending_control').hide()
        }
    });

    $('.display_trending_title_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.trending_title_control').show()
        } else {
            $('.trending_title_control').hide()
        }
    });
    
    $('.logo_place_input').on('change', function(e) {
        if ($(this).val() == 'center') {
            $('.ad_section_control').hide()
        } else {
            $('.ad_section_control').show()
        }
    });
    
    $('.display_ad_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.ad_container').show()
        } else {
            $('.ad_container').hide()
        }
    });
    

    $('.menu_sticky_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.menu_sticky_control').show()
        } else {
            $('.menu_sticky_control').hide()
        }
    });

    $('.display_menu_sticky_logo_input').on('change', function(e) {
        if ($(this)[0].checked) {
            $('.menu_sticky_logo_row').show()
        } else {
            $('.menu_sticky_logo_row').hide()
        }
    });


    
</script>