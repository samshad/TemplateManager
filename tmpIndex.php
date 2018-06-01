<html>
<head>
    <link href="prism.css" rel="stylesheet" />
</head>

<body>
<form action="">
    <label>Get Code</label> <button type="button" onclick="show()">Show</button>
</form>

<script src="prism.js"></script>
<pre class="line-numbers"><code class="language-cpp" id="demo"></code></pre>

<script>
    function show() {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("demo").innerHTML = this.responseText;
                Prism.highlightElement(document.getElementById('demo'));
            }
        };
        xhttp.open("GET", "getCode.php", true);
        xhttp.send();
    }
</script>
</body>
</html>