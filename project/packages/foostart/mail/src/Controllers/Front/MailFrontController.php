<?php

namespace Foostart\Mail\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Foostart\Mail\Models\MailsContacts;

class MailFrontController extends Controller
{
    public $data_view = array();

    private $obj_mail_contact = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_mail_contact = new MailsContacts();
    }

    public function index(Request $request)
    {
        //
    }

    public function contact(Request $request){
        $this->data_view = array_merge($this->data_view, array(
            'request' => $request
        ));
        return view('mail::mail_contact.front.contact', $this->data_view);
    }
    public function contactSave(Request $request){
        $mail_contact = null;
        $input = $request->all();

        $mail_contact = $this->obj_mail_contact->add_mail_contact($input);

        $this->data_view = array_merge($this->data_view, array(
            'mail_contact' => $mail_contact,
            'request' => $request
        ));

        //Message
        \Session::flash('message', trans('mail::mail_admin.message_add_successfully'));
        return Redirect::route("mail.contact");
    }
}