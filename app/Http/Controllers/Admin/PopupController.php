<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function index()
    {
        $popup = \App\Models\Popup::first();
        return view('pages.admin.popups.index', compact('popup'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'is_active' => 'nullable'
        ]);

        $popup = \App\Models\Popup::first();
        
        if (!$popup) {
            $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096']);
            $popup = new \App\Models\Popup();
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('popups', 'public');
            $popup->image = $imagePath;
        }

        $popup->is_active = $request->has('is_active');
        $popup->save();

        return redirect()->back()->with('success', 'Pengaturan popup berhasil diperbarui.');
    }
}
