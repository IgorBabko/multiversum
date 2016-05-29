@if (session('notify'))
    <div id="ohsnap" data-notify="{{ session('notify') }}"></div>
@else
    <div id="ohsnap"></div>
@endif
