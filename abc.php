<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=3">
</head>
<body>
<h1> Feedback</h1>

<div class="container">
<form method="post"  action="abcd.php">
 <label for="fname">First Name</label><br>
<input type="text" name="fname"><br>
  <label for="lname">Last Name</label><br>
  <input type="text" name="lname"><br>
  <label for="email">Email</label><br>
<input type="text" name="email"><br>
<label for="comment">Comment</label><br>
<input type="text" name="comment" style="height:200px"><br>

<input type="submit" name="save" value="submit">
</form>
</div>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color:#F8F8FF;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</body>
</html> 