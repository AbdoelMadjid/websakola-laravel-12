<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

     //Language Translation
    Route::get('lang/switch/{lang}', function ($lang) {
        Session::put('lang', $lang);
        return redirect()->back();
    })->name('lang.switch');
});

// gabungkan semua config
$menus = array_merge(
    config('sidebar_menus', []),
    config('sidebar_pages', []),
    config('sidebar_component', [])
);

Route::group(['middleware' => ['auth']], function () use ($menus) {

    $createRoutes = function ($items) use (&$createRoutes) {
        foreach ($items as $item) {

            if (isset($item['folder'], $item['route'])) {
                $folder = $item['folder'];

                // convert route name underscore -> view file dash
                $pageFile = str_replace('_', '-', $item['route']);

                $routeName = $item['route'];

                Route::get("/{$folder}/{$pageFile}", function () use ($folder, $pageFile) {
                    $viewPath = "template.{$folder}.{$pageFile}";
                    if (!view()->exists($viewPath)) {
                        abort(404, "Halaman {$folder}/{$pageFile} tidak ditemukan!");
                    }
                    return view($viewPath, compact('folder', 'pageFile'));
                })->name($routeName);
            }

            // loop rekursif child menu
            if (!empty($item['items'])) {
                $createRoutes($item['items']);
            } elseif (!empty($item['children'])) {
                $createRoutes($item['children']);
            }
        }
    };

    $createRoutes($menus);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/website.php';
/* require __DIR__ . '/template.php';
 */
