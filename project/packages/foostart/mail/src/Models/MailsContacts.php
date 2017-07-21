<?php

namespace Foostart\Mail\Models;

use Illuminate\Database\Eloquent\Model;

class MailsContacts extends Model {

    protected $table = 'mails_contacts';
    public $timestamps = false;
    protected $fillable = [
        'mail_contact_name',
        'mail_contact_subject',
        'mail_contact_content'
    ];
    protected $primaryKey = 'mail_contact_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_mail_contact($params = array()) {
        $eloquent = self::orderBy('mail_contact_id');

        //mail_name
        if (!empty($params['mail_contact_name'])) {
            $eloquent->where('mail_contact_name', 'like', '%'. $params['mail_contact_name'].'%');
        }

        $mail_contact = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $mail_contact;
    }



    /**
     *
     * @param type $input
     * @param type $mail_id
     * @return type
     */
    public function update_mail_contact($input, $mail_contact_id = NULL) {

        if (empty($mail_contact_id)) {
            $mail_contact_id = $input['mail_contact_id'];
        }

        $mail_contact = self::find($mail_contact_id);

        if (!empty($mail_contact)) {

            $mail_contact->mail_contact_name = $input['mail_contact_name'];
            $mail_contact->mail_contact_subject = $input['mail_contact_subject'];
            $mail_contact->mail_contact_content = $input['mail_contact_content'];

            $mail_contact->save();

            return $mail_contact;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_mail_contact($input) {

        $mail_contact = self::create([
                    'mail_contact_name' => $input['address'],
                    'mail_contact_subject' => $input['subject'],
                    'mail_contact_content' => $input['content']
        ]);
        return $mail_contact;
    }
}
