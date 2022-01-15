<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Transaction;
use App\Models\TransactionProof;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdminProfileController extends Controller
{

    public function AdminDashboard(){

        $transactions = Transaction::select('invoice','payment_type','date_purchased','total_price','order_status', 'transaction_proof')->groupBy('invoice','payment_type','date_purchased','total_price','order_status', 'transaction_proof')->get();
        
        return view('admin.index', compact('transactions'));
    }

    public function ApproveTransaction($invoice){

        $transaction = Transaction::where('invoice', $invoice);
        $transaction->update([
            "order_status" => "Finished",
        ]);

        return redirect()->back();
    }

    public function UnapproveTransaction($invoice){

        $transaction = Transaction::where('invoice', $invoice);
        $transaction->update([
            "order_status" => "Rejected",
        ]);

        return redirect()->back();

    }



    public function AdminProfile(){

        $admin = Admin::find(1);

        return view('admin.admin_profile_view', compact('admin'));

    }

    public function AdminProfileEdit(){
        $edit = Admin::find(1);

        return view('admin.admin_profile_edit', compact('edit'));
    }

    public function AdminProfileStore(Request $request){

        $request->validate([
                'name' => 'required',
                'email' => 'required',
                'profile_photo_path' => 'mimes:jpg,jpeg,png|max:2048',
            ],
            [
                'name.required' => 'Please input the name',
                'email.required' => 'Please input the email',
            ]
        );
        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            
            $filename = hexdec(uniqid());
            $extension = strtolower($file->getClientOriginalExtension());
            $complete_file_name = $filename.'.'.$extension;

            @unlink(public_path('upload/profile_images/'. $data->profile_photo_path));

            Image::make($file)->resize(500,500)->save('upload/profile_images/'.$complete_file_name);

            // $file->move(public_path('upload/profile_images'), $complete_file_name);
            $data['profile_photo_path'] = $complete_file_name;
        }    
        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);

    }

    public function AdminChangePassword(){

        return view('admin.admin_change_password');
    }

    public function AdminUpdatePassword(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Admin::find(1)->password;

        if(Hash::check($request->oldpassword, $hashedPassword)){
            $admin = Admin::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();

            return redirect()->route('admin.logout');
        } else {
            return redirect()->back();
        }

    }

}
