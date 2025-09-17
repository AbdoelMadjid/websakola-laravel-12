<?php

return [

    'auth' => [
        'icon' => 'ri-account-circle-line',
        'prefix' => 'auth-*',
        'collapse_id' => 'sidebarAuth',
        'translation' => 'translation.authentication',
        'items' => [

            // Sign In
            [
                'translation' => 'translation.signin',
                'collapse_id' => 'sidebarSignIn',
                'prefix' => 'auth-signin-*',
                'children' => [
                    ['route' => 'auth-signin-basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth-signin-cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Sign Up
            [
                'translation' => 'translation.signup',
                'collapse_id' => 'sidebarSignUp',
                'prefix' => 'auth-signup-*',
                'children' => [
                    ['route' => 'auth-signup-basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth-signup-cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Password Reset
            [
                'translation' => 'translation.password-reset',
                'collapse_id' => 'sidebarResetPass',
                'prefix' => 'auth-pass-reset-*',
                'children' => [
                    ['route' => 'auth-pass-reset-basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth-pass-reset-cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Password Change
            [
                'translation' => 'translation.password-create',
                'collapse_id' => 'sidebarchangePass',
                'prefix' => 'auth-pass-change-*',
                'children' => [
                    ['route' => 'auth-pass-change-basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth-pass-change-cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Lock Screen
            [
                'translation' => 'translation.lock-screen',
                'collapse_id' => 'sidebarLockScreen',
                'prefix' => 'auth-lockscreen-*',
                'children' => [
                    ['route' => 'auth-lockscreen-basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth-lockscreen-cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Logout
            [
                'translation' => 'translation.logout',
                'collapse_id' => 'sidebarLogout',
                'prefix' => 'auth-logout-*',
                'children' => [
                    ['route' => 'auth-logout-basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth-logout-cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Success Message
            [
                'translation' => 'translation.success-message',
                'collapse_id' => 'sidebarSuccessMsg',
                'prefix' => 'auth-success-msg-*',
                'children' => [
                    ['route' => 'auth-success-msg-basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth-success-msg-cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Two Step Verification
            [
                'translation' => 'translation.two-step-verification',
                'collapse_id' => 'sidebarTwoStep',
                'prefix' => 'auth-twostep-*',
                'children' => [
                    ['route' => 'auth-twostep-basic', 'label' => 'translation.basic', 'target' => '_blank'],
                    ['route' => 'auth-twostep-cover', 'label' => 'translation.cover', 'target' => '_blank'],
                ],
            ],

            // Errors
            [
                'translation' => 'translation.errors',
                'collapse_id' => 'sidebarErrors',
                'prefix' => 'auth-error-*',
                'children' => [
                    ['route' => 'auth-error-404-basic', 'label' => 'translation.404-basic', 'target' => '_blank'],
                    ['route' => 'auth-error-404-cover', 'label' => 'translation.404-cover', 'target' => '_blank'],
                    ['route' => 'auth-error-404-alt',   'label' => 'translation.404-alt',   'target' => '_blank'],
                    ['route' => 'auth-error-500',       'label' => 'translation.500',       'target' => '_blank'],
                    ['route' => 'auth-error-offline',   'label' => 'translation.offline-page', 'target' => '_blank'],
                ],
            ],
        ],
    ],

    'page' => [
        'icon' => 'ri-pages-line',
        'prefix' => 'pages-*',
        'collapse_id' => 'sidebarPages',
        'translation' => 'translation.pages',
        'items' => [

            ['route' => 'pages-starter', 'label' => 'translation.starter'],

            [
                'prefix' => 'pages-profile-*',
                'collapse_id' => 'sidebarProfile',
                'label' => 'translation.profile',
                'children' => [
                    ['route' => 'pages-profile-basic', 'label' => 'translation.simple-page'],
                    ['route' => 'pages-profile-settings', 'label' => 'translation.settings'],
                ],
            ],

            ['route' => 'pages-team', 'label' => 'translation.team'],
            ['route' => 'pages-timeline', 'label' => 'translation.timeline'],
            ['route' => 'pages-faqs', 'label' => 'translation.faqs'],
            ['route' => 'pages-pricing', 'label' => 'translation.pricing'],
            ['route' => 'pages-gallery', 'label' => 'translation.gallery'],
            ['route' => 'pages-maintenance', 'label' => 'translation.maintenance', 'target' => '_blank'],
            ['route' => 'pages-coming-soon', 'label' => 'translation.coming-soon', 'target' => '_blank'],
            ['route' => 'pages-sitemap', 'label' => 'translation.sitemap'],
            ['route' => 'pages-search-results', 'label' => 'translation.search-results'],
            ['route' => 'pages-privacy-policy', 'label' => 'translation.privacy-policy'],
            ['route' => 'pages-term-conditions', 'label' => 'translation.term-conditions'],

        ],
    ],

    'landing' => [
        'icon' => 'ri-rocket-line',
        'prefix' => 'landing-*',
        'collapse_id' => 'sidebarLanding',
        'translation' => 'translation.landing',
        'items' => [
            ['route' => 'landing-basic', 'label' => 'translation.one-page', 'target' => '_blank'],
            ['route' => 'landing-nft', 'label' => 'translation.nft-landing', 'target' => '_blank'],
            ['route' => 'landing-job', 'label' => 'translation.job', 'target' => '_blank'],
        ],
    ],


];
