<?php

namespace App\Http\Controllers;

use App\Models\Dislike;
use App\Models\Kata;
use App\Models\Like;
use Illuminate\Http\Request;

class KataController extends Controller
{
    // Homepage
    public function index()
    {
    $kataHariIni = Kata::with('user')->orderBy('created_at', 'desc')->first();

        $searchKata = Kata::inRandomOrder()->take(20)->pluck('kata');

        $randomKata = Kata::inRandomOrder()->with('user')->take(3)->get();

        return view('index', [
            'kataHariIni' => $kataHariIni,
            'searchKata' => $searchKata,
            'randomKata' => $randomKata
        ]);
    }

    // Istilah Regional
    public function istilah()
    {
        $kataIstilah = Kata::where('kategori', 'istilah_regional')->with('user')->take(4)->get();

        return view('kategori.istilah', [
            'kataIstilah' => $kataIstilah
        ]);
    }

    // Budaya Internet
    public function budaya()
    {
        $kataBudaya = Kata::where('kategori', 'budaya_internet')->with('user')->take(4)->get();

        return view('kategori.budaya', [
            'kataBudaya' => $kataBudaya
        ]);
    }

    // Teknologi dan Gadget
    public function teknologi()
    {
        $kataTeknologi = Kata::where('kategori', 'teknologi_gadget')->with('user')->take(4)->get();

        return view('kategori.teknologi', [
            'kataTeknologi' => $kataTeknologi
        ]);
    }

    // Akronim
    public function akronim()
    {
        $kataAkronim = Kata::where('kategori', 'akronim')->with('user')->take(4)->get();

        return view('kategori.akronim', [
            'kataAkronim' => $kataAkronim
        ]);
    }

    public function create()
    {
        return view('kata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kata' => 'required',
            'definisi' => 'required',
            'kategori' => 'required'
        ]);

        $kata = Kata::create([
            'kata' => $request->kata,
            'definisi' => $request->definisi,
            'definisi_contoh' => $request->definisi_contoh,
            'kategori' => $request->kategori,
            'like' => 0,
            'dislike' => 0,
            'user_id' => auth()->id()
        ]);

        if ($kata){
            return redirect()->route('home')->with('success', 'Room created successfully');
        }else{
            return redirect()->route('home')->with('error', 'Room failed to create');
        }
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $kata = Kata::where('kata', 'like', '%' . $search . '%')->with('user')->get(); 

        return view('kata.search', [
            'kata' => $kata,
            'search' => $search
        ]);
    }

    public function like(Request $request, $id)
    {
        $userId = $request->input('userId');
        $kata = Kata::findOrFail($id);
        
        $isliked = Like::where('user_id', $userId)->where('kata_id', $id)->first();
        
        if($isliked){
            $isliked->delete();
            $kata->decrement('like');
        } else {
            $isdisliked = Dislike::where('user_id', $userId)->where('kata_id', $id)->first();
            if($isdisliked){
                $isdisliked->delete();
                $kata->decrement('dislike');
            }

            Like::create([
                'user_id' => $userId,
                'kata_id' => $id
            ]);
            $kata->increment('like');
        }

        return response()->json(['likes' => $kata->like, 'dislikes' => $kata->dislike]);
    }

    public function dislike(Request $request, $id)
    {
        $userId = $request->input('userId');
        $kata = Kata::findOrFail($id);
        
        $isdisliked = Dislike::where('user_id', $userId)->where('kata_id', $id)->first();
        
        if($isdisliked){
            $isdisliked->delete();
            $kata->decrement('dislike');
        } else {
            $isliked = Like::where('user_id', $userId)->where('kata_id', $id)->first();
            if($isliked){
                $isliked->delete();
                $kata->decrement('like');
            }

            Dislike::create([
                'user_id' => $userId,
                'kata_id' => $id
            ]);
            $kata->increment('dislike');
        }

        return response()->json(['dislikes' => $kata->dislike, 'likes' => $kata->like]);
    }
}
