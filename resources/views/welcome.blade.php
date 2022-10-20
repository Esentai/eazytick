@extends('layouts.main')

@section('content')

<section class="hero-area" id="home">
    <div class="container">
        <div class="hero-area-slider">
            <div class="row hero-area-slide">
                <div class="col-lg-6 col-md-5">
                    <div class="hero-area-content">
                        <img src="assets/img/1653289163zikjn.webp" alt="about" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="hero-area-content pr-50">
                        <h2>Концерт МОТ в Алматы</h2>
                        <div class="review">
                            <div class="author-review">
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h4>180k voters</h4>
                        </div>
                        <p>МОТ — популярный артист, сочетающий хип-хоп и RnB-нулевых. Артист популярен благодаря своим лирическим трекам. Его размышления об отношениях мужчины и женщины складываются в большие хиты и находят отклик в сердцах поклонниц по всему миру.

                            Мот очень точно подходит и к совместной работе с другими артистами. Синглы «Сколько лет» с Валерием Меладзе, «Паруса» с Zivert и «Сопрано» с Ани Лорак , «Лилии» с JONY стали безусловными шлягерами, которые знают абсолютно все!
                            <br>
                            <br>
                        <a href="{{ route('search')}}" class="btn btn-primary">Найти друзей</a>
                            <button class="btn btn-success">Купить билет</button>
                    </div>
                </div>
            </div>
            <div class="row hero-area-slide">
                <div class="col-lg-6 col-md-5">
                    <div class="hero-area-content">
                        <img src="assets/img/166056319042bg7.webp" alt="about" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="hero-area-content pr-50">
                        <h2>Александр Филиппенко в Алматы</h2>
                        <div class="review">
                            <div class="author-review">
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h4>120k voters</h4>
                        </div>
                        <p>В своей искрометной программе Александр Филиппенко объединяет двух любимых и близких по духу авторов — Михаила Михайловича Зощенко и Михаила Михайловича Жванецкого.

                            Оба Михаила Михайловича точно и с неподражаемым юмором отражают — каждый по-своему — действительность нашей страны. Времена разные, но повод пошутить на эту тему находится всегда.

                        </p>
                        <br>
                        <br>
                        <a href="{{ route('search')}}" class="btn btn-primary">Найти друзей</a>
                        <button class="btn btn-success">Купить билет</button>
                    </div>
                </div>
            </div>
            <div class="row hero-area-slide">
                <div class="col-lg-6 col-md-5">
                    <div class="hero-area-content">
                        <img src="assets/img/6ea4833c0e3f8842d6765bcfd63ad686.webp" alt="about" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="hero-area-content pr-50">
                        <h2>Пацанская история</h2>
                        <div class="review">
                            <div class="author-review">
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h4>150k voters</h4>
                        </div>
                        <p>Трое друзей решаются на опасную авантюру, чтобы начать новую жизнь. Тима, Рус и Каир должны перевезти через границу незаконный груз. Но в дороге все идет не по плану. Теперь от успеха дела зависит не только их будущее, но и жизни.</p>
                        <div class="slide-trailor">
                            <h3>Watch Trailer</h3>
                            <a class="theme-btn theme-btn2" target="_blank" href="https://www.youtube.com/watch?v=c47WBGaZZ3w&ab_channel=%D0%9F%D0%90%D0%A6%D0%90%D0%9D%D0%A1%D0%9A%D0%98%D0%95%D0%98%D0%A1%D0%A2%D0%9E%D0%A0%D0%98%D0%98"><i class="icofont icofont-play"></i> Tickets</a>
                        </div>
                        <br>
                        <br>
                        <a href="{{ route('search')}}" class="btn btn-primary">Найти друзей</a>
                        <button class="btn btn-success">Купить билет</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-area-thumb">
            <div class="thumb-prev">
                <div class="row hero-area-slide">
                    <div class="col-lg-6">
                        <div class="hero-area-content">
                            <img src="assets/img/slide3.png" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-area-content pr-50">
                            <h2>Last Avatar</h2>
                            <div class="review">
                                <div class="author-review">
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </div>
                                <h4>180k voters</h4>
                            </div>
                            <p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions,   She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
                            <h3>Cast:</h3>
                            <div class="slide-cast">
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast1.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast3.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast4.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast5.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast6.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast7.png" alt="about" />
                                </div>
                                <div class="single-slide-cast text-center">
                                    5+
                                </div>
                            </div>
                            <div class="slide-trailor">
                                <h3>Watch Trailer</h3>
                                <a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thumb-next">
                <div class="row hero-area-slide">
                    <div class="col-lg-6">
                        <div class="hero-area-content">
                            <img src="assets/img/slide1.png" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-area-content pr-50">
                            <h2>The Deer God</h2>
                            <div class="review">
                                <div class="author-review">
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </div>
                                <h4>180k voters</h4>
                            </div>
                            <p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions,   She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
                            <h3>Cast:</h3>
                            <div class="slide-cast">
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast1.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast3.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast4.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast5.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast6.png" alt="about" />
                                </div>
                                <div class="single-slide-cast">
                                    <img src="assets/img/cast/cast7.png" alt="about" />
                                </div>
                                <div class="single-slide-cast text-center">
                                    5+
                                </div>
                            </div>
                            <div class="slide-trailor">
                                <h3>Watch Trailer</h3>
                                <a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title pb-20">
                    <h1><i class="icofont icofont-coffee-cup"></i> Latest News</h1>
                </div>
            </div>
        </div>
        <hr />
    </div>
    <div class="news-slide-area">
        <div class="news-slider">
            <div class="single-news">
                <div class="news-bg-1"></div>
                <div class="news-date">
                    <h2><span>NOV</span> 25</h2>
                    <h1>2017</h1>
                </div>
                <div class="news-content">
                    <h2>The Witch Queen</h2>
                    <p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her hat, and teal eyes.</p>
                </div>
                <a href="#">Read More</a>
            </div>
            <div class="single-news">
                <div class="news-bg-2"></div>
                <div class="news-date">
                    <h2><span>NOV</span> 25</h2>
                    <h1>2017</h1>
                </div>
                <div class="news-content">
                    <h2>The Witch Queen</h2>
                    <p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her hat, and teal eyes.</p>
                </div>
                <a href="#">Read More</a>
            </div>
            <div class="single-news">
                <div class="news-bg-3"></div>
                <div class="news-date">
                    <h2><span>NOV</span> 25</h2>
                    <h1>2017</h1>
                </div>
                <div class="news-content">
                    <h2>The Witch Queen</h2>
                    <p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her hat, and teal eyes.</p>
                </div>
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="news-thumb">
            <div class="news-next">
                <div class="single-news">
                    <div class="news-bg-3"></div>
                    <div class="news-date">
                        <h2><span>NOV</span> 25</h2>
                        <h1>2017</h1>
                    </div>
                    <div class="news-content">
                        <h2>The Witch Queen</h2>
                        <p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her hat, and teal eyes.</p>
                    </div>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="news-prev">
                <div class="single-news">
                    <div class="news-bg-2"></div>
                    <div class="news-date">
                        <h2><span>NOV</span> 25</h2>
                        <h1>2017</h1>
                    </div>
                    <div class="news-content">
                        <h2>The Witch Queen</h2>
                        <p>Witch Queen is a tall woman with a slim build. She has pink hair, which is pulled up under her hat, and teal eyes.</p>
                    </div>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection


