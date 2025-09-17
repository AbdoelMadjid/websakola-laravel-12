@php
    $submenu = $menu['items'] ?? ($menu['children'] ?? null);
    $hasChildren = is_array($submenu) && count($submenu) > 0;

    // cek active parent
    $isActiveParent = isset($menu['prefix']) && Request::is($menu['prefix'] . '*') ||
                      (isset($menu['route']) && Request::is($menu['route']));

    // cek active child
    $isActiveChild = false;
    if ($hasChildren) {
        foreach ($submenu as $sub) {
            $subActive = (isset($sub['prefix']) && Request::is($sub['prefix'] . '*')) ||
                         (isset($sub['route']) && Request::is($sub['route']));
            if ($subActive) {
                $isActiveChild = true;
                break;
            }

            // cek level 2
            $subChildren = $sub['items'] ?? ($sub['children'] ?? null);
            if (is_array($subChildren)) {
                foreach ($subChildren as $sub2) {
                    $sub2Active = (isset($sub2['prefix']) && Request::is($sub2['prefix'] . '*')) ||
                                  (isset($sub2['route']) && Request::is($sub2['route']));
                    if ($sub2Active) {
                        $isActiveChild = true;
                        break 2;
                    }
                }
            }
        }
    }

    $isActive = $isActiveParent || $isActiveChild ? 'active open' : '';
@endphp

<li class="nav-item">
    <a class="nav-link menu-link {{ $isActive }}"
       href="{{ $hasChildren ? '#' . ($menu['collapse_id'] ?? 'menuCollapse') : url($menu['route'] ?? '#') }}"
       @if($hasChildren)
            data-bs-toggle="collapse"
            role="button"
            aria-expanded="{{ $isActive ? 'true' : 'false' }}"
            aria-controls="{{ $menu['collapse_id'] ?? 'menuCollapse' }}"
       @endif
       target="{{ $menu['target'] ?? '_self' }}">

        @if(isset($menu['icon']))
            <i class="{{ $menu['icon'] }}"></i>
        @endif
        <span>@lang($menu['translation'] ?? ($menu['label'] ?? ''))</span>

        @if(isset($menu['badge']))
            <span class="badge {{ $menu['badge']['class'] ?? 'bg-primary' }} me-4">
                @lang($menu['badge']['label'] ?? '')
            </span>
        @endif
    </a>

    @if($hasChildren)
        <div class="collapse menu-dropdown {{ $isActive ? 'show' : '' }}" id="{{ $menu['collapse_id'] }}">
            <ul class="nav nav-sm flex-column">
                @foreach($submenu as $sub)
                    @include('layouts.admin.sidebar-block', [
                        'menu' => $sub
                    ])
                @endforeach
            </ul>
        </div>
    @endif
</li>
