<?php

namespace Foointro\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttributes extends Model {

    protected $table = 'product_attributes';
    public $timestamps = false;
    protected $fillable = [
        'product_attribute_name',
        'product_attribute_info',
        'product_attribute_parent',
        'product_attribute_created_at',
        'product_attribute_updated_at'
    ];
    protected $primaryKey = 'product_attribute_id';

    public function get_product_attributes($params = array()) {
        $product = self::paginate(10);
        return $product;
    }

    public function root_product() {
        return $this->where('product_attribute_parent', null)->get();
    }

    public function childs() {
        return $this->hasMany('Foointro\Admin\Models\ProductAttributes', 'product_attribute_parent', 'product_attribute_id');
    }

    public function pluckproduct() {
        return $this->pluck('product_attribute_name', 'product_attribute_id')->all();
    }

    public function get_list_product_attribute ($key){
        $product_attribute = NULL;
        if($key != NULL){
            $product_attribute = self::where('product_attribute_id', '!=', $key)->get();
        } else {
            $product_attribute = self::all();
        }
        $list = NULL;
        $list[0] = trans('admin::admin.uncategorized');
        $this->get_child_product_attribute($product_attribute, 0, $list, 0);

        return $list;
    }

    public function get_child_product_attribute ($product_attributes, $product_attribute_parent, &$list, $level){
        foreach ($product_attributes as $product_attribute) {
            if ($product_attribute->product_attribute_parent == $product_attribute_parent) {
                $name = $product_attribute->product_attribute_name;
                $list[$product_attribute->product_attribute_id] = $name;
                $next_level = $level + 1;
                $this->get_child_product_attribute($product_attributes, $product_attribute->product_attribute_id, $list, $next_level);
            }
        }
    }


    /**
     *
     * @param type $input
     * @param type $product_attribute_id
     * @return type
     */
    public function update_product_attribute($input, $product_attribute_id = NULL) {
        // var_dump($input);
        // die();
        if (empty($product_attribute_id)) {
            $product_attribute_id = $input['product_attribute_id'];
        }

        $product_attribute = self::find($product_attribute_id);
        // var_dump($product_attribute);
        // var_dump($input['product_attribute_info']);
        // var_dump(json_encode($input['product_attribute_info']));
        // die();
        if($input['list_product_attribute'] == 0){
            $parent = NULL;
        }
        else {
            $parent = $input['list_product_attribute'];
        }
        if (!empty($product_attribute)) {
            $product_attribute->product_attribute_name = $input['product_attribute_name'];
            $product_attribute->product_attribute_info = json_encode($input['product_attribute_info']);
            $product_attribute->product_attribute_parent = $parent;

            $product_attribute->save();

            return $product_attribute;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_product_attribute($input) {
        // var_dump($input);
        // die();
        if($input['list_product_attribute'] == 0){
            $parent = NULL;
        }
        else {
            $parent = $input['list_product_attribute'];
        }
        $product_attribute = self::create([
                    'product_attribute_name' => $input['product_attribute_name'],
                    'product_attribute_info' => $input['product_attribute_info'],
                    'product_attribute_parent' => $parent
        ]);
        return $product_attribute;
    }
}
