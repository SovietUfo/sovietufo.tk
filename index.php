<?php
    $floppa = glob("./images/floppa/*");
    shuffle($floppa);
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>swag</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="strona zrobiona po to bym szostke z infy dostal :tf:">
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <!--pluginy javascript aby navbar dobrze działał-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/main.css">
        <link rel="icon" href="images/icon.ico">
        <script src="https://kit.fontawesome.com/3e95b5582a.js" crossorigin="anonymous"></script> <!--ikony z font awesome-->
    </head>
    <body>
        <div id="wrapper" class="container-fluid">
        <div id="fadein">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <span class="navbar-brand">My social media and other stuff</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggler" aria-controls="toggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon me-auto"></span>
                </button>
                <div class="collapse navbar-collapse" id="toggler">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item"><a class="nav-link discord" href="https://discordapp.com/users/590956498495209474/" target="_blank"><i class="fab fa-discord"></i> Discord</a></li>
                        <li class="nav-item"><a class="nav-link telegram" href="https://t.me/elSovieto" target="_blank"><i class="fab fa-telegram-plane"></i> Telegram</a></li>
                        <li class="nav-item"><a class="nav-link github" href="https://github.com/SovietUfo" target="_blank"><i class="fab fa-github"></i> GitHub</a></li>
                        <li class="nav-item"><a class="nav-link twitter" href="https://twitter.com/elSovieto" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li class="nav-item"><a class="nav-link lastfm" href="https://www.last.fm/user/SovietUfo" target="_blank"><i class="fab fa-lastfm"></i> last.fm</a></li>
                        <li class="nav-item"><a class="nav-link spotify" href="https://open.spotify.com/user/arcadeaddicted?si=1c8f37c5dc3a47ac" target="_blank"><i class="fab fa-spotify"></i> Spotify</a></li>
                    </ul>
                </div>
                
        </nav>
        <h1 class="text-center">Hi,</h1>
        <h2 class="text-center">I like <a href="https://www.google.com/search?q=big+floppa" target="_blank">caracals</a> and raccoons.</h2>
        <h6 class="text-center"><s>and i hate javascript</s></h6>
        <div class="row align-items-center m-2">
            <div class="col">
                <img src="<?php echo $floppa[0] ?>" class="img-fluid rounded">
            </div>
            <div class="col">
                <img src="<?php echo $floppa[1] ?>" class="img-fluid rounded">
            </div>
            <div class="col">
                <img src="<?php echo $floppa[2] ?>" class="img-fluid rounded">
            </div>
        <div id="footer">
            <span>Flop Powered</span>
            <div id="smallfooter">
                <span>2021</span>
            </div>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>
