<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Shopping Cart</div>
            <div class="card-body">
                <ul class="list-group">
                    @forelse ($cart['products'] as $product)
                        <li class="list-group-item">
                            <span>{{$product->name}} | Price: {{$product->price}}</span>
                            <div class="float-end">
                                <button wire:click="removeItem({{ $product->id }})" class="btn btn-danger">Remove</button>
                            </div>
                        </li>
                    @empty
                        
                    @endforelse
                    
                </ul>
            </div>
            <div class="card-footer">
                @if ($cart['products'])
                <button wire:click="checkout" class="btn btn-success float-end">Checkout</button>
                @endif
            </div>
        </div>
    </div>
</div>