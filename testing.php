<html>
<head>
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<form method="post" id="myform">
    name:<input type="text" id="myname" name="nm"><br>
    location <input type="text" id="location" name="loc">
    <button id="submit">submit</button>
</form>
<div id="result"></div>

<script>
    $(document).ready(function () {
        $("form").submit(function (e) {
            e.preventDefault();
        });
       $("#submit").click(function () {
           var name = $("#myname").val();
           var loc = $('#location').val();

           $.ajax({
              type:"POST",
              url:"insert.php",
              data:"name="+name+"&loc="+loc,
               success:function (data) {
                   $("#result").val("data inserted");
               }
           });

       });

       });

    });
</script>
</body>
</html>
