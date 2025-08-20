<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TermsAndCondition;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TermsAndConditionController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:terms and condition index']);
    }

    function index(): View
    {
        $TermsAndCondition = TermsAndCondition::first();
        return view('admin.terms-and-condition.index', compact('TermsAndCondition'));
    }

    function update(Request $request): RedirectResponse
    {
        $request->validate([
            'description' => ['required']
        ]);

        TermsAndCondition::updateOrCreate(
            ['id' => 1],
            ['description' => $request->description]
        );

        // toastr()->success('Updated Successfully!');
        Flasher::addInfo('Updated Successfully!');

        return redirect()->back();
    }
}
