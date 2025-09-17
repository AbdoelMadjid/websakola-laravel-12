<?php

return [
    'ui' => [
        'icon'        => 'ri-pencil-ruler-2-line',
        'prefix'      => 'ui-*',
        'collapse_id' => 'sidebarUI',
        'translation' => 'translation.base-ui',
        'items'       => [

            ['route' => 'ui-alerts', 'label' => 'translation.alerts'],
            ['route' => 'ui-badges', 'label' => 'translation.badges'],
            ['route' => 'ui-buttons', 'label' => 'translation.buttons'],
            ['route' => 'ui-colors', 'label' => 'translation.colors'],
            ['route' => 'ui-cards', 'label' => 'translation.cards'],
            ['route' => 'ui-carousel', 'label' => 'translation.carousel'],
            ['route' => 'ui-dropdowns', 'label' => 'translation.dropdowns'],
            ['route' => 'ui-grid', 'label' => 'translation.grid'],

            ['route' => 'ui-images', 'label' => 'translation.images'],
            ['route' => 'ui-tabs', 'label' => 'translation.tabs'],
            ['route' => 'ui-accordions', 'label' => 'translation.accordion-collapse'],
            ['route' => 'ui-modals', 'label' => 'translation.modals'],
            ['route' => 'ui-offcanvas', 'label' => 'translation.offcanvas'],
            ['route' => 'ui-placeholders', 'label' => 'translation.placeholders'],
            ['route' => 'ui-progress', 'label' => 'translation.progress'],
            ['route' => 'ui-notifications', 'label' => 'translation.notifications'],

            ['route' => 'ui-media', 'label' => 'translation.media-object'],
            ['route' => 'ui-embed-video', 'label' => 'translation.embed-video'],
            ['route' => 'ui-typography', 'label' => 'translation.typography'],
            ['route' => 'ui-lists', 'label' => 'translation.lists'],
            [
                'route' => 'ui-links',
                'label' => 'translation.links',
                'badge' => ['label' => 'translation.new', 'class' => 'bg-success'],
            ],
            ['route' => 'ui-general', 'label' => 'translation.general'],
            ['route' => 'ui-ribbons', 'label' => 'translation.ribbons'],
            ['route' => 'ui-utilities', 'label' => 'translation.utilities'],
        ],
    ],

    'advance-ui' => [
        'icon'        => 'ri-stack-line',
        'prefix'      => 'advance-ui-*',
        'collapse_id' => 'sidebarAdvanceUI',
        'translation' => 'translation.advance-ui',
        'items'       => [

            ['route' => 'advance-ui-sweetalerts', 'label' => 'translation.sweet-alerts'],
            ['route' => 'advance-ui-nestable', 'label' => 'translation.nestable-list'],
            ['route' => 'advance-ui-scrollbar', 'label' => 'translation.scrollbar'],
            ['route' => 'advance-ui-animation', 'label' => 'translation.animation'],
            ['route' => 'advance-ui-tour', 'label' => 'translation.tour'],
            ['route' => 'advance-ui-swiper', 'label' => 'translation.swiper-slider'],
            ['route' => 'advance-ui-ratings', 'label' => 'translation.ratings'],
            ['route' => 'advance-ui-highlight', 'label' => 'translation.highlight'],
            ['route' => 'advance-ui-scrollspy', 'label' => 'translation.scrollSpy'],

        ],
    ],

    'widget' => [
        'icon'        => 'ri-honour-line',
        'route'       => 'widgets',          // ini digunakan untuk href: url($menu['route'])
        'translation' => 'translation.widgets',
        // 'prefix' => 'widgets*',           // opsional, bisa dihapus kalau route sudah pasti cocok
    ],

    'form' => [
        'icon'        => 'ri-file-list-3-line',
        'prefix'      => 'forms-*',
        'collapse_id' => 'sidebarForms',
        'translation' => 'translation.forms',
        'items'       => [

            ['route' => 'forms-elements', 'label' => 'translation.basic-elements'],
            ['route' => 'forms-select', 'label' => 'translation.form-select'],
            ['route' => 'forms-checkboxs-radios', 'label' => 'translation.checkboxs-radios'],
            ['route' => 'forms-pickers', 'label' => 'translation.pickers'],
            ['route' => 'forms-masks', 'label' => 'translation.input-masks'],
            ['route' => 'forms-advanced', 'label' => 'translation.advanced'],
            ['route' => 'forms-range-sliders', 'label' => 'translation.range-slider'],
            ['route' => 'forms-validation', 'label' => 'translation.validation'],
            ['route' => 'forms-wizard', 'label' => 'translation.wizard'],
            ['route' => 'forms-editors', 'label' => 'translation.editors'],
            ['route' => 'forms-file-uploads', 'label' => 'translation.file-uploads'],
            ['route' => 'forms-layouts', 'label' => 'translation.form-layouts'],
            ['route' => 'forms-select2', 'label' => 'translation.select2'],

        ],
    ],

    'table' => [
        'icon'        => 'ri-layout-grid-line',
        'prefix'      => 'tables-*',
        'collapse_id' => 'sidebarTables',
        'translation' => 'translation.tables',
        'items'       => [

            ['route' => 'tables-basic', 'label' => 'translation.basic-tables'],
            ['route' => 'tables-gridjs', 'label' => 'translation.grid-js'],
            ['route' => 'tables-listjs', 'label' => 'translation.list-js'],
            ['route' => 'tables-datatables', 'label' => 'translation.datatables'],

        ],
    ],

    'chart' => [
        'icon'        => 'ri-pie-chart-line',
        'prefix'      => 'charts-*',
        'collapse_id' => 'sidebarCharts',
        'translation' => 'translation.charts',
        'items'       => [

            [
                'route'  => 'charts-apex-*',
                'label'  => 'translation.apexcharts',
                'prefix' => 'charts-apex-*',
                'collapse_id' => 'sidebarApexcharts',
                'children' => [
                    ['route' => 'charts-apex-line',        'label' => 'translation.line'],
                    ['route' => 'charts-apex-area',        'label' => 'translation.area'],
                    ['route' => 'charts-apex-column',      'label' => 'translation.column'],
                    ['route' => 'charts-apex-bar',         'label' => 'translation.bar'],
                    ['route' => 'charts-apex-mixed',       'label' => 'translation.mixed'],
                    ['route' => 'charts-apex-timeline',    'label' => 'translation.timeline'],
                    ['route' => 'charts-apex-range-area',  'label' => 'translation.range-area',  'badge' => ['label' => 'translation.new', 'class' => 'bg-success']],
                    ['route' => 'charts-apex-funnel',      'label' => 'translation.funnel',      'badge' => ['label' => 'translation.new', 'class' => 'bg-success']],
                    ['route' => 'charts-apex-candlestick', 'label' => 'translation.candlstick'],
                    ['route' => 'charts-apex-boxplot',     'label' => 'translation.boxplot'],
                    ['route' => 'charts-apex-bubble',      'label' => 'translation.bubble'],
                    ['route' => 'charts-apex-scatter',     'label' => 'translation.scatter'],
                    ['route' => 'charts-apex-heatmap',     'label' => 'translation.heatmap'],
                    ['route' => 'charts-apex-treemap',     'label' => 'translation.treemap'],
                    ['route' => 'charts-apex-pie',         'label' => 'translation.pie'],
                    ['route' => 'charts-apex-radialbar',   'label' => 'translation.radialbar'],
                    ['route' => 'charts-apex-radar',       'label' => 'translation.radar'],
                    ['route' => 'charts-apex-polar',       'label' => 'translation.polar-area'],
                ],
            ],

            ['route' => 'charts-chartjs', 'label' => 'translation.chartjs'],
            ['route' => 'charts-echarts', 'label' => 'translation.echarts'],

        ],
    ],

    'icon' => [
        'icon'        => 'ri-compasses-2-line',
        'prefix'      => 'icons-*',
        'collapse_id' => 'sidebarIcons',
        'translation' => 'translation.icons',
        'items'       => [

            ['route' => 'icons-remix',        'label' => 'translation.remix'],
            ['route' => 'icons-boxicons',     'label' => 'translation.boxicons'],
            ['route' => 'icons-materialdesign', 'label' => 'translation.material-design'],
            ['route' => 'icons-lineawesome',  'label' => 'translation.line-awesome'],
            ['route' => 'icons-feather',      'label' => 'translation.feather'],
            ['route' => 'icons-crypto',       'label' => 'translation.crypto-svg'],

        ],
    ],

    'map' => [
        'icon'        => 'ri-map-pin-line',
        'prefix'      => 'maps-*',
        'collapse_id' => 'sidebarMaps',
        'translation' => 'translation.maps',
        'items'       => [
            ['route' => 'maps-google',  'label' => 'translation.google'],
            ['route' => 'maps-vector',  'label' => 'translation.vector'],
            ['route' => 'maps-leaflet', 'label' => 'translation.leaflet'],
        ],
    ],

    'multilevel' => [
        'icon'        => 'ri-share-line',
        'prefix'      => 'multilevel-*',
        'collapse_id' => 'sidebarMultilevel',
        'translation' => 'translation.multi-level',
        'items'       => [

            ['route' => '#', 'label' => 'translation.level-1.1'],

            [
                'route'       => '#',
                'label'       => 'translation.level-1.2',
                'prefix'      => 'account-*',
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
