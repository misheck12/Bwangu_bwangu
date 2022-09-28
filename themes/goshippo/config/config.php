<?php

use Illuminate\Http\Request;
use App\Models\CustomSetting;

$dir_images = 'theme_goshippo_images';
$prefix_image = 'theme___images___';

return [
    
    'dir_images' => $dir_images,
    'prefix_image' => $prefix_image,

    'menu_places' => [
        'header',
        'footer',
    ],

    'sidebars' => [
        'footer_sidebar_1' => [
            'id' => 'footer_sidebar_1',
            'name' => 'Footer sidebar 1',
            'description' => 'Footer sidebar description',
            'before_sidebar' => '<aside id="footer_sidebar_1" class="sidebar-footer">',
            'after_sidebar'  => '</aside>',
            'before_widget' => '<section class="my-widget">',
            'after_widget'  => '</section>'
        ],
        'footer_sidebar_2' => [
            'id' => 'footer_sidebar_2',
            'name' => 'Footer sidebar 2',
            'description' => 'Footer sidebar description',
            'before_sidebar' => '<aside id="footer_sidebar_2" class="sidebar-footer">',
            'after_sidebar'  => '</aside>',
            'before_widget' => '<section class="my-widget">',
            'after_widget'  => '</section>'
        ],
        'footer_sidebar_3' => [
            'id' => 'footer_sidebar_3',
            'name' => 'Footer sidebar 3',
            'description' => 'Footer sidebar description',
            'before_sidebar' => '<aside id="footer_sidebar_3" class="sidebar-footer">',
            'after_sidebar'  => '</aside>',
            'before_widget' => '<section class="my-widget">',
            'after_widget'  => '</section>'
        ],
        'footer_sidebar_4' => [
            'id' => 'footer_sidebar_4',
            'name' => 'Footer sidebar 4',
            'description' => 'Footer sidebar description',
            'before_sidebar' => '<aside id="footer_sidebar_4" class="sidebar-footer">',
            'after_sidebar'  => '</aside>',
            'before_widget' => '<section class="my-widget">',
            'after_widget'  => '</section>'
        ],
        'footer_sidebar_5' => [
            'id' => 'footer_sidebar_5',
            'name' => 'Footer sidebar 5',
            'description' => 'Footer sidebar description',
            'before_sidebar' => '<aside id="footer_sidebar_5" class="sidebar-footer">',
            'after_sidebar'  => '</aside>',
            'before_widget' => '<section class="my-widget">',
            'after_widget'  => '</section>'
        ],
    ],

    'posts_order' => [
        'latest' => __('theme_goshippo::view.latest'),
        'most_commented' => __('theme_goshippo::view.most_commented'),
        'random' => __('theme_goshippo::view.random'),
    ],

    'image_place' => [
        'start' => __('theme_goshippo::view.start'),
        'end' => __('theme_goshippo::view.end'),
    ],

    'ad_types' => [
        'html' => __('theme_goshippo::view.html'),
        'image' => __('theme_goshippo::view.image'),
        'category' => __('theme_goshippo::view.category'),
        'post' => __('theme_goshippo::view.post'),
        'tag' => __('theme_goshippo::view.tag'),
    ],
    
    'container_width' => [
        'full_width' => __('theme_goshippo::view.full_width'),
        'two_thirds' => __('theme_goshippo::view.two_thirds'),
        'one_third' => __('theme_goshippo::view.one_third'),
    ],


    'theme_setting' => [
        'homepage' => [ // tab
            'name' => __('theme_goshippo::view.theme_settings.homepage'),
            'sortable' => true,
            'sections' => [
                'hero' => [
                    'name' => __('theme_goshippo::view.hero'),
                    'validation' => [
                        'rules' => [],
                        'messages' => [],
                        'attributes' => [],
                    ],
                    'map_before_validation' => function ($request, $id) {
                        $request['display'] = array_key_exists('display', $request) ? true : false;
                        return $request;
                    },
                ],

                'headline' => [
                    'name' => __('theme_goshippo::view.headline'),
                    'validation' => [
                        'rules' => [],
                        'messages' => [],
                        'attributes' => [],
                    ],
                    'map_before_validation' => function ($request, $id) {
                        $request['display'] = array_key_exists('display', $request) ? true : false;
                        return $request;
                    },
                ],

                'testimonials' => [
                    'name' => __('theme_goshippo::view.testimonials'),
                    'validation' => [
                        'rules' => [],
                        'messages' => [],
                        'attributes' => [],
                    ],
                    'map_before_validation' => function ($request, $id) {
                        $request['display'] = array_key_exists('display', $request) ? true : false;
                        return $request;
                    },
                ],

                'services' => [
                    'name' => __('theme_goshippo::view.services'),
                    'validation' => [
                        'rules' => [],
                        'messages' => [],
                        'attributes' => [],
                    ],
                    'map_before_validation' => function ($request, $id) {
                        $request['display'] = array_key_exists('display', $request) ? true : false;
                        return $request;
                    },
                ],

                'getstarted' => [
                    'name' => __('theme_goshippo::view.getstarted'),
                    'validation' => [
                        'rules' => [],
                        'messages' => [],
                        'attributes' => [],
                    ],
                    'map_before_validation' => function ($request, $id) {
                        $request['display'] = array_key_exists('display', $request) ? true : false;
                        return $request;
                    },
                ],

                'statistics' => [
                    'name' => __('theme_goshippo::view.statistics'),
                    'validation' => [
                        'rules' => [],
                        'messages' => [],
                        'attributes' => [],
                    ],
                    'map_before_validation' => function ($request, $id) {
                        $request['display'] = array_key_exists('display', $request) ? true : false;
                        return $request;
                    },
                ],
            ]
        ],

        'header' => [ // tab
            'name' => __('theme_goshippo::view.theme_settings.header'),
            'sortable' => false,
            'sections' => [
                'header' => [
                    'validation' => [
                        'rules' => [
                        ]
                    ],
                    'map_after_validation' => function ($request, $id) use($dir_images, $prefix_image){
                        $laravelRequest = new Request($request);
                        $oldData = $id ? CustomSetting::find($id) : null;
                        if ($oldData !== null) {
                            $oldData = $oldData->dataMaped;
                            if (array_key_exists('header_logo', $oldData)) {
                                $oldData['header_logo'] = isset($oldData['header_logo_name']) ? $oldData['header_logo_name'] : $oldData['header_logo'];
                            }
                            if (array_key_exists('ad_image', $oldData)) {
                                $oldData['ad_image'] = isset($oldData['ad_image_name']) ? $oldData['ad_image_name'] : $oldData['ad_image'];
                            }
                            if (array_key_exists('menu_sticky_logo', $oldData)) {
                                $oldData['menu_sticky_logo'] = isset($oldData['menu_sticky_logo_name']) ? $oldData['menu_sticky_logo_name'] : $oldData['menu_sticky_logo'];
                            }
                        }
                        $header_logo_name = uploader($laravelRequest)->path($dir_images)->fieldName('header_logo')->model($oldData)->singleUpload();
                        $request['header_logo'] = $header_logo_name ? $prefix_image . $header_logo_name : null;


                        // menu
                        $request['display_home_icon'] = array_key_exists('display_home_icon', $request) ? true : false;
                        $request['display_sign_in'] = array_key_exists('display_sign_in', $request) ? true : false;
                        $request['display_tracking_search'] = array_key_exists('display_tracking_search', $request) ? true : false;

                        return $request;
                    },
                ]
            ]
        ],

        'footer' => [ // tab
            'name' => __('theme_goshippo::view.theme_settings.footer'),
            'sections' => [
                'footer' => [
                    'validation' => [
                        'rules' => [
                            'footer_paragraph' => 'nullable|string|max:400',
                            'copyright' => 'nullable|string|max:200',
                        ]
                    ],
                    'map_after_validation' => function ($request, $id)  use($dir_images, $prefix_image){
                        $laravelRequest = new Request($request);
                        $oldData = $id ? CustomSetting::find($id) : null;
                        if ($oldData !== null) {
                            $oldData = $oldData->dataMaped;
                            if (array_key_exists('footer_logo', $oldData)) {
                                $oldData['footer_logo'] = isset($oldData['footer_logo_name']) ? $oldData['footer_logo_name'] : $oldData['footer_logo'];
                            }
                        }
                        $footer_logo_name = uploader($laravelRequest)->path($dir_images)->fieldName('footer_logo')->model($oldData)->singleUpload();
                        $request['footer_logo'] = $footer_logo_name ? $prefix_image.$footer_logo_name : null;

                        $request['display_footer'] = array_key_exists('display_footer', $request) ? true : false;
                        $request['display_widgets'] = array_key_exists('display_widgets', $request) ? true : false;
                        $request['display_footer_top_area'] = array_key_exists('display_footer_top_area', $request) ? true : false;
                        $request['display_copyright'] = array_key_exists('display_copyright', $request) ? true : false;
                        $request['display_footer_logo'] = array_key_exists('display_footer_logo', $request) ? true : false;
                        $request['display_footer_paragraph'] = array_key_exists('display_footer_paragraph', $request) ? true : false;
                        $request['display_social'] = array_key_exists('display_social', $request) ? true : false;
                        $request['display_footer_links'] = array_key_exists('display_footer_links', $request) ? true : false;
                        return $request;
                    },
                ]
            ]
        ],

        'styling' => [ // tab
            'name' => __('theme_goshippo::view.theme_settings.styling'),
            'sections' => [
                'styling' => [
                    'validation' => [
                        'rules' => [
                            'footer_paragraph' => 'nullable|string|max:400',
                            'copyright' => 'nullable|string|max:200',
                        ]
                    ],
                    'map_after_validation' => function ($request, $id) use($dir_images, $prefix_image) {
                        $laravelRequest = new Request($request);
                        $oldData = $id ? CustomSetting::find($id) : null;
                        if ($oldData !== null) {
                            $oldData = $oldData->dataMaped;
                            if (array_key_exists('footer_logo', $oldData)) {
                                $oldData['footer_logo'] = isset($oldData['footer_logo_name']) ? $oldData['footer_logo_name'] : $oldData['footer_logo'];
                            }
                        }
                        $footer_logo_name = uploader($laravelRequest)->path($dir_images)->fieldName('footer_logo')->model($oldData)->singleUpload();
                        $request['footer_logo'] = $footer_logo_name ? $prefix_image.$footer_logo_name : null;

                        $request['display_footer'] = array_key_exists('display_footer', $request) ? true : false;
                        $request['display_widgets'] = array_key_exists('display_widgets', $request) ? true : false;
                        $request['display_footer_top_area'] = array_key_exists('display_footer_top_area', $request) ? true : false;
                        $request['display_copyright'] = array_key_exists('display_copyright', $request) ? true : false;
                        $request['display_footer_logo'] = array_key_exists('display_footer_logo', $request) ? true : false;
                        $request['display_footer_paragraph'] = array_key_exists('display_footer_paragraph', $request) ? true : false;
                        $request['display_social'] = array_key_exists('display_social', $request) ? true : false;
                        $request['display_footer_links'] = array_key_exists('display_footer_links', $request) ? true : false;
                        return $request;
                    },
                ]
            ]
        ],

        'demos' => [ // tab
            'name' => __('theme_goshippo::view.theme_settings.demos'),
            'sections' => [
                'demos' => [
                    'validation' => [
                        'rules' => [
                            'active_demo' => 'nullable',
                        ]
                    ],
                    'map_after_validation' => function ($request, $id) {
                        return $request;
                    },
                ]
            ]
        ],
    ],

];