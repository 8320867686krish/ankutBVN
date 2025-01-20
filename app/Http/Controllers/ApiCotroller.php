<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Mandal;
use App\Models\Setting;
use App\Models\User;
use App\Models\Xetra;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Throwable;

class ApiCotroller extends Controller
{
    //
    public function xetrasList()
    {
        $xetras  = Xetra::select('id', 'name')->get();
        return response()->json(['status' => true, 'message' => 'successfully fetch', 'xetras' => $xetras], 200);
    }
    public function mandals($xetra_id = null)
    {

        if ($xetra_id) {
            // Logic when xetra_id is present
            $mandals  = Mandal::select('id', 'mandal_name', 'xetra_id')->where('xetra_id', $xetra_id)->get()->toArray();
            if (@$mandals) {
                return response()->json(['status' => true, 'message' => 'successfully fetch', 'mandals' => $mandals], 200);
            } else {
                return response()->json(['status' => true, 'message' => 'Not Found', 'mandals' => $mandals], 200);
            }
        } else {
            // Handle case where xetra_id is not provided
            return response()->json(['status' => false, 'error' => 'xetra_id is required'], 200);
        }
    }
    public function login(Request $request)
    {
        $post = $request->input();
        if(Auth::attempt(['email' => $post['email'], 'password' => $post['password']])){ 
            $user = Auth::user();
            $token = $user->createToken('MyApp')->plainTextToken;
$user['token'] = $token;
            return response()->json(['status' => true, 'message' => 'successfully fetch', 'user' => $user], 200);
        }else{ 
            return response()->json(['status' => false, 'error' => 'Invalid Credential'], 200);
        } 
       
    }
    public function checkLogin(Request $request)
    {
       
        $user = Auth::user();
        if($user){
            return response()->json(['status' => true, 'message' => 'successfully fetch'], 200);

        }else{
            return response()->json(['status' => false, 'error' => 'invalid'], 200);

        }
    }
    public function logout()
    {
        try {
            // Validate the request
            $user = Auth::user();
            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'User not authenticated.',
                ], 401);
            }

            // Revoke user tokens
            $user->tokens()->delete();

            // Log the logout activity
            Log::info('User logged out successfully.', ['user_id' => $user->id]);

            // Log the user out
            Auth::guard('web')->logout(); // Assuming 'web' guard is used

            // Return success response
            return response()->json([
                'status' => true,
                'message' => 'Logged out successfully.',
            ]);
        } catch (Throwable $th) {
            // Log the error
            Log::error('Logout error: ' . $th->getMessage());

            // Return error response
            return response()->json([
                'status' => false,
                'error' => 'An error occurred while processing your request.',
            ], 500);
        }
    }

    public function settingSave(Request $post)
    {
        $dateInput = $post->input('date');

        // Convert the input date to a Carbon instance
        $date = Carbon::createFromFormat('d/m/Y', $dateInput);
        $start_date = $date->format('Y-m-d');

        // Add 365 days
        $newDate = $date->addDays(365);

        // Format the new date as dd/mm/yy
        $end_date = $newDate->format('Y-m-d');
        Setting::query()->delete();

        Setting::create([
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);
        return response()->json(['status' => true, 'message' => 'successfully save'], 200);
    }
    public function bookingsave(Request $request)
    {
        $post = $request->input();
        //checkdate range
        $settingsData = Setting::first();
        $start_date = Carbon::createFromFormat('Y-m-d', $settingsData->start_date);
        $end_date = Carbon::createFromFormat('Y-m-d', $settingsData->end_date);

        // Convert booking_date to Y-m-d format
        $date = Carbon::createFromFormat('d/m/Y', $post['booking_date']);
        $post['booking_date'] = $date->format('Y-m-d');
        if ($date->between($start_date, $end_date)) {
            //get totalcount
            $bookingCount = Booking::count();
            $dayLimit = Booking::where('booking_date', $post['booking_date'])->count();
            $isEnable = false;
            if ($bookingCount <= 365) {
                if ($dayLimit < 1) {
                    $isEnable = true;
                } else {
                    $isEnable = false;
                }
            } else {
                if ($dayLimit < 3) {
                    $isEnable = true;
                } else {
                    $isEnable = false;
                }
            }
            if ($isEnable == false) {
                return response()->json(['status' => false, 'error' => 'આ તારીખે કોઈ બુકિંગ ઉપલબ્ધ નથી'], 200);
            } else {
                Booking::create($post);
                return response()->json(['status' => true, 'message' => 'સફળતાપૂર્વક સાચવ્યું!!'], 200);
            }
        } else {
            return response()->json(['status' => false, 'error' => 'આ તારીખે કોઈ બુકિંગ ઉપલબ્ધ નથી'], 200);
        }
    }
    public function setting(Request $request){
        $setting = Setting::select('start_date','id')->first();
        if(@$setting){
            $message = "Successfully fetch";
            $status= true;
        }else{
           $message = "No Found";
           $setting = [];
           $status= false;
        }
        return response()->json(['status' => $status, 'messgae' => $message,'setting'=>$setting], 200);
    }
    public function bookingView(Request $request){
        $booking = Booking::with(['xetra:id,name','manadal:id,mandal_name'])->get()->toArray();
        if(@$booking){
            $message = "Successfully fetch";
            $status= true;
        }else{
           $message = "No Found";
           $status= false;
        }
        return response()->json(['status' => $status, 'messgae' => $message,'booking'=>$booking], 200);

    }
}
