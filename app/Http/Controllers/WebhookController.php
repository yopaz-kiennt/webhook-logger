<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function log(Request $request)
    {
        logger()->debug('Webhook payload: ' . $request);
    }
}
