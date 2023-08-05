<?php
define('UPLOAD_DIR', '/Uploads/');
define('MAXSIZE', '7340032');
$ALLOWED_MIME = ['application/vnd.ms-excel', 'text/plain', 'text/csv', 'text/tsv'];

if (isset($_POST['submit'])) {

    if ($_FILES['csv']) {

        $filename = basename($_FILES['csv']['name']);
        $temp = $_FILES['csv']['tmp_name'];
        $file_dest = '../Uploads/';
        $is_uploaded = is_uploaded_file($temp);

       $valid_size = $_FILES['csv']['size'] <= MAXSIZE && $_FILES['csv']['size'] >= 0;

       if ($is_uploaded && $valid_size && allowedfile($temp, $filename)) {
            if(is_dir($file_dest)){
            move_uploaded_file($temp, $filename);
            //    insertCSV($file_dest);
            }else{
            echo "kill";
            }
        } else {
            echo "Error";
        }
    }
}

function allowedfile($tempfile, $destfile)
{
    global $ALLOWED_MIME;
    $file_ext = pathinfo($destfile, PATHINFO_EXTENSION);
    $file_mime = mime_content_type($tempfile);
    $valid_mime = in_array($file_mime, $ALLOWED_MIME);
    $allowed_file = ($file_ext == 'csv') && $valid_mime;

    return $allowed_file;
}
