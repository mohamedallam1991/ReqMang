<?php

namespace App\Http\Controllers\Backend;

use App\Charts\DashboardChart;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        $chart = new DashboardChart();
        $days = $this->generateDateRange(Carbon::now()->subDays(30), Carbon::now());
        $users = [];

        foreach ($days as $day){
            $users = User::whereDate('created_at', $day)->where('id', Auth::id())->count();
        }

        $chart->dataset('Registered Users', 'line', $users);
        $chart->labels($days);

        return view('admin.index', compact('chart'));
    }

    private function generateDateRange(Carbon $start_date, Carbon $end_date){
        $dates = [];
        for($date = $start_date; $date->lte($end_date); $date->addDay()){
            $dates[] = $date->format('Y-m-d');
        }
    }

    public function UserView(){
    	// $allData = User::all();
    	$data['allData'] = User::get();
    	return view('backend.user.view_user',$data);

    }


    public function UserAdd(){
    	return view('backend.user.add_user');
    }


    public function UserStore(Request $request){

    	$validatedData = $request->validate([
    		'email' => 'required|unique:users',
    		'name' => 'required',
    	]);

    	$data = new User();
        $code = rand(0000,9999);
    	// $data->usertype = 'Admin';
        $data->usertype = $request->usertype;
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->password = bcrypt($code);
        // $data->code = $code;
    	$data->save();

    	$notification = array(
    		'message' => 'User Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('user.view')->with($notification);

    }



    public function UserEdit($id){
    	$editData = User::find($id);
    	return view('backend.user.edit_user',compact('editData'));

    }



    public function UserUpdate(Request $request, $id){

    	$data = User::find($id);
    	$data->name = $request->name;
    	$data->email = $request->email;
        $data->usertype = $request->usertype;
    	$data->save();

    	$notification = array(
    		'message' => 'User Updated Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('user.view')->with($notification);

    }



    public function UserDelete($id){
    	$user = User::find($id);
    	$user->delete();

    	$notification = array(
    		'message' => 'User Deleted Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('user.view')->with($notification);

    }





}
