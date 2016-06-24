@extends ('layout') @section('content')
<div class="container">
    <h2 class="main-heading video-heading">{{ $video->title }}</h2>
    <video id="my-video" class="video-js video-item" controls preload="auto" width="640" height="480"
    poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
        <source src="{{ $video->url }}" type='video/mp4'>
            <source src="MY_VIDEO.webm" type='video/webm'>
                <p class="vjs-no-js">
                    Для просмотра этого видео, пожалуйста, включите поддержку JavaScript и, желательно,
                    обновите Ваш браузер
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
    </video>
    <div style="font-size: 20px; font-weight: 300; margin-top: 50px; color: #5a5a5a">{!! $video->description !!}</div>
    @include ('partials.comments')
</div>
@stop
