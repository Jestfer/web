@extends('layouts.base')

@section('content')

    <div class="max-w-screen-xl m-auto mt-16 lg:mt-32">
        <section class="w-full flex flex-wrap items-center px-8">
            <div class="w-full lg:w-1/2 font-light pr-5">
                <h2 class="text-5xl mb-5">Suky<i class="fas fa-heart title-icon animated infinite pulse slow"></i>CMS </h2>
                <h1 class="text-4xl font-thin">{{ __('web.description') }}</h1>
                <p class="font-thin mt-5">{!! __('web.what_is_text') !!}</p>

                <form action="" class="mt-12 text-center lg:text-left d-none">
                    <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 mb-6" role="alert">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        <p>En desarrollo... Se lanzará el primer trimestre de 2020.</p>
                    </div>
                    <label class="hidden block text-gray-700 text-sm font-bold mb-2 mt-12" for="username">
                        ¡Suscríbete para obtener novedades!
                    </label>
                    <input type="text" placeholder="{{ __('web.email') }}" name="email" class="hidden shadow appearance-none border rounded w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <button class="hidden bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        {{ __('web.actions.subscribe') }}
                    </button>
                </form>
            </div>
            <div class="w-full lg:w-1/2 mt-12 lg:mt-0">
                <img src="{{ asset('images/pets.png') }}" alt="SukyCMS - Pets" class="m-auto">
            </div>
        </section>
    </div>

    @include('partials.features')
    @include('partials.footer')

@endsection
