<?php

namespace App\Http\Controllers;
use App\Models\Lamaran;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Excel;
use App\Exports\LamaransExport;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportPDF()
    {
        $data = Lamaran::all()->toArray();
        view()->share('lamarans', $data);
        $pdf = PDF::loadView('print', $data)->setPaper('a4', 'landscape');
        return $pdf->download('Data_Keseluruhan_Lamaran.pdf');
    }

    public function exportExcel()
    {
        $file_name = 'data_keseluruhan_lamaran.xlsx';
        return Excel::download(new LamaransExport, $file_name);
    }
    public function index()
    {
        $lamarans = Lamaran::orderBy('created_at', 'DESC')->get();
        return view ('index', compact('lamarans'));
    }

    public function data (Request $request)
    {
        $search = $request->search;
        $lamarans = Lamaran::with ('response')->orderBy ('created_at', 'DESC')->get();
        return view('data', compact('lamarans'));
    }

    public function dataPetugas (Request $request)
    {
        $search = $request->search;
        $lamarans = Lamaran::with ('response')->where('nama' , 'LIKE' , '%' . $search . '%')->orderBy ('created_at', 'DESC')->get();
        return view('data_petugas', compact('lamarans')); 
    }

    public function auth(Request $request) {
        $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required',
        ]);
        $user = $request->only('email', 'password');

        if (Auth::attempt($user)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('data');
            }elseif(Auth::user()->role == 'petugas') {
                return redirect()->route('data_petugas');
            }
        } else {
            return redirect()->back()->with('gagal', 'Gagal login, coba lagi!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'age' => 'required',
            'phone_number' => 'required|max:13',
            'last_education' => 'required',
            'education_name' => 'required',
            'cv_file' => 'required|mimes:pdf',
        ]);

        $path = public_path('assets/cv/');
        $cv = $request->file('cv_file');
        $cvName = rand () . '.' . $cv->extension();
        $cv->move($path, $cvName);
  
        Lamaran::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'age' => $request->age,
            'phone_number' => $request->phone_number,
            'last_education' => $request->last_education,
            'education_name' => $request->education_name,
            'cv_file' => $cvName,
        ]);

        return redirect ('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function show(lamaran $lamaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function edit(lamaran $lamaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lamaran $lamaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Lamaran::where('id', $id)->firstOrFail();
        $cv = public_path('assets/cv/' .$data['cv_file']);
        $data->delete();
        return redirect()->back();
    }
}
