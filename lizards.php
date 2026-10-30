

<?php
    include("head.php");
    $find_sql ="SELECT * FROM `Lizards` ORDER BY `Common Name` ASC
    ";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $count = mysqli_num_rows($find_query);
?>

<body>

<div class="wrapper">

    <?php
        include("banner_nav.php");
    ?>
    <main class="pad-20">

    <div class="results-wrapper">
    <h2>Lizards (<?= $count; ?> results)</h2>

    <?php

    

    include('lizard_results.php');

    ?>

    </div> <!-- / results-wrapper -->


</main>

    <?php
        include("footer.php")
    ?>


</body>

</html>