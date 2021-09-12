<?php
require_once 'header.php';
?>
<?="Третья страница. Отредактировали и создали ее тут" ?> <br>
<a  href="./">Ссылка на первую страницу</a>

<? for ($i = 1; $i <= 10; $i++) { ?>
    <div class="coint-order"><? echo 'считаем '.$i; ?></div>
    
<? } ?>


<? require_once 'footer.php'; ?>
