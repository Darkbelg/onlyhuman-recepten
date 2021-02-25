<div>
    <p><label for="quantity">Number of people:</label>
        <input wire:model="quantityIngredient" type="number" id="quantity" name="quantity" min="1" value="2">
    </p>
    <ul>
        @foreach($ingredients as $ingredient)
            <li>{{ $ingredient["name"] }}: {{ $ingredient["quantity"] }} {{ $ingredient["unit"] }}</li>
        @endforeach
    </ul>
</div>
