<?php namespace Foointro\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foointro\Admin\Models\Admin;
/**
 * Validators
 */
use Foointro\Admin\AdminValidator;

class AdminController extends Controller {

    public $data_view = array();

    private $obj_admin = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_admin = new Admin();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

        $params = array();

        $list_admin = $this->obj_admin->get_admins($params);

        $this->data_view = array_merge($this->data_view, array(
            'admins' => $list_admin,
            'request' => $request
        ));
        return view('admin::admin.admin.admin_list', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function edit(Request $request) {

        $admin = NULL;
        $admin_id = (int) $request->get('id');


        if (!empty($admin_id) && (is_int($admin_id))) {
            $admin = $this->obj_admin->find($admin_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'admin' => $admin,
            'request' => $request
        ));
        return view('admin::admin.admin.admin_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {
                $this->obj_validator = new adminAdminValidator();


        $input = $request->all();

        $admin_id = (int) $request->get('id');
        $admin = NULL;


        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($admin_id) && is_int($admin_id)) {

                $admin = $this->obj_admin->find($admin_id);
            }

        } else {
            if (!empty($admin_id) && is_int($admin_id)) {

                $admin = $this->obj_admin->find($admin_id);

                if (!empty($admin)) {

                    $input['admin_id'] = $admin_id;
                    $admin = $this->obj_admin->update_admin($input);

                    //Message
                    \Session::flash('message', trans('admin::admin.message_update_successfully'));
                    return Redirect::route("admin_admin.edit", ["id" => $admin->admin_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_update_unsuccessfully'));
                }
            } else {

                $admin = $this->obj_admin->add_admin($input);

                if (!empty($admin)) {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_add_successfully'));
                    return Redirect::route("admin_admin.edit", ["id" => $admin->admin_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'admin' => $admin,
            'request' => $request,
        ), $data);

        return view('admin::admin.admin.admin_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function delete(Request $request) {

        $admin = NULL;
        $admin_id = $request->get('id');

        if (!empty($admin_id)) {
            $admin = $this->obj_admin->find($admin_id);

            if (!empty($admin)) {
                  //Message
                \Session::flash('message', trans('admin::admin.message_delete_successfully'));

                $admin->delete();
            }
        } else {

        }

        $this->data_view = array_merge($this->data_view, array(
            'admin' => $admin,
        ));

        return Redirect::route("admin_admin");
    }

}