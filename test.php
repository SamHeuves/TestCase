<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="style.min.css">

  <script src="script.min.js"></script>

  <title>Testcase sketch</title>

</head>
<body>

<?php   
$listitems = array("lijstitem 1", "lijstitem 2", "lijstitem 3", "lijstitem 4");
?>

<div id="pagewrap">

    <div id="navBar">
        <div class="logo"><a>Zelfstroom</a></div>
        <div class="item"><a>Home</a></div>
        <div class="item"><a>Over Ons</a></div>
        <div class="item"><a>Vragen</a></div>
        <div class="item"><a>Contact</a></div>
    </div>
        


    <div id="cardBoxes">
                <div class="card">
                    <img src="https://picsum.photos/500/400" alt="Zelfstroom">
                        <div class="content">
                            <h1>Card one</h1>
                                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="button"><a>Lees meer</a></div>                        
                        </div>
                </div>
                <div class="card">
                    <img src="https://picsum.photos/500/400" alt="Zelfstroom">
                    <div class="content">
                        <h1>Card two</h1>
                            <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="button"><a>Lees meer</a></div>
                    </div>
                </div>
    </div>

        <div id="searchBox">
            <h1>Zoek binnen de site</h1>
            <p>Maak gebruik van het onderstaande formulier om de site te doorzoeken.</p>
            <div id="loader">
                <img src="./loader.png" class="loader" />
            </div>
            <div id="searchBarContainer">        
                <form id="reset">
                    <input type="text" placeholder="Jouw zoekopdracht...">
                    <a id="buttonDiv" onclick="animateSearch(true)" class="button">Zoeken</a>
                </form>
            </div>

            <div id="beforeButton" >    
                <a onclick="animateSearch(false)" class="button">Opnieuw zoeken</a>
            </div>
            
            <div id="list">

                <?php 
                    echo '<ul>';
                foreach ($listitems as $item) {
                    printf( '<li>%s</li>', $item );
                }
                    echo '</ul>';
                
                 ?>
            </div>

        </div>
                


</div>
</body>
</html>