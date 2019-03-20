<html>
    <style>
    select
        {
            text-align-last:center;
        }
        </style>
<body bgcolor="#FFFF99" align="center">
    <form method="post" action="search.php">
        <b>Preffered type of room:</b>
        <select name="rooms">
            <option>Select the type of room</option>
            <option value="2-bedded rooms">Two-bedded</option>
            <option value="3-bedded rooms">Three-bedded</option>
            <option value="4-bedded rooms">four-bedded</option>
            <option value="6-bedded rooms">six-bedded</option>
            <option value="2-bedded A/C rooms">Two-bedded A/C</option>
            <option value="3-bedded A/C rooms">Three-bedded A/C</option>
            <option value="4-bedded A/C rooms">four-bedded A/C</option>
            <option value="6-bedded A/C rooms">six-bedded A/C</option>
        </select>
        
            <select name="partner">
            <option>Select number of partners</option>
            <option value=1>1 partner</option>
            <option value=2>2 partners</option>
            <option value=3>3 partners</option>
            <option value=4>4 partners</option>
            <option value=5>5 partners</option>
        </select>
        <input type="submit" name="search" value="Search">
        <p style="color:red;"><b>**Selecting both the above fields is necessary to see the results**</b></p>
    </form>
    <?php include('search_server.php') ?>
    </body>
</html>