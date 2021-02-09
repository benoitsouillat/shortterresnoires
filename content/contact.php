<!DOCTYPE html>
<html lang="fr-fr">
    <head>
        <title>Nous Contacter - Les Terres Noires</title>
        <?php
            include "./php/head.php";
        ?>
    </head>
    <body id="contact-page">
        <header>
            <nav>
                <?php 
                include "./php/navbar.php";
                ?>
            </nav>
        </header>
        <main id="contact-main">
            <section class="contact-form">
                <h2>Contactez-nous</h2>
                <form method="post" action="./php/mail.php">
                    <div>
                        <label name="pseudo">Votre Nom :</label>
                        <input type="text" name="pseudo" required/>
                    </div>
                    <div>
                        <label name="mail">Votre Email :</label>
                        <input type="email" name="mail" required/>
                    </div>
                    <div>
                        <label>Votre Message :</label>
                        <textarea name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-beige">Envoyer le message</button>
                </form>

            </section>
            <section class="contact-info">
                <h2>Nos informations :</h2>
                <div>
                    <p>Eva Brochet <br/>
                    Le domaine des Terres Noires <br/>
                    2 Avenue du clocher<br/>
                    87190 Saint-Léger-Magnazeix</p>
                    <p>06 70 37 81 13<br/>
                    domainedesterresnoires @gmail.com</p>
                </div>
                <div>
                    <a href="tel:+33670378113" class="btn btn-dark"><span class="fa fa-phone"></span> Appelez-nous </a>
                    <a href="https://www.facebook.com/domaineterresnoires" target="blank_" class="btn btn-dark"><span class="fa fa-facebook-square" ></span> Facebook </a>
                </div>
                <div>
                    <a href="mailto:domainedesterresnoires@gmail.com" class="btn btn-dark"><span class="fa fa-envelope"></span> Email </a>
                    <a href="#contact-map" class="btn btn-dark"><span class="fa fa-map-marker"></span> Où sommes-nous </a>
                </div>

            </section>
            <div id="contact-map">
                <img src="/src/img/okkaina-puppies/jaune/Image00020.jpg" alt="contactez-nous le domaine des terres noires" />
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.188179496862!2d1.243944316046092!3d46.28623557911921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fc0737b2a2559d%3A0x2082e5ba25e841a8!2s2%20Avenue%20du%20Clocher%2C%2087190%20Saint-L%C3%A9ger-Magnazeix!5e0!3m2!1sfr!2sfr!4v1605519064445!5m2!1sfr!2sfr" 
                    frameborder="1" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
            <br/>
            <section id="adress-friend">
                <h3> Nos adresses conseils :</h3><br/>
                <div>
                    <div>
                        <a href="http://www.lewhippet.com" target="blank_" class="menu-anim"><b>La Romance des Damoiseaux</b></a><br/>
                        <p>Elevage de Whippet en Corrèze où j'ai eu la chance de faire mon apprentissage et d'obtenir mon diplôme.<br/>
                            <b>Merci Sabine.</b>
                        </p>
                    </div>
                </div>
                <div>
                    <div>
                        <a href="https://www.le-temple-de-jade.com/" target="blank_" class="menu-anim" ><b>Le Temple de Jade</b></a><br/>
                        <p>Elevage de Cane Corso dans l'Indre, un éleveur talentueux que j'ai eu la chance de rencontrer 
                            et qui m'apprendra toujours tant sur cette race que j'adore !<br/>
                            <b>Merci Régis et Cathy.</b>
                        </p>
                    </div>
                </div>
                <img src="/src/img/evapanama.jpg" alt="Remerciement du Domaine des Terres Noires" />
            </section>
        </main>

    <?php 
        include "./php/footer.php";
    ?>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="../app/res.js" ></script>

    </body>
</html>