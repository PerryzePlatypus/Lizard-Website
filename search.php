<?php
    include("head.php");

    if(isset($_POST['keyword']))

        {
            // retrieve the search term
            $keyword= $_REQUEST['keyword_search'];
            $find_sql ="SELECT * FROM `Lizards` WHERE `Common Name` LIKE '%$keyword%' ORDER BY `Common Name` ASC";
            $find_query = mysqli_query($dbconnect, $find_sql);
            $count = mysqli_num_rows($find_query);

        } // end of keyword if

    else{
        header('Location: index.php');

    } // end of keyword else

?>

<body>

<div class="wrapper">

    <?php
        include("banner_nav.php");
    ?>
    <main class="pad-20">

    <div class="results-wrapper">
    <h2>Search:  <?= $keyword; ?> (<?= $count; ?> results)</h2>

    <?php

    if($count > 0)
    {
        include('lizard_results.php');
    } // end of results if

    else{
        ?>

        <div class="error pad-10 radius-10">

        <h4>Sorry! There are no results found for <b><?= $keyword ?></b>. Please try a different search term.</h4>

        </div> <!-- /no results error -->


        <?php
    }

    

    ?>

    </div> <!-- / results-wrapper -->


</main>

    <?php
        include("footer.php")
    ?>


</body>

</html>