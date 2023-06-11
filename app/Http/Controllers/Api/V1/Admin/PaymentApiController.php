<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\StarPlay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentApiController extends Controller
{
    public function paymentConfirmation(Request $request)
    {
        $user = Auth::user();

        StarPlay::where([
            'user_id' => $user->id,
            'payed' => false,
        ])
            ->update(['payed' => true]);
    }
}