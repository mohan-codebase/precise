<!-- delete logic -->

<?php include './sql_folder/connect.php';

if(isset($_GET['delete'])){
$delete_id=$_GET['delete'];
$delete_query=mysqli_query($con,"Delete from `products` where id=$delete_id") or
die("Failed");

if($delete_query){
    header('location:view_product.php');
    // echo "product deleted";
}else{
    echo "product not deleted";
    header('location:view_product.php');
}


}



?>