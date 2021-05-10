<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="styles/style.css"/>
</head>
<body>
<?=$content?>
    <form method='POST' action="scripts/fileupload.php" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <input type='file' name='file[]' class='file_drop' id='file_drop' multiple required><br>
        <input type='submit' value='Загрузить'>
    </form>
    <div class='message_div message_div_hidden' id='message_div'></div>
</body>
</html>