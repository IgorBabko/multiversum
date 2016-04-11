@if (session('notify'))
<div id="ohsnap" data-notify="{{ session('notify') }}"></div>
<script>
    ohSnap($('#ohsnap').data('notify'), {color: 'green', icon: 'icon-alert'});
</script>
@endif
