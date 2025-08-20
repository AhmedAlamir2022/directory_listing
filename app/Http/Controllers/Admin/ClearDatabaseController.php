<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class ClearDatabaseController extends Controller
{
    function index(): View
    {
        return view('admin.clear-database.index');
    }

    function createDB()
    {
        // wipe database
        Artisan::call('migrate:fresh');
        // delete files
        $this->deleteFiles();
        //seed default table and data
        Artisan::call('db:seed', ['--class' => 'UserSeeder']);
        Artisan::call('db:seed', ['--class' => 'SettingSeeder']);

        return response(['status' => 'success', 'message' => 'Database wiped successfully!']);
    }

    function deleteFiles()
    {
        $path = public_path('uploads');
        $allFiles = File::allFiles($path);
        foreach ($allFiles as $file) {
            File::delete($file->getPathname());
        }
    }
}
