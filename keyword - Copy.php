<?php
    include("head.php");
?>

<body>

    <div class="wrapper">

        <?php
            include("banner_nav.php");
        ?>

        <main class="pad-20">
            <h2>Search</h2>

                       <!-- Keyword Search -->
        <form method="post" action="search.php" enctype="multipart/form-data">

            <div class="search-container bottom-spacing">
                <input class="search" type="text" name="keyword_search" required value=""
                placeholder="Search">

                <button class="button-link" type="submit" name="search">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                </button>

            </div> <!-- / search container -->

    </main>

    

    <?php
        include("footer.php"); ?>

    </div>

</body>

</html>



