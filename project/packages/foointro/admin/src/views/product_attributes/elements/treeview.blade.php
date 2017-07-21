<div class="row margin-bottom-12">
    <div class="col-md-12">
        <a href="{!! URL::route('admin_product.attribute.edit') !!}" class="btn btn-info pull-right">
            <i class="fa fa-plus"></i>{{trans('admin::admin.form_button_add')}}
        </a>
    </div>
</div>

<ul class="tree">
    @foreach($root_product_attributes as $root_product_attribute)
    <li>
        <p>{{ $root_product_attribute->product_attribute_name }}
        @if(count($root_product_attribute->childs))
            <span>
                <a href="{!! URL::route('admin_product.attribute.edit', ['id' => $root_product_attribute->product_attribute_id]) !!}">
                    <i class="fa fa-pencil"></i>
                </a>
            </span>
            </p>
            @include('admin::product_attributes.product_attribute_child',['childs' => $root_product_attribute->childs])
        @else
            <span>
                <a href="{!! URL::route('admin_product.attribute.edit', ['id' => $root_product_attribute->product_attribute_id]) !!}">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="{!! URL::route('admin_product.attribute.delete',['id' =>  $root_product_attribute->product_attribute_id, '_token' => csrf_token()]) !!}"
                   class="margin-left-5 delete">
                    <i class="fa fa-trash-o"></i>
                </a>
            </span>
            </p>
        @endif

    </li>
    @endforeach
</ul>