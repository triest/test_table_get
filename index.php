<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>change demo</title>
    <style>
        div {
            color: red;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>

<input type="text" id="seach" name="seach">
<div></div>

<script>
    //setup before functions
    var typingTimer;                //timer identifier
    var doneTypingInterval = 1000;  //time in ms, 5 second for example


    $('#seach').keyup(function (eventObject) {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(doneTyping, doneTypingInterval);
    });

    function doneTyping() {

        alert("end input");
    }
</script>

</body>
</html>
