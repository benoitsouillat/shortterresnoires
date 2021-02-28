<!DOCTYPE html>
<html>
    <head>
        <title>Gérer les chiens</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="../css/main.css" type="text/css" />
        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" media="screen and (max-width: 1279px)" href="../css/smart-main.css" type="text/css" />
        <link rel="stylesheet" media="screen and (min-width: 1280px)" href="../css/main.css" type="text/css" />
        <link rel="shortcut icon" type="image/ico" href="../favicon/favicon.ico" />

    <script type="text/javascript" src="/app/res.js" ></script>
    </head>
    <body>
        <h1 id="acces">Page Gestion - Acces restreint</h1>

        <script>
            let acces = document.getElementById('acces');
            let link = document.createElement('img');
                link.src = "../" + imgPath + 'panama1' + jpg;
                link.rel = " Test by script ";
                link.style.width = "200px";
                link.style.height = "auto";
            console.log(link);
            acces.appendChild(link);
            
        </script>

        <section class="mt-5">
            <h5 class="title">Ajouter un chien</h5>
            <form method="post" class="ml-5" action="connexion.php">

            <fieldset style='border: beige 1px solid; padding: 20px' class="d-flex flex-column justify-content-end align-items-start">
                <legend style='margin-left: 15px'> Ajouter un chien</legend>
                <p class="form__group">
                    <label for="dogname">Nom du chien</label> :
                    <input type="text" name="dogname" id="dogname" required/>
                </p>
                <p class="form__group">
                    <label for="dogbirth">Date de Naissance: 
                        <input type="date" name="dogbirth"  />
                    </label> 
                </p>
                <p class="form__group">
                    <label for="dogbreed">Race</label> : 
                    <select name="dogbreed">
                        <option value="canecorso">Cane Corso</option>
                        <option value="whippet">Whippet</option>
                        <option value="teckel">Teckel</option>
                    </select>
                </p>
                <p class="form__group">
                    <label for="dogbreeder">Elevage</label> :
                    <select name="dogbreeder">
                        <option value="templejade">Temple de Jade</option>
                        <option value="terrenoire">Domaine des Terres Noires</option>
                        <option value="muteanu">Corso di Munteanu</option>
                        <option value="damoiseaux">Romance des Damoiseaux</option>
                    </select>
                </p>
                <p>
                    <label for="dogsex">Sexe</label> : 
                    <select name="dogsex">
                        <option value="0"> Mâle </option>
                        <option value="1"> Femelle </option>
                    </select>
                </p>
                <p>
                    <label for="doglitter">Portée</label> :
                    <select>
                        <option value="0"> Non </option>
                        <option value="1"> Oui </option>
                    </select>
                </p>
                <p>
                    <label for="dogmom">Nom de la Mère</label> : 
                    <input type="text" name="dogmom"  />
                </p>
                <p>
                    <label for="dogdad">Nom du Père</label> : 
                    <input type="text" name="dogdad"  />
                </p>
                <p>
                    <label for="dogpuce">Puce</label> : 
                    <input type="text" name="dogpuce"  />
                </p>
                <p>
                    <label for="doglof">Lof</label> : 
                    <input type="text" name="doglof"  />
                </p>
            </fieldset>
                <!-- TESTS -->
                <p class="form__group">
                    <label for="email">EMAIL</label> : 
                    <input type="email" name="email"  />
                </p>
                    <button class="btn__form btn btn-sm btn-light ml-5" type="submit">Ajouter le chien</button>
                    <button class="btn__form btn btn-sm btn-light ml-5" type="reset">Tout effacer</button>
            </form>


        </section>


        <section>
            <h5 class="title">Créer un article </h5>
        </section>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>