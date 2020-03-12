<?php
/**
 * Created by PhpStorm.
 * User: DevKobby
 * Date: 3/12/2020
 * Time: 7:02 AM
 */

$ds = DIRECTORY_SEPARATOR;  //1

$storeFolder = 'asset/uploads';   //2

if (!empty($_FILES)) {

    /*
     * @var temporary store files
     * */
    $tempFile = $_FILES['file']['tmp_name'];          //3

    //target path
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

    $targetFile =  $targetPath. $_FILES['file']['name'];  //5

    //store files
    move_uploaded_file($tempFile,$targetFile); //6

}
