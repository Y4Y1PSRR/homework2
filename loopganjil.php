

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border= "1" cellpadding= "10" cellspacing="0">
    <tr>
        <td>Ganjil</td>
    </tr>
        <tr>
            <td>
                <?php
                for ($i=0; $i <= 100; $i++) {
                    if ($i % 2) {
                    echo "$i<br>";
                    } 
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>