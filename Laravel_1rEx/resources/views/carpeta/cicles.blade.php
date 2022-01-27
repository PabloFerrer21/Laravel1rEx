<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cicles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require_once('/Laravel_1rEx/app/Clases/Cicle.php');

        $cicle1 = new Cicles ();
        $cicle1->id = "1";
        $cicle1->color = "DAW";
        $cicle1->nom = "Desenvolupament Aplicacions Web";

        $cicle2 = new Cicles ();
        $cicle2->id = "2";
        $cicle2->color = "DAM";
        $cicle2->nom = "Desenvolupament Aplicacions Multiplataforma";

        $cicles = array($cicle1, $cicle2);


    ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">SIGLES</th>
                <th scope="col">NOM</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $cicles1->id?></th>
                <th><?php echo $cicles1->sigles?></th>
                <th><?php echo $cicles1->nom?></th>
            </tr>
            <tr>
                <th><?php echo $cicles2->id?></th>
                <th><?php echo $cicles2->sigles?></th>
                <th><?php echo $cicles2->nom?></th>
            </tr>
        </tbody>

    </table>
</body>
</html>
