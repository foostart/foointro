<?php namespace Foointro\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foointro\Admin\Models\Menus;
/**
 * Validators
 */
use Foointro\Admin\Validators\AdminValidator;

class MenuController extends Controller {

    public $data_view = array();

    private $obj_menu = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_menu = new Menus();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

        $params = array();

        $list_menu = $this->obj_menu->get_menus($params);

        $this->data_view = array_merge($this->data_view, array(
            'menus' => $list_menu,
            'request' => $request
        ));
        $root_menu = $this->obj_menu->root_menu();
        $all_menu = $this->obj_menu->pluckMenu();

        return view('admin::menus.menu_list', $this->data_view, compact('root_menu', 'all_menu'));
    }

    /**
     *
     * @return type
     */
    public function edit(Request $request) {

        $menu = NULL;
        $list_menu = NULL;
        $menu_id = (int) $request->get('id');

        if (!empty($menu_id) && (is_int($menu_id))) {
            $menu = $this->obj_menu->find($menu_id);
        }

        $list_menu = $this->obj_menu->get_list_menu($menu_id);

        $this->data_view = array_merge($this->data_view, array(
            'menus' => $menu,
            'request' => $request
        ));
        return view('admin::menus.menu_edit', $this->data_view)
            ->with('list_menu', $list_menu);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {
        $this->obj_validator = new AdminValidator();

        $input = $request->all();

        $menu_id = (int) $request->get('id');

        $list_menu = NULL;
        $menu = NULL;
        $data = array();

        $list_menu = $this->obj_menu->get_list_menu(null);

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($menu_id) && is_int($menu_id)) {
                $menu = $this->obj_menu->find($menu_id);
            }
        } else {
            if (!empty($menu_id) && is_int($menu_id)) {

                $menu = $this->obj_menu->find($menu_id);

                if (!empty($menu)) {

                    $input['menu_id'] = $menu_id;
                    $menu = $this->obj_menu->update_menu($input);

                    //Message
                    \Session::flash('message', trans('admin::admin.message_update_menu_successfully'));
                    return Redirect::route("admin_menu.edit", ["id" => $menu->menu_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_update_menu_unsuccessfully'));
                }
            } else {
                $menu = $this->obj_menu->add_menu($input);

                if (!empty($menu)) {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_add_menu_successfully'));
                    return Redirect::route("admin_menu.edit", ["id" => $menu->menu_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('admin::admin.message_add_menu_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'menus' => $menu,
            'request' => $request,
        ), $data);

        return view('admin::menus.menu_edit', $this->data_view)
            ->with('list_menu', $list_menu);
    }

    /**
     *
     * @return type
     */
    public function delete(Request $request) {

        $menu = NULL;
        $menu_id = $request->get('id');

        if (!empty($menu_id)) {
            $menu = $this->obj_menu->find($menu_id);

            if (!empty($menu)) {
                  //Message
                \Session::flash('message', trans('admin::admin.message_delete_menu_successfully'));

                $menu->delete();
                $menu->set_auto_increment();
            }
        } else {
            //Message
            \Session::flash('message', trans('admin::admin.message_delete_menu_unsuccessfully'));
        }

        $this->data_view = array_merge($this->data_view, array(
            'admin' => $menu
        ));

        return Redirect::route("admin_menu");
    }

}