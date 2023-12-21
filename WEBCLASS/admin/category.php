<?php 

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>
    <style>
          *{
            background-color:lightblue;
          }




        form {
            margin: auto;
            margin-top: 50px;
            width: 500px;
            display: flex;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .buttons {
            display: flex;
            justify-content: center;
        }
        button {
            padding: 10px;
            margin: 10px;
            width: 100px;
            border: 1px solid black;
            border-radius: 5px;
            color: white;
            font-weight: 700;
        }
        button[type="reset"] {
            background-color:#2ca42c;
        }
        button[type="submit"] {
            background-color:#cf3434;
        }
    </style>
</head>
<body>
    <form action="#">
        <label for="name">Category Name*</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Category name"><br><br>
        <div class="buttons">
            <button type="reset">SAVE</button><button type="submit">CANCEL</button>
        </div>
    </form>
</body>
</html>
