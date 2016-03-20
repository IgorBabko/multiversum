
@if (session('notify'))
<div id="ohsnap" data-notify="{{ session('notify') }}"></div>
<script src="/js/ohsnap.min.js"></script>
<script>
    ohSnap($('#ohsnap').data('notify'), {color: 'green', icon: 'icon-alert'});
</script>
@endif
