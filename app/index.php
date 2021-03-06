<?php
    require 'db/data.php';
    require 'db/visits.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59Q3W3R');</script>
    <meta charset="utf-8">

    <title>Rezart Agency</title>
    <meta name="description" content="7 причин, почему вы теряете клиентов <br> (и как это исправить в 2017 году). Как ваши дела в бизнесе? Всегда хочется,  чтобы было еще лучше. Согласны? И будьте уверены, лучше может быть">
    <meta name="keywords" content="лендинг, landing page, сайт, блог, воронка продаж, клиенты с интернет, rezart, студия интернет маркетинга, аналитика, продающий копирайтинг">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />


    <meta property="og:image" content="http://rezart.agency/am/img/og.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />


    <meta property="og:title" content="Rezart Agency" />
    <meta property="og:description" content="7 причин, почему вы теряете клиентов <br> (и как это исправить в 2017 году). Как ваши дела в бизнесе? Всегда хочется,  чтобы было еще лучше. Согласны? И будьте уверены, лучше может быть" />

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#c2a771">

    <!-- RESET -->
    <style>html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}*{box-sizing:border-box}html,body{height:100%;margin:0;width:100%}.container{max-width:1200px;margin:0 auto}a,button,img,input{-webkit-transition:all .5s;transition:all .5s}button,button:active,button:focus,input,input:active,input:focus,textarea,textarea:active,textarea:focus{outline:none}button,button:hover,a,a:hover{text-decoration:none;cursor:pointer}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:before,.clearfix:after,.container:before,.container:after{content:'.';display:block;overflow:hidden;visibility:hidden;font-size:0;line-height:0;width:0;height:0}.clearfix:after,.container:after{clear:both}.left{float:left}.right{float:right}.tl{text-align:left}.tr{text-align:right}.tc{text-align:center}.flex{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center}a,button,input,textarea{text-decoration:none;outline:0;border:0;-webkit-transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease;transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease}a:focus,button:focus,input:focus,textarea:focus{outline:0}input,textarea{-webkit-box-sizing:border-box;box-sizing:border-box}textarea{resize:none}button:hover,a:hover{cursor:pointer}</style>

    <!-- GRID -->
    <style>:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.col-1,.col-sm-1,.col-md-1,.col-lg-1,.col-2,.col-sm-2,.col-md-2,.col-lg-2,.col-3,.col-sm-3,.col-md-3,.col-lg-3,.col-4,.col-sm-4,.col-md-4,.col-lg-4,.col-5,.col-sm-5,.col-md-5,.col-lg-5,.col-6,.col-sm-6,.col-md-6,.col-lg-6,.col-7,.col-sm-7,.col-md-7,.col-lg-7,.col-8,.col-sm-8,.col-md-8,.col-lg-8,.col-9,.col-sm-9,.col-md-9,.col-lg-9,.col-10,.col-sm-10,.col-md-10,.col-lg-10,.col-11,.col-sm-11,.col-md-11,.col-lg-11,.col-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12{float:left}.col-12{width:100%}.col-11{width:91.66666667%}.col-10{width:83.33333333%}.col-9{width:75%}.col-8{width:66.66666667%}.col-7{width:58.33333333%}.col-6{width:50%}.col-5{width:41.66666667%}.col-4{width:33.33333333%}.col-3{width:25%}.col-2{width:16.66666667%}.col-1{width:8.33333333%}.col-pull-12{right:100%}.col-pull-11{right:91.66666667%}.col-pull-10{right:83.33333333%}.col-pull-9{right:75%}.col-pull-8{right:66.66666667%}.col-pull-7{right:58.33333333%}.col-pull-6{right:50%}.col-pull-5{right:41.66666667%}.col-pull-4{right:33.33333333%}.col-pull-3{right:25%}.col-pull-2{right:16.66666667%}.col-pull-1{right:8.33333333%}.col-pull-0{right:auto}.col-push-12{left:100%}.col-push-11{left:91.66666667%}.col-push-10{left:83.33333333%}.col-push-9{left:75%}.col-push-8{left:66.66666667%}.col-push-7{left:58.33333333%}.col-push-6{left:50%}.col-push-5{left:41.66666667%}.col-push-4{left:33.33333333%}.col-push-3{left:25%}.col-push-2{left:16.66666667%}.col-push-1{left:8.33333333%}.col-push-0{left:auto}.col-offset-12{margin-left:100%}.col-offset-11{margin-left:91.66666667%}.col-offset-10{margin-left:83.33333333%}.col-offset-9{margin-left:75%}.col-offset-8{margin-left:66.66666667%}.col-offset-7{margin-left:58.33333333%}.col-offset-6{margin-left:50%}.col-offset-5{margin-left:41.66666667%}.col-offset-4{margin-left:33.33333333%}.col-offset-3{margin-left:25%}.col-offset-2{margin-left:16.66666667%}.col-offset-1{margin-left:8.33333333%}.col-offset-0{margin-left:0}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}</style>

    <!-- FONTS+HEADER -->
    <style>@font-face{font-family:"Gilroy-Light";font-style:normal;font-weight:400;src:url(fonts/Gilroy-Light.woff2) format("woff2"),url(fonts/Gilroy-Light.woff) format("woff")}@font-face{font-family:"Gilroy-ExtraBold";font-style:normal;font-weight:400;src:url(fonts/Gilroy-ExtraBold.woff2) format("woff2"),url(fonts/Gilroy-ExtraBold.woff) format("woff")}body{position:relative;font:16px/24px Gilroy-Light,sans-serif;color:#28292d;background-color:#fff}body.unscroll{overflow:hidden}.text--title{font-family:"Gilroy-ExtraBold",Roboto,sans-serif}.text--gold{color:#c2a771}.text--hl{background-color:#cfc2a9}.title_main{font-size:36px}.title{font-size:24px;line-height:30px}.reason{font-size:24px;margin-bottom:25px}.reason + .title_main{margin-bottom:45px}.md-modal.md-show{opacity:1}.md-modal{opacity:0}::-webkit-scrollbar{width:10px}::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 20px rgba(0,0,0,0.3)}::-webkit-scrollbar-thumb{-webkit-border-radius:0;border-radius:0;background:#c2a771;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.5)}::-webkit-scrollbar-thumb:window-inactive{background:#c2a771}.bar-long{height:5px;width:0;z-index:1000;position:fixed;top:0;left:0;background:#c2a771}#scrollup{position:fixed;right:20px;bottom:30px;width:30px;-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg);display:none;opacity:1;cursor:pointer;z-index:10;font-size:40px;text-shadow:-2px 2px 5px rgba(0,0,0,0.3);-webkit-transition:all .5s;transition:all .5s}#scrollup svg{fill:#848484;-webkit-transition:all .5s;transition:all .5s}#scrollup:hover svg{fill:#c2a771}.hidden{height:0;width:0}input:invalid{outline:none!important;-webkit-box-shadow:none!important;box-shadow:none!important}.input{overflow:hidden;position:relative;z-index:1;display:inline-block;max-width:350px;max-width:340px;width:100%;height:60px;vertical-align:top}.input__field{position:relative;outline:none!important;display:block;height:50px;width:340px;border:none!important;-webkit-border-radius:0;border-radius:0;color:#28292d;-webkit-appearance:none;margin-top:10px;padding:10px 10px 0;width:100%;background:transparent;color:#595F6E;font-size:19px}.input__field:focus{outline:none}.input__label{position:absolute;display:inline-block;bottom:0;left:0;width:100%;height:50px;text-align:left;pointer-events:none;float:right;color:#28292d;font:16px Gilroy-Light,sans-serif;line-height:32px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.input__label-content{position:absolute;display:block;padding:10px 0;width:100%}.input__label::before,.input__label::after{content:'';position:absolute;bottom:0;left:0;width:100%;height:100%;border-bottom:1px solid #ebeef0}.input__label::after{margin-top:2px;border-bottom:2px solid #c2a771;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);-webkit-transition:-webkit-transform .3s;transition:-webkit-transform .3s;transition:transform .3s;transition:transform 0.3s,-webkit-transform .3s}.input__field:focus + .input__label::after,.input--filled .input__label::after{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.input__field:focus + .input__label .input__label-content,.input--filled .input__label-content{-webkit-animation:anim-1 .3s forwards;animation:anim-1 .3s forwards}.btn{max-width:340px;width:100%;height:50px;background-color:#28292d;-webkit-border-radius:2px;border-radius:2px;color:#fff;font:14px Gilroy-ExtraBold,Roboto,sans-serif;text-transform:uppercase;text-align:center;letter-spacing:.2em;-webkit-box-shadow:0 10px 25px rgba(0,0,0,0.3);box-shadow:0 10px 25px rgba(0,0,0,0.3)}.btn:hover{background-color:#1c54e9;-webkit-box-shadow:0 0 33.6px 1.4px rgba(28,84,233,0.8);box-shadow:0 0 33.6px 1.4px rgba(28,84,233,0.8)}.btn:active{background-color:#143a9e;color:#081a4a}#sec_01{background-repeat:repeat-x;background-position:top center;background-image:url(img/bl0_bg.jpg);padding:60px 0}#sec_01 h1{margin-top:80px;margin-bottom:80px;font-size:48px;line-height:58px}#sec_01 .title{margin-bottom:25px}#sec_01 .sec_img-1{margin-top:35px}#sec_01 .item_row + .item_row{margin-top:95px}.block_text + .block_text{margin-top:14px}@-webkit-keyframes anim-1{50%{opacity:0;-webkit-transform:translate3d(1em,0,0);transform:translate3d(1em,0,0)}51%{opacity:0;-webkit-transform:translate3d(-1em,-40%,0);transform:translate3d(-1em,-40%,0)}100%{opacity:1;-webkit-transform:translate3d(0,-40%,0);transform:translate3d(0,-40%,0)}}@keyframes anim-1{50%{opacity:0;-webkit-transform:translate3d(1em,0,0);transform:translate3d(1em,0,0)}51%{opacity:0;-webkit-transform:translate3d(-1em,-40%,0);transform:translate3d(-1em,-40%,0)}100%{opacity:1;-webkit-transform:translate3d(0,-40%,0);transform:translate3d(0,-40%,0)}}@media (min-width: 768px) and (max-width: 991px){.block_text br,.list_item br{display:none}[class*='sec_img']{width:100%;max-width:290px;margin-left:0!important;margin-right:0!important}#sec_01 h1{margin-top:80px}#sec_01 h1 br{display:none}#sec_01 .sec_img-1{margin-top:0}}@media (min-width: 992px) and (max-width: 1200px){.block_text br,.list_item br{display:none}[class*='sec_img']{width:100%;max-width:290px}#sec_01 .sec_img-1{margin-top:0}#sec_02 .sec_img-2{max-width:610px}}@media (max-width: 767px){br{display:none}.title_main{font-size:30px}[class*='col-']{width:100%;margin-left:0}.block_text br,.list_item br{display:none}[class*='sec_img']{display:block;margin:30px auto!important;max-width:300px}#sec_01 h1{margin-top:40px;font-size:36px;line-height:44px}#sec_01 h1 br{display:none}#sec_01 .sec_img-1{display:none}#sec_01 .sec_img-2{display:none}#sec_02{padding-top:0}#sec_02 .sec_img-2{max-width:610px;width:100%}}@media (max-width: 490px){[class*='sec_img']{display:block;margin:30px auto!important;max-width:280px;width:100%}#sec_01 h1{font-size:30px;line-height:36px}.title_main{font-size:26px}}</style>

    <!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
    <script>!function(a){"use strict";function b(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)}function c(b,c){return a.localStorage&&localStorage[b+"_content"]&&localStorage[b+"_file"]===c}function d(b,d){if(a.localStorage&&a.XMLHttpRequest)c(b,d)?f(localStorage[b+"_content"]):e(b,d);else{var h=g.createElement("link");h.href=d,h.id=b,h.rel="stylesheet",h.type="text/css",g.getElementsByTagName("head")[0].appendChild(h),g.cookie=b}}function e(a,b){var c=new XMLHttpRequest;c.open("GET",b,!0),c.onreadystatechange=function(){4===c.readyState&&200===c.status&&(f(c.responseText),localStorage[a+"_content"]=c.responseText,localStorage[a+"_file"]=b)},c.send()}function f(a){var b=g.createElement("style");b.setAttribute("type","text/css"),g.getElementsByTagName("head")[0].appendChild(b),b.styleSheet?b.styleSheet.cssText=a:b.innerHTML=a}var g=a.document;a.loadCSS=function(a,b,c){var d,e=g.createElement("link");if(b)d=b;else{var f;f=g.querySelectorAll?g.querySelectorAll("style,link[rel=stylesheet],script"):(g.body||g.getElementsByTagName("head")[0]).childNodes,d=f[f.length-1]}var h=g.styleSheets;e.rel="stylesheet",e.href=a,e.media="only x",d.parentNode.insertBefore(e,b?d:d.nextSibling);var i=function(a){for(var b=e.href,c=h.length;c--;)if(h[c].href===b)return a();setTimeout(function(){i(a)})};return e.onloadcssdefined=i,i(function(){e.media=c||"all"}),e},a.loadLocalStorageCSS=function(e,f){c(e,f)||g.cookie.indexOf(e)>-1?d(e,f):b(a,"load",function(){d(e,f)})}}(this);</script>

<!--     <link rel="stylesheet" href="css/fonts.css"> -->
    <!-- <link rel="stylesheet" href="css/header.css"> -->
    <!-- Load CSS Start -->
    <!-- <script>loadCSS( "css/fonts.css?ver=1.0.0", false, "all" );</script> -->
    <!-- <script>loadCSS( "css/header.css?ver=1.0.0", false, "all" );</script> -->
    <script>loadCSS( "css/main.css?ver=1.0.0", false, "all" );</script>
    <!-- Load CSS End -->

    <!-- Load CSS Compiled without JS -->
    <noscript>
        <link rel="stylesheet" href="css/main.css">
    </noscript>

</head>
<body data-img="img/land.jpg">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59Q3W3R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="bar-long"></div>
<div id="scrollup"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.054 286.054"><path d="M143.027 0C64.04 0 0 64.04 0 143.027c0 78.996 64.04 143.027 143.027 143.027s143.027-64.03 143.027-143.027C286.054 64.05 222.014 0 143.027 0zm0 259.236c-64.183 0-116.21-52.026-116.21-116.21s52.027-116.2 116.21-116.2 116.21 52.018 116.21 116.2-52.027 116.21-116.21 116.21zm51.677-125.148h-24.86V89.392c0-4.934-3.996-8.94-8.94-8.94H125.15c-4.934 0-8.94 4.006-8.94 8.94v44.696H91.342c-9.698 0-13.667 6.463-8.822 14.338l51.686 51.096c4.845 7.884 12.783 7.884 17.637 0l51.678-51.096c4.863-7.875.894-14.338-8.814-14.338z"/></svg></div>


<div id="sec_01">
    <div class="container">
        <div class="row">
            <div class="col-12 tc">
                <img src="img/logo.png" alt="Logo" class="logo">
                <h1 class="text--title">7 причин, почему вы теряете клиентов <br> (и как это исправить в 2017 году)</h1>
            </div>
        </div>
        <div class="row item_row">
            <div class="col-4">
                <img src="img/img-1.png" alt="График роста прибыли" class="sec_img-1">
            </div>
            <div class="col-8">
                <p class="title text--title">Как ваши дела в бизнесе? Всегда хочется, <br> чтобы было еще лучше. Согласны?</p>
                <p class="block_text">И будьте уверены, лучше может быть.</p>
                <p class="block_text">Каждый день мы анализируем и детально разбираем десятки бизнесов. Это наши <br> клиенты, которые хотят усилить свои позиции на рынке, получать больше клиентов <br> или только планируют выводить бизнес в интернет… и их конкуренты.</p>
                <p class="block_text">Мы видим сотни, тысячи проектов, которые по одним и тем же причинам не могут <br> реализовать свой мощный потенциал. Они упускают колоссальные возможности. <br> А вы?</p>
            </div>
        </div>
        <div class="row item_row">
            <div class="col-6">
                <p class="title text--title">Хотите “пробить потолок” и вывести <br> ваш бизнес на совершенно новый уровень? </p>
                <p class="block_text">В этой статье вы узнаете <span class="text--title text--hl">7 самых распространенных причин</span>, <br> из-за которых большинство предпринимателей <br> <span class="text--title text--hl">теряют массы клиентов</span> из интернета.</p>
                <p class="block_text">Давайте проверим, не наступаете ли и вы на те же «грабли». <br> И если “да”, как исправить ситуацию. Итак… </p>
            </div>
            <div class="col-6">
                <img src="img/img-2.png" alt="Повторяющиеся ошибки в бизнесе" class="sec_img-2">
            </div>

        </div>
    </div>
</div>


<div id="sec_02">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="img/img-3.png" alt="Устаревшие технологии" class="sec_img-1">
            </div>
            <div class="col-8">
                <p class="reason text--gold">Причина 1</p>
                <p class="text--title title_main">Ваш сайт из двухтысячных</p>
                <p class="block_text">Или еще «лучше» — его вообще нет.</p>
                <p class="block_text">Люди все чаще ищут что-то в интернете. Не просто ищут, а хотят купить. Посмотрите <br> на динамику роста запросов со словом <span class="text--title text--hl">«купить»</span> в Google за последние 5 лет.</p>
                <img src="img/img-4.png" alt="График роста" class="sec_img-2">
                <p class="block_text">Только за 2016 год количество запросов <span class="text--title text--hl">увеличилось на 18%</span>. И эта цифра становится больше. Спрос формирует все новые предложения. И если раньше люди неуверенно покупали в сети... сейчас клиенты стали значительно смелее и избирательней. <br> У них есть выбор, и заказы они оставляют тем, кому больше доверяют.</p>
            </div>
        </div>
    </div>
</div>

<div id="sec_03" class="grey_section">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <p class="title text--title">Представьте, вы решили перекусить</p>
                <p class="block_text text--title">В поле зрения есть 2 ресторана: снаружи грязный, с треснувшим окном <br> и неприятным запахом... и чистый, со сверкающими панорамными окнами <br> и приветливым персоналом. В какой из них вы пойдете? <span class="text--title text--hl">Ответ очевиден, не так ли?</span> </p>
            </div>
            <div class="col-5">
                <img src="img/img-5.png" alt="" class="sec_img">
            </div>
        </div>
    </div>
</div>

<div id="sec_04">
    <div class="container">
        <div class="row">
            <div class="col-8 col-offset-4">
                <p class="block_text">Теперь вернемся к вашему сайту или лендингу. На него хочется зайти? <br> Он вызывает доверие?</p>
                <ul class="list_item">
                    <li>Он понятный? Пользователь сам интуитивно <br> понимает, куда нажать и что делать дальше?</li>
                    <li>У него привлекательный дизайн? Цвета не рвут <br> глаза, отсутствуют “устаревшие” 3D-кнопки?</li>
                    <li>Вся информация на нем актуальная?</li>
                    <li>На нем есть люди: отзывы клиентов, вы, команда?</li>
                    <li>Есть 1 четкий призыв к действию?</li>
                    <li>Люди видят, как с вами связаться?</li>
                </ul>
                <p class="block_text">Сайт — это обертка вашего бизнеса. И несмотря на то, что у вас суперкрутая <br> идея/продукт, <span class="text--title text--hl">без хорошей подачи его не заметят.</span></p>
            </div>
        </div>
    </div>
</div>

<div id="sec_05">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="img/img-6.png" alt="" class="sec_img">
            </div>
            <div class="col-8">
                <p class="reason text--gold">Причина 2</p>
                <p class="text--title title_main">Не выстроена четкая воронка продаж</p>
                <p class="block_text">Даже самый продвинутый сайт не будет продавать, <br> если вы пошагово не выстроите путь клиента. Это важно продумать:</p>
                <ul class="list_item">
                    <li>Как люди попадут на ваш сайт?</li>
                    <li>Как вы «подогреете» их к предложению купить?</li>
                    <li>Что с ними будет после клика на кнопку?</li>
                    <li>А если передумал покупать, какие ваши действия тогда?</li>
                </ul>
                <p class="block_text">При этом, если ваши услуги или продукт уже знакомы потенциальному клиенту, <br> воронка продаж одна. А если человек впервые о таком слышит - абсолютно другая.</p>
                <p class="block_text">Случаи, когда люди покупают то, что им продают сразу «в лоб», скорее, исключение. <br> И бюджеты на привлечение таких клиентов тратятся колоссальные.</p>
            </div>
        </div>
    </div>
</div>

<div id="sec_06" class="grey_section">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p class="title text--title">3 категории клиентов</p>
                <p class="block_text text--title">Продавать «в лоб» можно товар, который стоит ниже $50. Готовится <br> специальная воронка, которая охватывает 3 категории клиентов:</p>
                <ul class="list_item text--title">
                    <li>3%  - это люди, которые хотят купить сейчас;</li>
                    <li>18% - те, кого нужно убедить;</li>
                    <li>79% - те, кто не готов купить сейчас, <br> но может сделать это в будущем.</li>

                </ul>
            </div>
            <div class="col-6">
                <img src="img/img-7.png" alt="" class="sec_img">
            </div>
        </div>
    </div>
</div>


<div id="sec_07">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="img/img-8.png" alt="" class="sec_img-1">
            </div>
            <div class="col-8">
                <p class="block_text top_text">С правильной воронкой из 100 потенциальных клиентов и тем же рекламным <br> бюджетом вы можете получать <span class="text--title text--hl">не 1-2, а 30 реальных покупателей.</span> <br> Разве не этого вы хотите?</p>
                <p class="reason text--gold">Причина 3</p>
                <p class="text--title title_main">Не видите, где у вас "дыры"</p>
                <p class="block_text">Вы можете внедрять маркетинговые инструменты один за другим. <br> Потому что узнали, что кто-то с их помощью увеличил свои продажи. <br> Но так ли это будет для вас на самом деле? </p>
                <p class="block_text">Допустим, вы используете для продвижения бизнеса <span class="text--title text--hl">соц. сети</span>.</p>
                <ul class="list_item">
                    <li>Что вы там публикуете?</li>
                    <li>Как коммуницируете с аудиторией?</li>
                    <li>Вы просто развлекаете подписчиков <br> или действительно готовите информацию, <br> котораяповышает лояльность к компании <br> и продает ваши услуги/продукты?</li>

                </ul>
                <p class="block_text">Без конкретных показателей эффективности и правильно настроенной аналитики, <br> вы действуете как слепые котята. Вы не видите, где сливаете бюджет, на каком этапе <br> и почему уходят потенциальные покупатели. Вам непросто спрогнозировать <br> количество клиентов и, соответственно, прибыль.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="img/img-9.png" alt="" class="sec_img-2">
            </div>
            <div class="col-8">
                <p class="reason text--gold">Причина 4</p>
                <p class="text--title title_main">Отсутствует понимание клиента</p>
                <p class="block_text"><span class="text--title text--hl">Люди не покупают продукты и услуги, они покупают решения и выгоды.</span> <br> Это нужно помнить. Вы не сможете создать лучший продукт на рынке, <br> если не поймете, чего на самом деле хотят ваши клиенты. </p>
                <ul class="list_item">
                    <li>Какие у них есть боли?</li>
                    <li>Какие у них есть стремления?</li>
                    <li>Как вы можете им помочь?</li>
                    <li>Нужно ли им на самом деле то, что вы предлагаете?</li>
                </ul>
                <p class="block_text">Последний вопрос в этом списке, пожалуй, самый важный. Даже если ваш продукт <br> или услуга идеальная, она может быть недостаточно востребована. Хороший <br> пример — «быстрый пирог» от одной из американских компаний. </p>
            </div>
        </div>
    </div>
</div>


<div id="sec_08" class="grey_section">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <p class="title text--title">Быстрый пирог</p>
                <p class="block_text text--title">Хозяйке нужно только развести специальный порошок жидкостью и отправить <br> смесь в духовку. Вкус, скорость и простота приготовления - все прекрасно. </p>
                <p class="block_text text--title">Только продажи не те. В чем причина? Оказалось, все слишком просто <br> для покупателя. Он не чувствует удовольствия от того, что приготовил <br> пирог своими руками. Как только производители ввели в рецепт <br> еще 1 шаг (нужно вбить яйца), продажи выросли в разы.</p>
            </div>
            <div class="col-5">
                <img src="img/img-10.png" alt="" class="sec_img">
            </div>
        </div>
    </div>
</div>


<div id="sec_09">
    <div class="container">
        <div class="row">
            <div class="col-8 col-offset-4">
                <p class="block_text top_text"><span class="text--title text--hl">Чтобы привлекать больше клиентов, их нужно понимать</span> <br> и знать даже лучше, чем они сами себя.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 tc">
                <p class="title text--title">Хотите узнать, что конкретно вам стоит внедрить уже <br> сейчас, чтобы усилить позиции бизнеса на рынке? <br> <span class="text--title text--hl">Получите ваш специальный чек-лист!</span></p>
                <a class="md-trigger btn flex" data-modal="modal_callback_check">Получить мой чек-лист</a>
            </div>
        </div>
        <div class="row reason_row">
            <div class="col-4">
                <img src="img/img-11.png" alt="" class="sec_img">
            </div>
            <div class="col-8">
                <p class="reason text--gold">Причина 5</p>
                <p class="text--title title_main">Не анализируете нишу</p>
                <p class="block_text">Вы знаете, что ваши услуги, продукт или сервис выигрывают у конкурентов. <br> Об этом говорят и ваши покупатели. Только почему-то клиенты сначала <br> идут именно к ним, а не к вам. Что не так?</p>
                <p class="block_text">Чтобы это выяснить, стоит провести <span class="text--title text--hl">детальный анализ конкурентов</span> <br> и их маркетинговых кампаний. С помощью специальных инструментов <br> вы можете узнать буквально все, даже информацию о заказах. Все эти данные <br> покажут вам полную картину происходящего и помогут скорректировать, <br> а также значительно повысить эффективность вашего продвижения.</p>
            </div>
        </div>
    </div>
</div>


<div id="sec_10" class="grey_section">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p class="title text--title">Не системный анализ конкурентов</p>
                <p class="block_text text--title">Почти 87% предпринимателей анализируют деятельность <br> конкурентов и тенденции ниши стихийно. Примерно это выглядит так: <br> «А давайте посмотрим, что делают наши конкуренты сейчас».</p>

            </div>
            <div class="col-6">
                <img src="img/img-12.png" alt="" class="sec_img">
            </div>
        </div>
    </div>
</div>


<div id="sec_11">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="img/img-13.png" alt="" class="sec_img-1">
            </div>
            <div class="col-8">
                <p class="block_text top_text">Вы же хотите вывести ваш бизнес на новый уровень? <br> <span class="text--title text--hl">Анализ ниши должен быть в системе.</span> </p>
                <p class="reason text--gold">Причина 6</p>
                <p class="text--title title_main">Все вручную</p>
                <p class="block_text">О какой стратегии и новых внедрениях в бизнесе может быть речь, <br> если у вас каждый день одна и та же гонка: множество звонков, встреч, <br> решение текущих задач? Контакты клиентов записаны по блокнотам <br> или (прогресс!) в таблицах Excel. Если вы все делаете вручную... </p>
                <p class="block_text">Помните? Одно из правил эффективности звучит так: <br> <span class="text--title text--hl">все, что можно автоматизировать — автоматизируйте.</span></p>
                <p class="block_text">Вы не сможете масштабировать свой бизнес, начать привлекать больше <br> клиентов и больше зарабатывать, если не начнете максимально <br> автоматизировать и правильно делегировать все процессы. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="img/img-14.png" alt="" class="sec_img-2">
            </div>
            <div class="col-8">
                <p class="reason text--gold">Причина 7</p>
                <p class="text--title title_main">Нет адаптации под мобильные</p>
                <p class="block_text">Только вдумайтесь. Сегодня минимум каждый 3-й посетитель вашего сайта — <br> это человек, который заходит на него с какого-то мобильного устройства. <br> В 2016 году со смартфона в интернет выходят 47% пользователей Украины. <br> По прогнозам экспертов, уже в 2017 году во всем мире эта цифра достигнет 75%. <br> Но лишь у немногих предпринимателей рунета с адаптивностью все в порядке.</p>

            </div>
        </div>
    </div>
</div>

<div id="sec_12" class="grey_section">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <p class="title text--title">Исследования Google показывают</p>
                <p class="block_text text--title">Люди <span class="text--title text-hl">на 67% чаще совершают покупки</span> или заказывают услуги, <br> <span class="text--title text-hl">если сайт адаптирован под мобильные устройства</span>. И 61% пользователей <br> уходят с сайта, если не могут быстро найти то, что им нужно. </p>
            </div>
            <div class="col-5">
                <img src="img/img-15.png" alt="" class="sec_img">
            </div>
        </div>
    </div>
</div>


<div id="sec_13">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="img/img-16.png" alt="" class="sec_img-1">
            </div>
            <div class="col-8">
                <p class="block_text">Причина, почему клиенты уходят, так ничего и не купив, элементарная. <br> Возможно, им просто не хватило терпения повозиться с вашим сайтом и в конце <br> концов попасть на нужную кнопку. Теперь понимаете, насколько это важно? </p>
                <p class="first_title title_main text--title">Как привлекать больше клиентов <br> из интернета в 2017 году</p>
                <p class="block_text">Ошибки в продвижении бизнеса онлайн, которые мы разобрали выше, встречаются <br> чаще всего. Это те ключевые точки, из-за которых вы недополучаете клиентов. <br> И чтобы исправить ситуацию, остается их только проработать.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <p class="title_main text--title second_title">Готовы к более стремительному <br> росту вашего бизнеса?</p>
                <p class="block_text">Для этого мы <span class="text--title text-hl">подготовили специальный чек-лист</span>. Вы получаете конкретный <br> список из разных блоков, который покажет вам:</p>
                <ul class="list_item">
                    <li>Все ли в порядке с вашим сайтом или лендингом и что стоит улучшить;</li>
                    <li>Какие есть ключевые этапы воронки продаж;</li>
                    <li>ТОП 10 лучших инструментов аналитики;</li>
                    <li>Блиц-тест проработки образа клиента (за 3 минуты).</li>
                </ul>
            </div>
            <div class="col-5">
                <div class="form_block">
                    <p class="form_title text--title title">Получить мой чек-лист</p>
                    <p class="form_text text--title">Куда вам отправить чек-лист?</p>
                    <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                        <!-- Hidden DB Fields -->

                        <input type="hidden" name="orderType" value="ROI">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                        <!-- END Hidden DB Fields -->

                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Rezart">
                        <input type="hidden" name="admin_email" value="project@rezart.agency">
                        <input type="hidden" name="form_subject" value="Rezart Article">
                        <!-- END Hidden Required Fields -->

                        <span class="input field">
                            <input id="name_01" required="" class="form-control name input__field " type="text" name="entry.583196713" />
                            <label class="input__label" for="name_01">
                                <span class="input__label-content">Ваше имя</span>
                            </label>
                        </span>


                        <span class="input field">
                            <input id="mail_01" required="" class="form-control name input__field" type="email" name="entry.1596947982" />
                            <label class="input__label" for="mail_01">
                                <span class="input__label-content">Ваш e-mail</span>
                            </label>
                        </span>


                        <button type="submit" class="btn" name="send" >Получить мой чек-лист</button>

                        <div class="clear"></div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="politics">
                    <a class="md-trigger" data-modal="modal_politics_one">Политика  конфиденциальности</a>
                    <a class="md-trigger" data-modal="modal_politics_two">Отказ от  ответственности</a>
                    <a class="md-trigger" data-modal="modal_politics_three">Согласие с  рассылкой</a>
                </div>
            </div>
            <div class="col-3">
                <a class="logo_rezart" target="_blank" href="http://rezart.com.ua/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 792"><path d="M216.8 247.3c150.2 0 147.2 0 156.1 0 50.4 0 100.2 42.1 100.4 102.3 0.1 56.2-43.8 91.1-72.4 98 0.9 0 38.4 66.8 38.4 66.8l172.2-291.2 179.5 305.3c5.4 9.9 8.8 15.6 11.3 22.7 5.3 15.3-8.8 25.6-18.7 25.7 -9.7 0.1-14.6-3.6-24.4-8.9l-108.1-62 -39.9-74.4 108.4 63L610.6 310.8c0 0-139.3 237.5-144 244.6 -8.1 12.1-13.4 21.6-28.4 21.6 -14.6 0-21.4-9.6-29-21.3 -1.7-3.4-89.8-148.9-89.8-148.9 32.1 0.1 28.9 0.1 54.8 0.1 21.1 0 54-18.6 54-55.7 0-22.2-17.1-56.4-57.9-56.4 -45.2 0-126.3 0-126.3 0L216.8 247.3z"/><path d="M217.1 351l47.7 83.4 -0.3 119.8c0 0 0.5 22.5-24.2 22.9 -0.3-0.3-23.7 1.8-23.7-22.2C216.7 530.8 217.1 351 217.1 351z"/><path d="M264.9 434.4l-0.1 119c0 0 0.4 23.3-24.3 23.7"/></svg></a>
                <a class="footer-fire" target="_blank" href="http://willcatchfire.com/"></a>
            </div>
        </div>
    </div>
</footer>


<div class="hidden">
    <div class="md-modal md-effect-1" id="modal_callback">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title">Заказ обратного звонка</h2>
            </div>
            <div>
                <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                    <!-- Hidden DB Fields -->

                    <input type="hidden" name="orderType" value="ROI">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Rezart">
                    <input type="hidden" name="admin_email" value="project@rezart.agency">
                    <input type="hidden" name="form_subject" value="Rezart Article">
                    <!-- END Hidden Required Fields -->

                    <span class="input field">
                        <input id="name_02" required="" class="form-control name input__field " type="text" name="entry.583196713" />
                        <label class="input__label" for="name_02">
                            <span class="input__label-content">Ваше имя</span>
                        </label>
                    </span>


                    <span class="input field">
                        <input id="tel_02" required="" class="form-control name input__field" type="tel" name="phone"  />
                        <label class="input__label" for="tel_02">
                            <span class="input__label-content">Ваш телефон</span>
                        </label>
                    </span>


                    <button type="submit" class="btn" name="send" data-text="Перезвоните мне">Перезвоните мне</button>

                    <!-- Просто любое дополнительное поле -->
                    <!-- <input type="hidden" name="other_data" value="Любое значение" /> -->
                    <!-- Динамическое дополнительное поле для передачи данных с кнопок по всему сайту -->
                    <input type="hidden" class="pacet" name="form_pacet" value="">
                    <!-- GET RESPONCE INPUTS -->
                    <input type="hidden" name="start_day" value="0"/>
                    <!-- Если нужно отправлять и на почту и на GetResponse - указываем campaign_token -->
                    <input type="hidden" name="campaign_token" value=""/>
                    <!-- GET RESPONCE INPUTS -->
                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>


    <div class="md-modal md-effect-1" id="modal_callback_check">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
                </span>
                <div class="titlebox">
                    <h2 class="text--title">Заказ чек-листа</h2>
                </div>
                <div>
                    <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                        <!-- Hidden DB Fields -->

                        <input type="hidden" name="orderType" value="ROI">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                        <!-- END Hidden DB Fields -->

                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Rezart">
                        <input type="hidden" name="admin_email" value="project@rezart.agency">
                        <input type="hidden" name="form_subject" value="Rezart Article">
                        <!-- END Hidden Required Fields -->

                        <span class="input field">
                            <input id="name_03" required="" class="form-control name input__field " type="text" name="entry.583196713" />
                            <label class="input__label" for="name_03">
                                <span class="input__label-content">Ваше имя</span>
                            </label>
                        </span>

                        <span class="input field">
                            <input id="mail_01" required="" class="form-control name input__field" type="email" name="entry.1596947982" />
                            <label class="input__label" for="mail_01">
                                <span class="input__label-content">Ваш e-mail</span>
                            </label>
                        </span>


                        <!-- <span class="input field">
                            <input id="tel_03" required="" class="form-control name input__field" type="tel" name="phone"  />
                            <label class="input__label" for="tel_03">
                                <span class="input__label-content">Ваш телефон</span>
                            </label>
                        </span> -->


                        <button type="submit" class="btn" name="send" data-text="Перезвоните мне">Получить чек-лист</button>


                        <div class="clear"></div>


                    </form>

                    <div class="md_bottom">
                        <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                    </div>
                </div>
            </div>
        </div>


    <div class="md-modal md-effect-8 md_large" id="modal_politics_one">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Политика конфиденциальности</h2>
            </div>
            <div class="md_content tl">
                <p>Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет.</p>
                <p>Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в &laquo;Согласии с рассылкой&raquo;</p>
                <p><strong>Какие данные собираются на сайте</strong></p>
                <p>При добровольной регистрации на получение рассылки вы отправляете свое Имя и E-mail через форму регистрации.</p>
                <p><strong>С какой целью собираются эти данные</strong></p>
                <p>Имя используется для обращения лично к вам, а ваш e-mail для отправки вам писем рассылок, новостей, полезных материалов, коммерческих предложений.</p>
                <p>Ваши имя и e-mail не передаются третьим лицам, ни при каких условиях кроме случаев, связанных с исполнением требований законодательства.</p>
                <p>Вы можете отказаться от получения писем рассылки и удалить из базы данных свои контактные данные в любой момент, кликнув на ссылку для отписки, присутствующую в каждом письме.</p>
                <p><strong>Как эти данные используются</strong></p>
                <p>При помощи этих данных собирается информация о действиях посетителей на сайте с целью улучшения его содержания, улучшения функциональных возможностей сайта и, как следствие, создания качественного контента и сервисов для посетителей.</p>
                <p>Вы можете в любой момент изменить настройки своего браузера так, чтобы браузер блокировал все файлы или оповещал об отправке этих файлов. Учтите при этом, что некоторые функции и сервисы не смогут работать должным образом.</p>
                <p><strong>Как эти данные защищаются</strong></p>
                <p>Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет.</p>
                <p>Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями.</p>
                <p>Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее.</p>
                <p>Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.</p>
                <p>В случае изменения данной политики конфиденциальности вы сможете прочитать об этих изменениях на этой странице или, в особых случаях, получить уведомление на свой e-mail.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-8 md_large" id="modal_politics_two">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Отказ от ответственности</h2>
            </div>
            <div class="md_content tl">
                <p><strong>В соответствии с действующим законодательством</strong>, Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.</p>
                <p>Ни при каких обстоятельствах Администрация Сайта не будет нести ответственности ни перед какой стороной за какой-либо прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется гиперссылка с нашего cайта, возникновение зависимости, снижения продуктивности, увольнения или прерывания трудовой активности, а равно и отчисления из учебных учреждений, за любую упущенную выгоду, приостановку хозяйственной деятельности, потерю программ или данных в Ваших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования Сайта, Содержимого или какого-либо связанного интернет-сайта, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в передаче, компьютерным вирусом или системным сбоем, даже если администрация будет явно поставлена в известность о возможности такого ущерба.</p>
                <p>Пользователь соглашается с тем, что все возможные споры будут разрешаться по нормам права.</p>
                <p>Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к использованию им Сайта, поскольку он не оказывает возмездных услуг.</p>
                <p>Используя данный Сайт, Вы выражаете свое согласие с &laquo;Отказом от ответственности&raquo; и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.</p>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-8 md_large" id="modal_politics_three">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Согласие с рассылкой</h2>
            </div>
            <div class="md_content tl">
                <p>Заполняя форму на нашем сайте &mdash; вы соглашаетесь с нашей политикой конфиденциальности. Также вы соглашаетесь с тем, что мы имеем право разглашать ваши личные данные в следующих случаях:</p>
                <p><strong>1) С Вашего согласия:</strong>&nbsp;Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной.</p>
                <p><strong>2) Компаниям, работающим от нашего лица:</strong>&nbsp;Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг.</p>
                <p><strong>3) Дочерним и совместным предприятиям:</strong>&nbsp;Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.</p>
                <p><strong>4) На совместно позиционируемых или партнерских страницах:</strong>&nbsp;Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению товара на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному уведомлению о конфиденциальности, с которым Вы можете ознакомиться перед предоставлением информации о себе.</p>
                <p><strong>5) При передаче контроля над предприятием:</strong>&nbsp;Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией.</p>
                <p><strong>6)  При проведении мероприятий: </strong> Заполняя анкету участника на како-либо событие Компании, мы можем делиться Вашими данными с другими участниками. Это делается для удобства коммуникации между участниками мероприятия. Эти данные не будут переданы лицам, которые не являются участниками мероприятия, и которые не соответствуют пунктам в разделе «Согласие с рассылкой». </p>
                <p><strong>7) Правоохранительным органам:</strong>&nbsp;Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий.</p>
                <p>Вся личная информация, которая передана Вами для регистрации на нашем сайте, может быть в любой момент изменена либо полностью удалена из нашей базы по Вашему запросу. Для этого Вам необходимо связаться с нами любым удобным для Вас способом, использую контактную информацию, размещенную в специальном разделе нашего сайта.</p>
                <p>Если Вы захотите отказаться от получения писем нашей регулярной рассылки, вы можете это сделать в любой момент с помощью специальной ссылки, которая размещается в конце каждого письма.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-4" id="modal_callback_ok">

        <div class="md-content">
                <h2>Ваше сообщение успешно отправлено.</h2>
                <div class="cb tc">
                    <a class="md-close btn flex" style="margin:0 auto;"><span>Вернуться на сайт</span></a>
                </div>
            </div>
        </div>
        <a id="call_ok" class="md-trigger hidden" data-modal="modal_callback_ok"></a>
    <div class="md-overlay"></div>
  </div>
    <!-- All modals end -->



        <!--[if lt IE 9]>
        <script src="libs/html5shiv/es5-shim.min.js"></script>
        <script src="libs/html5shiv/html5shiv.min.js"></script>
        <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="libs/respond/respond.min.js"></script>
        <![endif]-->

    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Load Scripts Start -->
    <script>var scr = {"scripts":[
        // {"src" : "http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU", "async" : false},
        {"src" : "js/libs.js", "async" : false},
        {"src" : "js/common.js", "async" : false}
        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>

<script> !function(){_shcp=[{widget_id:876504}];var t="widget.siteheart.com/widget/sh/876504/"+(navigator.language||navigator.systemLanguage||navigator.userLanguage||"en").substr(0,2).toLowerCase()+"/widget.js",e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src=("https:"==document.location.protocol?"https":"http")+"://"+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(e,a.nextSibling)}(); </script>
</html>
