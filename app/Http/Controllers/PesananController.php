<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\Status;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

#App\Http\Controllers\PesananController::adminHome;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminHome()
    {
        $pageTitle = 'Pesanan List';

        $pesanans = Order::all();
        return view('pesanan.index', [
            'pageTitle' => $pageTitle,
            'pesanans' => $pesanans,
        ]);
    }

    public function histori()
    {
        $pageTitle = 'Pesanan List';

        $userId = Auth::id();
        $pesanans = Order::where('user_id', $userId)->get();

        return view('pesanan.histori', [
            'pageTitle' => $pageTitle,
            'pesanans' => $pesanans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Pesanan';

        $layanans = Service::all();
        $statuses = Status::all();

        return view('pesanan.create', compact('pageTitle', 'layanans', 'statuses'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth()->user()->id;

        $messages = [
            'required' => ':Attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'telepon' => 'required',
            'layanan' => 'required',
            'alamat' => 'required',

        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // INSERT QUERY

        $order = new Order;
        $order->nama = $request->nama;
        $order->telepon = $request->telepon;
        $order->service_id = $request->layanan;
        $order->alamat = $request->alamat;
        $order->bobot = $request->bobot;
        $order->status_id = 1;
        $order->user_id = $userId;
        $order->save();

        if (Auth::user()->is_admin == 1) {
            return redirect()->route('pesanan.index');
        } else {
            return redirect()->route('pesanan.histori');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Pesanan';
        $layanans = Service::all();
        $pesanans = Order::find($id);
        $statuses = Status::all();
        return view('pesanan.edit', compact('pageTitle', 'layanans', 'pesanans', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'telepon' => 'required',
            'layanan' => 'required',
            'alamat' => 'required',

        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $userId = Auth()->user()->id;
        $order = Order::find($id);
        $order->nama = $request->nama;
        $order->telepon = $request->telepon;
        $order->service_id = $request->layanan;
        $order->alamat = $request->alamat;
        $order->bobot = $request->bobot;
        $order->status_id = 1;
        $order->user_id = $userId;
        $order->save();
        return redirect()->route('pesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // QUERY BUILDER
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('pesanan.index');
    }

    public function exportPdf($id)
    {
        $pesanan = Order::find($id);

        $pdf = PDF::loadView('pesanan.export_pdf', compact('pesanan'));

        return $pdf->download('invoice.pdf');
    }
}
