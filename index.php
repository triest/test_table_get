<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body onload="myFunction()">

<h1>Hello World!</h1>
<label>Seach:</label>
<input type="text" id="seach" name="seach" onchange="myFunction2()" oninput="myFunction2()">
<table class="table table-bordered" id="dynamic_field">

</table>

<script>
    function myFunction() {
        console.log("d");
        var table = document.getElementById("dynamic_field");
        table.innerHTML = "";
        $.ajax({
                url: "database.php?seach",
                dataType: "json",
                data: "data",
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
    ,
    function myFunction2() {
        console.log("d");
        var table = document.getElementById("dynamic_field");
        var seach = document.getElementById("seach").valueOf().toString();

        table.innerHTML = "";
        $.ajax({
                url: "database.php?seach",
                dataType: "json",
                data: {seach: seach},
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
