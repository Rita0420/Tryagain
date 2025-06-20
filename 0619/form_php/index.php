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
            background-color: lightblue;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            width: 10vw;
            margin-top: 2vh;
        }

        .ans {
            width: 30vw;
            height: 10vh;
            border: 1px solid;
            margin: auto;
            text-align: center;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <form  method="get">
        <input type="number" name="inputA" id="inputA" value="10">
        <input type="text" name="math" id="math" value="+">
        <input type="number" name="inputB" id="inputB" value="5">
        <input type="submit" value="計算" id="submit">
    </form>
    <hr>
    <div class="ans">
        <?php include './data.php'; 
            echo $result;
        ?>
    </div>
</body>
</html>