<?php
$conn=mysqli_connect("localhost","root","","vitreg");
$username="";
$rooms="";
$cgpa="";
$partner="";
$reg_no="";
$email="";

if(isset($_POST['search'])){
$rooms=$_POST['rooms'];
$partner=$_POST['partner'];

  $eligible_students=mysqli_query($conn,"SELECT * FROM vedu WHERE rooms='$rooms' and partner='$partner'");
    ?>
<!DOCTYPE html>
<html>
    <body>
        <h1> Students preferring <?php echo $rooms ?> are :-</h1>
        <table border=2 align="center">
            <tr>
                <th>Register number</th>
                <th>CGPA</th>
                <th>Room-type</th>
                <th>Partners required</th>
                <th>Email</th>
            </tr>
            <?php
while($row=mysqli_fetch_array($eligible_students)){
    $reg_no=$row["username"];
    $cgpa=$row["CGPA"];
    $rooms=$row["rooms"];
    $partner=$row["partner"];
    $email=$row["email"];
    
?>
            <tr align="center">
                <td><?php echo $reg_no ?></td>
                <td><?php echo $cgpa ?></td>
                <td><?php echo $rooms ?></td>
                <td><?php echo $partner ?></td>
                <td><?php echo $email ?></td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>
<?php }?>
