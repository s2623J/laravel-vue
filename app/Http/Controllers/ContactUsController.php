<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Page;
use Mail;
use Session;

class ContactUsController extends Controller
{
    public function index() {
        $pages = Page::All();
        // $page = Page::where('id', 1)->first();

        return view('website/contact', ['pages' => $pages]);
    }

    public function sendMessage(Request $request) {
        $input = $request->All();
        $validator = Validator::make($input, [
            'email' => 'required|email',
            'name' => 'required|string|max:50',
            'message' => 'required'
        ]);
         
        if ($validator->fails()) {
            return redirect('/contact')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // dd($input);

            $pages = Page::All();
            // $pageDetail = Page::where('id', $pageId)->first();
    
            Mail::send('mail.contactUs', ['nameInput' => $input['name'], 'messageInput' => $input['message']], function($message){
                $message->from('devdavem@yahoo.com', 'Test1');
                $message->to('devdavem@yahoo.com', 'Test2')
                ->subject('Laravel Email Test');
            });
            // return view('mail/contactUs', ['nameInput' => $input['name'], 'messageInput' => $input['message']]);  // For Testing
            return view('website/contact', ['pages' => $pages])->with('successMessage', ['Thank you! Your message has been sent!']);
        }
    }
}
