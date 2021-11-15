<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Scarpping ...</h1>
    <div id="demo"></div>
    <script>
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("demo").innerHTML =
            this.getResponseHeader("Last-Modified");
        }
        xhttp.open("GET", "https://www.flipkart.com/search?q=laptop&page=3");
        xhttp.send();
    </script>
</body>

</html>