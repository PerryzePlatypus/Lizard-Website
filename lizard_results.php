
<?php

    while($find_rs=mysqli_fetch_assoc($find_query))

    {
    
        $image_file_name = htmlspecialchars($find_rs['Image']);
        $lizard_name = htmlspecialchars($find_rs['Common Name']);


       ?>

       <div class="results pad-20 bottom-spacing">

               <div class= "container">
                   <img class="results-image" src="Image/<?= $image_file_name; ?>" alt="<?= $lizard_name; ?>">

                   <div class="info-results">

                   <h2><b><?= $find_rs['Common Name'] ?></b> <i><span>(<?= $find_rs['Scientific Name'] ?>)</span></i></h2>

                   <p>
                   <h3><?= htmlspecialchars($find_rs['Description']); ?></h3>
                   </p>

                   <h2>Information</h2>


                       <h4><span><b>Average Length:</b> <?= htmlspecialchars($find_rs['Avg Length (cm)'])?>cm</span></h4>

                       <h4><span><b>Habitat Type:</b> <?= htmlspecialchars($find_rs['Habitat Type']) ?></span></h4>

                       <h4><span><b>Diet:</b> <?= htmlspecialchars($find_rs['Diet']) ?></span></h4>

                       <h4><span><b>Active:</b> <?= htmlspecialchars($find_rs['Active']) ?></span></h4>

                       <h4><span><b>Native Region:</b> <?= htmlspecialchars($find_rs['Native Region']) ?></span></h4>

                       <h4><span><b>Conservation Status:</b> <?= htmlspecialchars($find_rs['Conservation Status']) ?></span></h4>

                       
                   </div>

           </div>

       </div>

       <?php

       }

?>