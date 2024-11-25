<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div id="subscription-screen" class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[20px] flex items-center flex-col">
                <h1 class="text-[35px]">Subscribe</h1>
                <h3 class="text-[30px] mt-[20px]">Subscribe today to access all of our services!</h3>
                <h5 class="text-[25px]">Select from the membership tiers below to get started.</h5>
                <div class="flex overflow-x-auto w-full space-x-4 justify-center">
                    <x-subscription-tier tier='Basic' price='5' benefits='Borrow one media product at a time with a 1 month return window.'></x-subscription-tier>
                    <x-subscription-tier tier='Premium' price='10' benefits='You can borrow three media products at a time with a 1 month return window.'></x-subscription-tier>
                    <x-subscription-tier tier='Premium plus' price='25' benefits='You can borrow 10 media products at a time with a 2 month return window.'></x-subscription-tier>
                </div>
            </div>
            <x-payment-screen id="payment-screen" class="hidden"></x-payment-screen>
            <x-payment-info class="hidden"></x-payment-info>
        </main>
    </x-slot>
</x-base>



<script>
    function ShowPaymentScreen(tier, price){
        var paymentScreen = document.getElementById("payment-screen");
        var subscriptionScreen = document.getElementById("subscription-screen");
        var paymentInfo = document.getElementById("payment-info")

        var info = `
            <h1 class='text-[40px]'>${tier}</h1>
            <h2 class='text-[35px]'>£${price} per month</h2>
        `;

        paymentInfo.innerHTML = info;

        paymentScreen.classList.remove("hidden");
        subscriptionScreen.classList.add("hidden");
    }

    function DisplayPaymentInfo(){
        var paymentInfo = document.getElementById("payment-info");
        paymentInfo.classList.remove("hidden");
    }
</script>
