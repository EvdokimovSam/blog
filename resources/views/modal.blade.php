<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/modal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header-page">
        <div class="header-page__container container">
            <div class="header-page__start">
               <h2 class="header-page__title">НАШ ПРОЕКТ</h2>
               <a class="link-all__post" href="">Все посты</a>
               <a  class="link-all__blogers" href="">Все блогеры</a>
            </div>
            <div class="header-page__end">
                <div class="header-page__btn">
                  <button  class="header-page__registred registred"><a class="login-link" href="{{route('form_reg')}}">Создать аккаунт</a></button>
                  <button  class="header-page__login registred"><a class="login-link-active" href="{{route('form_log')}}">Войти</a></button>
                </div>
            </div>
        </div>
    </header>









    <script src="modal.js"></script>
</body>
</html>
