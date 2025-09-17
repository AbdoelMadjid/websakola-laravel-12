<?php

return [
    'dashboard' => [
        'icon' => 'ri-dashboard-2-line',
        'prefix' => 'dashboard-',
        'collapse_id' => 'sidebarDashboards',
        'translation' => 'translation.dashboards',
        'items' => [
            ['route' => 'dashboard-analytics',  'label' => 'translation.analytics'],
            ['route' => 'dashboard-crm',        'label' => 'translation.crm'],
            ['route' => 'dashboard-ecommerce',  'label' => 'translation.ecommerce'],
            ['route' => 'dashboard-crypto',     'label' => 'translation.crypto'],
            ['route' => 'dashboard-projects',   'label' => 'translation.projects'],
            ['route' => 'dashboard-nft',        'label' => 'translation.nft'],
            ['route' => 'dashboard-job',        'label' => 'translation.job'],
        ],
    ],

    'app' => [
        'icon' => 'ri-apps-2-line',
        'prefix' => 'apps-*',
        'collapse_id' => 'sidebarApps',
        'translation' => 'translation.apps',
        'items' => [
            ['route' => 'apps-calendar', 'label' => 'translation.calendar'],
            ['route' => 'apps-chat', 'label' => 'translation.chat'],

            // Email
            [
                'prefix' => 'apps-email-*',
                'collapse_id' => 'sidebarEmail',
                'label' => 'translation.email',
                'children' => [
                    ['route' => 'apps-email-mailbox', 'label' => 'translation.mailbox'],
                    [
                        'prefix' => 'apps-email-template-*',
                        'collapse_id' => 'sidebaremailTemplates',
                        'label' => 'translation.email-templates',
                        'children' => [
                            ['route' => 'apps-email-template-basic', 'label' => 'translation.basic-action'],
                            ['route' => 'apps-email-template-ecommerce', 'label' => 'translation.ecommerce-action'],
                        ],
                    ],
                ],
            ],

            // Ecommerce
            [
                'prefix' => 'apps-ecommerce-*',
                'collapse_id' => 'sidebarEcommerce',
                'label' => 'translation.ecommerce',
                'children' => [
                    ['route' => 'apps-ecommerce-products', 'label' => 'translation.products'],
                    ['route' => 'apps-ecommerce-product-details', 'label' => 'translation.product-Details'],
                    ['route' => 'apps-ecommerce-add-product', 'label' => 'translation.create-product'],
                    ['route' => 'apps-ecommerce-orders', 'label' => 'translation.orders'],
                    ['route' => 'apps-ecommerce-order-details', 'label' => 'translation.order-details'],
                    ['route' => 'apps-ecommerce-customers', 'label' => 'translation.customers'],
                    ['route' => 'apps-ecommerce-cart', 'label' => 'translation.shopping-cart'],
                    ['route' => 'apps-ecommerce-checkout', 'label' => 'translation.checkout'],
                    ['route' => 'apps-ecommerce-sellers', 'label' => 'translation.sellers'],
                    ['route' => 'apps-ecommerce-seller-details', 'label' => 'translation.sellers-details'],
                ],
            ],

            // Projects
            [
                'prefix' => 'apps-projects-*',
                'collapse_id' => 'sidebarProjects',
                'label' => 'translation.projects',
                'children' => [
                    ['route' => 'apps-projects-list', 'label' => 'translation.list'],
                    ['route' => 'apps-projects-overview', 'label' => 'translation.overview'],
                    ['route' => 'apps-projects-create', 'label' => 'translation.create-project'],
                ],
            ],

            // Tasks
            [
                'prefix' => 'apps-tasks-*',
                'collapse_id' => 'sidebarTasks',
                'label' => 'translation.tasks',
                'children' => [
                    ['route' => 'apps-tasks-kanban', 'label' => 'translation.kanbanboard'],
                    ['route' => 'apps-tasks-list_view', 'label' => 'translation.list-view'],
                    ['route' => 'apps-tasks-details', 'label' => 'translation.task-details'],
                ],
            ],

            // CRM
            [
                'prefix' => 'apps-crm-*',
                'collapse_id' => 'sidebarCRM',
                'label' => 'translation.crm',
                'children' => [
                    ['route' => 'apps-crm-contacts', 'label' => 'translation.contacts'],
                    ['route' => 'apps-crm-companies', 'label' => 'translation.companies'],
                    ['route' => 'apps-crm-deals', 'label' => 'translation.deals'],
                    ['route' => 'apps-crm-leads', 'label' => 'translation.leads'],
                ],
            ],

            // Crypto
            [
                'prefix' => 'apps-crypto-*',
                'collapse_id' => 'sidebarCrypto',
                'label' => 'translation.crypto',
                'children' => [
                    ['route' => 'apps-crypto-transactions', 'label' => 'translation.transactions'],
                    ['route' => 'apps-crypto-buy_sell', 'label' => 'translation.buy-sell'],
                    ['route' => 'apps-crypto-orders', 'label' => 'translation.orders'],
                    ['route' => 'apps-crypto-wallet', 'label' => 'translation.my-wallet'],
                    ['route' => 'apps-crypto-ico', 'label' => 'translation.ico-list'],
                    ['route' => 'apps-crypto-kyc', 'label' => 'translation.kyc-application'],
                ],
            ],

            // Invoices
            [
                'prefix' => 'apps-invoices-*',
                'collapse_id' => 'sidebarInvoices',
                'label' => 'translation.invoices',
                'children' => [
                    ['route' => 'apps-invoices-list', 'label' => 'translation.list-view'],
                    ['route' => 'apps-invoices-details', 'label' => 'translation.details'],
                    ['route' => 'apps-invoices-create', 'label' => 'translation.create-invoice'],
                ],
            ],

            // Tickets
            [
                'prefix' => 'apps-tickets-*',
                'collapse_id' => 'sidebarTickets',
                'label' => 'translation.supprt-tickets',
                'children' => [
                    ['route' => 'apps-tickets-list', 'label' => 'translation.list-view'],
                    ['route' => 'apps-tickets-details', 'label' => 'translation.ticket-details'],
                ],
            ],

            // NFT
            [
                'prefix' => 'apps-nft-*',
                'collapse_id' => 'sidebarnft',
                'label' => 'translation.nft-marketplace',
                'children' => [
                    ['route' => 'apps-nft-marketplace', 'label' => 'translation.marketplace'],
                    ['route' => 'apps-nft-explore', 'label' => 'translation.explore-now'],
                    ['route' => 'apps-nft-auction', 'label' => 'translation.live-auction'],
                    ['route' => 'apps-nft-item-details', 'label' => 'translation.item-details'],
                    ['route' => 'apps-nft-collections', 'label' => 'translation.collections'],
                    ['route' => 'apps-nft-creators', 'label' => 'translation.creators'],
                    ['route' => 'apps-nft-ranking', 'label' => 'translation.ranking'],
                    ['route' => 'apps-nft-wallet', 'label' => 'translation.wallet-connect'],
                    ['route' => 'apps-nft-create', 'label' => 'translation.create-nft'],
                ],
            ],

            ['route' => 'apps-file_manager', 'label' => 'translation.file-manager'],
            ['route' => 'apps-todo', 'label' => 'translation.to-do'],

            // Jobs
            [
                'prefix' => 'apps-job-*',
                'collapse_id' => 'sidebarjobs',
                'label' => 'translation.jobs',
                'children' => [
                    ['route' => 'apps-job-statistics', 'label' => 'translation.statistics'],
                    [
                        'prefix' => 'apps-job-lists-*',
                        'collapse_id' => 'sidebarJoblists',
                        'label' => 'translation.job-lists',
                        'children' => [
                            ['route' => 'apps-job-lists-basic', 'label' => 'translation.list'],
                            ['route' => 'apps-job-lists-grid_lists', 'label' => 'translation.grid'],
                            ['route' => 'apps-job-lists-details', 'label' => 'translation.overview'],
                        ],
                    ],
                    [
                        'prefix' => 'apps-job-candidate-*',
                        'collapse_id' => 'sidebarCandidatelists',
                        'label' => 'translation.candidate-lists',
                        'children' => [
                            ['route' => 'apps-job-candidate-lists', 'label' => 'translation.list-view'],
                            ['route' => 'apps-job-candidate-grid', 'label' => 'translation.grid-view'],
                        ],
                    ],
                    ['route' => 'apps-job-application', 'label' => 'translation.application'],
                    ['route' => 'apps-job-new', 'label' => 'translation.new-job'],
                    ['route' => 'apps-job-companies-lists', 'label' => 'translation.companies-list'],
                    ['route' => 'apps-job-categories', 'label' => 'translation.job-categories'],
                ],
            ],

            ['route' => 'apps-api_key', 'label' => 'translation.api-key'],
        ],
    ],

    'layout' => [
        'icon' => 'ri-layout-3-line',
        'prefix' => 'layouts-*',
        'collapse_id' => 'sidebarLayouts',
        'translation' => 'translation.layouts',
        'badge' => [
            'label' => 'translation.hot',
            'class' => 'bg-danger me-3',
        ],
        'items' => [
            [
                'route' => 'layouts-horizontal',
                'label' => 'translation.horizontal',
                'target' => '_blank',
            ],
            [
                'route' => 'layouts-detached',
                'label' => 'translation.detached',
                'target' => '_blank',
            ],
            [
                'route' => 'layouts-two-column',
                'label' => 'translation.two-column',
                'target' => '_blank',
            ],
            [
                'route' => 'layouts-vertical-hovered',
                'label' => 'translation.hovered',
                'target' => '_blank',
            ],
        ],
    ],

];
