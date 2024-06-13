<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\NotifyUser;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //method returns admin dashboard page
    public function dashboard(){
        $users = User::where('isAdmin', false)->get();
        $numberOfUsers = User::count();

        return view('admin.dashboard', [
            'users' => $users,
            'numberOfUsers' => $numberOfUsers
        ]);
    }

    // METHOD DISPLAYS USER'S BILLING ADDRESS FROM THE ADMIN DASHBOARD
    public function userBillingAddress(User $userId){
        $address = $userId->address;
        $numberOfUsers = User::count(); #temporary variable

        return view('admin.user-billing-address', [
            'address' => $address,
            'numberOfUsers' => $numberOfUsers #temporary variable
        ]);
    }

    // METHOD RETURNS EMAIL NOTIFICATION PAGE
    public function notify(User $userId){
        $user = $userId;
        $numberOfUsers = User::count(); #temporary variable

        return view('admin.notify', [
            'numberOfUsers' => $numberOfUsers, #temporary variable
            'user' => $user
        ]);
    }

    // METHOD DELETES USER ACCOUNT
    public function delete(User $userId){
        $userId->delete();
        return back();
    }

    // LOGOUT METHOD
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/');
    }

    // SENDS NOTIFICATION TO USER
    public function sendNotification(User $userId, Request $request){
        // $notification = [
        //     'to' => $request->to,
        //     'from' => $request->from,
        //     'subject' => $request->subject,
        //     'body' => $request->body,
        // ];

        // $userId->notify(new NotifyUser($notification));
        dd($request->all());
        $userId->notify(new NotifyUser($request));

        return back();
    }
}
