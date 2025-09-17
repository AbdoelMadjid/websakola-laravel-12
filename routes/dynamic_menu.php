<?php

use Illuminate\Support\Facades\Route;

$configs = [
    'sidebar_menu',
    'sidebar_pages',
    'sidebar_component',
];

Route::middleware(['auth'])->group(function () use ($configs) {

    foreach ($configs as $config) {
        $menus = config($config);

        if (is_array($menus)) {
            foreach ($menus as $folderKey => $items) {

                $folder = $folderKey;

                $register = function ($items, $folder) use (&$register) {
                    foreach ($items as $item) {

                        // Rekursif ke children/items
                        if (!empty($item['children'])) {
                            $register($item['children'], $folder);
                        } elseif (!empty($item['items'])) {
                            $register($item['items'], $folder);
                        }

                        // Buat route kalau ada
                        if (isset($item['route'])) {
                            $uri  = $item['route'];
                            $name = $item['route'];
                            $view = 'template.' . $folder . '.' . $item['route'];

                            if (view()->exists($view)) {
                                Route::view($uri, $view)->name($name);
                            } else {
                                Route::view($uri, 'coming-soon')->name($name);
                            }
                        }
                    }
                };

                // 🔑 Cek kalau menu utama punya route (kayak 'widget')
                if (isset($items['route'])) {
                    $uri  = $items['route'];
                    $name = $items['route'];
                    $view = 'template.' . $folder . '.' . $items['route'];

                    if (view()->exists($view)) {
                        Route::view($uri, $view)->name($name);
                    } else {
                        Route::view($uri, 'coming-soon')->name($name);
                    }
                }

                // lanjut ke submenu
                $register($items['items'] ?? $items['children'] ?? [], $folder);
            }
        }
    }
});
