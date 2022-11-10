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
                    <a class="form-link" href="{{route('form_log')}}">Войти</a>
                </button>

            </div>

        </div>

        </header>
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
                        <img class="img" src="section-top.jpg" width="600" height="370" alt="">
                    </div>

                    <div class="section-top__estimation">

                        <p class="estimation-p">спорт</p>

                        <div class="estimation-like">
                            <p>16</p>
                            <img class="like" src="like.png" width="30px" height="25px" alt="error">
                        </div>
                    </div>

                    <div class="section-top__data">
                        <div><h3 class="section-top__h3">Гребля в Таганроге</h3></div>

                        <p>июнь 2022</p>
                    </div>

                </div>
        </section>

        <div class="section-category">

        </div>


        <div class="section-post">

        </div>

        <footer class="footer-page"></footer>



    </div>
</body>
</html>
