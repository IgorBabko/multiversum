@foreach (session()->all() as $message)
<div class="success-alert">
    {{  var_dump($message) }}
</div>
@endforeach
