<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;

class VotingController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('voting.index');
    }

    public function vote(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'position' => 'required',
            'candidate' => 'required',
        ]);

        Voter::create($request->all());

        return redirect()->route('result');
    }

    public function result()
    {
        // Daftar calon (dalam array)
        $candidates = ['Fajar Arifin 11 PPLG A & Danisya Nayla Azahra 11 PS A', 'Tiara Shafira Meisyaluna Putri 11 ANM B dan Zaskia Medina 11 ANM B', 'Muhammad Sandy 11 BCT B dan Zefanya Shallommesta Pendani 11 PPLG B'];
    
        // Inisialisasi array asosiatif untuk menyimpan jumlah suara masing-masing calon
        $vote_counts = [];
    
        // Inisialisasi jumlah suara semua calon menjadi 0
        foreach ($candidates as $candidate) {
            $vote_counts[$candidate] = 0;
        }
    
        // Ambil hasil suara dari tabel Voters
        $vote_count = Voter::select('candidate')->selectRaw('count(*) as count')
            ->groupBy('candidate')
            ->get();
    
        // Isi jumlah suara yang sebenarnya
        foreach ($vote_count as $count) {
            $vote_counts[$count->candidate] = $count->count;
        }
    
        return view('voting.result', compact('vote_counts'));
    }
    

}
