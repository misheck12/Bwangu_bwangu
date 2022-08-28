<div class="styling-setting">

    
    
    <!--begin::colors -->
    <div class="setting-box">
        <h4 class="setting-box-label fw-bold fs-3">@lang('theme_html::view.colors') </h4>

        <!--begin::row main_color -->
        <div class="row mb-6 main_color">
            <label class="col-md-4 fw-bold fs-6"> @lang('theme_html::view.main_color') </label>
            <div class="col-md-8">
                <div class="input-group">
                    <input
                        class="form-control form-control-color w-100 color_picker_input main_color_input"
                        name="main_color"
                        value="{{ isset($data['main_color']) ? $data['main_color'] : '#333333' }}"
                    >
                </div>
            </div>
        </div>
        <!--end::row main_color -->

        <!--begin::row secondary_color -->
        <div class="row mb-6 secondary_color">
            <label class="col-md-4 fw-bold fs-6"> @lang('theme_html::view.secondary_color') </label>
            <div class="col-md-8">
                <div class="input-group">
                    <input
                        class="form-control form-control-color w-100 color_picker_input secondary_color_input"
                        name="secondary_color"
                        value="{{ isset($data['secondary_color']) ? $data['secondary_color'] : '#ccc' }}"
                    >
                </div>
            </div>
        </div>
        <!--end::row secondary_color -->
    </div>
    <!--end::colors -->

    <!--begin::fonts -->
    <div class="setting-box">
        <h4 class="setting-box-label fw-bold fs-3">@lang('theme_html::view.fonts') </h4>
        
    </div>
    <!--end::fonts -->

</div>