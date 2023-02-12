
<html>
    <head>
        <meta charset="utf-8">
        <title>login page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <style>
            input{
                text-transform: none;
            }

        </style>
    </head>
<html>    
    <body class="formback">
        <div class="container" style="width:600px; height: 520px; margin-top:90px;">
            <h2 class="text-center p-2">Login</h2>

            <form method="post" action="login_action.php" >
             <br>   
            <div class="row my-6">
                    <label>username</label>
                    <input type="text" name="username"class = "w-100 p-1" required>
            </div> 
            <br>
            <div class="row my-6"> 
                    <label>password</label>
                    <input type="password" name="password" class = "w-100 p-1" required>
            </div> <br><br>
            <center>
                <input type="submit" class="btn btn-success" value="LOGIN">
                </center> 
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </body>
</html>
