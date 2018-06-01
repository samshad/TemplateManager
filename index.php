<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BlackBox</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="prism.css" rel="stylesheet" />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Template Manager</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h4>UVA</h4>
            <span>
                <label>10222 - Decode the Mad man</label> <button type="button" onclick="show(1)">Show</button>
                <br>
                <label>10221 - Satellites</label> <button type="button" onclick="show(2)">Show</button>
                <br>
                <label>10223 - How many nodes</label> <button type="button" onclick="show(3)">Show</button>
                <br>
                <label>10226 - Hardwood Species</label> <button type="button" onclick="show(4)">Show</button>
            </span>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <h4>Code</h4>
            <script src="prism.js"></script>
            <pre class="line-numbers"><code class="language-java" id="demo"></code></pre>

            <script>
                function show(num){
                    console.log(num);
                    var xhttp;
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200){
                            document.getElementById("demo").innerHTML = this.responseText;
                            Prism.highlightElement(document.getElementById('demo'));
                        }
                    };
                    xhttp.open("GET", "getCode.php?num=" + num, true);
                    xhttp.send();
                }
            </script>
        </div>
    </div>
</div>
</body>
</html>