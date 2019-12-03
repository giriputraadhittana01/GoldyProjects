<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body class="container p-4">
    <form action="login/signin" method="post" id="body_data">
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input class="form-control" type="password" name="pass">
        </div>
        <button class="btn btn-primary" id="generate" type="submit">Get Body Status!</button>
    </form>
    <div class="card">
        <div class="card-body" id="result">

        </div>
    </div>

    <script src="<?=base_url();?>assets/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/js/popper.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap.js"></script>

    <script>
        $(document).ready(function(){
            
        });
    </script>
</body>
</html>