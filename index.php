<?php
include __DIR__.'/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <?php foreach($dischi as $disco){?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $disco['nome']?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $disco['artista']?></h6>
                        <p class="card-text"><?php echo $disco['anno']?></p>
                        
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>