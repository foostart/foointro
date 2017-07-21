<?php

namespace Foostart\Mail\Models;

use Illuminate\Database\Eloquent\Model;

class MailsHistories extends Model {

    protected $table = 'mails_histories';
    public $timestamps = false;
    protected $fillable = [
        'mail_history_name',
        'mail_history_subject',
        'mail_history_content',
        'mail_history_attach'
    ];
    protected $primaryKey = 'mail_history_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_mail_history($params = array()) {
        $eloquent = self::orderBy('mail_history_id');

        //mail_name
        if (!empty($params['mail_history_name'])) {
            $eloquent->where('mail_history_name', 'like', '%'. $params['mail_history_name'].'%');
        }

        $mail_history = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $mail_history;
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_mail_history($input) {

        $mail_history = self::create([
                    'mail_history_name' => $input['mail_history_name'],
                    'mail_history_subject' => $input['mail_history_subject'],
                    'mail_history_content' => $input['mail_history_content'],
                    'mail_history_attach' => $input['mail_history_attach']
        ]);
        return $mail_history;
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function check_same_attach($params) {
        $mail_history = null;
        $check = false;
        $eloquent = self::orderBy('mail_history_id');

        if($params['mail_history_attach'] != null){
            $mail_history = $eloquent
                ->where('mail_history_attach', 'like', 
                    '%'. $params['mail_history_attach'].'%')
                ->get();
        }
        
        if(count($mail_history) > 1) $check = true;

        return $check;
    }
}
