<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="home-page">

<!--------------------------------------------header---------------------------------
    -------------------------------------------------------------------------------->
        <header class="header-page">
            <div class="header-page__start">
                <p class="logo">Logotip</p>
            </div>

            <div class="header-page__center">
                <nav class="header-page__nav">
                    <ul class="header-page__ul">
                        <li class="header-page__li">
                            <a class="header-page__link" href="#">Главная</a>
                        </li>
                    </ul>
                    <ul class="header-page__ul">
                        <li class="header-page__li">
                            <a class="header-page__link" href="#">Лента</a>
                        </li>
                    </ul>
                    <ul class="header-page__ul">
                        <li class="header-page__li">
                            <a class="header-page__link" href="#">Категории</a>
                        </li>
                    </ul>
                    <ul class="header-page__ul">
                        <li class="header-page__li">
                            <a class="header-page__link" href="#">Профиль</a>
                        </li>
                    </ul>
                </nav>

                <button class="button-form">
                    <a class="form-link" href="{{ route('auth.login') }}">Войти</a>
                </button>

            </div>
        </header>
        </div>

<!--------------------------------------------header---------------------------------
    -------------------------------------------------------------------------------->




    <section class="section-top">
                <div class="section-top__left">

                    <div class="section-top__text">
                        <h1 class="section-top__text__h1">Читайте.
                            Делитесь своими мыслями</h1>
                    </div>

                    <div class="section-top__btn">
                        <button class="btn-start">Начать</button>
                    </div>


                </div>

                <div class="section-top__right">

                    <div class="section-top__img">
                        <img class="img" src="img/section-top.jpg" width="600" height="370" alt="">
                    </div>

                    <div class="section-top__estimation">

                        <p class="estimation-p">спорт</p>

                        <div class="estimation-like">
                            <p>16</p>
                            <img class="like" src="img/like.png" width="30px" height="25px" alt="error">
                        </div>
                    </div>

                    <div class="section-top__data">
                        <div><h3 class="section-top__h3">Гребля в Таганроге</h3></div>

                        <p>июнь 2022</p>
                    </div>

                </div>
        </section>

        <div class="section-category">

             <h3 class="section-category_title">Категории</h3>
             <div class="section-category_choice">
                <span class="categore-link__active">/</span>
                 <a href="" class="category-choice__link">Еда</a>
                 <span class="categore-link__active">/</span>
                 <a href="" class="category-choice__link">Спорт</a>
                 <span class="categore-link__active">/</span>
                 <a href="" class="category-choice__link">Работа</a>
                 <span class="categore-link__active">/</span>
                 <a href="" class="category-choice__link">Технологии</a>
                 <span class="categore-link__active">/</span>
             </div>
        </div>


        <div class="section-post">
            <h3 class="section-post__title">Популярные посты</h3>
            <div class="section-post__start">
                <div class="section-top__end">
                    <div class="section-top-end__one is-active">
                        <div class="rotate-block">
                            <div class="change-img">
                              <div class="front-side-img"><img src="img/section-top.jpg" width="600" height="330" alt="error"/></div>
                              <div class="back-side-img"><img src="img/section-top.jpg" width="600" height="330" alt="error"/></div>
                            </div>
                          </div>

                        <div class="section-top__estimation">

                            <p class="estimation-p">спорт</p>

                            <div class="estimation-like">
                                <p>16</p>
                                <img class="like" src="img/like.png" width="30px" height="25px" alt="error">
                            </div>
                        </div>

                        <div class="section-top__data">
                            <div><h3 class="section-top__h3">Гребля в Таганроге</h3></div>

                            <p>ноябрь 2022</p>
                        </div>

                    </div>

                    <div class="section-top-end__two">
                        <div class="rotate-block">
                            <div class="change-img">
                              <div class="front-side-img"><img src="img/pizza.jpg" width="600" height="330" alt="error"/></div>
                              <div class="back-side-img"><img src="img/pizza.jpg" width="600" height="330" alt="error"/></div>
                            </div>
                          </div>

                        <div class="section-top__estimation">

                            <p class="estimation-p">пицца</p>

                            <div class="estimation-like">
                                <p>15</p>
                                <img class="like" src="img/like.png" width="30px" height="25px" alt="error">
                            </div>
                        </div>

                        <div class="section-top__data">
                            <div><h3 class="section-top__h3">Лучшая пицца...</h3></div>

                            <p>февраль 2022</p>
                        </div>

                    </div>

                </div>
        </div>
            <div class="section-top__end ">
                <div class="section-top-end__one is-active">
                    <div class="rotate-block">
                        <div class="change-img">
                          <div class="front-side-img"><img src="img/animals.jpg" width="600" height="330" alt="error"/></div>
                          <div class="back-side-img"><img src="img/animals.jpg" width="600" height="330" alt="error"/></div>
                        </div>
                      </div>

                    <div class="section-top__estimation">

                        <p class="estimation-p">животные</p>

                        <div class="estimation-like">
                            <p>11</p>
                            <img class="like" src="img/like.png" width="30px" height="25px" alt="error">
                        </div>
                    </div>

                    <div class="section-top__data">
                        <div><h3 class="section-top__h3">День стольника</h3></div>

                        <p>май 2022</p>
                    </div>

                </div>

                <div class="section-top-end__two">
                    <div class="rotate-block">
                        <div class="change-img">
                          <div class="front-side-img"><img src="img/different.jpg" width="600" height="330" alt="error"/></div>
                          <div class="back-side-img"><img src="img/different.jpg" width="600" height="330" alt="error"/></div>
                        </div>
                      </div>

                    <div class="section-top__estimation">

                        <p class="estimation-p">разное</p>

                        <div class="estimation-like">
                            <p>8</p>
                            <img class="like" src="img/like.png" width="30px" height="25px" alt="error">
                        </div>
                    </div>

                    <div class="section-top__data">
                        <div><h3 class="section-top__h3">Путешествия</h3></div>

                        <p>апрель 2021</p>
                    </div>

                </div>

            </div>

        </div>

        <footer class="footer-page"></footer>



    </div>
</body>
</html>
