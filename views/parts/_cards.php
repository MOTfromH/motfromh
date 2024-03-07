
<div class="container-fluid">
    <!--    first row-->
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <div class="col ">
            <div class="card p-1">
                <img src="./assets/img/ScreenGH.png" class="card-img-top" alt="Screenshot GitHub">
                <div class="card-body">
                    <h5 class="card-title">GitHub</h5>
                    <p class="card-text">Hier findest du mein GitHub Profil. Dort findest du auch den code zu den
                        Anwendungen auf meiner Seite.</p>
                    <a class="menu-links btn btn-info " href="https://github.com/MOTfromH"> GitHub</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card p-1">
                <img src="./assets/img/orcKlein.png" class="card-img-top" alt="orc-warrior">
                <div class="card-body">
                    <h5 class="card-title">Rollenspiel in PHP</h5>
                    <p class="card-text">Ein Rollenspiel, bei dem du als Mensch oder Ork gegeneinander antreten kannst. Bei der Wahl deiner Ausrüstung kannst du entweder auf einen festen Bonus setzen, oder du vertraust auf dein Glück.</p>
                    <a class="menu-links btn btn-info " href="../../Rollenspiel_php/start.html"> Spielen</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card p-1">
                <img src="./assets/img/CVthumb.png" class="card-img-top" alt="orc-warrior">
                <div class="card-body">
                    <h5 class="card-title">Mein CV zum Download</h5>
                    <p class="card-text">Mein CV, Zeugnisse und Zertifikate findest du hier zum Download.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        zum Download
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Geschützter Bereich</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Bitte Passwort eingeben</h5>
                                    <form action="index.php" method="POST">
                                        <div class="mb-3">
                                            <label for="InputPasswordCV" class="form-label"></label>
                                            <input type="password" class="form-control" id="InputPasswordCV" placeholder="Passwort" name="passwordCV">

                                        </div>

                                        <button type="submit" class="btn btn-info" name="submitCV" >Submit</button>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    second roe-->
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <div class="col ">
            <div class="card p-1">
                <img src="./assets/img/KniffelThumb.png" class="card-img-top" alt="Screenshot GitHub">
                <div class="card-body">
                    <h5 class="card-title">Kniffel API - JAVA & Spring Boot</h5>
                    <p class="card-text">Im Laufe der Zeit wird hier eine Kniffel-API entstehen. Verfolge das Voranschreiten des Projektes gerne auf GitHub.</p>
                    <a class="menu-links btn btn-info " href="https://github.com/MOTfromH/springboot_workshop_kniffelAPI/tree/master"> GitHub</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card p-1">
                <img src="./assets/img/blogPrev.PNG" class="card-img-top" alt="orc-warrior">
                <div class="card-body">
                    <h5 class="card-title">Dynamisch erstellter blog mit PHP</h5>
                    <p class="card-text">Projekt aus dem Fachunterricht. Verfolge das Projekt gerne mit auf GitHub, bis es fertig ist.</p>
                    <a class="menu-links btn btn-info " href="https://github.com/MOTfromH/blog">GitHub</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-1">
                <img src="./assets/img/spritePreview4.png" class="card-img-top" alt="Sprite Animation">
                <div class="card-body">
                    <h5 class="card-title">Sprite Animation mit JS</h5>
                    <p class="card-text">Animationen des Chars, verschieden Gegnertypen mit unterschiedlichen Bewegungsmustern und ein parallax background kannst du hier entdecken.</p>
                    <a class="menu-links btn btn-info" href="../../sprite/hallosprite.html"> Starten</a>
                </div>
            </div>
        </div>


    </div>
</div>


