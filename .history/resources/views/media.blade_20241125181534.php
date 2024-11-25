<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div>
                <div class="flex overflow-x-auto w-full space-x-4 justify-center">
                    <img src="{{ asset('assets/'{{ $media->image }}'') }}" alt="">
                    <div>
                        <h1 class="text-[25px] pb-[20px]">Title of book</h1>
                        <h2>Author</h2>
                        <h2>Published</h2>
                        <h2>Description</h2>
                    </div>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>
