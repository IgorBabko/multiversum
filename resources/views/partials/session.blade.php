@if (session('status'))
<div class="success-alert">
    {{ session('status') }}
</div>
@endif
