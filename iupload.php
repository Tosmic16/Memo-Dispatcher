
<?php
include 'database.php';


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    $p = $_GET["ref"];
    $ref = $p;

$dir='./iuploads/'.$ref;
if (!file_exists($dir)) {
mkdir($dir,0777,(true));
}

$target_dir = "iuploads/".$ref."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
 // Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
 }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $w=" SELECT * FROM internal ORDER BY id DESC  LIMIT 1";
        $result = mysqli_query($conn,$w);
        while ($row = mysqli_fetch_assoc($result)) {
        	$id = $row['id'];
        }
        $q = "INSERT INTO simage (id ,image)
        				VALUES($id,'$target_file')";
        				mysqli_query($conn, $q);
    } else {
        echo "Sorry, there was an error uploading your file.  ";
    }
}
?> 
<BR>
<img src="<?php echo $target_file; ?>" alt="taste" style="height=20px; width=20px;">
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <a href="i-memo.php">DONE</a>
<a href="itest.php?ref=<?php echo $ref ?>" id="r">ADD MORE</a>
 <style type="text/css">
 	a{ color: white; background-color: red; padding: 18px 28px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    border: 2px solid green;
     border-radius: 2px;
         


}
#r{
	color: white; background-color: green; padding: 18px 28px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    border: 2px solid red;
     border-radius: 2px;
}
</body>
</html>