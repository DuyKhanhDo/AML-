<button {{ $attributes->merge(['class' => 'bg-gray-700 rounded-[10px] w-[20rem] h-[20rem] shadow-lg mt-[10rem]']) }} onclick='ShowPaymentScreen(tier="{{ $tier }}",price="{{ $price }}")'>
    <h2 class="text-[40px] mb-[10px]">{{ $tier }}</h2>
    <h2 class="text-[30px] mb-[30px]">£{{ $price }} per month</h2>
    <h3>Benefits:</h3>
    <h3>{{ $benefits }}</h3>
    <input type="hidden" name="tier" value="{{ $tier }}">
    <input type="hidden" name="price" value="{{ $price }}">
</button>
