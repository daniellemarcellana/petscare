<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Auth;
use Notification;

class DoctorController extends Controller
{
    //
    public $searchTerm = "";

    public function doctorshowappointment(){


        if(Auth::id()){
            if(Auth::user()->usertype==2){
                $data = appointment::all();


                return view ('doctor.doctorshowappointment', compact('data'));

            }else{
                return redirect()->back();
            }
        } else{
            return redirect('login');
        }


    }

    public function approved($id){

        $data = appointment::find($id);

        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }

    public function cancelled($id){

        $data = appointment::find($id);

        $data->status = 'Cancelled';
        $data->save();
        return redirect()->back();
    }






    public function emailview($id){

        $data = appointment::find($id);

        return view('doctor.email_view', compact('data'));
    }

    public function sendemail(Request $request, $id){

        $data = appointment::find($id);

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart,

        ];
        Notification::send($data, new SendEmailNotification($details));

        return redirect()->back()->with('message', 'Email Sent Successfully.');
    }



    public function search()
    {
        $searchTerm = $_GET["searchTerm"];

        if(empty($searchTerm))
        {
            return redirect('/showappointment');
        }

        else
        {
            if (Auth::id()) {
                if (Auth::user()->usertype == 2) {
                    $searchTerm = '%' . $_GET["searchTerm"] . '%';

                    $data = appointment::where('name', 'LIKE', $searchTerm)->paginate(6);

                    return view('doctor.doctorshowappointment', ['data' => $data]);
                }else {
                    return redirect()->back();
                }
            }else {
                return redirect('login');
            }

        }
    }

}
