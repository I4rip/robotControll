<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h2 id="result"></h2>

    <script>
        function getResult()
        {
         $.ajax({
                url:"ajax.php",
                method:"POST",
                data:{get:"result"},
                success:function(data){
                    $("#result").html(data);
                }
                
            });
        }
        getResult();
        setInterval(function(){
            getResult();
        },500);
    </script>
</body>
</html>