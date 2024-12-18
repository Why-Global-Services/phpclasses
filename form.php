<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formvalidiation.css">
</head>

<body>

    <div class="form-container">

        <form auto_complete="off" method="post" action="formsubmit.php">
            <div>

                <div class="forminput">

                    <label for="name">Name:</label>
                    <input name="name" type="text" id="name" placeholder="Enter your name">

                </div>

                <div class="forminput">

                    <label for="email">Email:</label>
                    <input name="email" type="email" id="email" placeholder="Enter your email">

                </div>

                <div class="forminput">

                    <label for="phoneno">Phone No:</label>
                    <input name="phoneno" type="number" id="phoneno" maxlength="10" placeholder="Enter your phoneno">

                </div>

                <div class="forminput">

                    <label for="comment">comment:</label>
                    <textarea name="comment" id="comment" row="5" cols="40" placeholder="Type your comment"></textarea>

                </div>

                <input type="submit" name="submit">

            </div>

        </form>

        <h2>Your input:</h2>
        <!-- <?php
                echo $name;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $phoneno;
                echo "<br>";
                echo $comment;
                echo "<br>";


                ?> -->
    </div>

</body>

</html>