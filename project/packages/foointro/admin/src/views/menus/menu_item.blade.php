@section('head_css')
    {!! HTML::style('atd/admin/css/treeview.css') !!}
@stop
<!--ADD menu-->
<div class="row margin-bottom-12">
    <div class="col-md-12">
        <a href="{!! URL::route('admin_menu.edit') !!}" class="btn btn-info pull-right">
            <i class="fa fa-plus"></i>{{trans('admin::admin.page_menu_add')}}
        </a>
    </div>
</div>
<!--/END ADD menu-->

@if( ! $menus->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>
                {{ trans('admin::admin.order') }}
            </td>

            <!-- menu ID -->
            <th style='width:10%'>
                {{ trans('menu::menu_admin.menu_id') }}
            </th>
            <!-- /END menu ID -->

            <!-- menu NAME -->
            <th style='width:50%'>
                {{ trans('menu::menu_admin.menu_name') }}
            </th>
            <!-- /END menu NAME -->

            <!-- menu OPERATION -->
            <th style='width:20%'>
                {{ trans('menu::menu_admin.operations') }}
            </th>
            <!-- /END menu OPERATION -->
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $menus->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($menus as $menu)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>

            <!-- menu ID -->
            <td>
                {!! $menu->menu_id !!}
            </td>
            <!-- /END menu ID -->

            <!-- menu NAME -->
            <td>
                {!! $menu->menu_name !!}
            </td>
            <!-- /END menu NAME -->

            <td>
                <!-- EDIT BUTTON -->
                <a href="{!! URL::route('admin_menu.edit', ['id' => $menu->menu_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <!-- /END EDIT BUTTON -->

                <!-- DELETE BUTTON -->
                <a href="{!! URL::route('admin_menu.delete',['id' =>  $menu->menu_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <!-- /END DELETE BUTTON -->

                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
 <span class="text-warning">

    <!-- MESSAGE FAIL -->
	<h5>
		{{ trans('menu::menu_admin.message_find_failed') }}
	</h5>
    <!-- /END MESSAGE FAIL -->

 </span>
@endif
<div class="paginator">
    {!! $menus->appends($request->except(['page']) )->render() !!}
</div>