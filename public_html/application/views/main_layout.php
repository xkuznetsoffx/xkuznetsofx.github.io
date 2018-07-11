<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? echo config_item('site_name'); ?></title>
    <meta name="description" content="<? echo config_item('metadescr'); ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://www.getmdl.io/templates/dashboard/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.3/clipboard.min.js"></script>
    <noscript>
        <meta http-equiv="refresh" content="0; URL=/badbrowser.php">
    </noscript>
    <link media="screen" href="/style.css" type="text/css" rel="stylesheet"/>
    <link media="screen" href="http://justkeys.ru/templates/Default/style/font-awesome.css" type="text/css" rel="stylesheet"/>
    <link media="screen" href="http://justkeys.ru/templates/Default/style/airborne.css" type="text/css" rel="stylesheet"/>
    <link media="screen" href="http://justkeys.ru/templates/Default/style/font-awesome.min.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="/fav.png" type="image/x-icon"/>
    <script type="text/javascript" src="http://justkeys.ru/templates/Default/js/jquery.lib.js"></script>
<script type="text/javascript" src="http://justkeys.ru/templates/Default/js/Russian/lang.js"></script>
<script type="text/javascript" src="http://justkeys.ru/templates/Default/js/main.js"></script>
    <script type="text/javascript" src="http://justkeys.ru/templates/Default/js/profile.js"></script>
    <script type="text/javascript" src="http://justkeys.ru/templates/Default/js/reg.js"></script>
    <script type="text/javascript" src="http://justkeys.ru/templates/Default/js/payment.js"></script>
    <script type="text/javascript" src="http://justkeys.ru/templates/Default/js/nonsense.js"></script>
    <link rel="stylesheet" href="/assets/css/material.min.css">
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/respond.js"></script>
<script src="/assets/js/app.js"></script>
<script src="/assets/js/script.js"></script>
<script src="/assets/js/jquery.toastmessage.js"></script>
<script src="/assets/js/custom.js"></script>
<script src="/assets/js/popup_buy.js"></script>
<script src="/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<link href="/assets/css/style.css" rel="stylesheet" media="screen">
<link href="/assets/css/jquery.toastmessage.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
	
 <style>body{background:rgb(0,0,0) url(<? echo config_item('sitefon'); ?>) repeat fixed center top; </style>
 
    <style>
        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }
        ::-webkit-scrollbar-track-piece {
            background-color: #ffffff;
            -webkit-border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:vertical {
            height: 5px;
            background-color: #666;
            -webkit-border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:horizontal {
            width: 5px;
            background-color: #666;
            -webkit-border-radius: 5px;
        }
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>

<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
       <div class="head">
    <a class="mp-head-giftcard" target="_blank" href="http://vk.com/public103754380">
        <div class="mp-head-wrap">
            <div class="mp-head-giftcard-wrap">
                <div class="mp-head-giftcard-center">

                    Раздачи


                </div>
            </div>
        </div>
    </a>

    <div class="autowr">


        <div class="mp-head-wrap">
            <div class="mp-head-top">
                <div class="mp-head-like">
                </div>

                <div class="sdd2ww">
                    <div class="mp-head-stc" style="color:#ffb400;">
                         <a href="/goldmine" style="color: rgb(255, 180, 0);"> <i
                                    class="fa fa-dollar lod_dollar" style="font-size: 16px;"></i> Зарабатывайте вместе с
                            нами</a> 
                        

                    </div>

                    <div class="mp-head-stc">
                        <a>
                            <i class="fa fa-shield"></i>
                            <span>Гарантии</span>
                        </a>
                    </div>

                    <div class="mp-head-stc">
                        <a>
                            <i class="fa fa-gift"></i>
                            <span>Акции</span>
                        </a>
                    </div>

                    <div class="mp-head-stc">
                        <a>
                            <i class="fa fa-dollar"></i>
                            <span>Низкие цены</span>
                        </a>
                    </div>
                </div>
                <div class="mp-head-switch">


                    <div class="mp-head-local2-drop mp-head-dropdown">

                    </div>

                </div>
            </div>

            <div class="mp-head-bottom">
                <div class="mp-head-logo">
                    <a href="/">
                        <img alt="" src="<? echo config_item('site_logo'); ?>"
                             style="width: 140px; margin-top: -45px; margin-left: 15px;">
                    </a>
                </div>
                <div class="mp-head-mains">
                    <a href="/">
                        <div class="lo_main"><i class="fa fa-home main_icons"></i>Главная</div>
                    </a>
					 <a href="/how">
                        <div class="lo_main"><i class="fa fa-question-circle main_icons"></i>Как купить?</div>
                    </a>
                    <a href="/supports/index.htm">
                        <div class="lo_main"><i class="fa fa-comments main_icons"></i>Поддержка</div>
                    </a>
                    <a href="/garant/index.htm">
                        <div class="lo_main"><i class="fa fa-star main_icons"></i>Гарантии</div>
                    </a>
                </div>
                </div>
                 <!---div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
<form action="/search" method="post" id="page_search_form">
                        <input class="mdl-textfield__input" name="q" type="text" id="search">
                        <label class="mdl-textfield__label" for="search">Поиск</label>
</form>
                    </div>
                </div-->
                <div class="mp-head-customer">

                </div>


            </div>
        </div>
    </div>
</div>

<div class="autowr">
    <div class="content">
	
        <div class="shadow">
<div id="page">
<a href="/distributions?act=one"><div class="banner-shield">
<img src="<? echo config_item('slide1'); ?>">
    </div></a>
        <main class="mdl-layout__content mdl-color--grey-100">
	<!----sss--->
	<!--sss-->
            <header class="mdl-layout__header is-casting-shadow">
			
			<div id="showcase" class="showcase" style="width: 973px;"><div class="showcase-content-container" style="overflow: hidden; position: relative;"><div id="showcase-content-4" class="showcase-content" style="overflow: hidden; position: absolute; width: 558px; height: 198px; left: 0px;"></div></div>
				   <div class="showcase-arrow-next" href="#myCarousel" data-slide="next"></div>
				   <div class="showcase-arrow-previous" href="#myCarousel" data-slide="prev"></div>
				  
         

           <div id="myCarousel" class="carousel slide">
		 <script type="text/javascript">
		$('.carousel').each(function(){
	$(this).carousel({
		interval: 15000	});
});
		</script>
</div>
              
          
</div>
			
                <div class="mdl-layout__header-row">
     
                    <span style="margin-left: -60px;" class="mdl-layout-title">Категории игр:</span>

                    <div class="mdl-layout-spacer"></div>
                  
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
					<? $cat_query = "SELECT * FROM categories WHERE `show`=1 ORDER BY sort "; $res_cat = mysql_query( $cat_query );  while ( $cat = mysql_fetch_array( $res_cat ) ) { ?>
                        <a class="mdl-navigation__link" href="<? echo "/category/".$cat["id"].""; ?>"><? echo $cat["title"];?></a>
 <? } ?>
                    </nav>
                </div>
            </header>
            <br>
            <br>
        <div class="mdl-grid demo-content">
<? $this->load->view($subview); ?>
            </div>
        </main>
    </div>
	</div>
	<div id="footer-wrap">
    <div id="footer3">
        <div id="footer">

            <div class="foo-left">
                <h5>Меню</h5>

                <div id="gp-categories-widget-2" class="widget gp-categories">
                    <ul>
                        <li class="cat-item cat-item-46"><a href="/">Главная</a>
                        </li>
                        <li class="cat-item cat-item-42"><a href="/page/how">Как купить?</a>
                        </li>
                        <li class="cat-item cat-item-43"><a href="/page/supports/">Поддержка</a>
                        </li>
                        <li class="cat-item cat-item-47"><a href="/page/garant/">Гарантии</a>
                        </li>


                    </ul>

                </div>

            </div>

            <div class="foo-center">
                <h5>Способы оплаты</h5>

                <ul class="payment-method-icons">
                    <li class="pay active">
                        <a>
                            <img src="http://justkeys.ru/templates/Default/images/oplata_ola.png">
                        </a>
                    </li>


                </ul>


            </div>

            <div class="sdwwwwwww">Все продаваемые ключи закупаются у официальных дилеров, работающих напрямую с
                издателями. В том числе с издателями: 1С, Бука, Новый Диск, Акелла и Electronic Arts.
                <div style="margin-left: 1px;" class="foote"><img alt="" src="<? echo config_item('slide2'); ?>" style="width: 80px;">
                </div>
            </div>
            <div class="clear"></div>


        </div>
<br>
<hr>
        <div id="foot-bottom">

            <div class="foo-center">

                <div class="g2a-address">
                    <strong>KamikShop - Интернет-магазин - магазин PC игр. Тут Вы можете купить PC игры для Steam, Ea, Windows Live.В магазине
                        действуют постоянные скидки, конкурсы, специальные предложения. <br>

                        <strong> Вы можете купить игры ,а также ключи к играм не выходя из дома с помощью вебмани или
                            банковской картой (кредиткой).<span class="ga-separator"></span>
                            <strong>

                            </strong></strong></strong></div>
                <strong><strong><strong>

                            <p>
                                Использование данного веб-сайта означает принятие, а также Политики приватности. Все
                                авторские права, торговые марки, знаки обслуживания принадлежат соответствующим
                                владельцам. <br>

                            </p>
                        </strong></strong></strong></div>
            <strong><strong><strong>


                        <div class="foo-right">
                            <div class="g2a-rights">Авторское право © 2016</div>


                            <div class="chops"></div>
                        </div>
                        

                        <div class="byvintslencarey"></div>
                        <a href="https://passport.webmoney.ru/asp/certView.asp?wmid=361711125269" target="_blank" class="wm-attestovan"></a>

					   <div class="clear"></div>
                    </strong></strong></strong></div>
        <strong><strong><strong>

                    <div class="clear"></div>
                </strong></strong></strong></div>
    <strong><strong><strong>


                <div class="clear"></div>
            </strong></strong></strong></div>
	    </div>
		    </div>
			</div>
			
			
    <script src="http://www.getmdl.io/material.min.js"></script>
</body>

</html>