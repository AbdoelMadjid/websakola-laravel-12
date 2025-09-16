<?php

return [
    'ui' => [
        'icon'        => 'ri-pencil-ruler-2-line',
        'prefix'      => 'ui_*',
        'collapse_id' => 'sidebarUI',
        'translation' => 'translation.base-ui',
        'items'       => [

            ['route' => 'ui_alerts', 'label' => 'translation.alerts'],
            ['route' => 'ui_badges', 'label' => 'translation.badges'],
            ['route' => 'ui_buttons', 'label' => 'translation.buttons'],
            ['route' => 'ui_colors', 'label' => 'translation.colors'],
            ['route' => 'ui_cards', 'label' => 'translation.cards'],
            ['route' => 'ui_carousel', 'label' => 'translation.carousel'],
            ['route' => 'ui_dropdowns', 'label' => 'translation.dropdowns'],
            ['route' => 'ui_grid', 'label' => 'translation.grid'],

            ['route' => 'ui_images', 'label' => 'translation.images'],
            ['route' => 'ui_tabs', 'label' => 'translation.tabs'],
            ['route' => 'ui_accordions', 'label' => 'translation.accordion-collapse'],
            ['route' => 'ui_modals', 'label' => 'translation.modals'],
            ['route' => 'ui_offcanvas', 'label' => 'translation.offcanvas'],
            ['route' => 'ui_placeholders', 'label' => 'translation.placeholders'],
            ['route' => 'ui_progress', 'label' => 'translation.progress'],
            ['route' => 'ui_notifications', 'label' => 'translation.notifications'],

            ['route' => 'ui_media', 'label' => 'translation.media-object'],
            ['route' => 'ui_embed_video', 'label' => 'translation.embed-video'],
            ['route' => 'ui_typography', 'label' => 'translation.typography'],
            ['route' => 'ui_lists', 'label' => 'translation.lists'],
            [
                'route' => 'ui_links',
                'label' => 'translation.links',
                'badge' => ['label' => 'translation.new', 'class' => 'bg-success'],
            ],
            ['route' => 'ui_general', 'label' => 'translation.general'],
            ['route' => 'ui_ribbons', 'label' => 'translation.ribbons'],
            ['route' => 'ui_utilities', 'label' => 'translation.utilities'],
        ],
    ],

    'advance_ui' => [
        'icon'        => 'ri-stack-line',
        'prefix'      => 'advance_ui_*',
        'collapse_id' => 'sidebarAdvanceUI',
        'translation' => 'translation.advance-ui',
        'items'       => [

            ['route' => 'advance_ui_sweetalerts', 'label' => 'translation.sweet-alerts'],
            ['route' => 'advance_ui_nestable', 'label' => 'translation.nestable-list'],
            ['route' => 'advance_ui_scrollbar', 'label' => 'translation.scrollbar'],
            ['route' => 'advance_ui_animation', 'label' => 'translation.animation'],
            ['route' => 'advance_ui_tour', 'label' => 'translation.tour'],
            ['route' => 'advance_ui_swiper', 'label' => 'translation.swiper-slider'],
            ['route' => 'advance_ui_ratings', 'label' => 'translation.ratings'],
            ['route' => 'advance_ui_highlight', 'label' => 'translation.highlight'],
            ['route' => 'advance_ui_scrollspy', 'label' => 'translation.scrollSpy'],

        ],
    ],

    'widgets' => [
        'icon'        => 'ri-honour-line',
        'route'       => 'widgets',          // ini digunakan untuk href: url($menu['route'])
        'translation' => 'translation.widgets',
        // 'prefix' => 'widgets*',           // opsional, bisa dihapus kalau route sudah pasti cocok
    ],

    'forms' => [
        'icon'        => 'ri-file-list-3-line',
        'prefix'      => 'forms_*',
        'collapse_id' => 'sidebarForms',
        'translation' => 'translation.forms',
        'items'       => [

            ['route' => 'forms_elements', 'label' => 'translation.basic-elements'],
            ['route' => 'forms_select', 'label' => 'translation.form-select'],
            ['route' => 'forms_checkboxs_radios', 'label' => 'translation.checkboxs-radios'],
            ['route' => 'forms_pickers', 'label' => 'translation.pickers'],
            ['route' => 'forms_masks', 'label' => 'translation.input-masks'],
            ['route' => 'forms_advanced', 'label' => 'translation.advanced'],
            ['route' => 'forms_range_sliders', 'label' => 'translation.range-slider'],
            ['route' => 'forms_validation', 'label' => 'translation.validation'],
            ['route' => 'forms_wizard', 'label' => 'translation.wizard'],
            ['route' => 'forms_editors', 'label' => 'translation.editors'],
            ['route' => 'forms_file_uploads', 'label' => 'translation.file-uploads'],
            ['route' => 'forms_layouts', 'label' => 'translation.form-layouts'],
            ['route' => 'forms_select2', 'label' => 'translation.select2'],

        ],
    ],

    'tables' => [
        'icon'        => 'ri-layout-grid-line',
        'prefix'      => 'tables_*',
        'collapse_id' => 'sidebarTables',
        'translation' => 'translation.tables',
        'items'       => [

            ['route' => 'tables_basic', 'label' => 'translation.basic-tables'],
            ['route' => 'tables_gridjs', 'label' => 'translation.grid-js'],
            ['route' => 'tables_listjs', 'label' => 'translation.list-js'],
            ['route' => 'tables_datatables', 'label' => 'translation.datatables'],

        ],
    ],

    'charts' => [
        'icon'        => 'ri-pie-chart-line',
        'prefix'      => 'charts_*',
        'collapse_id' => 'sidebarCharts',
        'translation' => 'translation.charts',
        'items'       => [

            [
                'route'  => 'charts_apex_*',
                'label'  => 'translation.apexcharts',
                'prefix' => 'charts_apex_*',
                'collapse_id' => 'sidebarApexcharts',
                'children' => [
                    ['route' => 'charts_apex_line',        'label' => 'translation.line'],
                    ['route' => 'charts_apex_area',        'label' => 'translation.area'],
                    ['route' => 'charts_apex_column',      'label' => 'translation.column'],
                    ['route' => 'charts_apex_bar',         'label' => 'translation.bar'],
                    ['route' => 'charts_apex_mixed',       'label' => 'translation.mixed'],
                    ['route' => 'charts_apex_timeline',    'label' => 'translation.timeline'],
                    ['route' => 'charts_apex_range_area',  'label' => 'translation.range-area',  'badge' => ['label' => 'translation.new', 'class' => 'bg-success']],
                    ['route' => 'charts_apex_funnel',      'label' => 'translation.funnel',      'badge' => ['label' => 'translation.new', 'class' => 'bg-success']],
                    ['route' => 'charts_apex_candlestick', 'label' => 'translation.candlstick'],
                    ['route' => 'charts_apex_boxplot',     'label' => 'translation.boxplot'],
                    ['route' => 'charts_apex_bubble',      'label' => 'translation.bubble'],
                    ['route' => 'charts_apex_scatter',     'label' => 'translation.scatter'],
                    ['route' => 'charts_apex_heatmap',     'label' => 'translation.heatmap'],
                    ['route' => 'charts_apex_treemap',     'label' => 'translation.treemap'],
                    ['route' => 'charts_apex_pie',         'label' => 'translation.pie'],
                    ['route' => 'charts_apex_radialbar',   'label' => 'translation.radialbar'],
                    ['route' => 'charts_apex_radar',       'label' => 'translation.radar'],
                    ['route' => 'charts_apex_polar',       'label' => 'translation.polar-area'],
                ],
            ],

            ['route' => 'charts_chartjs', 'label' => 'translation.chartjs'],
            ['route' => 'charts_echarts', 'label' => 'translation.echarts'],

        ],
    ],

    'icons' => [
        'icon'        => 'ri-compasses-2-line',
        'prefix'      => 'icons_*',
        'collapse_id' => 'sidebarIcons',
        'translation' => 'translation.icons',
        'items'       => [

            ['route' => 'icons_remix',        'label' => 'translation.remix'],
            ['route' => 'icons_boxicons',     'label' => 'translation.boxicons'],
            ['route' => 'icons_materialdesign', 'label' => 'translation.material-design'],
            ['route' => 'icons_lineawesome',  'label' => 'translation.line-awesome'],
            ['route' => 'icons_feather',      'label' => 'translation.feather'],
            ['route' => 'icons_crypto',       'label' => 'translation.crypto-svg'],

        ],
    ],

    'maps' => [
        'icon'        => 'ri-map-pin-line',
        'prefix'      => 'maps_*',
        'collapse_id' => 'sidebarMaps',
        'translation' => 'translation.maps',
        'items'       => [
            ['route' => 'maps_google',  'label' => 'translation.google'],
            ['route' => 'maps_vector',  'label' => 'translation.vector'],
            ['route' => 'maps_leaflet', 'label' => 'translation.leaflet'],
        ],
    ],

    'multilevel' => [
        'icon'        => 'ri-share-line',
        'prefix'      => 'multilevel_*',
        'collapse_id' => 'sidebarMultilevel',
        'translation' => 'translation.multi-level',
        'items'       => [

            ['route' => '#', 'label' => 'translation.level-1.1'],

            [
                'route'       => '#',
                'label'       => 'translation.level-1.2',
                'prefix'      => 'account_*',
                'collapse_id' => 'sidebarAccount',
                'children'    => [
                    ['route' => '#', 'label' => 'translation.level-2.1'],

                    [
                        'route'       => '#',
                        'label'       => 'translation.level-2.2',
                        'prefix'      => 'crm_*',
                        'collapse_id' => 'sidebarCrm',
                        'children'    => [
                            ['route' => '#', 'label' => 'translation.level-3.1'],
                            ['route' => '#', 'label' => 'translation.level-3.2'],
                        ],
                    ],
                ],
            ],

        ],
    ],

];
