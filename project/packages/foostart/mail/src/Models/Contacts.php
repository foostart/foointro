<?php

namespace Foostart\Mail\Models;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;

class Contacts extends Model {

    protected $table = 'contacts';
    public $timestamps = false;
    protected $fillable = [
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
     * @return contact
     */
    public function get_contacts($params = array()) {
        $eloquent = self::orderBy('contact_id');

        // var_dump($params['contact_name']);
        // die();

        if (!empty($params['contact_name'])) {
            $eloquent->where('contact_name', 'like', '%'. $params['contact_name'].'%');
        }

        $contact = $eloquent->paginate(10);

        return $contact;
    }


    /**
     *
     * @param type $key
     * @return pluck data
     */
    public function get_root_contact($key){
        $contacts = new Menus();
        return $contacts::where('menu_parent', '=', $key)->pluck('menu_name', 'menu_id');
    }

    /**
     *
     * @param type $input
     * @param type $contact_id
     * @return type
     */
    public function update_contact($input, $contact_id = NULL) {
        // var_dump($input);
        // die();
        // if (empty($contact_id)) {
        //     $contact_id = $input['contact_id'];
        // }
        $contact_information = empty($input['contact_information']) ? null : json_encode($input['contact_information']);

        $contact = self::find($input['contact_id']);

        // var_dump($contact);
        // var_dump($contact_information);
        // die();

        if (!empty($contact)) {
            $contact->contact_name = $input['contact_name'];
            $contact->contact_brief_description = $input['contact_brief_description'];
            $contact->contact_description = $input['contact_description'];
            $contact->contact_information = $contact_information;
            $contact->contact_image = $input['img_path'];
            $contact->contact_parent = $input['contact_parent'];
            $contact->contact_child = $input['contact_child'];
            $contact->contact_updated_at = $this->current_time;

            $contact->save();

            return $contact;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_contact($input) {
        // $datetime = new DateTime(null, new DateTimeZone('Asia/Ho_Chi_Minh'));
        // $current_time = $datetime->format('Y-m-d H:i:s');
        // var_dump($input);
        // die();
        $contact_information = empty($input['contact_information']) ? null : json_encode($input['contact_information']);

        $contact = self::create([
                    'contact_name' => $input['contact_name'],
                    'contact_brief_description' => $input['contact_brief_description'],
                    'contact_description' => $input['contact_description'],
                    'contact_information' => $contact_information,
                    'contact_image' => $input['img_path'],
                    'contact_parent' => $input['contact_parent'],
                    'contact_child' => $input['contact_child'],
                    'contact_created_at' => $this->current_time
        ]);
        // var_dump($contact);
        // die();
        return $contact;
    }

    /**
     *
     * @param type $contact_id
     */
    public function set_auto_increment(){
        $max_id = self::max('contact_id');
        $key = $max_id++;
        // var_dump($max_id);
        // die();
        DB::update("ALTER TABLE contacts AUTO_INCREMENT = ".$key.";");
    }

    public function getDataCond($id){
        return self::where('contact_id', $id)->get();
    }
}
