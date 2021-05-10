 <?php
if(isset($_FILES)) {
    $allowedTypes = array('image/jpg','image/jpeg','image/png','image/gif','image/tif','image/tiff','image/svg');
    $uploadDirLarge = "../images/gallery_large/";
    $uploadDirSmall = "../images/gallery_small/";
    for($i = 0; $i < count($_FILES['file']['name']); $i++) { //перебор загруженных файлов
        $uploadFileLarge[$i] = $uploadDirLarge . basename($_FILES['file']['name'][$i]);
        $uploadFileSmall[$i] = $uploadDirSmall . basename($_FILES['file']['name'][$i]);
        $fileChecked[$i] = false;
        echo $_FILES['file']['name'][$i]." | ".$_FILES['file']['type'][$i]." — ";
        for($j = 0; $j < count($allowedTypes); $j++) { //проверка на соответствие допустимым форматам
            if($_FILES['file']['type'][$i] == $allowedTypes[$j]) {
                $fileChecked[$i] = true;
                break;
            }
        }
        if($fileChecked[$i]) {
            $largeFileResult = move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadFileLarge[$i]);
            if($largeFileResult) {
                echo "Успешно загружен <br>";
                copy($uploadFileLarge[$i], $uploadFileSmall[$i]);
            } else {
                echo "Ошибка ".$_FILES['file']['error'][$i]."<br>";
            }
        } else {
            echo "Недопустимый формат <br>";
        }
    }
} else {
    echo "Вы не прислали файл!" ;
}
?>
