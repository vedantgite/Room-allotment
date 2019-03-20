<html>
    <head>
    <style> input[type="text"],select,input[type="submit"],input[type="number"]
        {
            -webkit-box-sizing: content-box;
            -moz-box-sizing:content-box;
            -webkit-box-sizing:content-box;
            width:20%;
            height:4%;
            box-sizing:border-box;
        }
        select
        {
            text-align-last:center;
        
        }
        input.ng-invalid.ng-dirty{border:2px solid red;}
        </style>
    </head>
    <html ng-app>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js">
        </script>
    <script>
        function partnerlimit()
        {
        var select=document.getElementById("rooms");
        var room=select.options[select.selectedIndex].value;
        var partner=document.getElementById("partner1").value;
        var cgpa=document.getElementById("cgpa").value;
        if(room=="2-bedded rooms" && partner>1)
            {
                alert("Number of Partners invalid");
                document.getElementById("partner1").value=1;
            }
        if(room=="3-bedded rooms" && partner>2)
            {
                alert("Number of Partners invalid");
                 document.getElementById("partner1").value=2;
            }
        if(room=="4-bedded rooms" && partner>3)
            {
                alert("Number of Partners invalid");
                 document.getElementById("partner1").value=3;
            }
        if(room=="2-bedded A/C rooms" && partner>1)
            {
                alert("Number of Partners invalid");
                 document.getElementById("partner1").value=1;
            }
        if(room=="3-bedded A/C rooms" && partner>2)
            {
                alert("Number of Partners invalid");
                 document.getElementById("partner1").value=2;
            }
        if(room=="4-bedded A/C rooms" && partner>3)
            {
                alert("Number of Partners invalid");
                 document.getElementById("partner1").value=3;
            }
        if(cgpa<=3.3)
            {
                alert("You are not eligible for having a roommate.");
                document.getElementById("cgpa").value=3.3;
                
            }
        }
        </script>
<body bgcolor="#FFFF99" style="font-size:20px; font-family:verdana;" align="center">
    <form method="post" action="project.php" name="frm" id="form">
        <p align="center" style="font-size:50px; font-family:verdana;"><b> SPOT YOUR ROOMIE <br/><span style="font-size:30px;">VIT Men's Hostel</span>
            </b></p>
        <p><b>VIT Registration number:</b>
            <br/>
            <br/>
        <input type="text" name="username" value="<?php if(isset($username)){echo $username;} ?>" ng-model="user.name" ng-pattern="/^[1][2-8]{1}[A-Z]{3}[0-9]{4}$/" autocomplete="off"   required>
            <br/>
            <br/>
        <span style="color:red" ng-show="frm.username.$dirty && frm.username.$error.pattern">Enter valid registration ID;</span>
        </p>
        <p><b>
            Preffered type of room:</b><br/>
            <br/>
        <select name="rooms" id="rooms">
            <option value="2-bedded rooms"><span align="center">Two-bedded</span></option>
            <option value="3-bedded rooms">Three-bedded</option>
            <option value="4-bedded rooms">four-bedded</option>
            <option value="6-bedded rooms">six-bedded</option>
            <option value="2-bedded A/C rooms">Two-bedded A/C</option>
            <option value="3-bedded A/C rooms">Three-bedded A/C</option>
            <option value="4-bedded A/C rooms">four-bedded A/C</option>
            <option value="6-bedded A/C rooms">six-bedded A/C</option>
        </select>
        </p>
        <br/>
        <p><b>
        Number of partners required:</b>
            <br/>
            <br/>
        <input type="number" step="1" name="partner" value="" min="1" max="5" id="partner1" onchange="return partnerlimit()" required>
        </p>
        <br/>
        <p><b>
            CGPA:</b><br/>
            <br/>
        <input type="number" name="CGPA" value=" " step="any" max="10" min="0" autocomplete="off" ng-model="user.cgpa" id="cgpa" onchange="return partnerlimit()" required>
        </p>
        <br/>
        <p><b>
        Email:</b>
            <br/>
            <br/>
        <input type="text" name="email" ng-model="user.email" ng-pattern="/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/" autocomplete="off" required>
            <br/>
            <br/>
        <span style="color:red" ng-show="frm.email.$dirty && frm.email.$error.pattern">Enter proper email;</span>
        </p>
        <br/>
        <input type="submit" name="register_btn" value="Register" ng-disabled="frm.$invalid">
        <br/>
        <br/>
        <p style="color:red; font-size:20px"><b>**Only after registering yourself move forward to search for your partners:**</b></p>

    </form>
    <form action="search.php">
        <input type="submit" name="search" value="Search">
    </form>
    <?php include('insert.php') ?>
    </body>
</html>