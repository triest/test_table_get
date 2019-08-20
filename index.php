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
    $('#seach').keyup(function(eventObject){
        alert('Клавиша клавиатуры возвратилась в ненажатое состояние. Код символа на этой клавише - ');
    });
</script>

</body>
</html>
