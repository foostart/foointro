<?php

namespace Atd\Front\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model {

    protected $table = 'menus';
    public $timestamps = false;
    protected $fillable = [
        'menu_name',
        'menu_parent'
    ];
    protected $primaryKey = 'menu_id';

    public function get_menus($params = array()) {
        $menu = self::all();
        return $menu;
    }

    public function root_menu(){
        return $this->where('menu_parent', '=', 0)->get();
    }

    public function pluck_menu() {
        return $this->pluck('menu_name', 'menu_id')->all();
    }

    public function childs() {
        return $this->hasMany('ATD\Front\Models\Menus', 'menu_parent', 'menu_id');
    }



    /**
     *
     * @param type $input
     * @param type $menu_id
     * @return type
     */
    public function update_menu($input, $menu_id = NULL) {

        if (empty($menu_id)) {
            $menu_id = $input['menu_id'];
        }

        $menu = self::find($menu_id);

        if (!empty($menu)) {

            $menu->menu_name = $input['menu_name'];

            $menu->save();

            return $menu;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_menu($input) {

        $menu = self::create([
                    'menu_name' => $input['menu_name'],
        ]);
        return $menu;
    }
}
