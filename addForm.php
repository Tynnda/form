<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Region form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="addFormProcess.php" method="post">
        <h1>Region form</h1>
        <br>
        <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text"
            name="name"
            value=""
            >
        </div>
        <br>
        <div class="form-group">
            <label for="slug">Slug</label><br>
            <input type="text"
            name="slug"
            value="">
        </div>
        <br>
        <div class="form-group"><button type="submit">Save region</button></div>
    </form>
    

</body>
</html>