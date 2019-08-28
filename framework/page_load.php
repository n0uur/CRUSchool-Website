<div class="inout">
<?php

if($_GET['p'] && $_GET)
{
  $page = $_GET['p'];
}
else
{
  $page = 'home';
}

require_once('../sys/EDIT_PAGELIST.php'); # โหลดรายการหน้าเว็บ

if($page == 'home' or $page == 'undefined') {
  require_once('../pages/home.php');
}
else if(empty($pages[$page]['filename']))
{
  require_once("../pages/404.php");
}
else {
  $pagefilename = $pages[$page]['filename'];
  require_once("../pages/$pagefilename");
}

?>
</div>
