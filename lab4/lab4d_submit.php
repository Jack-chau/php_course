<?php
if( $_POST["submit"] == true ) {
echo "Please double confirm your input </br>";

echo 'Email :'. $_POST["email"] .'</br>';
echo 'Date of birth :'. $_POST["dob"].'</br>';
echo 'Gender :'. $_POST["gender"].'</br>';
echo 'Address1 :'. $_POST["address1"].'</br>';
echo 'Address2 :'. $_POST["address2"].'</br>';
foreach( $_POST["interest"] as $key => $item){
    echo 'Your interest'.( $key+1). ' is '.$item."<br>";
}
}
