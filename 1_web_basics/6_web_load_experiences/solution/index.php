<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'functions.php';

$title = 'Mgr.';
$name = 'Boris';
$lastName = 'Valo';

$owner = $title . ' ' . $name . ' ' . $lastName;

$about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet et ex in congue. Nunc ac massa quis orci blandit vehicula a et tortor. Aliquam ullamcorper dolor dolor, nec gravida erat mollis quis. Morbi quam nisi, mollis et rhoncus eleifend, blandit egestas diam. Morbi ac magna malesuada, ultrices sem ut, posuere quam. In hac habitasse platea dictumst. Curabitur ac quam id velit vulputate imperdiet. Vivamus bibendum nibh scelerisque, volutpat augue non, tempor enim. Donec pharetra, nisi nec condimentum efficitur, justo nisl hendrerit mi, at maximus ipsum dolor vel est. Mauris lorem nisl, cursus rhoncus metus id, commodo auctor elit. Vestibulum at ullamcorper dui. Fusce vitae velit vitae sapien convallis laoreet nec lobortis mauris. Vivamus eu gravida velit, sed ultrices lacus. Pellentesque ex nibh, rutrum sed congue eu, auctor non nunc. Donec ac pharetra enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
$showAbout = true;

// Nacteni dat se zkusenostmi ze souboru
$workExperiences = loadData(WORK_EXPERIENCES_FILE);

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once 'head.html' ?>

<body>

<?php include_once 'menu.php' ?>

<?php include_once 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1><?php echo $owner; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>Pracovní zkušenosti</h4>
            <ul>
                <?php

                foreach ($workExperiences as $experience) {
                    $company = $experience['company'];
                    $from = $experience['from'];
                    $to = $experience['to'];

                    echo "<li>$company ($from - $to)</li>";

                    /*
                     * Mozne rozsireni pro pocitani dni a roku
                    $company = $experience['company'];
                    $days = countDays($experience['from'], $experience['to']);
                    $years = countYears($days);
                    
                    if ($years == 1) {
                        $yearsWord = 'rok';
                    } elseif ($years >= 2 && $years <= 4) {
                        $yearsWord = 'roky';
                    } else {
                        $yearsWord = 'let';
                    }

                    echo "<li>$company ($years $yearsWord / $days dni)</li>";
                    */


                }

                ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>O mně</h4>
            <?php
            if ($showAbout) {
                echo '<p>';
                echo $about;
                echo '</p>';
            }
            ?>
    </div>
</div>

<?php include_once 'footer.php' ?>

</body>

</html>

