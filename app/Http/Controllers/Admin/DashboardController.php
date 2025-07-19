<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Hadist;
use App\Models\Kitab;
use App\Models\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalBuku = Buku::count();
        $totalKitab = Kitab::count();
        $totalHadist = Hadist::count();
        $totalQuery = Query::count();
        // Data untuk History Chart
        $days = collect(range(0, 29))->map(function ($i) {
            return Carbon::now()->subDays($i)->format('d M');
        })->reverse()->values();

        $dailyHistories = collect(range(0, 29))->map(function ($i) {
            return Query::whereDate('created_at', Carbon::now()->subDays($i)->toDateString())
                ->count();
        })->reverse()->values();

        return view('admin.dashboard', compact('totalBuku', 'totalKitab', 'totalHadist', 'totalQuery', 'days', 'dailyHistories'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit()
    {
        $user = Auth::user();
        return view('admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user(); // Ambil data user yang sedang login

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);
    
        return redirect()->route('admin.dashboard.profile')->with('success', 'Profil berhasil diperbarui.');
    }

    /**
     * Display the profile of the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    /**
     * Update the password of the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak cocok.']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Password berhasil diperbarui.');
    }
}
