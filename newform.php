<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .form{
        padding: 100px 300px 0px 500px;
       }

    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="">
                <label for="Country">Country:</label>
                <select name="" id="c">
                    <option value="">select country</option>
                    <option value="1">India</option>
                    <option value="2">us</option>
                    <option value="3">russia</option>
                    <!-- <option value="">japan</option>
                    <option value="">abc</option>
                    <option value="">bb</option>
                    <option value="">cc</option> -->
                </select>
                <br> <br>
                <label for="State">State:</label>
                <select name="" id="state">
                <option value="">select state</option>
                    
                </select>
                <br> <br>
                <label for="City">city:</label>
                <select name="" id="city">
                <option value="">select city</option>
                   
                </select>
                <br>

            </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script>
        $("#c").change(function(){
           $.ajax({
            url:"country.php",
            data:{"select":$('#c').val()},
            method:"post",
            success: function(data)
            {
                $("#state").html(data)
                console.log(data);
            },
            error:function(xhr,status)
            {

            },
           })


        })

        $("#state").change(function(){
           $.ajax({
            url:"city.php",
            data:{"select":$('#state').val()},
            method:"post",
            success: function(data)
            {
                $("#city").html(data)
                console.log(data);
            },
            error:function(xhr,status)
            {

            },
           })


        })
        

    </script>
    
</body>
</html>