<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category_manage</title>
    <style>
       *{
        background-color:#daffeb;
       }

       form {
            margin: auto;
            margin-top: 50px;
            width: 500px;
            padding: 30px;
            border: 1px solid black;
            border-radius: 5px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }

        textarea {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }

        .buttons {
            display: flex;
            justify-content: center;
        }

        input[type="checkbox"] {
            width: 13px;
            height: 13px;
            margin: 0;
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
            background-color:lightcoral;
        }

        button[type="submit"] {
            background-color:lightgreen;
        }
    </style>
</head>
<body>
<form action="category.php" method="post" enctype="multipart/form-data">
    <label for="name">Category Name*</label><br>
    <input type="text" name="name" id="name" placeholder="Enter Category name">
    <label for="description">Description</label><br>
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter Description"></textarea>
    <label for="image">Image</label><br>
    <input type="file" name="image" id="image">
    <label for="status">Status</label>
    <input type="checkbox" name="status">
    <div class="buttons">
        <button type="reset">CANCEL</button>
        <button type="submit">SAVE</button>
    </div>
</form>
</body>
</html>