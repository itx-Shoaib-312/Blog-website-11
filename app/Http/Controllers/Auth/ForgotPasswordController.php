<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    public function sendResetLinkEmail(Request $request)
    {
        try {
            $this->validateEmail($request);

            // Send the password reset link
            $response = $this->broker()->sendResetLink(
                $this->credentials($request)
            );

            // Return the appropriate response based on the result
            return $response == Password::RESET_LINK_SENT
                ? $this->sendResetLinkResponse($request, $response)
                : $this->sendResetLinkFailedResponse($request, $response);
        } catch (\Exception $e) {
            // Handle the exception if the request is null or any other error occurs
            $message = 'Sorry, we could not find a user with that email address. Please try again.';
            return response()->view('errors.user-not-found', ['message' => $message], 404);
        }
    }
}
