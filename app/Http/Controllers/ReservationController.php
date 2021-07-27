<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;

class ReservationController extends Controller
{
    public function generate($id)
    {
        $reservation = Reservation::findOrFail($id);
        // $pdf = PDF::loadView('reportes.reporte', compact('reservation'))->setPaper('a4', 'landscape')->stream();
        $pdf = App::make('dompdf.wrapper');

        // return $pdf->download('reservation');
         return $pdf->loadView('reportes.reporte', compact('reservation'))->setPaper('a4', 'landscape')->stream();

    }
}
