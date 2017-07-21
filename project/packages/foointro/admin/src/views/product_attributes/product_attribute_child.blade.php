<ul>
    @foreach($childs as $child)
    <li>
        <p>{{ $child->product_attribute_name }}

            @if(count($child->childs))
            <span>
                <a href="{!! URL::route('admin_product.attribute.edit', ['id' => $child->product_attribute_id]) !!}">
                    <i class="fa fa-pencil"></i>
                </a>
            </span></p>
                @include('admin::product_attributes.product_attribute_child',['childs' => $child->childs])
            @else
            <span>
                <a href="{!! URL::route('admin_product.attribute.edit', ['id' => $child->product_attribute_id]) !!}">
                    <i class="fa fa-pencil"></i>
                </a>

                <a href="{!! URL::route('admin_product.attribute.delete',['id' =>  $child->product_attribute_id, '_token' => csrf_token()]) !!}"
                   class="margin-left-5 delete">
                    <i class="fa fa-trash-o"></i>
                </a>
            </span></p>
            @endif

    </li>
    @endforeach
</ul>