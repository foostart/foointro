<?php

namespace Foointro\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Foointro\Admin\Models\Menus;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;

class Products extends Model {

    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'product_name',
        'product_brief_description',
        'product_description',
        'product_information',
        'product_image',
        'product_parent',
        'product_child',
        'product_created_at',
        'product_updated_at'
    ];
    protected $primaryKey = 'product_id';
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
     * @return product
     */
    public function get_products($params = array()) {
        $eloquent = self::orderBy('product_id');

        // var_dump($params['product_name']);
        // die();

        if (!empty($params['product_name'])) {
            $eloquent->where('product_name', 'like', '%'. $params['product_name'].'%');
        }

        $product = $eloquent->paginate(10);

        return $product;
    }


    /**
     *
     * @param type $key
     * @return pluck data
     */
    public function get_root_product($key){
        $products = new Menus();
        return $products::where('menu_parent', '=', $key)->pluck('menu_name', 'menu_id');
    }

    /**
     *
     * @param type $input
     * @param type $product_id
     * @return type
     */
    public function update_product($input, $product_id = NULL) {
        // var_dump($input);
        // die();
        // if (empty($product_id)) {
        //     $product_id = $input['product_id'];
        // }
        $product_information = empty($input['product_information']) ? null : json_encode($input['product_information']);

        $product = self::find($input['product_id']);

        // var_dump($product);
        // var_dump($product_information);
        // die();

        if (!empty($product)) {
            $product->product_name = $input['product_name'];
            $product->product_brief_description = $input['product_brief_description'];
            $product->product_description = $input['product_description'];
            $product->product_information = $product_information;
            $product->product_image = $input['img_path'];
            $product->product_parent = $input['product_parent'];
            $product->product_child = $input['product_child'];
            $product->product_updated_at = $this->current_time;

            $product->save();

            return $product;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_product($input) {
        // $datetime = new DateTime(null, new DateTimeZone('Asia/Ho_Chi_Minh'));
        // $current_time = $datetime->format('Y-m-d H:i:s');
        // var_dump($input);
        // die();
        $product_information = empty($input['product_information']) ? null : json_encode($input['product_information']);

        $product = self::create([
                    'product_name' => $input['product_name'],
                    'product_brief_description' => $input['product_brief_description'],
                    'product_description' => $input['product_description'],
                    'product_information' => $product_information,
                    'product_image' => $input['img_path'],
                    'product_parent' => $input['product_parent'],
                    'product_child' => $input['product_child'],
                    'product_created_at' => $this->current_time
        ]);
        // var_dump($product);
        // die();
        return $product;
    }

    /**
     *
     * @param type $product_id
     */
    public function set_auto_increment(){
        $max_id = self::max('product_id');
        $key = $max_id++;
        // var_dump($max_id);
        // die();
        DB::update("ALTER TABLE products AUTO_INCREMENT = ".$key.";");
    }

    public function getDataCond($id){
        return self::where('product_id', $id)->get();
    }
}
