<?php

/** Set Sidebar Active */
if (!function_exists('setSidebarActive')) {
    function setSidebarActive(array $routes): ?string
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'active';
            }
        }

        return null;
    }
}

/** get limiting*/
if (!function_exists('truncate')) {
    function truncate(string $text, int $limit = 23): ?string
    {
        return \Str::of($text)->limit($limit);
    }
}