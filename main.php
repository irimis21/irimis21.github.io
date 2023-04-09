<!DOCTYPE html>
    <html>

        <head>
            <title>Mon élevage de grandes perruches</title>
            <link rel="stylesheet" type="text/css" href="styles.css">
            <meta charset="UTF-8" >
        </head>

        <body>

            <?php
                 include 'includes/database.php';
                 global $db;
            ?>

        <header style="background-image: url(img/background1.png); background-size: cover; background-position: center;">

                    <div class="header-text">
                        <h1>Mon élevage de grandes perruches</h1>
                        <h2>Votre source de grandes perruches de qualité</h2>
                    </div>

                    <section class="presentation">
                        <div class="container">
                            <h2>Bienvenue dans mon élevage de grande perruches</h2>
                            <p>Notre élevage est spécialisé dans l'élevage de grande perruches, et nous sommes fiers de proposer une large sélection de ces magnifiques oiseaux à nos clients. Nous avons des années d'expérience dans l'élevage de grande perruches, et nous mettons tout en œuvre pour garantir leur bien-être et leur santé.</p>
                            <a href="#oiseaux">Voir nos oiseaux</a>
                        </div>
                    </section>
        </header>

               <nav id="test1">
                      <div class="bird-list">
                          <h3>Mes oiseaux:</h3>
                          <ul>
                              <li>oiseau 1</li>
                              <li>oiseau 2</li>
                              <li>oiseau 3</li>
                          </ul>
                      </div>

                      <ul id="test">
                          <form method="post">

                                      <h3>Ajouter un oiseau</h3>

                                      <li>
                                          <span>Bague</span>
                                          <label for="add-bird-name"></label>
                                          <input type="text" name="bague" id="bague"  placeholder="Numéro de bague" required><br>
                                      </li>

                                      <li>
                                         <span>Espèce</span>
                                         <label for="remove-bird-name"></label>
                                         <input type="text" name="espece" id="espece" placeholder="Espèce" ><br>
                                      </li>

                                      <li>
                                         <span>Age</span>
                                         <label for="add-bird-name"></label>
                                         <input type="text" name="age" id="age" placeholder="Age"><br>
                                      </li>

                                      <li>
                                            <span>Sexe </span>
                                            <label for="add-bird-name"></label>
                                            <input type="text" id="sexe" name="sexe" placeholder="Sexe"><br>


                                      </li>

                                      <li>
                                            <input type="submit" name="formsend" id="formsend">
                                      </li>
                          </form>
                      </ul>
          </nav>

          <div class="testphp">
          <?php include 'includes/signin.php';?>
 </div>

            <section class="species-presentation">

                    <h2>Nos espèces</h2>

                    <div class="species-container">
                        <div class="species-card">
                            <img src="img/loriquet.jpg" alt="Loriquet">
                            <h3>Loriquet</h3>
                                <p>
                                    Le loriquet est un petit oiseau coloré originaire d'Australie, de Nouvelle-Guinée et de certaines îles du Pacifique. Ils ont des couleurs vives, un bec court et épais adapté pour se nourrir de nectar et de fruits. Les loriquets sont actifs pendant la journée, sociaux et ont une grande capacité vocale, ce qui en fait des animaux de compagnie populaires. Ils sont également importants pour l'écologie en tant que pollinisateurs et disséminateurs de graines dans leur habitat naturel.
                                </p>
                        </div>
                    </div>

                </section>

                <section id="oiseaux" class="my-birds">
                    <h2>My Birds</h2>
                        <div class="bird-card">
                            <img src="img/bird1.jpg" alt="Bird 1">

                            <div class="bird-info">
                                <h3>Bird 1</h3>
                                <p>Species: Loriquet</p>
                                <p>Gender: Male</p>
                                <p>Age: 3 years old</p>
                                <p>Band Number: 1234567</p>
                            </div>
                        </div>
                </section>

            </main>
                <footer class="footer">
                        <div class="container">
                            <div class="footer-links">
                                <a href="https://www.le-cde.com/compte/">Le cde</a>
                                <a href="page2.html">Page 2</a>
                                <a href="page3.html">Page 3</a>
                            </div>

                            <div class="footer-text">
                                © 2023 Irimis. Tous droits réservés.
                            </div>
                        </div>
                </footer>
       </body>
    </html>