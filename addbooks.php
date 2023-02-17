<?php
require_once 'base.php';
session_start();
$avtors = GetALLAuthors();
if (!empty($_POST)) {
    $title = $_POST['title'];
    $articul = $_POST['articul'];
    $description = $_POST['description'];
    $author_id = $_POST['authors'];
    $customauthor = $_POST['customauthor'];
    $_SESSION['message'] = 'Вы успешно добавили книгу';

}
//$adding = true;
//if (!empty($_POST['description'])) {
//    $adding = AddToBooks($title,$articul,$description,$author_id,$customauthor);
//    if ($adding) {
//        echo 'good';
//    }
//
//}
AddToBooks($title,$articul,$description,$author_id,$customauthor);
?>

<link rel="stylesheet" type="text/css" href="design.css"/>
<div class="fonlast">
    <form method="post" style="
              padding-left: 36vw;
              padding-top: 27vh;
              font-size: 177%;
              font-family: cursive;" class="forrrm">
        <label class="bubylda"><b>Название</b></label>
        <input required type="text" class="forform" name="title">
        <br>
        <br>
        <label class="bubylda"><b>Артикул</b></label>
        <input required type="text" class="forform" name="articul">
        <br>
        <br>
        <br>
        <label class="bubylda"><b>Описание</b></label>
        <input required type="text" class="forform" name="description">
        <br>
        <br>
        <label class="bubylda"><b>Выберите автора из списка</b></label>
        <select name="authors" class="forform">
            <?php foreach ($avtors as $avtor): ?>
                <option value="<?= $avtor['id'] ?>">
                    <?= $avtor['first_name'] . ' ' . $avtor['last_name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <div CLASS="or">ИЛИ</div>
        <br>
        <label class="bubylda_p"><b>Добавьте своего автора</b></label>
        <input type="text" class="forform" name="customauthor">
        <br>
        <!--        --><?php //if (!$adding): ?>
        <!--            <h1>bad</h1>-->
        <!--        --><?php //endif; ?>
        <br>
        <input type="submit" class="forform" style="font-size: 102%">
        <span class="messag"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></span>

    </form>
</div>