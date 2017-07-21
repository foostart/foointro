<?php namespace Foostart\Mail\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Mail\Models\Contacts;
use Illuminate\Support\Facades\Input;
/**
 * Validators
 */
use Foostart\Mail\Validators\MailAdminValidator;

class MailContactAdminController extends Controller {

    public $data_view = array();

    private $obj_contact = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_contact = new Contacts();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

        $params = $request->all();

        $list_contact = $this->obj_contact->get_contacts($params);

        $this->data_view = array_merge($this->data_view, array(
            'contacts' => $list_contact,
            'request' => $request,
            'params' => $params
        ));
        return view('mail::mail_contact.admin.mail_contact_list', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function delete(Request $request) {

        $mail_contact = NULL;
        $mail_contact_id = $request->get('id');

        if (!empty($mail_contact_id)) {
            $mail_contact = $this->obj_contact->find($mail_contact_id);

            if (!empty($mail_contact)) {
                  //Message
                \Session::flash('message', trans('mail::mail_admin.message_delete_successfully'));

                $mail_contact->delete();
            }
        } else {

        }

        $this->data_view = array_merge($this->data_view, array(
            'mail_contact' => $mail_contact,
        ));

        return Redirect::route("admin_mail.mail_contact");
    }
    
    /**
     *
     * @return type
     */
    public function reply(Request $request){
        $mail_contact = NULL;
        $mail_contact_id = (int) $request->get('id');

        if (!empty($mail_contact_id) && (is_int($mail_contact_id))) {
            $mail_contact = $this->obj_contact->find($mail_contact_id);
        }
        $this->data_view = array_merge($this->data_view, array(
            'mail_contact' => $mail_contact,
            'request' => $request
        ));
        return view('mail::mail_contact.admin.mail_contact_reply', $this->data_view);
    }
}