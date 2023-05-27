<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta GPT - Покупка</title>
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
            padding: 30px 0px;
            border-top: 1px dashed rgba(0, 0, 0, 0.2);
            border-bottom: 1px dashed rgba(0, 0, 0, 0.2);
            margin: 30px 0px;
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
        table{
            width: 100%;
            overflow: hidden;
        }
        table td:last-child{
            text-align: right;
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
    </style>
    <div class="envelope-container">
        <div class="envelope-inner">
            <div class="envelope-plate">
                <img src="https://meta-gpt.com/assets/back.jpg" alt="">
            </div>
            <div class="envelope-about">
                <h2>
                    {{__('thanksForPursacheMail')}}
                </h2>
                <div class="envelope-info">
                    <table>
                        <thead>
                            <tr></tr>
                            <tr></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {{__('thanksForPursacheMailYou')}}
                                </td>
                                <td>
                                    {{ $tokens }} {{__('profileHistoryTokens')}}
                                </td>
                            </tr>
                            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                            <tr>
                                <td>
                                    {{__('thanksSummMail')}}
                                </td>
                                <td>
                                    {{ $price }} {{__('countryValuta')}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="info-block">
                    <p>{{_('thanksSummMailGo')}}</p>
                    <div>
                        <a href="https://meta-gpt.com/login" target="_blank">https://meta-gpt.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="support-block">
            <p>
                {{__('thanksSummMailSupp1')}} <br> {{__('thanksSummMailSupp2')}} <a href="https://t.me/starlinkprod" target="_blank">@MetaGPT</a>
            </p>
        </div>
    </div>
</body>
</html>
