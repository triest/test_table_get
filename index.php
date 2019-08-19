<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body onload="myFunction()">

<h1>Hello World!</h1>
<table class="table table-bordered" id="dynamic_field">

</table>

<script>
    function myFunction() {
        console.log("d");
        $.ajax({
                url: "database.php",
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    for (var x = 0; x < data.length; x++) {
                        $('#dynamic_field').append('<tr id="row">' +
                            '<tr><td>' + data[x].id + '<td>' + data[x].name + '</td><tr>');
                    }
                }
            }
        );
    }
</script>

</body>
</html>
