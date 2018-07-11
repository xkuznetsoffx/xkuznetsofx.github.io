<html lang="ru">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Сервис быстрой отправки сообщений, отправь сообщение за 5 тапов мышкой.">
      <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <title>Сервис быстрой отправки сообщений</title>
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <!-- Google Web fonts -->
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  <!-- This is what you need -->
  <script src="http://t4t5.github.io/sweetalert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="http://t4t5.github.io/sweetalert/dist/sweetalert.css">
  <!--.......................-->
  <script type="text/javascript">
$(document).ready(function(){
    $("#form").submit(function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "/", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   alert("Ваше сообщение отпрвлено!");
            });
    });
});    
</script>
         </head>
   <body>
      <div class="container">
         <nav class="navbar navbar-light bg-faded">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
               <a class="navbar-brand" href="/"> Nano-service </a>
               <ul role="tablist" class="nav navbar-nav">
                  <li role="presentation" class="nav-item active">
                     <a class="nav-link" href="#home" aria-controls="home" role="tab" data-toggle="tab">Главная <span class="sr-only">(current)</span></a>
                  </li>
                  <li role="presentation" class="nav-item">
                     <a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Цены</a>
                  </li>
                  <li role="presentation" class="nav-item">
                     <a class="nav-link" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Контакты</a>
                  </li>
                  <li role="presentation" class="nav-item">
                     <a class="nav-link" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Как доехать?</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
      <br>		
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <ul class="list-group">
                  <a  role="presentation" class="list-group-item" href="#home" aria-controls="home" role="tab" data-toggle="tab">Главная</a>
                  <a role="presentation" class="list-group-item" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Цены</a>
                  <a role="presentation" class="list-group-item" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Контакты</a>
                  <a role="presentation" class="list-group-item" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Как доехать?</a>
               </ul>
               <br>
			   <?php
if (isset($_POST['sub'])) 
{       
   if (empty($_POST['mes']) and empty($_POST['sub']) ) {}
   else 
   {
        $title = 'Обратная связь nanoservice';
        $mes1 = substr(htmlspecialchars(trim($_POST['sub'])), 0, 1000); 
        $mess2 =  substr(htmlspecialchars(trim($_POST['mes'])), 0, 1000000); 
		$mess = 'Отправитель : '.$mes1.' . Сообщение :'.$mess2;
        // $to - кому отправляем 
        $to = 'alexx87690@gmail.com'; 
        // $from - от кого 
        $from='info@nanoservice.ru'; 
        // функция, которая отправляет наше письмо. 
echo '<script type="text/javascript">alert(" Ваше письмо отправлено ");</script>';
        mail($to, $title, $mess, 'From:'.$from); 
	
	}
}
?>
               <form id="form">
                  <fieldset class="form-group">
                     <label for="exampleInputEmail1">Ваш номер телефона</label>
                     <input type='text' name="sub" class="form-control" required="required" placeholder="Введите полное имя" required>
                     <small class="text-muted">Прошу вводить свой настоящий номер телефона.</small>
                  </fieldset>
                  <fieldset class="form-group">
                     <label for="exampleTextarea">Ваш текст сообщения</label>
                     <textarea name="mes"class="form-control" rows="3" required="required" ></textarea>
                     <small class="text-muted">Не писать маты и угрозы в сторону конечного пользователя, соблюдать правила этикета.</small>
                  </fieldset>
                  <input type="submit" value="Отправить"></TR>
               </form>
			   
            </div>
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane active" id="home">
                  <div class="col-md-8">
                     <div class="bd-callout bd-callout-info">
                        <ol class="breadcrumb">
                           <li class="active">Настройка компьютеров в Кудепсте</li>
                        </ol>
                     </div>
                     <p style="float: right;"><img style="" src="http://namrabotu.ru/images/5.jpg" class="alignnone size-medium wp-image-1352" title="Настройка ПК по вызову." alt="компьютерная помощь в Ростове, у нас цены ниже, чем у конкурентов." height="197" width="300"></p>
                     <p>Наше основное преимущество — мы честно делаем свою работу. Это довольно веский аргумент в виду того, что количество псевдо-компьютерщиков, желающих поживиться за счет незнания пользователя, растет с каждым днем. Такие фирмы или частники — явление преходящее, ведь долго, работая по этой&nbsp;схеме не получиться, да и не выгодно. Поэтому остаются компании, которые превыше всего ставят интересы пользователи и за разумные деньги их исполняют.</p>
                     <ol class="breadcrumb">
                        <li class="active">Компьютерные услуги</li>
                     </ol>
                     <table>
                        <tbody>
                           <tr>
                              <td>
                                 <script async="" src="//s.imgur.com/min/embed.js" charset="utf-8"></script><img src="http://i.imgur.com/0s4Ys0Q.png" title="Настройка компьютера: установка и восстановление Windows" alt="Компьютерные услуги по установке виндовс" height="16" width="20">
                              </td>
                              <td>
                                 <h5>Установка и настройка Windows</h5>
                                 <p>Версии: Windows 8, Windows 7, Windows Vista, Windows XP . Новая установка, восстановление, оптимизация работы и пр. </p>
                              </td>
                              <td><img src="http://i.imgur.com/0s4Ys0Q.png" title="Обслуживание компьютеров и внешних устройств: установка драйверов" alt="Компьютерные услуги по установке драйверов на выезде" height="16" width="20"></td>
                              <td class="pad">
                                 <h5>Подключение устройств: принтеров, сканеров и др. Установка драйверов</h5>
                                 <p>Поиск и грамотная установка драйверов, необходимых для корректной работы, последующая настройка оборудования. </p>
                              </td>
                           </tr>
                           <tr>
                              <td style=""><img src="http://i.imgur.com/0s4Ys0Q.png" title="Компьютерный мастер поможет вам настроить Wi-Fi!" alt="Подключение к вай-фай телевизоров, ноутбуков, компьютеров и др. устройств" height="16" width="20"></td>
                              <td class="pad">
                                 <h5>Подключение к Интернету и настройка сетей Wi-Fi</h5>
                                 <p>Технологии: Wi-Fi, ADSL, LAN, 4G LTE, 3G. Установка, настройка, консультации. </p>
                              </td>
                              <td class="pad2"><img src="http://i.imgur.com/0s4Ys0Q.png" title="Обслуживание компьютеров и установка программ." alt="Настройка компьютера - любой софт под заказ!" height="16" width="20"></td>
                              <td class="pad">
                                 <h5>Установка и настройка разных программ. Помощь компьютерного мастера.</h5>
                                 <p>Наши специалисты всегда готовы предложить вам большое количество разнообразного софта. При желании, вы можете по телефону заказать необходимую вам программу. </p>
                              </td>
                           </tr>
                           <tr>
                              <td><img src="http://i.imgur.com/0s4Ys0Q.png" title="Обслуживание компьютеров - удаление вирусов" alt="Компьютерная помощь: избавим от вымогателей СМС и вирусов" height="16" width="20"></td>
                              <td class="pad">
                                 <h5>Удаление вирусов и установка надежного антивируса</h5>
                                 <p>Компьютерный мастер избавит вас от любой «нечисти», покусившейся на ваш компьютер: блокировщики, «шпионы», баннеры, трояны и пр. Проверка, удаление, надежная защита. </p>
                              </td>
                              <td class="pad2"><img src="http://i.imgur.com/0s4Ys0Q.png" title="Ремонт компьютеров и качественный апгрейд" alt="Обслуживание компьютеров: чистка, обновление компонентов." height="16" width="20"></td>
                              <td class="pad">
                                 <h5>Обновление компьютера на аппаратном уровне, чистка компьютера</h5>
                                 <p>Ваш компьютер не тянет новые игры или нужный вам софт? Скорей всего, он нуждается в апгрейде. Мы быстро заменим устаревшие компоненты и произведем «генеральную уборку» в вашем системном блоке. </p>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane" id="profile">...</div>
               <div role="tabpanel" class="tab-pane" id="messages">
                  <div class="col-md-8">
                     <div class="bd-callout bd-callout-info">
                        <ol class="breadcrumb">
                           <li class="active">Настройка компьютеров в Кудепсте</li>
                        </ol>
                     </div>
                     <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=T8lacrTn51wAKrPjWp3hBKkz_KjYdLdB&width=720&height=400&lang=ru_RU&sourceType=constructor"></script>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane" id="settings">
                  <div class="col-md-8">
                     ..................................................... Контакты 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
<style>
   td, th {
   padding: 5px;
   }
</style>