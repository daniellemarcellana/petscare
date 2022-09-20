<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Appointment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    //

    public function index()
    {

        $doctors = Doctor::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months = User::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');


        $datas = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

        foreach ($months as $index => $month) {
            $datas[$month - 1] = $doctors[$index];
        }

        return view('doctorschart', compact('datas'));
    }




    //SUM(numberofview)
    public function appointments()
    {
        $appointments = Appointment::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $months = User::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');


        $datas = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

        foreach ($months as $index => $month) {
            $datas[$month - 1] = $appointments[$index];
        }

        return view('appointmentschart', compact('datas'));
    }



    public function appointmentstatus()
    {

        $appointments2 = Appointment::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw('status'))
        ->pluck('count');

    $months = Appointment::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw('status'))
        ->pluck('count');


    $datas = array(0,0);

    foreach ($months as $index => $month) {
        $datas[$month-1] = $appointments2[$index];
    }

        return view('appointmentstatus', compact('datas'));
    }



    public function linechart()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = User::select(DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');


        $datas = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

        foreach ($months as $index => $month) {
            $datas[$month - 1] = $users[$index];
        }
        return view('appstatus', compact('datas'));
    }

}
