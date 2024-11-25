<div {{ $attributes->merge(['class' => "absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] rounded-[15px]"]) }}>
    <h3 class="text-[25px] mt-[10px]">Select your payment method</h3>
    <div class="flex flex-col">

    </div>
    <x-text-input for='card-num' type='text' label='Card number'></x-text-input>
    <x-text-input for='expiry' type='text' label='Expiry date'></x-text-input>
    <x-text-input for='cvv' type='text' label='CVV'></x-text-input>
</div>
