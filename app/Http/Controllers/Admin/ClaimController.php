<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ClaimDataTable;
use App\Http\Controllers\Controller;
use App\Models\Claim;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClaimController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:listing claims']);
    }
    
    function index(ClaimDataTable $dataTable): View | JsonResponse
    {
        return $dataTable->render('admin.claim.index');
    }

    function destroy(string $id): Response
    {
        try {
            Claim::findOrFail($id)->delete();

            return response(['status' => 'success', 'message' => 'Deleted successfully!']);
        } catch (\Exception $e) {
            logger($e);
            return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}