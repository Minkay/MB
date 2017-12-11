<?php

include __DIR__ . '/../cors.php';

// if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {

// 	// uploads image in the folder images
//     $temp = explode(".", $_FILES["file"]["name"]);
//     $newfilename = $_FILES["file"]["name"];
//     move_uploaded_file($_FILES['file']['tmp_name'], '../assets/img/solicitud/nueva/' . $newfilename);

// 	// give callback to your angular code with the image src name
// 	header('Content-type: application/json');
//     echo json_encode($newfilename);
// }

if ( !empty( $_FILES ) ) {
    $tempPath = $_FILES[ 'file' ][ 'tmp_name' ];
    $uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '../assets/img/solicitud/nueva' . DIRECTORY_SEPARATOR . $_FILES[ 'file' ][ 'name' ];
    move_uploaded_file( $tempPath, $uploadPath );
    $answer = array( 'answer' => 'Archivos completados' );
    $json = json_encode( $answer );
    echo $json;
} else {
    echo 'No ha seleccionado archivos';
}
?> 