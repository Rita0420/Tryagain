<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form->php</title>
    <style>
        form {
            width: 30vw;
            height: 40vh;
            background-color: lightgoldenrodyellow;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }

        .hr {
            width: 30vw;
            margin: auto;
        }

        .ans {
            width: 30vw;
            height: 10vh;
            border: 1px solid;
            margin: auto;
            text-align: center;
            font-size: 2em;
        }

        input {
            width: 10vw;
        }
    </style>
</head>
<body>
    <form  method="get">
        <input type="number" class="inputA" value="10" name="inputA">
        <input type="text" class="math" value="+" name="math">
        <input type="number" class="inputB" value="2" name="inputB">
        <input type="submit" class="myBtn">
    </form>
    <div class="hr"><hr></div>
    <div class="ans">
        <?php
        include "./data.php";
        ?>
    </div>
</body>
</html>