<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link</title>
</head>
<body>
    

    <?php
        $link = "https://xkcd.com";
        $num = rand(2, 5);

        $print_link = "";

        for($i = 1; $i <= $num ; $i++) {
            $print_link = $print_link."<a href='$link/$i ' target='_blank'> Pagina $i </a> <br>";
        }

        echo $print_link;

    ?>

</body> 
</html>