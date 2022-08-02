<x-guest-layout>
    <!-- ====== Banner Section Start -->
    <x-frontend.banner>
        {{ __('Insurance') }}
    </x-frontend.banner>
    <!-- ====== Banner Section End -->

    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <!-- First Repeater -->
                @foreach ($data as $item)
                    <div class="w-1/2 md:w-1/3 lg:w-1/5 px-4 flex flex-col">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1 bg-white"
                            data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                    class="w-full h-40 md:h-56 object-cover" />
                            </div>
                            <div>
                                <h3>
                                    <div
                                        class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark">
                                        {{ $item->name }}
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-guest-layout>
