<?php
    include_once __DIR__.'/controller/baseController.php';
    include_once __DIR__.'/template/header.inc.php';

?>
<body>
    <header>
        <h1>
            🔥 Take back control
        </h1>
    </header>
    
    <main>
        <figure>
            <figcaption>
              <h2>
                🚀
                Language 
                <a href="https://www.pokepedia.fr/Conseil_4#Conseil_4_d'%C3%89ternara" target="blank">Elite Four</a></h2>
            </figcaption>
            <!-- banniere -->
            <ul>
                <li 
                data-id="HTML"
                >
                <img loading="lazy" 
                src="https://www.pokepedia.fr/images/2/2c/Damien-ROSA.png" 
                alt="Damien">
                </li>

                <li data-id="CSS"><img loading="lazy" src="https://www.pokepedia.fr/images/f/fc/Spectra-ROSA.png"  alt="Spectra"></li>
                <li data-id="Javascript"><img loading="lazy" src="https://www.pokepedia.fr/images/7/75/Glacia-ROSA.png" alt="Glacia"></li>
                <li data-id="PHP"><img loading="lazy" src="https://www.pokepedia.fr/images/f/f9/Aragon-ROSA.png" alt="Aragon"></li>
            </ul>
          </figure>
        <figure>
            <img 
            src="./asset/grand troll.png"
            alt="troll figurine" 
            loading="lazy"
            >
            <figcaption>
                <h2>
                    💪No pain No gain!
                </h2>
                <p>
                    Take back control! Never had a fight been so fierce. 
                    Accept the challenge! No pain no gain
                </p>
            </figcaption>
        </figure>
    </main>

<?php
      include_once __DIR__.'/template/footer.inc.php';
?>

</body>
</html>