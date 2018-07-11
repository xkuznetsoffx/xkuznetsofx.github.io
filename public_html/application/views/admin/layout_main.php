<html lang="ru"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title><? echo $this->config->item('site_name'); ?></title>
    <!-- Favicons-->
    <!-- CSS-->
    <link href="http://materializecss.com/css/prism.css" rel="stylesheet">
    <link href="/css/grphicadmin.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
	    <link rel="shortcut icon" href="http://j-buy.ru/shop/script/admin/images/favicon.png">
		<link rel="stylesheet" href="../css/font-awesome.css">
<!-- либо -->
<link rel="stylesheet" href="css/font-awesome.css">
		
   <script type="text/javascript" src="<? echo site_url('/assets/js/moment.js'); ?>"></script>
	<script type="text/javascript" src="<? echo site_url('/assets/js/tinymce/tinymce.min.js'); ?>"></script>
	<script type="text/javascript" src="<? echo site_url('/assets/js/custom.js'); ?>"></script>
	<script type="text/javascript">
	tinymce.init({
		selector: "textarea.tinymce",
		plugins: [
			"advlist autolink lists link image charmap print preview anchor",
			"searchreplace visualblocks code fullscreen",
			"insertdatetime media table contextmenu paste"
		],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function() {
	var fixHelper = function(e, ui) {
		ui.children().each(function() {
			$(this).width($(this).width());
		});
		return ui;
	};
    $( ".tblsort tbody" ).sortable({
		helper: fixHelper,
        opacity: 0.8, 
        cursor: 'move', 
        tolerance: 'pointer',  
        items:'tr',
        placeholder: 'state', 
        forcePlaceholderSize: true,
        update: function(event, ui){
            $.ajax({
                url: "/admin/goods/chg_order_ajax",
                type: 'POST',
                data: $(this).sortable("serialize"), 
            });
//-------------------------------                                
            }
                
        });

		$( ".tblsort tbody" ).disableSelection();
	});  
	</script>
    <script src="//cdn.transifex.com/live.js"></script><style type="text/css">.txlive {display: none;}
@-webkit-keyframes txlivenodeinserted {
  from {opacity:inherit;}
  to {opacity:inherit;}
}
@-moz-keyframes txlivenodeinserted {
  from {opacity:inherit;}
  to {opacity:inherit;}
}
@-ms-keyframes txlivenodeinserted {
  from {opacity:inherit;}
  to {opacity:inherit;}
}
@-o-keyframes txlivenodeinserted {
  from {opacity:inherit;}
  to {opacity:inherit;}
}
@keyframes txlivenodeinserted {
  from {opacity:inherit;}
  to {opacity:inherit;}
}
.txlive-dynamic {animation: txlivenodeinserted 0.001s; -webkit-animation: txlivenodeinserted 0.001s;}</style>
  <style type="text/css">.txlive-langselector { position:fixed;z-index:999999;min-width: 120px;line-height:32px;background-color:rgba( 0,0,0,0.75 );box-shadow: 0 0 4px rgba( 0,0,0,0.3 );color: #fff;font-size: 14px;font-family: inherit; }.txlive-langselector * { margin: 0;padding: 0;border: 0;font-size: 100%;font: inherit;vertical-align: baseline;border-radius: 0;-moz-border-radius:0;-webkit-border-radius:0;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-border-radius:0;opacity:1; }.txlive-langselector.txlive-langselector-topleft { top:0;left:0;right:auto;bottom:auto;border-radius: 0 0 2px 0;-moz-border-radius: 0 0 2px 0;-webkit-border-radius: 0 0 2px 0; }.txlive-langselector.txlive-langselector-topright { top:0;left:auto;right:0;bottom:auto;border-radius: 0 2px 0 0;-moz-border-radius: 0 2px 0 0;-webkit-border-radius: 0 2px 0 0; }.txlive-langselector.txlive-langselector-bottomleft { top:auto;left:0;right:auto;bottom:0;border-radius: 0 2px 0 0;-moz-border-radius: 0 2px 0 0;-webkit-border-radius: 0 2px 0 0; }.txlive-langselector.txlive-langselector-bottomright { top:auto;left:auto;right:0;bottom:0;border-radius: 2px 0 0 0;-moz-border-radius: 2px 0 0 0;-webkit-border-radius: 2px 0 0 0; }.txlive-langselector .txlive-langselector-toggle { overflow: hidden;display: block;padding:2px 16px;width: 100%;height:36px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-topleft .txlive-langselector-toggle { overflow: hidden;display: block;border-top:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-topright .txlive-langselector-toggle { overflow: hidden;display: block;border-top:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-bottomleft .txlive-langselector-toggle { overflow: hidden;display: block;border-bottom:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector.txlive-langselector-bottomright .txlive-langselector-toggle { overflow: hidden;display: block;border-bottom:2px solid #006f9f;padding:2px 16px;height:36px;line-height:32px;cursor:pointer;cursor:hand; }.txlive-langselector .txlive-langselector-current { float: left;padding: 0;max-width: 200px;overflow:hidden;white-space: nowrap;text-overflow:ellipsis; }.txlive-langselector .txlive-langselector-marker { float: right;display: block;position:relative;width:0;height:0;margin-left:8px;margin-top: 13px;border-right:4px dashed transparent;border-left:4px dashed transparent;}.txlive-langselector-topright .txlive-langselector-marker,.txlive-langselector-topleft .txlive-langselector-marker {border-top:4px solid #fff;}.txlive-langselector-bottomright .txlive-langselector-marker,.txlive-langselector-bottomleft .txlive-langselector-marker {border-bottom:4px solid #fff;}.txlive-langselector-list { position:absolute;width: 100%;margin:0;padding:10px 0;display:none;background-color:#eaf1f7;box-shadow: 0 0 4px rgba( 0,0,0,0.3 );color:#666;list-style-type:none; }.txlive-langselector-list.txlive-langselector-list-opened { display:block; }.txlive-langselector-list > li {padding:0 16px;width:100%;overflow:hidden;white-space: nowrap;text-overflow:ellipsis;}.txlive-langselector-list > li:hover {background-color:#b0b9c1;color:#fff;cursor:pointer;cursor:hand;}.txlive-langselector-topright > .txlive-langselector-list {top:40px;left:auto;right:0;bottom:auto;border-bottom: 1px solid #f4f7f9;}.txlive-langselector-topleft > .txlive-langselector-list {top:40px;left:0;right:auto;bottom:auto;border-bottom: 1px solid #f4f7f9;}.txlive-langselector-bottomright > .txlive-langselector-list {top:auto;left:auto;right:0;bottom:40px;border-top: 1px solid #f4f7f9;}.txlive-langselector-bottomleft > .txlive-langselector-list {top:auto;left:0;right:auto;bottom:40px;border-top: 1px solid #f4f7f9;}.txlive-langselector-topright > .txlive-langselector-list,.txlive-langselector-bottomright > .txlive-langselector-list {border-radius: 2px 0 0 2px;-moz-border-radius: 2px 0 0 2px;-webkit-border-radius: 2px 0 0 2px;}.txlive-langselector-topleft > .txlive-langselector-list,.txlive-langselector-bottomleft > .txlive-langselector-list {border-radius: 0 2px 2px 0;-moz-border-radius: 0 2px 2px 0;-webkit-border-radius: 0 2px 2px 0;}</style><script type="text/javascript" src="http://cdn.transifex.com/a0b49b34b93844c38eaee15690d86413/latest/languages.jsonp"></script></head>
  <body data-twttr-rendered="true">
<div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
               <div class="sidebar-profile-image">
                            <img src="../../../../../css/logo.png" class="circle" alt="">
                        </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->
                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE TOP -->
               
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
    <header>
   
   
     <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="../../../../../css/logo.png" class="circle" alt="">
                        </div>
						
                        <div class="sidebar-profile-info">
   <li style="list-style-type: none;" class="no-padding">
          <ul class="collapsible collapsible-accordion">
		  
		          <li class="bold"><a href="/admin" class="collapsible-header  waves-effect waves-teal"><i class="fa fa-home"></i>Главная</a></li>
        <li class="bold"><a href="/" class="collapsible-header  waves-effect waves-teal"><i class="fa fa-eye"></i>Магазин</a></li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Товар</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="/admin/goods/">Товары</a></li>
                  <li><a href="/admin/goods/edit">Добавить товар</a></li>
                  <li><a href="/admin/orders">Статистика продаж</a></li>
                </ul>
              </div>
            </li>
			
			<li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="fa fa-folder-open"></i>Категории</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="/admin/categories">Категории</a></li>
                  <li><a href="/admin/categories/edit">Добавить Категорию</a></li>
                </ul>
              </div>
            </li>
			
			<li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="fa fa-adjust"></i>Купоны</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="/admin/kupon">Купоны</a></li>
                  <li><a href="/admin/kupon/edit">Добавить Купон</a></li>
                </ul>
              </div>
            </li>
			
			<li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="fa fa-file-code-o"></i>Страницы</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="/admin/page">Страницы</a></li>
                  <li><a href="/admin/page/edit">Добавить Страницу</a></li>
                </ul>
              </div>
            </li>
			<li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="fa fa-user"></i>Пользователь</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="/admin/security">Настройки</a></li>
                  <li><a href="/admin/security/edit">Заблокировать IP</a></li>
                </ul>
              </div>
            </li>
	<li class="bold"><a href="/admin/design" class="collapsible-header  waves-effect waves-teal"><i class="fa fa-magic"></i>Дизайн</a></li>
        <li class="bold"><a href="/admin/config" class="collapsible-header  waves-effect waves-teal"><i class="fa fa-usd"></i>Оплата</a></li>
          </ul>
        </li>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
    </header>
	
    <main>	
      <? empty($subview) ? "" : $this->load->view($subview)  ?>  
    </main>    <footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">© 2016 AdminPanel </a> </div>
      </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="http://materializecss.com/js/jquery.timeago.min.js"></script>  
    <script src="http://materializecss.com/js/prism.js"></script>
    <script src="http://materializecss.com/bin/materialize.js"></script>
    <script src="http://materializecss.com/js/init.js" gapi_processed="true"></script>
    
    

    
    

    
    
  
</body></html>