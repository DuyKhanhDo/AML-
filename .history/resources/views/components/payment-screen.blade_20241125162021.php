    <div {{ $attributes->merge(['class' => 'absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] rounded-[15px]']) }}>
        <div id="payment-selection-div">
            <div id="payment-info" class="bg-gray-600 w-full rounded-[15px]"></div>
                <h3 class="text-[25px] mt-[10px]">Select your payment method</h3>
                <div class="flex mx-auto overflow-x-auto w-[90%] space-x-4 items-center justify-center">
                    <x-payment-type src="{{ asset('assets/visa.jpg') }}" alt="visa logo" type='visa' onclick="DisplayVisaPaymentInfo"></x-payment-type>
                    <x-payment-type src="{{ asset('assets/paypal.jpg') }}" alt="paypal logo" type='paypal' onclick="DisplayPaypalPaymentInfo"></x-payment-type>
                    <x-payment-type src="{{ asset('assets/google-pay.jpg') }}" alt="google pay logo" type='gpay' onclick="DisplayGPayPaymentInfo"></x-payment-type>
                </div>
            </div>
    </div>
