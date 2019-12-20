<footer>
    <p>{!! __('web.footer.copyright', [
        'date' => date('Y'),
        'name' => config('app.name'),
    ]) !!}</p>
    <p>{!! __('web.footer.made_by', [
        'author' => '<a href="https://jaimesares.com"><img src="'.asset('images/jaimesares.jpg').'"> Jaime Sares</a>',
        'icon' => '<i class="fas fa-heart text-red-500"></i>'
    ]) !!}</p>
</footer>
