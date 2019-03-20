<?php
$conn=mysqli_connect("localhost","root","","vitreg");
$username="";
$rooms="";
$cgpa="";
$partner="";
$reg_no="";
$email="";
if(isset($_POST['register_btn'])){
$username=$_POST['username'];
$rooms=$_POST['rooms'];
$cgpa=$_POST['CGPA'];
$partner=$_POST['partner'];
$email=$_POST['email'];
    if($email!="" && $username!="" && $cgpa!="" && $partner!="" && $rooms!="")
    {
        $SELECT="SELECT username From vedu Where username=? Limit 1";
        $INSERT="INSERT Into vedu(username,rooms,CGPA,partner,email) values(?,?,?,?,?)";
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssdis",$username,$rooms,$cgpa,$partner,$email);
            $stmt->execute();
        echo("New record inserted");
        }
        else{
            echo("Someone already registered!!");
        }
        $stmt->close();
        $conn->close();
    } 
    else
    {
        echo("Enter all details!!!");
    }
}

if(isset($_POST['search'])){
    header('Location:search.php');}
 ?>
