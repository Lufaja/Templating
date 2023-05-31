<!-- jouw HTML voor een Header komt hier... 
Gebruik hier tenminste een header afbeelding en een menu
Zorg dat je in het menu bij elk item een url parameter zet
om te bepalen welke inhoud er ingeladen moet worden in je html
-->
<?php
    echo '
        <header>
            <h1>Eindopdracht</h1>
            <nav>
                <a href="index.php?subject=onderwerp1.php">
                    <img src="images/games.jpg" alt="">
                    <p>gaming</p>
                </a>
                <a href="index.php?subject=onderwerp2.php">
                    <img src="images/mysql.jpg" alt="">
                    <p>mysql</p>
                </a>
                <a href="index.php?subject=onderwerp3.php">
                    <img src="images/pdo.png" alt="">
                    <p>pdo</p>
                </a>
                <a href="index.php?subject=onderwerp4.php">
                    <img src="images/php.jpg" alt="">
                    <p>php</p>
                </a>
            </nav>
        </header>
    ';
?>