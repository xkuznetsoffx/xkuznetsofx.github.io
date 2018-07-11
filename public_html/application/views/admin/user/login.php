
<!DOCTYPE html>
<html>
  <head>
    <title>Добро Пожаловать в Админ Панель</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
	<script src="http://code.jquery.com/jquery.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
       
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
 </head>
<body style="
    background-image: url(http://eugenelapitsky.com/wp-content/uploads/2016/05/FONEL2.png);
  
">

<? echo form_open(); ?>
 <div class="row">
      <div class="col s12 m5" style="
    margin-left: 31%;
    margin-top: 4%;
">
        <div class="card-panel white">
                 <div class="row">
				 <? echo validation_errors(); ?>
              <div class="input-field col s6">
                <i class="mdi-action-account-circle prefix"></i>
                <? echo form_input('email'); ?>
                <label  class="">Email</label>
              </div>
              <div class="input-field col s6">
                <i class="mdi-action-lock-outline prefix"></i>
                <? echo form_password('password'); ?>
                <label>Пароль</label>
              </div>
			    <button style="
    width: 100%;
" class="btn waves-effect waves-light" type="submit" name="action">Вход
    <i class="mdi-content-send right"></i>
  </button>
            </div>
        </div>
      </div>
    </div>
            
  <div class="row">
     <div class="s12 m4 l8">


<? echo form_close(); ?>
	 
	 
	 
	 
	 
	 </div>
    </div>
          


    <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
    <script src="http://newshopeasy.newabuy.ru/assets/js/respond.js"></script>
  </body>
</html>