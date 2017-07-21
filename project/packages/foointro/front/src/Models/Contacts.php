<?php

namespace Atd\Front\Models;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use DateTimeZone;

class Contacts extends Model {

    protected $table = 'contacts';
    public $timestamps = false;
    protected $fillable = [
        'contact_name',
        'contact_address',
        'contact_content',
        'contact_created_at',
        'contact_updated_at'
    ];
    protected $primaryKey = 'contact_id';
    protected $datetime = NULL;
    protected $current_time = NULL;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);

        $this->datetime = new DateTime(null, new DateTimeZone('Asia/Ho_Chi_Minh'));
        $this->current_time = $this->datetime->format('Y-m-d H:i:s');
        // var_dump($this->current_time);
        // die();
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_contact($input) {

        $array_input = [];
        $i = 1;
        while($i <= (int)$input['num']){
            $id = 'id_'.$i;
            $name = 'w3ls_item_'.$i;
            $quantity = 'quantity_'.$i;
            $array_input[$i] = [
                'id' => $input[$id],
                'name' => $input[$name],
                'quantity' => $input[$quantity]
            ];
            $i++;
        }

        $contact = self::create([
                    'contact_address' => $input['email'],
                    'contact_content' => json_encode($array_input),
                    'contact_created_at' => $this->current_time
        ]);
        return $contact;
    }
}
