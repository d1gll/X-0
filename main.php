<?php
$title = "Личный кабинет";
$meta = "Личный кабинет";
$content = "Личный кабинет";

// шаблонизатор
$file = require_once('layout.php');
$file=str_replace('{title}',$title,$file);

?>
<?php if(!isset($_SESSION['logged_user'])){
    header('Location: index.php');
} ?>
<section>
    <div class="statistics"><h2>Крестики-Нолики</h2></div>
    <div class="victory"><p id="vic"></p></div>
    <div class="wrapper" id="wrapper">

        <div class="cell" id="0" onclick="move(0)"></div>
        <div class="cell" id="1" onclick="move(1)"></div>
        <div class="cell" id="2" onclick="move(2)"></div>
        <div class="cell" id="3" onclick="move(3)"></div>
        <div class="cell" id="4" onclick="move(4)"></div>
        <div class="cell" id="5" onclick="move(5)"></div>
        <div class="cell" id="6" onclick="move(6)"></div>
        <div class="cell" id="7" onclick="move(7)"></div>
        <div class="cell" id="8" onclick="move(8)"></div>
    </div>

    <div class="restart" onclick="location.reload()">
        <p>Начать заново</p>
    </div>
</section>
