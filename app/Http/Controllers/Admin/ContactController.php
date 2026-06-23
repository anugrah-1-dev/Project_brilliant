<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('pages.admin.contacts.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'status' => 'required|in:active,inactive'
        ]);

        Contact::create($request->all());

        Alert::success('Berhasil', 'Kontak WhatsApp berhasil ditambahkan!');
        return redirect()->route('admin.contacts.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'status' => 'required|in:active,inactive'
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        Alert::success('Berhasil', 'Kontak WhatsApp berhasil diperbarui!');
        return redirect()->route('admin.contacts.index');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        Alert::success('Berhasil', 'Kontak WhatsApp berhasil dihapus!');
        return redirect()->route('admin.contacts.index');
    }

    public function status($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = $contact->status == 'active' ? 'inactive' : 'active';
        $contact->save();

        Alert::success('Berhasil', 'Status Kontak WhatsApp berhasil diubah!');
        return redirect()->route('admin.contacts.index');
    }
}
