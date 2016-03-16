@extends("layout")
@section("content")
<header class="header">
    <h1 class="header__heading">Главный заголовок</h1>
    <!-- <hr class="light-line"> -->
    <h2 class="header__quote">Здесь можно написать цитату</h2>
    <div class="header__arrow"><i class="fa fa-angle-double-down"></i></div>
</header>
<div class="Section about">
    <h1 class="Section__heading">Обо мне</h1>
    <img src="/img/main-avatar-gray.jpg" class="img-responsive img-circle about__avatar" alt="мой аватар">
    <div class="about__bio">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis quasi tenetur modi maiores totam. Error, laboriosam, cupiditate dolorum voluptates dolore dolor animi consectetur doloremque harum vero minus.
        <br><br>
        Iste, cupiditate, rem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis quasi tenetur modi maiores totam. Error, laboriosam, cupiditate dolorum.
    </div>
</div>
<div class="Section Section--is-purple">
    <h1 class="Section__heading">Недавние вебинары</h1>
    <div class="Gallery">
        <div>
            <div class="Video Video1">
                <img src="http://placehold.it/270x220" class="Video__thumb">
                <!-- <span class="caption">
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas suscipit, vel. Unde quasi distinctio iusto, reiciendis itaque, placeat quibusdam modi hic minima error laborum.</div>
                    <i class="fa fa-play"></i>
                </span> -->
                <div class="Video__meta">Видео 1</div>
            </div>
        </div>
        <div>
            <div class="Video Video2">
                <img src="http://placehold.it/270x220" class="Video__thumb">
                <div class="Video__meta">Видео 2</div>
            </div>
        </div>
        <div>
            <div class="Video Video3">
                <img src="http://placehold.it/270x220" class="Video__thumb">
                <div class="Video__meta">Видео 3</div>
            </div>
        </div>
    </div>
</div>
<div class="Section">
    <h1 class="Section__heading">Свежие статьи</h1>
    <div class="Gallery">
        <div class="Post post1">
            <img src="http://placehold.it/400x250" class="img-responsive post-thumbnail Post__thumb" alt="Статья 1">
            <div class="Post__info">
                <h3 class="Post__heading">Статья 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, mollitia atque temporibus totam incidunt doloribus suscipit tempore nulla qui, facilis, in possimus delectus quam et.</p>
                <p class="Post__meta">February 31, 2015 9 Comments  12</p>
                <button class="btn btn-primary">Читать</button>
            </div>
        </div>
        <div class="post post2">
            <img src="http://placehold.it/400x250" class="img-responsive post-thumbnail Post__thumb" alt="Статья 1">
            <div class="Post__info">
                <h3 class="Post">Статья 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, mollitia atque temporibus totam incidunt doloribus suscipit tempore nulla qui, facilis, in possimus delectus quam et.</p>
                <p class="Post__meta">February 31, 2015 9 Comments  12</p>
                <button class="btn btn-primary">Читать</button>
            </div>
        </div>
        <div class="Post post3">
            <img src="http://placehold.it/400x250" class="img-responsive post-thumbnail Post__thumb" alt="Статья 1">
            <div class="Post__info">
                <h3 class="Post__heading">Статья 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, mollitia atque temporibus totam incidunt doloribus suscipit tempore nulla qui, facilis, in possimus delectus quam et.</p>
                <p class="Post__meta">February 31, 2015 9 Comments  12</p>
                <button class="btn btn-primary">Читать</button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="Section Section--is-purple">
<h1 class="Section__heading">Новые книги</h1>
<div class="Gallery">
    <div class="Book book1">
        <img src="http://placehold.it/200x200" class="img-responsive img-circle Book__thumb" alt="Книга 1">
        <h3 class="Book__heading">Книга 1</h3>
    </div>
    <div class="Book book2">
        <img src="http://placehold.it/200x200" class="img-responsive img-circle Book__thumb" alt="Книга 1">
        <h3 class="Book__heading">Книга 1</h3>
    </div>
    <div class="Book book3">
        <img src="http://placehold.it/200x200" class="img-responsive img-circle Book__thumb" alt="Книга 1">
        <h3 class="Book__heading">Книга 1</h3>
    </div>
    <div class="Book book4">
        <img src="http://placehold.it/200x200" class="img-responsive img-circle Book__thumb" alt="Книга 1">
        <h3 class="Book__heading">Книга 1</h3>
    </div>
</div>
</div>
<div class="Section">
<div class="Gallery">
    <div class="Disk disk1">
        <img src="http://placehold.it/200x200" class="img-responsive img-circle Disk_thumb" alt="Диск 1">
        <h3 class="Disk__heading">Диск 1</h3>
    </div>
    <div class="Disk disk2">
        <img src="http://placehold.it/200x200" class="img-responsive img-circle Disk_thumb" alt="Диск 1">
        <h3 class="Disk__heading">Диск 2</h3>
    </div>
    <div class="Disk disk3">
        <img src="http://placehold.it/200x200" class="img-responsive img-circle Disk_thumb" alt="Диск 1">
        <h3 class="Disk__heading">Диск 3</h3>
    </div>
    <div class="Disk disk4">
        <img src="http://placehold.it/200x200" class="img-responsive img-circle Disk_thumb" alt="Диск 1">
        <h3 class="Disk__heading">Диск 4</h3>
    </div>
</div>
</div>
@endsection
