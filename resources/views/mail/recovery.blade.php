<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta GPT - Восстановление пароля</title>
</head>
<body>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: "Arial", sans-serif;
        }
        h2{
            font-weight: 400;
            font-size: 32px;
            line-height: 39px;
            color: #000000;
            padding-bottom: 20px;
        }
        p.about-envelope{
            color: rgba(0, 0, 0, 0.6);
            font-size: 16px;
            line-height: 150.02%;
            font-weight: 400;
        }
        .envelope-container{
            width: 100%;
            padding:60px 0px;
            background: #EFEFEF;
            height: 100%;
        }
        .envelope-inner{
            width: 100%;
            max-width: 700px;
            margin:0 auto;
        }
        .envelope-plate{
            max-height: 300px;
            width: 100%;
            height: 100%;
        }
        .envelope-about{
            background: #FFFFFF;
            border-radius: 0px 0px 3px 3px;
            padding:40px;
        }
        .envelope-info{
            padding-top: 40px;
        }
        .info-block p{
            font-size: 14px;
            font-weight: 500;
            color: rgba(0, 0, 0, 0.9);
            line-height: 150.02%;
            padding-bottom: 10px;
        }
        .info-block{
            padding-bottom: 20px;
        }
        .info-block:last-of-type{
            padding-bottom: 0px;
        }
        .info-block div{
            background: #F9F9F9;
            width: 100%;
            border-radius: 3px;
            padding:15px 20px;
            color: #8098AB;
        }
        .info-block a{
            font-size: 14px;
            font-weight: 500;
            color: rgba(0, 0, 0, 0.9);
        }
        .support-block{
            padding-top: 30px;
            text-align: center;
            font-size: 16px;
            line-height: 150.02%;
            color: rgba(0, 0, 0, 0.6);
        }
        .support-block a{
            text-decoration: none;
            color:#4E73F8;
        }
    </style>
    <div class="envelope-container">
        <div class="envelope-inner">
            <div class="envelope-plate">
                <img src="https://meta-gpt.com/assets/back.jpg" alt="">
            </div>
            <div class="envelope-about">
                <h2>
                    Ваш пароль был изменён 
                </h2>
                <p class="about-envelope">
                    Если вы не отправляли запрос и это письмо пришло к вам по ошибке, свяжитесь с нами в телеграмм: <a href="https://t.me/starlinkprod" target="_blank">@MetaGPT</a>
                </p>
                <div class="envelope-info">
                    <div class="info-block">
                        <p>Ваш логин:</p>
                        <!--Выводим логин пользователя-->
                        <div>
                            LoginName
                        </div>
                    </div>
                    <div class="info-block">
                        <p>Ваш пароль:</p>
                        <div>
                            Qazwsxedc1111
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="support-block">
            <p>
                Если у вас есть вопросы, пожалуйста, напишите <br> в службу поддержки: <a href="https://t.me/starlinkprod" target="_blank">@MetaGPT</a>
            </p>
        </div>
    </div>
</body>
</html>