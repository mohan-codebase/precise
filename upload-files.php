<?php 
$upload = 'err'; 
$errors['status'] = 'err';
if(!empty($_FILES['3dscanning'])){ 
     // File upload configuration 
	 // this is target file to upload files. before executing this functionality .you need to create folder 
    $targetDir = "../files/3dscanning/"; 
    $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg', 'gif','zip','rar','gif'); 
     
    $fileName = basename($_FILES['3dscanning']['name']); 
    $Newfile_name=date("d_m_Y_h_i_a_").$fileName;
    $targetFilePath = $targetDir.$Newfile_name; 
     
    // Check whether file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 

    $path_parts = pathinfo($targetFilePath);
    $image_path = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];
    
    if(in_array($fileType, $allowTypes)){ 
        // Upload file to the server 
        if(move_uploaded_file($_FILES['3dscanning']['tmp_name'], $targetFilePath)){ 
            $upload = 'ok'; 
            $errors['status'] = 'ok';
            $errors['Filepath'] = $targetFilePath;
            $errors['Newfile_name'] = $Newfile_name;

        } 
    } 
} 
echo json_encode($errors);
 
?>