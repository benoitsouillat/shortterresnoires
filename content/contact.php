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
                    <input type="text" name="pseudo" required />
                </div>
                <div>
                    <label name="mail">Votre Email :</label>
                    <input type="email" name="mail" required />
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
                <p>Eva Brochet <br />
                    Le domaine des Terres Noires <br />
                    1 La Maisonneuve<br />
                    19410 Vigeois</p>
                <p>06 70 37 81 13<br />
                    domainedesterresnoires @gmail.com</p>
            </div>
            <div>
                <a href="tel:+33670378113" class="btn btn-dark"><span class="fa fa-phone"></span> Appelez-nous </a>
                <a href="https://www.facebook.com/domaineterresnoires" target="blank_" class="btn btn-dark"><span
                        class="fa fa-facebook-square"></span> Facebook </a>
            </div>
            <div>
                <a href="mailto:domainedesterresnoires@gmail.com" class="btn btn-dark"><span
                        class="fa fa-envelope"></span> Email </a>
                <a href="#contact-map" class="btn btn-dark"><span class="fa fa-map-marker"></span> Où sommes-nous </a>
            </div>
            <div>
                <!--                     <a href="https://g.page/domaine_terres_noires" class="btn btn-dark"><span class="fa fa-star"></span> Notez-nous </a> -->
                <a href="https://wa.me/33670378113" class="btn btn-dark"><span class="fab fa-whatsapp"></span> What's
                    App </a>
            </div>

        </section>
        <div id="contact-map">
            <img src="/src/img/Image00020.jpg" alt="contactez-nous le domaine des terres noires" />

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.229167721297!2d1.5572214!3d45.3845478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f8e9c1848c5d45%3A0x44fcb4fd120ac343!2sLa%20Maison%20Neuve%2C%2019410%20Vigeois!5e0!3m2!1sfr!2sfr!4v1681554502521!5m2!1sfr!2sfr"
                loading="lazy"></iframe>
        </div>
        <br />
        <section id="adress-friend">
            <img src="/src/img/evapanama.jpg" alt="Remerciement du Domaine des Terres Noires" />
        </section>

        <!-- <section id="adress-friend">
            <h3> Nos adresses conseils :</h3><br />
            <div>
                <div>
                    <a href="http://www.lewhippet.com" target="blank_" class="menu-anim"><b>La Romance des Damoiseaux</b></a><br />
                    <p>Elevage de Whippet en Corrèze où j'ai eu la chance de faire mon apprentissage et d'obtenir mon diplôme.<br />
                        <b>Merci Sabine.</b>
                    </p>
                </div>
            </div>
        </section> -->
    </main>

    <?php
    include "./php/footer.php";
    ?>
</body>

</html>