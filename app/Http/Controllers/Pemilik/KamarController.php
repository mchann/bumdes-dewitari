<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use App\Models\Homestay;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\PemilikProfile;
use App\Models\Fasilitas;

class KamarController extends Controller
{
    private function getPemilikHomestays()
    {
        $profile = PemilikProfile::where('user_id', Auth::id())->firstOrFail();
        return Homestay::where('pemilik_id', $profile->pemilik_id)->get();
    }

    public function index()
    {
        $homestays = $this->getPemilikHomestays();
        $kamars = Kamar::whereIn('homestay_id', $homestays->pluck('homestay_id'))
                    ->with('homestay', 'fasilitas')
                    ->get();

        return view('pemilik.kamar.index', compact('kamars'));
    }

    public function create()
    {
        $homestays = $this->getPemilikHomestays();
        $fasilitas = Fasilitas::all(); 
        
        return view('pemilik.kamar.create', compact('homestays', 'fasilitas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'homestay_id' => 'required|exists:homestays,homestay_id,pemilik_id,'.Auth::user()->pemilikProfile->pemilik_id,
            'nama_kamar' => 'required|max:100',
            'kapasitas' => 'required|max:10',
            'harga' => 'required|numeric',
            'foto_kamar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
    
        // Menyimpan foto kamar
        $imagePath = $request->file('foto_kamar')->store('kamar', 'public');
    
        // Menyimpan data kamar
        $kamar = Kamar::create([
            'homestay_id' => $validated['homestay_id'],
            'nama_kamar' => $validated['nama_kamar'],
            'kapasitas' => $validated['kapasitas'],
            'harga' => $validated['harga'],
            'foto_kamar' => $imagePath
        ]);
    
        // Menyimpan fasilitas yang dipilih ke dalam tabel pivot
        if ($request->has('fasilitas')) {
            $kamar->fasilitas()->sync($request->fasilitas); // Menyimpan relasi ke kamar_fasilitas
        }
    
        return redirect()->route('pemilik.kamar.index')->with('success', 'Kamar berhasil ditambahkan');
    }
    
    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        $homestays = $this->getPemilikHomestays();
        $fasilitas = Fasilitas::all(); // Tambahkan ini
        return view('pemilik.kamar.edit', compact('kamar', 'homestays', 'fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $kamar = Kamar::whereIn('homestay_id', $this->getPemilikHomestays()->pluck('homestay_id'))
                    ->findOrFail($id);

        $validated = $request->validate([
            'homestay_id' => 'required|exists:homestays,homestay_id,pemilik_id,'.Auth::user()->pemilikProfile->pemilik_id,
            'nama_kamar' => 'required|max:100',
            'kapasitas' => 'required|max:10',
            'harga' => 'required|numeric',
            'foto_kamar' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if($request->hasFile('foto_kamar')){
            Storage::delete('public/'.$kamar->foto_kamar);
            $validated['foto_kamar'] = $request->file('foto_kamar')->store('kamar', 'public');
        }

        $kamar->update($validated);
        $kamar->fasilitas()->sync($request->fasilitas);
        return redirect()->route('pemilik.kamar.index')->with('success', 'Kamar berhasil diupdate');
    }

    public function destroy($id)
    {
        $kamar = Kamar::whereIn('homestay_id', $this->getPemilikHomestays()->pluck('homestay_id'))
                    ->findOrFail($id);
                    
        Storage::delete('public/'.$kamar->foto_kamar);
        $kamar->delete();

        return redirect()->back()->with('success', 'Kamar berhasil dihapus');
    }
}