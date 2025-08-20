<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactUpdateRequest;
use App\Models\Contact;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:contact index']);
    }

    function index(): View
    {
        $contact = Contact::first();
        return view('admin.contact.index', compact('contact'));
    }

    function update(ContactUpdateRequest $request): RedirectResponse
    {
        Contact::updateOrCreate(
            ['id' => 1],
            [
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'map_link' => $request->map_link
            ]
        );

        // toastr()->success('Update Successfully!');
        Flasher::addInfo('Update Successfully!');

        return redirect()->back();
    }
}
