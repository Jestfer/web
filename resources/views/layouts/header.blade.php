<header>
    <div class="flex bg-white h-20 items-center px-8">
        <div class="w-full max-w-screen-xl mx-auto">
            <div class="flex items-center">
                <div class="logo w-12 lg:w-1/5">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="w-16"></a>
                </div>
                <div class="lg:block w-12 lg:w-1/3 lg:px-6 ml-auto">
                    <div class="flex justify-end items-center text-gray-600">
                        <a class="block flex items-center hover:text-gray-700 mr-4" href="mailto:sukycms@gmail.com">
                            {{ __('web.contact') }}
                        </a>
                        @include('partials.social')
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
