<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function add(Request $request)
    {
        $img = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('images'), $img);

        Showroom::create([
            'name' => $request->nama,
            'owner' => $request->pemilik,
            'user_id' => auth()->user()->id,
            'brand' => $request->merk,
            'purchase_date' => $request->tanggalbeli,
            'description' => $request->desc,
            'image' => $img,
            'status' => $request->status,
        ]);
        return redirect('/listcar');
    }
}
