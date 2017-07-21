<?php

namespace Foostart\Mail\Models;

use Illuminate\Database\Eloquent\Model;

class Mails extends Model {

    protected $table = 'mails';
    public $timestamps = false;
    protected $fillable = [
        'mail_name'
    ];
    protected $primaryKey = 'mail_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_mails($params = array()) {
        $eloquent = self::orderBy('mail_id');

        //mail_name
        if (!empty($params['mail_name'])) {
            $eloquent->where('mail_name', 'like', '%'. $params['mail_name'].'%');
        }

        $mails = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $mails;
    }



    /**
     *
     * @param type $input
     * @param type $mail_id
     * @return type
     */
    public function update_mail($input, $mail_id = NULL) {

        if (empty($mail_id)) {
            $mail_id = $input['mail_id'];
        }

        $mail = self::find($mail_id);

        if (!empty($mail)) {

            $mail->mail_name = $input['mail_name'];

            $mail->save();

            return $mail;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_mail($input) {

        $mail = self::create([
                    'mail_name' => $input['mail_name'],
        ]);
        return $mail;
    }
}
