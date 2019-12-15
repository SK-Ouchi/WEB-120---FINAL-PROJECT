<?php include "includes/header.php";?>
        <section class = "bio">
                <img src="images/fabricio_background.jpg" class = "bio-picture" alt="Fabricio Photo">
        
                <p>
                        Fabricio Calvet-Recktenwall originates from Guayaquil, Ecuador however calls New York, USA home. 
                        He’s always been interested in capturing the mysteriousness of the human soul through his eyes of 
                        the people around him. Constantly looking for the next creative vision, location, and intriguing model; 
                        Fabricio can be found scouring Google Maps and planning the next shoot. After leaving home at the age of 
                        20 and enlisting in the United States Navy in 2010, Fabricio held the collateral duty as Command Photographer 
                        and hasn’t laid down his camera ever since, making sure to bring his camera whenever and wherever he could.
                </p>

                ​<p>
                        What motivates Fabricio is trying to involve viewers into the image. Painting a story as you will and making 
                        you wonder the story behind the model through photography. Learning the core principles of discipline and 
                        commitment throughout his time in the Navy, you will see Fabricio apply the same principles throughout all 
                        his projects.
                </p>
        </section>
        <aside>
                <?php

                        include 'includes/contact_include.php'; #site keys & code here
                
                        $toAddress = "satoru.ouchi@seattlecolleges.edu";  //place your/your client's email address here
                        $toName = "Satoru Ouchi"; //place your client's name here
                        $website = "Fabricio Form Test";  //place NAME of your client's website

                        echo loadContact('multiple.php');

                        ?>
        </aside>
<?php include "includes/footer.php";?>