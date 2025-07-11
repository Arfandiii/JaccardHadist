<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Query;

use Illuminate\Http\Request;

class HistoryQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DataHistory = Query::paginate(20);
        return view('admin.history.index', compact('DataHistory'));
    }
}
