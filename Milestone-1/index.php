<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/general.css">
    <title>Spotify</title>
</head>
<body>
    <div id="app" >
        <header>
            <img src="./assets/spotify-logo.png" alt="spotify logo" />
        </header>
    
        <main>
            <div class="ab-container">
                <?php 
                include_once 'database/albumsData.php';
                foreach ($albums as $album) {
                    echo(
                        '<div class="ab-card"><img src="' . 
                        $album['poster'] . '" alt="cover" /><h2>' . 
                        $album['title'] . '</h2><h5>' . 
                        $album['author'] . '</h5><h5>' . 
                        $album['year'] . '<h5></div>'
                    );
                }
                ?>
            </div>
        </main>
    </div>
</body>
</html>
