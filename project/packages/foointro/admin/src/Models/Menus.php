<?php

namespace Foointro\Admin\Models;

use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;

class Menus extends Model {
    // use Sluggable;

    protected $table = 'menus';
    public $timestamps = false;
    protected $fillable = [
        'menu_name',
        'menu_parent',
        'menu_slug'
    ];
    protected $primaryKey = 'menu_id';

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'menu_slug' => [
                'source' => 'menu_name'
            ]
        ];
    }

    public function get_menus($params = array()) {
        $menu = self::paginate(10);
        return $menu;
    }

    public function root_menu() {
        return $this->where('menu_parent', '=', 0)->get();
    }

    public function childs() {
        return $this->hasMany('Foointro\Admin\Models\Menus', 'menu_parent', 'menu_id');
    }

    public function pluckMenu() {
        return $this->pluck('menu_name', 'menu_id')->all();
    }

    public function get_list_menu ($key){
        $menu = NULL;
        if($key != NULL){
            $menu = self::where('menu_id', '!=', $key)->get();
        } else {
            $menu = self::all();
        }
        $list = NULL;
        $list[0] = trans('admin::admin.uncategorized');
        $this->get_child_menu($menu, 0, $list, 0);
        
        return $list;
    }

    public function get_child_menu ($menus, $menu_parent, &$list, $level){
        foreach ($menus as $menu) {
            if ($menu->menu_parent == $menu_parent) {
                $name = $menu->menu_name;
                $list[$menu->menu_id] = $name;
                $next_level = $level + 1;
                $this->get_child_menu($menus, $menu->menu_id, $list, $next_level);
            }
        }
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
            $menu->menu_parent = $input['list_menu'];
            $menu->menu_slug = str_slug($input['menu_name']);

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
                    'menu_parent' => $input['list_menu'],
                    'menu_slug' => str_slug($input['menu_name'])
        ]);
        return $menu;
    }

    /**
     *
     * @param type $product_id
     */
    public function set_auto_increment(){
        $max_id = self::max('menu_id');
        $key = $max_id++;
        DB::update("ALTER TABLE menus AUTO_INCREMENT = ".$key.";");
    }
}
