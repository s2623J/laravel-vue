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

    public function sendMsg(Request $request) {
        $input = $request->All();
        $validator = Validator::make($input, [
            'email' => 'required|email',
            'name' => 'required|string',
            'message' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect('/contact-us')
                ->withErrors($validator)
                ->withInput();
        } else {
            // dd($input);

            $pages = Page::All();
            // $pageDetail = Page::where('id', $pageId)->first();
    
            Mail::send('mails.contactUs', ['nameInput' => $input['name'], 'messageInput' => $input['message']], function($message){
                $message->from('devdavem@yahoo.com', 'Test1');
                $message->to('devdavem@yahoo.com', 'Test2')
                ->subject('Laravel Email Test');
            });
            // return view('mail/contactUs', ['nameInput' => $input['name'], 'messageInput' => $input['message']]);  // For Testing
            return view('website.contact', ['pages' => $pages])->with('successMessage', ['Thank you! Your message has been sent!']);
        }
    }

    public function sendMsgAjax(Request $request)
    {
        $input = $request->all();
        // dd($input);

        $validator = Validator::make($input, [
            'email' => 'required|email',
            'name' => 'required|string',
            'message' => 'required'
        ]);
         
        if ($validator->fails()) {
            return redirect('/contact-us')
                ->withErrors($validator)
                ->withInput();
        } else {
            $pages = Page::All();

            Mail::send('mails.contactUs', ['nameInput' => $input['name'], 'messageInput' => $input['message']], function($message){
                $message->from('devdavem@yahoo.com', 'Test1');
                $message->to('devdavem@yahoo.com', 'Test2')
                ->subject('Laravel Email Test');
            });
            
            return [
                'success' => true, 
                'message' => 'Thank you. We will get back to you as soon as possible.'
            ];
        }
    }
}
