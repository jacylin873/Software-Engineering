<html>
    <!-- The beginning steps (header) of declaring a HTML/PHP website (Jacy) -->
    <head>
        <!-- The title to the website that shows up on the navigation bar (Jacy) -->
        <title>Edu Planner</title>

        <!-- Links the CSS file to the PHP file (Jacy) -->
        <?php echo '<link rel="stylesheet" type="text/css" href="style.css"></head>'; ?>
    </head>

    <!-- Body code for the structure of the website (Jacy) -->
    <body>
        <!-- Div class code for Login title and Username Box (Jacy) -->
        <div class="login-box">
            <h2>Login</h2>
            <form method="post" action="">
            <div class="user-box">
              <input type="text" name="email">
              <label>Username</label>
            </div>
            <!-- Div class clode the the Password Box (Jacy) -->
            <div class="user-box">
              <input type="password" name="password">
              <label>Password</label>
            </div>
            <!-- Submission box for inputing Username and Password (Jacy) -->
            <input type="submit" name="submit">
            </form>
            <div class = "echo-statement">
              <?php include("loginArithmetic.php"); ?>
            </div>
        </div>
    </body>
    </style>

</html>