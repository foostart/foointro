<div class="row margin-bottom-12">
    <div class="col-md-12">
        <a href="{!! URL::route('admin_menu.edit') !!}" class="btn btn-info pull-right">
            <i class="fa fa-plus"></i>{{trans('admin::admin.form_button_add')}}
        </a>
    </div>
</div>

<ul class="tree">
    @foreach($root_menu as $menu)
    <li>
        <p>{{ $menu->menu_name }}
        @if(count($menu->childs))
            <span>
                <a href="{!! URL::route('admin_menu.edit', ['id' => $menu->menu_id]) !!}">
                    <i class="fa fa-pencil"></i>
                </a>
            </span>
            </p>
            @include('admin::menus.menu_child',['childs' => $menu->childs])
        @else
            <span>
                <a href="{!! URL::route('admin_menu.edit', ['id' => $menu->menu_id]) !!}">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="{!! URL::route('admin_menu.delete',['id' =>  $menu->menu_id, '_token' => csrf_token()]) !!}"
                   class="margin-left-5 delete">
                    <i class="fa fa-trash-o"></i>
                </a>
            </span>
            </p>
        @endif

    </li>
    @endforeach
</ul>