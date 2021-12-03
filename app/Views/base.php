<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->renderSection("css"); ?>

    <title>Document</title>

    <?= $this->renderSection("javascript"); ?>

</head>
<body>
<?= $title?>
    <div id="container">
        <?= $this->renderSection("conent")?>
    </div>


    <footer>
    </footer>

</body>
</html>