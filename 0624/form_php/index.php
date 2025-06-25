<?php include "./data.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>js</title>
    <style>
        .container {
            width: 30vw;
            height: 50vh;
            background-color: lightseagreen;
            margin: auto;
            border-radius: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            width: 10vw;
            margin-top: 6vh;
        }

        .hr {
            width: 30vw;
            margin: auto;
        }

        .ans {
            width: 30vw;
            height: 20vh;
            border: 2px solid;
            border-radius: 30px;
            margin: auto;
            font-size: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="get">
            <input type="number" class="inputA" value="<?=$data['inputA'];?>" name="inputA">
            <input type="text" class="opt" value="<?=$data['opt'];?>" name="opt">
            <input type="number" class="inputB" value="<?=$data['inputB'];?>" name="inputB">
            <input type="submit" value="送出" class="myBtn">
        </form>
    </div>
    <div class="hr">
        <hr>
    </div>
    <div class="ans">
        <?=$result?>
    </div>
</body>

</html>