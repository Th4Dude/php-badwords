<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <p> paragrafo : <?php echo $_GET['frase'] ?> </p>
    <p> paragrafo è lungo: <?php echo strlen($_GET['frase']) ?> caratteri</p>
    <p> paragrafo con parola censurata: <?php echo str_replace($_GET['badword'],'***',$_GET['frase']) ?> </p>
    <p> il paragrago con parola censurata è lungo: <?php echo strlen(str_replace($_GET['badword'],'***',$_GET['frase'])) ?> </p>

</body>
</html>