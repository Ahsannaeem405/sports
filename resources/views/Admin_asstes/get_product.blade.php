<option value="">Select Product</option>

@forelse ( $products as $product )
<option value="{{$product->id}}">{{$product->name}}</option>
@empty
<option value="">No product Found</option>
@endforelse

