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
    <form method="get" action="#">
        <div id="active-modal__reg" class="vmodal">
            <div class="modal-container">
                <div class="modal-container__header">
                    <h3 class="modal-container__title">Регистрация</h3>
                    <span class="question">Есть аккаунт?</span>
                    <a class="login-link" href="{{route('form_log')}}">Войти</a>
                </div>


                <div class="modal-container__content">
                     <div class="modal-container__content__login">
                         <p>Логин</p>
                         <input class="login-input" type="text" placeholder="Логин">
                     </div>
                     <div class="modal-container__content__password" >
                        <p>Пароль</p>
                        <input class="login-input" type="text"placeholder="Пароль">
                    </div>
                </div>


                <div class="modal-container__footer">
                    <button id="send-reg" class="modal-reg">Зарегистрироваться</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
