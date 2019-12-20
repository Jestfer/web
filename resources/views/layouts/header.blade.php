<header>
    <div class="flex bg-white h-16 items-center">
        <div class="w-full max-w-screen-xl mx-auto">
            <div class="flex items-center">
                <div class="logo lg:w-1/5">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="w-12"></a>
                </div>
                <div class="lg:block lg:w-1/3 px-6 ml-auto">
                    <div class="flex justify-end items-center text-gray-600">
                        <a class="block flex items-center hover:text-gray-700 mr-12" href="mailto:sukycms@gmail.com">
                            {{ __('web.contact') }}
                        </a>
                        @include('partials.social')
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
