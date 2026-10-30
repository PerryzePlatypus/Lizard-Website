    <header class="pad-20">
        <h1>Lizardpedia</h1>
        <img class="pad-20 logo" src="Image\blue_lizard2.png">
    </header>


    <nav class="navbar">
        <ul>
            <li><a href="index.php"><i class="fa-regular fa-house icon"></i>Home</a></li>
            <li><a href="lizards.php"><img class="icon resize" src="Image/lizard-svgrepo-com (2).png"></i>Species</a></li>
            <li><a href="random-lizards.php"><i class="fa-solid fa-shuffle icon"></i>Random</a></li>

        </ul>

            <form method="post" action="search.php" enctype="multipart/form-data">

                <div class="search-container">
                    <input class="search" type="text" name="keyword_search" required value=""
                    placeholder="Search">

                    <button class="button-link" type="submit" name="keyword">
                        <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    </button>

            </form>

        </div>

    </nav>
