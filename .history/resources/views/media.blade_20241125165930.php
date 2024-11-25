<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <h1 class="text-[35px]">Log in</h1>
                @if ($errors->any())
                    <div class="bg-red-400 text-center w-[70%]">
                        <h2 class="text-[20px]">ERRORS:</h2>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('submit.login') }}" method="POST" class="w-full h-full flex items-center flex-col">
                    @csrf
                    <x-text-input type='text' for='email' label='Email'></x-text-input>
                    <x-text-input type='password' for='password' label='Password'></x-text-input>
                    <x-submit-button text='Submit'></x-submit-button>
                </form>
            </div>
        </main>
    </x-slot>
</x-base>
