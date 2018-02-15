<?php
for ($i = 0; $i < count($_FILES['filesToUpload']['name']); $i++)
{
     $filename = basename($_FILES['filesToUpload']['name'][$i]);
     if (move_uploaded_file($_FILES['filesToUpload']['tmp_name'][$i], 'user_uploads/' . $filename))
     echo '1</br>';
     else 
     {
     echo "Upload of " . $filename . " failed, please try again :( </br>";
     }
}
?>