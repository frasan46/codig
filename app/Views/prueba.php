
<?= $this->extend("base")?>

<?= $this->section("conent")?>
<h1>
</h1>


<?php foreach($numeros as $n):?>
    <p> <?= $n?>

<?php endforeach ?>



<a href= <?= route_to("contantacto_page")?>> ir</a>
<?= $this->section("javascript")?>
$(document).ready(function)
<?= $this->endSection()?>

<?= $this->include("mensaje_error.html")?>
<?= $this->endSection()?>

