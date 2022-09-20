<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    //

    public function getAllDoctors()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $doctors = Doctor::all();
                return view('pdf.doctor', compact('doctors'));

            } else {
                return redirect()->back();
            }
        }else {
            return redirect('login');
        }
    }

    public function downloadDoctors()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $doctors = Doctor::all();
                $pdf = PDF::loadView('pdf.doctor', compact('doctors'))->setPaper('a4', 'landscape');
                return $pdf->download('doctors.pdf');
            }else {
                return redirect()->back();
            }
        }else {
            return redirect('login');
        }
    }
}
