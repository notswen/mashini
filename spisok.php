<?php
require_once 'baza.php';
$cars = getAllCars();
$brands = getALLBrands();
//var_dump($brands);
var_dump($_POST);
if (!empty($_POST['brands'])) {
    $models = getModelsByBrandId($_POST['brands']);
}
?>
<head><link rel="stylesheet" href="eto_dlya_spiska.css" </head>
<form method="post">
    <select id="id" name="brands">
        <?php foreach ($brands as $brand): ?>
            <option value="<?= $brand['id'] ?>">
                <?= $brand['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit">
</form>
<?php
if (!empty($_POST)):?>
    <form method="post">
        <select id="id_other" name="brands_other">
            <?php foreach ($models as $model): ?>
                <option value="<?= $model['model_id'] ?>">
                    <?= $model['model'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit">
    </form>
<?php endif; ?>
<table>
    <tr>
        <th class="nuda">mark</th>
        <th>model</th>
        <th>type</th>
        <th>id</th>
    </tr>
<?php foreach ($cars as $car): ?>
    <tr>
        <td><?= $car['marka'] ?></td>
        <td><?= $car['modelka'] ?></td>
        <td><?= $car['tip'] ?></td>
        <td><?= $car['idshnik'] ?></td>
    </tr>
    <?php endforeach;?>
</table>



