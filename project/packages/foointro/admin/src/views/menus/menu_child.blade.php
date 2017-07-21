<ul>
    @foreach($childs as $child)
    <li>
        <p>{{ $child->menu_name }}

            @if(count($child->childs))
            <span>
                <a href="{!! URL::route('admin_menu.edit', ['id' => $child->menu_id]) !!}">
                    <i class="fa fa-pencil"></i>
                </a>
            </span></p>
                @include('admin::menus.menu_child',['childs' => $child->childs])
            @else
            <span>
                <a href="{!! URL::route('admin_menu.edit', ['id' => $child->menu_id]) !!}">
                    <i class="fa fa-pencil"></i>
                </a>

                <a href="{!! URL::route('admin_menu.delete',['id' =>  $child->menu_id, '_token' => csrf_token()]) !!}"
                   class="margin-left-5 delete">
                    <i class="fa fa-trash-o"></i>
                </a>
            </span></p>
            @endif

    </li>
    @endforeach
</ul>