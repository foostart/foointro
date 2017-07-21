<?php namespace Foointro\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foointro\Admin\Models\Products;
use Illuminate\Support\Facades\Input;
/**
 * Validators
 */
use Foointro\Admin\Validators\ProductValidator;

class ProductController extends Controller {

    public $data_view = array();

    private $obj_product = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_product = new Products();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

        $params = $request->all();

        // var_dump($params);
        // die();

        $list_product = $this->obj_product->get_products($params);

        $this->data_view = array_merge($this->data_view, array(
            'products' => $list_product,
            'request' => $request
        ));
        // $root_product = $this->obj_product->root_product();
        // $all_product = $this->obj_product->pluckproduct();

        // return view('admin::products.product_list', $this->data_view, compact('root_product', 'all_product'));
        return view('admin::products.product_list', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function edit(Request $request) {

        $product = NULL;
        $root_product = NULL;
        $child_product = NULL;
        $product_id = (int) $request->get('id');
        
        // var_dump($product_id);
        // die();

        if (!empty($product_id) && (is_int($product_id))) {
            $product = $this->obj_product->find($product_id);
            $root_product = $this->obj_product->get_root_product(2);
            $child_product = $this->obj_product->get_root_product($product->product_parent);
            // var_dump($root_product);
            // var_dump($child_product);
            // die();
        }
        else {
            $root_product = $this->obj_product->get_root_product(2);
        }

        
        // var_dump($product);
        // var_dump($root_product);
        // die();

        $this->data_view = array_merge($this->data_view, array(
            'products' => $product,
            'request' => $request
        ));
        return view('admin::products.product_edit', $this->data_view)
            ->with([
                'root_products' => $root_product,
                'child_products' => $child_product
            ]);
    }

    public function get_data(Request $request){
        $key = (int)$request->get('key');
        $root_product = $this->obj_product->get_root_product($key);
        return response()->json($root_product);
    }

    public function get_attribute(Request $request){
        $val = (int)$request->get('val');
        var_dump($val);
        $root_attribute = $this->obj_product->getAttribute($val);
        var_dump($root_attribute);
        // $root_attribute = $this->obj_product->get_dynamic_attribute($val);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {
        $this->obj_validator = new ProductValidator();

        $input = $request->all();
        $params = array();
        $root_product = NULL;

        $product_id = (int) $request->get('id');

        $list_product = NULL;
        $product = NULL;
        $data = array();

        // var_dump($input);
        // die();

        $file = Input::file('product_image');
        $file_path = null;

        $list_product = $this->obj_product->get_products($params);
        $root_product = $this->obj_product->get_root_product(2);

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($product_id) && is_int($product_id)) {
                $product = $this->obj_product->find($product_id);
            }
            var_dump($data['errors']);
            die();
            // return redirect()->back()->withInput();
            // return redirect()->to($this->getRedirectUrl())
            //                 ->withInput($request->input())
            //                 ->withErrors($data['errors']);
        } else {
            // var_dump($input);
            // die();
            if($file != null){
                $file_path = $this->attachFile($file);
            }
            // var_dump($file);
            // var_dump($file_path);
            // die();

            if (!empty($product_id) && is_int($product_id)) {
                // var_dump($input);
                // die();
                $product = $this->obj_product->find($product_id);
                // var_dump($product);
                // die();
                if (!empty($product)) {

                    // $request->request->add([
                    //     'img' => $file_path
                    // ]);
                    // $input = $request->all();
                    // var_dump($input);
                    // die();
                    $request->request->add([
                        'img_path' => $file_path
                    ]);
                    $input = $request->all();

                    // var_dump($input);
                    // die();
                    $this->deletePicture($product_id);
                    $input['product_id'] = $product_id;
                    $product = $this->obj_product->update_product($input);

                    //Message
                    \Session::flash('message', trans('admin::admin.message_update_product_successfully'));
                    return Redirect::route("admin_product.edit", ["id" => $product->product_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_update_product_unsuccessfully'));
                }
            } else {
                // var_dump($input);
                // die();
                $request->request->add([
                    'img_path' => $file_path
                ]);
                $input = $request->all();
                // var_dump($input);
                // die();
                $product = $this->obj_product->add_product($input);

                if (!empty($product)) {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_add_product_successfully'));
                    return Redirect::route("admin_product.edit", ["id" => $product->product_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_add_product_unsuccessfully'));
                }
                // var_dump($product);
                // die();
            }
        }
        // var_dump($request->input());
        // var_dump($this->getRedirectUrl());
        // var_dump($request->all());
        var_dump($input['uploaded_img']);
        // die();
        return redirect()->to($this->getRedirectUrl())
                            ->withInput($request->all())
                            ->withErrors($data['errors'])
                            ->with('uploaded_img', $input['uploaded_img']);

        // $this->data_view = array_merge($this->data_view, array(
        //     'products' => $product,
        //     'request' => $request,
        // ), $data);

        // return view('admin::products.product_edit', $this->data_view)
        //     ->with([
        //         'list_product' => $list_product,
        //         'root_products' => $root_product
        //     ]);
    }

    /**
     *
     * @return type
     */
    public function delete(Request $request) {

        $product = NULL;
        $product_id = $request->get('id');

        // var_dump($product_id);
        // die();

        if (!empty($product_id)) {
            $product = $this->obj_product->find($product_id);

            // var_dump($product->toArray());
            // die();

            if (!empty($product)) {
                  //Message
                \Session::flash('message', trans('admin::admin.message_delete_product_successfully'));

                $this->deletePicture($product_id);
                $product->delete();
                $product->set_auto_increment();
            }
        } else {
            //Message
            \Session::flash('message', trans('admin::admin.message_delete_product_unsuccessfully'));
        }

        $this->data_view = array_merge($this->data_view, array(
            'admin' => $product
        ));

        return Redirect::route("admin_product");
    }

    /**
     *
     * @return location file have been save
     */
    public function attachFile($file)
    {
        if ($file != null && $file->isValid()){
            $location_file = public_path();
            $file_name = null;
            $destinationPath = 'atd/upload/';
            $extension = $file->getClientOriginalExtension();
            $file_name = rand(111,999).$file->getClientOriginalName();
            $file->move($destinationPath, $file_name);
            return $destinationPath.$file_name;
        }
    }

    public function deletePicture($id){
        $picName = null;
        $checkFile = FALSE;
        $product = new Products();
        $dataPic = $product->getDataCond($id);
        foreach ($dataPic as $key => $value) {
            $picName = $value->product_image;
        }
        if ($picName != null){
            $checkFile = file_exists(public_path() . '/' . $picName);    
        }
        // var_dump($picName);
        // var_dump($checkFile);
        // die();
        if ($checkFile){
            unlink(public_path() . '/' . $picName);
        }
    }
}