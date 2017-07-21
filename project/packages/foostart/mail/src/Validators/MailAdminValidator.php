<?php
namespace Foostart\Mail\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class MailAdminValidator extends AbstractValidator
{
    protected static $rules = array(
        'mail_name' => 'required',
    );

    protected static $messages = [];

    public function __construct()
    {
        Event::listen('validating', function($input)
        {
        });
        $this->messages();
    }

    public function validate($input) {

        $flag = parent::validate($input);

        $this->errors = $this->errors?$this->errors:new MessageBag();

        $flag = $this->isValidTitle($input)?$flag:FALSE;

        return $flag;
    }

    public function messages() {
        self::$messages = [
            'required' => 'The :attribute '.trans('mail::mail_admin.required'),
        ];
    }

    public function isValidTitle($input) {
        
        $flag = TRUE;

        $min_lenght = config('mail_admin.name_min_length');
        $max_lenght = config('mail_admin.name_max_length');
        $subject_min_length = config('mail_admin.subject_min_length');
        $subject_max_length = config('mail_admin.subject_max_length');

        $mail_name = @$input['mail_name'];
        $subject = @$input['mail_subject'];
        $file = @$input['fileToUpload'];
        $checkInternet = @$input['internet_interrupt'];
        $file_size = TRUE;

        $arr_mail = explode(' ', $mail_name);
        $count_mail = count($arr_mail);

        if($checkInternet != null){
            $this->errors->add('internet_interrupt', trans('mail::mail_admin.internet_interrupt'));
            $flag = FALSE;
        }

        if($file != null){
            if ($file->isValid()){
                if($file->getSize() > $file->getMaxFilesize())
                    $file_size = FALSE;
            }
            elseif ($file->getError()) {
                $file_size = FALSE;
            }
        }

        if($count_mail != 1){
            foreach ($arr_mail as $key => $value) {
                if($value != null){
                    if (!filter_var(trim($value), FILTER_VALIDATE_EMAIL)) {
                        $this->errors->add('mail_address_unvalid', trans('mail::mail_admin.mail_address_unvalid'));
                        $flag = FALSE;
                    }
                }
            }
        }
        else {
            if (!filter_var(trim($mail_name), FILTER_VALIDATE_EMAIL)) {
                $this->errors->add('mail_address_unvalid', trans('mail::mail_admin.mail_address_unvalid'));
                $flag = FALSE;
            }
        }
        if ($subject != NULL){
            // var_dump($flag);
            if ((strlen($subject) < $subject_min_length)
                || (strlen($subject) > $subject_max_length)) {
                $this->errors->add('subject_unvalid_length', trans('mail::mail_admin.subject_unvalid_length', [
                        'SUBJECT_MIN_LENGTH' => $subject_min_length, 
                        'SUBJECT_MAX_LENGTH' => $subject_max_length
                    ])
                );
                $flag = FALSE;
            }
            // var_dump($flag);
        }
        
        if(!$file_size){
            $this->errors->add('attach_unvalid', trans('mail::mail_admin.attach_unvalid')
            );
            $flag = FALSE;
        }

        // var_dump($flag);

        return $flag;
    }
}