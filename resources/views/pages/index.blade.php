@extends("layout")

@section("content")
    <header>
        <div class="header-content">
            <h1>Главный заголовок</h1>
            <hr class="light-line">
            <h2 id="quote">Здесь можно написать цитату</h2>
            <div class="bounce"><i class="fa fa-angle-double-down"></i></div>
        </div>
    </header>
    <div class="wrapper about-me-wrapper">
        <div class="container about-me">
            <div class="row">
                <h1>Обо мне</h1>
                <hr class="light-line">
                <div class="col-xs-12 col-sm-offset-0 col-sm-4 col-md-offset-0 col-md-4 col-lg-offset-0 col-lg-4">
                    <div id="main-avatar">
                        <img src="/img/main-avatar-gray.jpg" class="img-responsive img-circle" alt="мой аватар">
                    </div>
                </div>
                <div id="about-info" class="col-xs-12 col-sm-8 col-md-8 col-lg-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis quasi tenetur modi maiores totam. Error, laboriosam, cupiditate dolorum voluptates dolore dolor animi consectetur doloremque harum vero minus.
                    <br><br>
                Iste, cupiditate, rem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis quasi tenetur modi maiores totam. Error, laboriosam, cupiditate dolorum.</div>
            </div>
        </div>
    </div>
    <div class="wrapper video-block-wrapper">
        <div class="container video-block">
            <div class="row centered">
                <h1>Недавние вебинары</h1>
                <hr class="light-line">
                <div class="col-md-4 col-sm-6">
                    <div class="video video1">
                        <img src="http://placehold.it/300x250">
                        <!-- <span class="caption">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas suscipit, vel. Unde quasi distinctio iusto, reiciendis itaque, placeat quibusdam modi hic minima error laborum.</div>
                            <i class="fa fa-play"></i>
                        </span> -->
                        <h3>Видео 1<i class="fa fa-play pull-right"></i></h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="video video2">
                        <img src="http://placehold.it/300x250">
                        <!-- <span class="caption">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas suscipit, vel. Unde quasi distinctio iusto, reiciendis itaque, placeat quibusdam modi hic minima error laborum.</div>
                            <i class="fa fa-play-circle"></i>
                        </span> -->
                        <h3>Видео 2<i class="fa fa-play pull-right"></i></h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="video video3">
                        <img src="http://placehold.it/300x250">
                        <!-- <span class="caption"> -->
                        <!-- <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas suscipit, vel. Unde quasi distinctio iusto, reiciendis itaque, placeat quibusdam modi hic minima error laborum.</div>
                            <i class="fa fa-play-circle-o"></i>
                        </span> -->
                        <h3>Видео 3<i class="fa fa-play pull-right"></i></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper posts-wrapper">
        <div class="container posts">
            <div class="row centered">
                <h1>Свежие статьи</h1>
                <hr class="light-line">
                <div class="post post1 col-md-4 col-sm-6 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                    <img src="http://placehold.it/400x250" class="img-responsive post-thumbnail" alt="Статья 1">
                    <div class="post-info">
                        <h3>Статья 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, mollitia atque temporibus totam incidunt doloribus suscipit tempore nulla qui, facilis, in possimus delectus quam et.</p>
                        <p class="post-meta-info">February 31, 2015 9 Comments  12</p>
                        <button class="btn btn-primary">Читать</button>
                    </div>
                </div>
                <div class="post post2 col-md-4 col-sm-6 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                    <img src="http://placehold.it/400x250" class="img-responsive  post-thumbnail" alt="Статья 1">
                    <div class="post-info">
                        <h3>Статья 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, mollitia atque temporibus totam incidunt doloribus suscipit tempore nulla qui, facilis, in possimus delectus quam et.</p>
                        <p class="post-meta-info">February 31, 2015 9 Comments  12</p>
                        <button class="btn btn-primary">Читать</button>
                    </div>
                </div>
                <div class="post post3 col-md-4 col-sm-6 col-md-offset-0 col-sm-offset-3 col-xs-offset-1 col-xs-10">
                    <img src="http://placehold.it/400x250" class="img-responsive post-thumbnail" alt="Статья 1">
                    <div class="post-info">
                        <h3>Статья 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, mollitia atque temporibus totam incidunt doloribus suscipit tempore nulla qui, facilis, in possimus delectus quam et.</p>
                        <p class="post-meta-info">February 31, 2015 9 Comments  12</p>
                        <button class="btn btn-primary">Читать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper books-and-disks-block">
        <div class="container">
            <h1>Новые книги и диски</h1>
            <hr class="light-line">
            <div class="row centered" id="books-block">
                <div class="book book1 col-xs-12 col-sm-6 col-md-3">
                    <img src="http://placehold.it/200x200" class="img-responsive img-circle post-thumbnail" alt="Книга 1">
                    <div class="item-info">
                        <h3>Книга 1</h3>
                    </div>
                </div>
                <div class="book book2 col-xs-12 col-sm-6 col-md-3">
                    <img src="http://placehold.it/200x200" class="img-responsive img-circle post-thumbnail" alt="Книга 2">
                    <div class="item-info">
                        <h3>Книга 2</h3>
                    </div>
                </div>
                <div class="book book3 col-xs-12 col-sm-6 col-md-3">
                    <img src="http://placehold.it/200x200" class="img-responsive img-circle post-thumbnail" alt="Книга 3">
                    <div class="item-info">
                        <h3>Книга 3</h3>
                    </div>
                </div>
                <div class="book book4 col-xs-12 col-sm-6 col-md-3">
                    <img src="http://placehold.it/200x200" class="img-responsive img-circle post-thumbnail" alt="Книга 4">
                    <div class="item-info">
                        <h3>Книга 4</h3>
                    </div>
                </div>
            </div>
            <div class="row centered">
                <div class="disk disk1 col-xs-12 col-sm-6 col-md-3">
                    <img src="http://placehold.it/200x200" class="img-responsive img-circle post-thumbnail" alt="Диск 1">
                    <div class="item-info">
                        <h3>Диск 1</h3>
                    </div>
                </div>
                <div class="disk disk2 col-xs-12 col-sm-6 col-md-3">
                    <img src="http://placehold.it/200x200" class="img-responsive img-circle post-thumbnail" alt="Диск 2">
                    <div class="item-info">
                        <h3>Диск 2</h3>
                    </div>
                </div>
                <div class="disk disk3 col-xs-12 col-sm-6 col-md-3">
                    <img src="http://placehold.it/200x200" class="img-responsive img-circle post-thumbnail" alt="Диск 3">
                    <div class="item-info">
                        <h3>Диск 3</h3>
                    </div>
                </div>
                <div class="disk disk4 col-xs-12 col-sm-6 col-md-3">
                    <img src="http://placehold.it/200x200" class="img-responsive img-circle post-thumbnail" alt="Диск 4">
                    <div class="item-info">
                        <h3>Диск 4</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper email-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
                    <h1>Связаться со мной</h1>
                    <hr class="light-line">
                    <form>
                        <input type="text" placeholder="Имя">
                        <input type="email" placeholder="Email">
                        <textarea placeholder="Сообщение"></textarea>
                        <button type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
