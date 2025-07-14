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
        $DataHistory = Query::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.history.index', compact('DataHistory'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $query = Query::findOrFail($id);
            $query->delete();
            return redirect()->route('admin.history.index')
            ->with('success', 'Data query berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.history.index')
            ->with('error', 'Terjadi kesalahan saat menghapus query: ' . $e->getMessage());
        }
    }

    public function destroyAll()
    {
        try {
            Query::query()->delete();
            return redirect()->route('admin.history.index')->with('success', 'Semua data history berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.history.index')->with('error', 'Terjadi kesalahan saat menghapus semua data: ' . $e->getMessage());
        }
    }

}
