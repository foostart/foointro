<?php

namespace Atd\Front\Models;

use Illuminate\Database\Eloquent\Model;
// use Atd\Front\Models\Menus;
use DateTime;
use DateTimeZone;

class Products extends Model {

    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'product_name',
        'product_brief_description',
        'product_description',
        'product_information',
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
        // var_dump($params);
        // die();
        $eloquent = self::orderBy('product_id');

        // var_dump($params['product_name']);
        // die();
        $eloquent->where('product_child', '=', $params['type']);

        // if (!empty($params['product_child'])) {
        //     $eloquent->where('product_child', 'like', '%'. $params['type'].'%');
        // }

        $product = $eloquent->paginate(10);

        return $product;
    }    

    public function get_product_cond($key){
        return self::where('product_id', $key)->get();
    }
}
