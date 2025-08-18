<?php
namespace App\Services;

use App\Models\Setting;
use Cache;
// use Illuminate\Support\Facades\Cache as FacadesCache;

class SettingsService {

    function getSettings() {
        return Cache::rememberForever('settings', function(){
            return Setting::pluck('value', 'key')->toArray();
        });
    }

    function setGlobalSettings() {
        $settings = $this->getSettings();
        config()->set('settings', $settings);
    }

    function clearCachedSettings() {
        Cache::forget('settings');
    }
}
