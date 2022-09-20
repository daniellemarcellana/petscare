<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Auth;
use Notification;

class AdminController extends Controller
{
    //
    public $searchTerm = "";


    public function addview(){

        if(Auth::id()){
            if(Auth::user()->usertype==1){
                return view('admin.add_doctor');

            }else{
                return redirect()->back();
            }
        } else{
            return redirect('login'); 
        }



    }

    public function upload(Request $request){

        $doctor = new doctor;

        $image =  $request->file;

        $imagename =time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage', $imagename);

        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->address=$request->address;
        $doctor->email=$request->email;
        $doctor->phone=$request->phone;
        $doctor->specialization=$request->specialization;
        $doctor->fee=$request->fee;
        $doctor->salary=$request->salary;

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Added Successfully');


    }

    public function showappointment(){


        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data = appointment::all();


                return view ('admin.showappointment', compact('data'));

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

    public function showdoctor(){

        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $data = doctor::paginate(3);
                return view('admin.showdoctor', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function deletedoctor($id){

        $data = doctor::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatedoctor($id){

        $data = doctor::find($id);


        return view('admin.update_doctor', compact('data'));
    }



    public function editdoctor(Request $request, $id){

        $doctor = doctor::find($id);

        $doctor->name = $request->name;
        $doctor->address = $request->address;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->specialization = $request->specialization;
        $doctor->fee = $request->fee;
        $doctor->salary = $request->salary;

        $image=$request->file;

        if($image){

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);

        $doctor->image = $imagename;
    }
        $doctor->save();
        return redirect()->back()->with('message','Doctor details updated successfully.');


    }


    public function emailview($id){

        $data = appointment::find($id);

        return view('admin.email_view', compact('data'));
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
                if (Auth::user()->usertype == 1) {
                    $searchTerm = '%' . $_GET["searchTerm"] . '%';

                    $data = appointment::where('name', 'LIKE', $searchTerm)->paginate(10);

                    return view('admin.showappointment', ['data' => $data]);
                }else {
                    return redirect()->back();
                }
            }else {
                return redirect('login');
            }

        }
    }


}
