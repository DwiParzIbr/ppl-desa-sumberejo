<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Kategori;
use App\Http\Requests\StoreWisataRequest;
use App\Http\Requests\UpdateWisataRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Session;
use Illuminate\Http\Request;
use File;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('dashboard.wisata.index', [
            'active' => 'wisata',
            'wisatas' => Wisata::orderBy('judul', 'desc')
                ->filter(request(['search']))
                ->paginate(10), // Ganti 10 dengan jumlah item yang ingin Anda tampilkan per halaman
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.wisata.create', [
            'active' => 'wisata',
            'categories' => Kategori::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWisataRequest $request)
    {
        $validated = $request->validated();
        $validated['thumbnail'] = $request->file('thumbnail');
        $validated['thumbnail']->move(public_path() . '/images/', $img = 'img_' . Str::random(15) . '.jpg');
        $validated['thumbnail'] = $img;
        Wisata::create($validated);
        return redirect('/dashboard/wisata')->with('success', 'Wisata telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wisata $wisata)
    {
        return view('dashboard.wisata.preview', [
            'active' => 'wisata',
            'wisata' => $wisata,
            'categories' => Kategori::get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wisata $wisata)
    {
        return view('dashboard.wisata.edit', [
            'wisata' => $wisata,
            'active' => 'wisata',
            'categories' => Kategori::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWisataRequest $request, Wisata $wisata)
    {
        if ($request->thumbnail == null) {
            $validated = $request->validated();
            $validated['thumbnail'] = $wisata->thumbnail;
            Wisata::where('id', $wisata->id)->update($validated);
        } else {
            File::delete('images/' . $wisata['thumbnail']);
            $validated = $request->validated();
            $validated['thumbnail'] = $request->file('thumbnail');
            $validated['thumbnail']->move(public_path() . '/images/', $img = 'img_' . Str::random(15) . '.jpg');
            $validated['thumbnail'] = $img;
            Wisata::where('id', $wisata->id)->update($validated);
        }
        return redirect('/dashboard/news')->with('success', 'Berita telah diubah!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wisata $wisata)
    {
        File::delete('images/' . $wisata->thumbnail);
        Wisata::destroy($wisata->id);
        return redirect('/dashboard/wisata')->with('success', 'Wisata telah dihapus!');
    }
}
