<?php

require_once('../common/pdo.php'); 

$artists = findArtistsByLetter($_GET['filter']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/index.ico">
    <title>Comic details</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>


<body class="bg-old_paper-100">
<div class="w-9/12 min-w-fit mx-auto p-4 bg-old_paper-200">

<?php require_once('../../components/header.html'); ?>

<?php require_once('../../components/alphabet_bar.php'); ?>

    <article class="bg-old_paper-200 p-8">
        <section class="font-serif columns-3xs [column-rule:1px_solid_#3477ab]">
            <?php foreach ($artists as $artist) { ?>
                <p class="break-before-avoid ">
                    <a href="artist_details.php?name=<?= $artist['lastname'] ?>">
                        <?= $artist['lastname'] ?>, <?= $artist['firstname'] ?>
                    </a>
                </p>
            <?php } ?>
        </section>
    </article>
<?php require_once('../../components/footer.html') ?>
</div>
</body>
</html>
