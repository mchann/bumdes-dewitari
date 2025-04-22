<?php

namespace App\Http\Controllers\Pemilik;

use App\Models\Homestay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PemilikProfile;

class HomestayController extends Controller
{
    public function index()
    {
        $profile = PemilikProfile::where('user_id', Auth::id())->firstOrFail();
        $homestays = Homestay::where('pemilik_id', $profile->pemilik_id)->get();
    
        return view('pemilik.homestay.index', [
            'homestays' => $homestays,
            'canAdd' => $homestays->isEmpty(),
        ]);
    }
    
    
    public function create()
    {
        return view('pemilik.homestay.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_homestay' => 'required|string|max:255',
            'alamat_homestay' => 'required|string',
            'link_google_maps' => 'required|url',
            'deskripsi' => 'nullable|string',
            'peraturan' => 'nullable|string',
            'foto_homestay' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $profile = PemilikProfile::where('user_id', Auth::id())->firstOrFail();
    
        $data = $request->only([
            'nama_homestay', 'alamat_homestay', 'link_google_maps', 'deskripsi', 'peraturan'
        ]);
    
        $data['pemilik_id'] = $profile->pemilik_id;
    
        if ($request->hasFile('foto_homestay')) {
            $data['foto_homestay'] = $request->file('foto_homestay')->store('homestays', 'public');
        }
    
        Homestay::create($data);
    
        return redirect()->route('pemilik.homestay.index')->with('success', 'Homestay berhasil ditambahkan.');
    }
    

    public function edit($id)
    {
        $homestay = Homestay::where('pemilik_id', Auth::id())->findOrFail($id);

        return view('pemilik.homestay.edit', compact('homestay'));
    }

    public function update(Request $request, $id)
    {
        $homestay = Homestay::where('pemilik_id', Auth::id())->findOrFail($id);

        $request->validate([
            'nama_homestay'     => 'required|string|max:100',
            'link_google_maps'  => 'required|string',
            'alamat_homestay'   => 'required|string',
            'deskripsi'         => 'nullable|string',
            'peraturan'         => 'required|string',
            'foto_homestay'     => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only([
            'nama_homestay', 'link_google_maps', 'alamat_homestay',
            'deskripsi', 'peraturan'
        ]);

        if ($request->hasFile('foto_homestay')) {
            $data['foto_homestay'] = $request->file('foto_homestay')->store('homestay', 'public');
        }

        $homestay->update($data);

        return redirect()->route('pemilik.homestay.index')->with('success', 'Homestay berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $homestay = Homestay::where('pemilik_id', Auth::id())->findOrFail($id);
        $homestay->delete();

        return redirect()->route('pemilik.homestay.index')->with('success', 'Homestay berhasil dihapus!');
    }
}
