<?php namespace Foointro\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foointro\Admin\Models\ProductAttributes;
/**
 * Validators
 */
use Foointro\Admin\Validators\ProductAttributeValidator;

class ProductAttributeController extends Controller {

    public $data_view = array();

    private $obj_product_attribute = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_product_attribute = new ProductAttributes();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

        $params = array();

        $list_product_attribute = $this->obj_product_attribute->get_product_attributes($params);

        $this->data_view = array_merge($this->data_view, array(
            'product_attributes' => $list_product_attribute,
            'request' => $request
        ));
        $root_product_attributes = $this->obj_product_attribute->root_product();
        $all_product_attribute = $this->obj_product_attribute->pluckproduct();

        return view('admin::product_attributes.product_attribute_list', $this->data_view,
            compact('root_product_attributes', 'all_product_attribute'));
    }

    /**
     *
     * @return type
     */
    public function edit(Request $request) {

        $product_attribute = NULL;
        $list_product_attribute = NULL;
        $product_attribute_id = NULL;
        if(!empty($request->get('id'))){
            $product_attribute_id = (int)$request->get('id');
        }// (int) $request->get('id');
        // var_dump($product_attribute_id);
        if (!empty($product_attribute_id) && (is_int($product_attribute_id))) {
            // var_dump($product_attribute_id);
            $product_attribute = $this->obj_product_attribute->find($product_attribute_id);
        }

        $list_product_attribute = $this->obj_product_attribute->get_list_product_attribute($product_attribute_id);
        // var_dump($product_attribute);
        // die();
        $this->data_view = array_merge($this->data_view, array(
            'product_attributes' => $product_attribute,
            'request' => $request
        ));
        return view('admin::product_attributes.product_attribute_edit', $this->data_view)
            ->with('list_product_attribute', $list_product_attribute);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {
        $this->obj_validator = new ProductAttributeValidator();

        $input = $request->all();

        // var_dump($input);
        // die();

        $arr_attributes = NULL;
        $i = 0;
        $attribute_index = 2;
        while($i <= count($input)){
            if(!empty($request->get('attribute'.$attribute_index))){
                $arr_attributes[$i] = $request->get('attribute'.$attribute_index);
            }
            // else break;            
            // $arr_attributes[$i] = $request->get('attribute'.$attribute_index);
            $attribute_index++;
            $i++;
        }
        // var_dump($input);
        // var_dump($arr_attributes);
        // die();

        $product_attribute_id = (int) $request->get('id');

        $list_product_attribute = NULL;
        $product = NULL;
        $data = array();

        $list_product_attribute = $this->obj_product_attribute->get_list_product_attribute(null);

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($product_attribute_id) && is_int($product_attribute_id)) {
                $product = $this->obj_product_attribute->find($product_attribute_id);
            }
            var_dump($data['errors']);
            die();
        } else {
            if (!empty($product_attribute_id) && is_int($product_attribute_id)) {

                $product_attribute = $this->obj_product_attribute->find($product_attribute_id);
                // var_dump($product_attribute);
                // die();

                if (!empty($product_attribute)) {

                    $input['product_attribute_id'] = $product_attribute_id;
                    $input['product_attribute_info'] = $arr_attributes;
                    $product = $this->obj_product_attribute->update_product_attribute($input);

                    //Message
                    \Session::flash('message', trans('admin::admin.message_update_product_successfully'));
                    return Redirect::route("admin_product.attribute.edit", ["id" => $product_attribute->product_attribute_id]);
                } else {
                    //Message
                    \Session::flash('message', trans('admin::admin.message_update_product_unsuccessfully'));
                }
            } else {
                // var_dump($input);
                // die();
                $input['product_attribute_info'] = $arr_attributes;
                $product_attribute = $this->obj_product_attribute->add_product_attribute($input);

                if (!empty($product_attribute)) {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_add_product_successfully'));
                    return Redirect::route("admin_product.attribute.edit", ["id" => $product_attribute->product_attribute_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_add_product_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'product_attributes' => $product_attribute,
            'request' => $request,
        ), $data);

        return view('admin::products.product_attribute_edit', $this->data_view)
            ->with('list_product_attribute', $list_product_attribute);
    }

    /**
     *
     * @return type
     */
    public function delete(Request $request) {

        $product_attribute = NULL;
        $product_attribute_id = $request->get('id');

        if (!empty($product_attribute_id)) {
            $product_attribute = $this->obj_product_attribute->find($product_attribute_id);

            if (!empty($product_attribute)) {
                  //Message
                \Session::flash('message', trans('admin::admin.message_delete_product_successfully'));

                $product_attribute->delete();
            }
        } else {
            //Message
            \Session::flash('message', trans('admin::admin.message_delete_product_unsuccessfully'));
        }

        $this->data_view = array_merge($this->data_view, array(
            'product_attributes' => $product_attribute
        ));

        return Redirect::route("admin_product.attribute.list");
    }

}