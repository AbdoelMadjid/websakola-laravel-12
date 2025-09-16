<?php

return [

    'authentication' => [
        'icon' => 'ri-account-circle-line',
        'prefix' => 'auth_*',
        'collapse_id' => 'sidebarAuth',
        'translation' => 'translation.authentication',
        'items' => [

            // Sign In
            [
                'translation' => 'translation.signin',
                'collapse_id' => 'sidebarSignIn',
                'prefix' => 'auth_signin_*',
                'children' => [
                    ['route' => 'auth_signin_basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth_signin_cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Sign Up
            [
                'translation' => 'translation.signup',
                'collapse_id' => 'sidebarSignUp',
                'prefix' => 'auth_signup_*',
                'children' => [
                    ['route' => 'auth_signup_basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth_signup_cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Password Reset
            [
                'translation' => 'translation.password-reset',
                'collapse_id' => 'sidebarResetPass',
                'prefix' => 'auth_pass_reset_*',
                'children' => [
                    ['route' => 'auth_pass_reset_basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth_pass_reset_cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Password Change
            [
                'translation' => 'translation.password-create',
                'collapse_id' => 'sidebarchangePass',
                'prefix' => 'auth_pass_change_*',
                'children' => [
                    ['route' => 'auth_pass_change_basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth_pass_change_cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Lock Screen
            [
                'translation' => 'translation.lock-screen',
                'collapse_id' => 'sidebarLockScreen',
                'prefix' => 'auth_lockscreen_*',
                'children' => [
                    ['route' => 'auth_lockscreen_basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth_lockscreen_cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Logout
            [
                'translation' => 'translation.logout',
                'collapse_id' => 'sidebarLogout',
                'prefix' => 'auth_logout_*',
                'children' => [
                    ['route' => 'auth_logout_basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth_logout_cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Success Message
            [
                'translation' => 'translation.success-message',
                'collapse_id' => 'sidebarSuccessMsg',
                'prefix' => 'auth_success_msg_*',
                'children' => [
                    ['route' => 'auth_success_msg_basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth_success_msg_cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Two Step Verification
            [
                'translation' => 'translation.two-step-verification',
                'collapse_id' => 'sidebarTwoStep',
                'prefix' => 'auth_twostep_*',
                'children' => [
                    ['route' => 'auth_twostep_basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth_twostep_cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Errors
            [
                'translation' => 'translation.errors',
                'collapse_id' => 'sidebarErrors',
                'prefix' => 'auth_error_*',
                'children' => [
                    ['route' => 'auth_error_404_basic', 'label' => 'translation.404-basic', 'target' => '_blank'],
                    ['route' => 'auth_error_404_cover', 'label' => 'translation.404-cover', 'target' => '_blank'],
                    ['route' => 'auth_error_404_alt',   'label' => 'translation.404-alt',   'target' => '_blank'],
                    ['route' => 'auth_error_500',       'label' => 'translation.500',       'target' => '_blank'],
                    ['route' => 'auth_error_offline',   'label' => 'translation.offline-page', 'target' => '_blank'],
                ],
            ],
        ],
    ],

    'pages' => [
        'icon' => 'ri-pages-line',
        'prefix' => 'pages_*',
        'collapse_id' => 'sidebarPages',
        'translation' => 'translation.pages',
        'items' => [

            ['route' => 'pages_starter', 'label' => 'translation.starter'],

            [
                'prefix' => 'pages_profile_*',
                'collapse_id' => 'sidebarProfile',
                'label' => 'translation.profile',
                'children' => [
                    ['route' => 'pages_profile_basic', 'label' => 'translation.simple-page'],
                    ['route' => 'pages_profile_settings', 'label' => 'translation.settings'],
                ],
            ],

            ['route' => 'pages_team', 'label' => 'translation.team'],
            ['route' => 'pages_timeline', 'label' => 'translation.timeline'],
            ['route' => 'pages_faqs', 'label' => 'translation.faqs'],
            ['route' => 'pages_pricing', 'label' => 'translation.pricing'],
            ['route' => 'pages_gallery', 'label' => 'translation.gallery'],
            ['route' => 'pages_maintenance', 'label' => 'translation.maintenance'],
            ['route' => 'pages_coming_soon', 'label' => 'translation.coming-soon'],
            ['route' => 'pages_sitemap', 'label' => 'translation.sitemap'],
            ['route' => 'pages_search_results', 'label' => 'translation.search-results'],
            ['route' => 'pages_privacy_policy', 'label' => 'translation.privacy-policy'],
            ['route' => 'pages_term_conditions', 'label' => 'translation.term-conditions'],

        ],
    ],

    'landing' => [
        'icon' => 'ri-rocket-line',
        'prefix' => 'landing_*',
        'collapse_id' => 'sidebarLanding',
        'translation' => 'translation.landing',
        'items' => [
            ['route' => 'landing_basic', 'label' => 'translation.one-page', 'target' => '_self'],
            ['route' => 'landing_nft', 'label' => 'translation.nft-landing', 'target' => '_self'],
            ['route' => 'landing_job', 'label' => 'translation.job', 'target' => '_self'],
        ],
    ],


];
