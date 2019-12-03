<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" id="body_data">
        Height <input name="height" type="text"> <br>
        Weight <input name="weight" type="text"> <br>
        Body type
        <select name="body_type" id="body_type">
            <option value="1">Kecil</option>
            <option value="2">Sedang</option>
            <option value="3">Besar</option>
        </select>
        <button class="btn btn-primary" id="generate" type="button">Get Body Status!</button>
    </form>

    <script src="<?=base_url();?>assets/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/js/popper.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap.js"></script>

    <script>
        $(document).ready(function(){
            $('#generate').on('click', function(){
                console.log($('#body_data').serialize());
                $.ajax({
                    url: "<?=site_url("Guest/get");?>",
                    data : $('#body_data').serialize(),
                    type: "POST",
                    success: function(data){
                        console.log(data);
                    }
                });
            });
        });
    </script>
</body>
</html>