<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
         
        <h2>Sign Up</h2>    
        <form name = "form1" action="insert.php" method = "post" enctype = "form-data" >    
            <div class = "container">    
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "fname" value = "" required/>    
                </div>
        
				<br>
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "lname" value = "" required/>    
                </div>       
            </div>  
				<input type="submit", name="submit" />
        </form>    
    </body>    
</html>