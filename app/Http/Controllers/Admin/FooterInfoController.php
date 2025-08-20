<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FooterInfoUpdateRequest;
use App\Models\FooterInfo;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FooterInfoController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:footer index']);
    }

    function index(): View
    {
        $footerInfo = FooterInfo::first();
        return view('admin.footer-info.index', compact('footerInfo'));
    }

    function update(FooterInfoUpdateRequest $request): RedirectResponse
    {
        FooterInfo::updateOrCreate(
            ['id' => 1],
            [
                'short_description' => $request->short_description,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'copyright' => $request->copyright
            ]
        );

        // toastr()->success('Updated Successfully!');
        Flasher::addSuccess('Updated Successfully!');
        return redirect()->back();
    }
}
