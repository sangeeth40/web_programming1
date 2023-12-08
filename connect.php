<html>
<head>
</head>
<body>
      
<?php

    $con = Mysqli_Connect("localhost","root","","phpprogram");
  
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else 
    {
        echo "Successfully Connected! <br>";
    }
   $sql = "SELECT * FROM person_details";
   $result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
  echo"<table border=1> <tr> <th>name</th> 
	<th>email</th>
	<th>age</th>
	<th>number</th>
	</tr>";
  while( $row = mysqli_fetch_assoc($result)){
 echo "<tr > <td>" . $row["name"] . "</td>
           <td>" . $row["email"] . "</td>
           <td> ". $row["age"] . "</td>
           <td>" . $row["number"] . "</td> </tr>";
}
}
 echo '</table>';

?>
</body>
</html>
