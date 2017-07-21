<?php namespace Foostart\Mail\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Mail\Models\Mails;
use Foostart\Mail\Models\MailsContacts;
use Foostart\Mail\Models\MailsHistories;
use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
/**
 * Validators
 */
use Foostart\Mail\Validators\MailAdminValidator;

class MailSendController extends Controller {
	public $data_view = array();

    private $obj_mail = NULL;
    private $obj_mail_contact = NULL;
    private $obj_mail_history = NULL;
    private $obj_validator = NULL;

    private $file_extension_temp = NULL;

    public function __construct() {
        $this->obj_mail = new Mails();
        $this->obj_mail_contact = new MailsContacts();
        $this->obj_mail_history = new MailsHistories();
    }

    /**
     *
     * @return type
     */
    /*
        Wrong when send. Go to https://www.google.com/settings/security/lesssecureapps and active it.
    */
    public function mailSend(Request $request){
        $this->obj_validator = new MailAdminValidator();
        $mail = NULL;
        $mail_contact = NULL;
        $mail_history = NULL;
        $mail_id = (int) $request->get('id');
        $mail_name = (string) $request->get('mail_name');
        $count_mail = 0;

        // Check connect internet
        /*if(!$this->pingAddress('8.8.8.8')){
            $request->request->add(['internet_interrupt' => 'Not internet']);
        }*/ //With cmd will not run in real website
        if(!$this->internet_checker()){
            $request->request->add(['internet_interrupt' => 'Not internet']);
        }
        
        $input = $request->all();

        // var_dump($input);
        // die();

        if (!$this->obj_validator->validate($input)) {
            $data['errors'] = $this->obj_validator->getErrors();
            
            if (!empty($mail_id) && is_int($mail_id)) {
                $mail = $this->obj_mail->find($mail_id);
                $mail_contact = $this->obj_mail_contact->find($mail_id);
                $mail_history = $this->obj_mail_history->find($mail_id);
            }

            $this->data_view = array_merge($this->data_view, array(
                'mail' => $mail,
                'mail_contact' => $mail_contact,
                'mail_history' => $mail_history,
                'request' => $request
            ), $data);

            if ($request->has('prepare')){
                return view('mail::mail_send.admin.mail_send', 
                    $this->data_view);
            }
            elseif ($request->has('compose')) {
                return view('mail::mail_send.admin.mail_compose', 
                    $this->data_view);
            }
            elseif ($request->has('reply')) {
                return view('mail::mail_contact.admin.mail_contact_reply', 
                    $this->data_view);
            }
            else {
                return view('mail::mail_history.admin.mail_history_forward', 
                    $this->data_view);
            }
        }
        else{
            // $photos = $input['fileToUpload'];
            // $this->storageFile($photos);
            // var_dump($photos);
            // die();
            $arr_mail = explode(' ', $mail_name);
            $count_mail = count($arr_mail);
            $file = Input::file('fileToUpload');
            $file_path = null;

            if($file != null){
                $file_path = $this->storageFile($file);//.$this->file_extension_temp;// $this->attachFile($file);
            }
            elseif(!empty($input['mail_attach'])) {
                $file_path = $input['mail_attach'];
            }

            $data = [
                'confirm' => 'confirm',
                'author' => 'ADMIN PACKAGE',
                'subject' => $input['mail_subject'],
                'contents' => $input['mail_content'],
                'file_path' => $file_path
                ];
            // var_dump($data);
            // die();
            if($request->has('prepare') || $request->has('reply')){
                if (!empty($mail_id) && (is_int($mail_id))) {
                    if($request->has('prepare'))
                        $mail = $this->obj_mail->find($mail_id);
                    else
                        $mail_contact = $this->obj_mail_contact->find($mail_id);
                }

                $data['address'] = $mail != null
                    ? $mail->mail_name
                    : $mail_contact->mail_contact_name;

                // Sendding mail function
                $this->sendding($data);

                $request->request->add([
                    'mail_history_name' => $data['address'],
                    'mail_history_subject' => $input['mail_subject'],
                    'mail_history_content' => $input['mail_content'],
                    'mail_history_attach' => $file_path
                ]);

                $input = $request->all();
                $mail_history = $this->obj_mail_history->add_mail_history($input);
                
                //Message
                \Session::flash('message', trans('mail::mail_admin.message_send_mail_successfully'));
                return Redirect::route("admin_mail");
            }
            else {
                if($count_mail == 1){
                    $data['address'] = $input['mail_name'];
                    $this->sendding($data);
                }
                else{
                    foreach ($arr_mail as $key => $value) {
                        if($value != null){
                            $data['address'] = trim($value);
                            $this->sendding($data);
                            sleep(5);
                        }
                    }
                }

                $request->request->add([
                    'mail_history_name' => $input['mail_name'],
                    'mail_history_subject' => $input['mail_subject'],
                    'mail_history_content' => $input['mail_content'],
                    'mail_history_attach' => $file_path
                ]);
                $input = $request->all();
                $mail_history = $this->obj_mail_history->add_mail_history($input);
                
                //Message
                \Session::flash('message', trans('mail::mail_admin.message_send_mail_successfully'));
                return Redirect::route("admin_mail");
            }
        }
    }

    /**
     *  Check internet connection
     * @return true or false
     */
    public function pingAddress($ip) {
        $max = 200;
        $avg = 100;
        $getAvg = 200;
        $getMax = 100;

        $pingresult = exec("ping  -n 3 $ip", $outcome, $status);

        $arr = explode(',', $pingresult);

        foreach ($arr as $key => $value) {
            // Has internet
            if(strpos($value, 'Minimum')){}
            elseif (strpos($value, 'Maximum')){
                $getMax = preg_replace('/[^0-9]+/', '', $value);
            }
            elseif (strpos($value, 'Average')){
                $getAvg = preg_replace('/[^0-9]+/', '', $value);
            }
            
            // Not internet
            else {
                return false;
            }
        }

        if ($getMax > $max || $getAvg > $avg) return false;
        else return true;
    }

    /**
     *
     * @return type
     */
    function internet_checker() {
        $connected = @fsockopen("www.example.com", 80); 
                                            //website, port  (try 80 or 443)
        if ($connected){
            $is_conn = true; //action when connected
            fclose($connected);
        }else{
            $is_conn = false; //action in connection failure
        }
        return $is_conn;
    }

    /**
     *
     * @return type
     */
    public function sendding($data){
        // var_dump($data);
        // die();
        Mail::send(['view' => 'mail'], $data, function($message) use ($data){
            $message->to($data['address'])
                ->cc($data['address'])
                ->subject($data['subject'])
                ->setBody($data['contents']);
            if($data['file_path'] != null){
                // $message->attach(public_path().'/'.$data['file_path']);
                $message->attach(storage_path('app').'/'.$data['file_path']);
            }
            $message->from('rootpowercontrol@gmail.com', 'ADMIN');
        });
    }

    /**
     *
     * @return location file have been save
     */
    public function attachFile($file)
    {
        if ($file != null && $file->isValid()){
            $location_file = public_path();
            $file_name = null;
            $destinationPath = 'upload/';

            $extension = $file->getClientOriginalExtension();
            $file_name = rand(111,999).$file->getClientOriginalName();
            $file->move($destinationPath, $file_name);

            return $destinationPath.$file_name;
        }
    }
    public function storageFile($file){
        $path = Storage::putFile('files', $file);
        return $path;
        // var_dump($path);
        // die();
        // $file_name = $file->store('files');
        // $this->file_extension_temp = $file->getClientOriginalExtension();
        // return $file_name;
    }
}