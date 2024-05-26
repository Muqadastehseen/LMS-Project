<?php
$connection= mysqli_connect("localhost","root","","lms");

//step 2 

$query="SELECT * FROM books";//sary column ka data lana ho
$query_result= mysqli_query($connection, $query);//mysqli_query()give schema type info
$data=mysqli_fetch_all($query_result,MYSQLI_ASSOC);//2 value pass ...quesry result//,MYSQLI_ASSOC for associative array.

// echo "<pre>";
// print_r($data);
// echo $query_result->num_rows;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show data using php</title>
</head>
<body>

<table border="1">
<tr>
    <th>Title</th>
    <th>Description</th>
    <th>Author_name</th>
    <th>action</th>
    
   
</tr>

<?php

foreach($data as $row)://row mean ik user ka record fir dosra fir so on.....
?>
<tr>
    <td><?php echo $row['Title']; ?></td>
    <td><?php echo $row['Description']; ?></td>
    <td><?php echo $row['Author_name']; ?></td>
    
    <td>
       
        <a href="view_books.php?id=<?php echo $row['ID']; ?>" >View</a> </td>
        
    

</tr>

<?php

endforeach;

?>

</table>

</body>
<?php
?>