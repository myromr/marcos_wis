<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #myForm{
            display: none;
        }
        #myForm1{
            display: none;
        }
        .button-row{
            display: inline-block;
        }
    </style>    
</head>
<body>
    <div class="button-row">
        <button onclick="toggleForm()">Show Form</button>
        <button onclick="toggleForm1()">Show Form1</button>
    </div>

    <form id="myForm" action="add_entity.php"></form>
</body>
</html>