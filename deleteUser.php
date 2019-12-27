<html>
<head>

 <!-- changed the id in the form to name to use them in the form  -->
</head>
    <body>


    <!-- validate username & password inputs using (js and/or php) and go to userPaga.html -->
    <!-- insert the new user in database -->
        <form name="signupForm" action="DataBase/DeleteUseDB.php" method ="post">
            email 	 : <input type="email" name="email"/> <br/>
            <input type="submit" value="sign up" name = "signupBtn"/>
        </form>

    </body>
</html>