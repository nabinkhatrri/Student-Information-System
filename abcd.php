 <?php
include_once 'database.php';
if(isset($_POST['save']))
{
// variables for input data

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// sql query for inserting data into database
mysqli_query($conn,"insert into feedback(fname,lname,email,comment)values ('$fname','$lname','$email','$comment')") or
 die(mysqli_error());
echo "<p align=center>Thank you for your feedback.</p>";
}
?> 