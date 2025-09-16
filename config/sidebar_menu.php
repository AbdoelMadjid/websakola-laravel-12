<?php

return [
    'dashboards' => [
        'icon' => 'ri-dashboard-2-line',
        'prefix' => 'dashboard_',
        'collapse_id' => 'sidebarDashboards',
        'translation' => 'translation.dashboards',
        'items' => [
            ['route' => 'dashboard_analytics',  'label' => 'translation.analytics'],
            ['route' => 'dashboard_crm',        'label' => 'translation.crm'],
            ['route' => 'dashboard_ecommerce',  'label' => 'translation.ecommerce'],
            ['route' => 'dashboard_crypto',     'label' => 'translation.crypto'],
            ['route' => 'dashboard_projects',   'label' => 'translation.projects'],
            ['route' => 'dashboard_nft',        'label' => 'translation.nft'],
            ['route' => 'dashboard_job',        'label' => 'translation.job'],
        ],
    ],

    'apps' => [
        'icon' => 'ri-apps-2-line',
        'prefix' => 'apps_*',
        'collapse_id' => 'sidebarApps',
        'translation' => 'translation.apps',
        'items' => [
            ['route' => 'apps_calendar', 'label' => 'translation.calendar'],
            ['route' => 'apps_chat', 'label' => 'translation.chat'],

            // Email
            [
                'prefix' => 'apps_email_*',
                'collapse_id' => 'sidebarEmail',
                'label' => 'translation.email',
                'children' => [
                    ['route' => 'apps_email_mailbox', 'label' => 'translation.mailbox'],
                    [
                        'prefix' => 'apps_email_template_*',
                        'collapse_id' => 'sidebaremailTemplates',
                        'label' => 'translation.email-templates',
                        'children' => [
                            ['route' => 'apps_email_template_basic', 'label' => 'translation.basic-action'],
                            ['route' => 'apps_email_template_ecommerce', 'label' => 'translation.ecommerce-action'],
                        ],
                    ],
                ],
            ],

            // Ecommerce
            [
                'prefix' => 'apps_ecommerce_*',
                'collapse_id' => 'sidebarEcommerce',
                'label' => 'translation.ecommerce',
                'children' => [
                    ['route' => 'apps_ecommerce_products', 'label' => 'translation.products'],
                    ['route' => 'apps_ecommerce_product_details', 'label' => 'translation.product-Details'],
                    ['route' => 'apps_ecommerce_add_product', 'label' => 'translation.create-product'],
                    ['route' => 'apps_ecommerce_orders', 'label' => 'translation.orders'],
                    ['route' => 'apps_ecommerce_order_details', 'label' => 'translation.order-details'],
                    ['route' => 'apps_ecommerce_customers', 'label' => 'translation.customers'],
                    ['route' => 'apps_ecommerce_cart', 'label' => 'translation.shopping-cart'],
                    ['route' => 'apps_ecommerce_checkout', 'label' => 'translation.checkout'],
                    ['route' => 'apps_ecommerce_sellers', 'label' => 'translation.sellers'],
                    ['route' => 'apps_ecommerce_seller_details', 'label' => 'translation.sellers-details'],
                ],
            ],

            // Projects
            [
                'prefix' => 'apps_projects_*',
                'collapse_id' => 'sidebarProjects',
                'label' => 'translation.projects',
                'children' => [
                    ['route' => 'apps_projects_list', 'label' => 'translation.list'],
                    ['route' => 'apps_projects_overview', 'label' => 'translation.overview'],
                    ['route' => 'apps_projects_create', 'label' => 'translation.create-project'],
                ],
            ],

            // Tasks
            [
                'prefix' => 'apps_tasks_*',
                'collapse_id' => 'sidebarTasks',
                'label' => 'translation.tasks',
                'children' => [
                    ['route' => 'apps_tasks_kanban', 'label' => 'translation.kanbanboard'],
                    ['route' => 'apps_tasks_list_view', 'label' => 'translation.list-view'],
                    ['route' => 'apps_tasks_details', 'label' => 'translation.task-details'],
                ],
            ],

            // CRM
            [
                'prefix' => 'apps_crm_*',
                'collapse_id' => 'sidebarCRM',
                'label' => 'translation.crm',
                'children' => [
                    ['route' => 'apps_crm_contacts', 'label' => 'translation.contacts'],
                    ['route' => 'apps_crm_companies', 'label' => 'translation.companies'],
                    ['route' => 'apps_crm_deals', 'label' => 'translation.deals'],
                    ['route' => 'apps_crm_leads', 'label' => 'translation.leads'],
                ],
            ],

            // Crypto
            [
                'prefix' => 'apps_crypto_*',
                'collapse_id' => 'sidebarCrypto',
                'label' => 'translation.crypto',
                'children' => [
                    ['route' => 'apps_crypto_transactions', 'label' => 'translation.transactions'],
                    ['route' => 'apps_crypto_buy_sell', 'label' => 'translation.buy-sell'],
                    ['route' => 'apps_crypto_orders', 'label' => 'translation.orders'],
                    ['route' => 'apps_crypto_wallet', 'label' => 'translation.my-wallet'],
                    ['route' => 'apps_crypto_ico', 'label' => 'translation.ico-list'],
                    ['route' => 'apps_crypto_kyc', 'label' => 'translation.kyc-application'],
                ],
            ],

            // Invoices
            [
                'prefix' => 'apps_invoices_*',
                'collapse_id' => 'sidebarInvoices',
                'label' => 'translation.invoices',
                'children' => [
                    ['route' => 'apps_invoices_list', 'label' => 'translation.list-view'],
                    ['route' => 'apps_invoices_details', 'label' => 'translation.details'],
                    ['route' => 'apps_invoices_create', 'label' => 'translation.create-invoice'],
                ],
            ],

            // Tickets
            [
                'prefix' => 'apps_tickets_*',
                'collapse_id' => 'sidebarTickets',
                'label' => 'translation.supprt-tickets',
                'children' => [
                    ['route' => 'apps_tickets_list', 'label' => 'translation.list-view'],
                    ['route' => 'apps_tickets_details', 'label' => 'translation.ticket-details'],
                ],
            ],

            // NFT
            [
                'prefix' => 'apps_nft_*',
                'collapse_id' => 'sidebarnft',
                'label' => 'translation.nft-marketplace',
                'children' => [
                    ['route' => 'apps_nft_marketplace', 'label' => 'translation.marketplace'],
                    ['route' => 'apps_nft_explore', 'label' => 'translation.explore-now'],
                    ['route' => 'apps_nft_auction', 'label' => 'translation.live-auction'],
                    ['route' => 'apps_nft_item_details', 'label' => 'translation.item-details'],
                    ['route' => 'apps_nft_collections', 'label' => 'translation.collections'],
                    ['route' => 'apps_nft_creators', 'label' => 'translation.creators'],
                    ['route' => 'apps_nft_ranking', 'label' => 'translation.ranking'],
                    ['route' => 'apps_nft_wallet', 'label' => 'translation.wallet-connect'],
                    ['route' => 'apps_nft_create', 'label' => 'translation.create-nft'],
                ],
            ],

            ['route' => 'apps_file_manager', 'label' => 'translation.file-manager'],
            ['route' => 'apps_todo', 'label' => 'translation.to-do'],

            // Jobs
            [
                'prefix' => 'apps_job_*',
                'collapse_id' => 'sidebarjobs',
                'label' => 'translation.jobs',
                'children' => [
                    ['route' => 'apps_job_statistics', 'label' => 'translation.statistics'],
                    [
                        'prefix' => 'apps_job_lists_*',
                        'collapse_id' => 'sidebarJoblists',
                        'label' => 'translation.job-lists',
                        'children' => [
                            ['route' => 'apps_job_lists_basic', 'label' => 'translation.list'],
                            ['route' => 'apps_job_lists_grid_lists', 'label' => 'translation.grid'],
                            ['route' => 'apps_job_lists_details', 'label' => 'translation.overview'],
                        ],
                    ],
                    [
                        'prefix' => 'apps_job_candidate_*',
                        'collapse_id' => 'sidebarCandidatelists',
                        'label' => 'translation.candidate-lists',
                        'children' => [
                            ['route' => 'apps_job_candidate_lists', 'label' => 'translation.list-view'],
                            ['route' => 'apps_job_candidate_grid', 'label' => 'translation.grid-view'],
                        ],
                    ],
                    ['route' => 'apps_job_application', 'label' => 'translation.application'],
                    ['route' => 'apps_job_new', 'label' => 'translation.new-job'],
                    ['route' => 'apps_job_companies_lists', 'label' => 'translation.companies-list'],
                    ['route' => 'apps_job_categories', 'label' => 'translation.job-categories'],
                ],
            ],

            ['route' => 'apps_api_key', 'label' => 'translation.api-key'],
        ],
    ],

    'layouts' => [
        'icon' => 'ri-layout-3-line',
        'prefix' => 'layouts_*',
        'collapse_id' => 'sidebarLayouts',
        'translation' => 'translation.layouts',
        'badge' => [
            'label' => 'translation.hot',
            'class' => 'bg-danger me-3',
        ],
        'items' => [
            [
                'route' => 'layouts_horizontal',
                'label' => 'translation.horizontal',
                'target' => '_blank',
            ],
            [
                'route' => 'layouts_detached',
                'label' => 'translation.detached',
                'target' => '_blank',
            ],
            [
                'route' => 'layouts_two_column',
                'label' => 'translation.two-column',
                'target' => '_blank',
            ],
            [
                'route' => 'layouts_vertical_hovered',
                'label' => 'translation.hovered',
                'target' => '_blank',
            ],
        ],
    ],

];
