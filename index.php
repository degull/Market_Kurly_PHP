<!DOCTYPE html>
<html lang="ko">

<?php
   include_once('./config.php');
?>


<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>마켓컬리</title>
   <link rel="stylesheet" href="<?=$home_path?>/css/style.css">
   <script src="<?=$home_path?>/js/lib/jquery-2.2.4.min.js "></script>
   <script src="<?=$home_path?>/js/lib/jquery.easing.1.3.js "></script>
</head>
<body>

   <div id="wrap">

   <?php
      include_once($home_path. 'top_modal.php');         /* top_modal.php */
      include_once($home_path. 'header.php');            /* header.php */
      include_once($home_path. 'main.php');              /* main.php */
      include_once($home_path. 'footer.php');            /* footer.php */
      include_once($home_path. 'intro_modal.php');       /* intro_modal.php */
      include_once($home_path. 'quick_menu.php');        /* quick_menu.php */
      include_once($home_path. 'go_top.php');            /* go_top.php */
   ?>

   </div>



   <!-- js 연결 -->

<script src = "<?=$home_path?>js/intro.js"></script>
<script src = "<?=$home_path?>js/top_modal.js"></script>
<script src = "<?=$home_path?>js/intro_modal.js"></script>
<script src = "<?=$home_path?>js/header.js"></script>
<script src = "<?=$home_path?>js/quick_menu.js"></script>
<script src = "<?=$home_path?>js/go_top.js"></script>



</body>
</html>

