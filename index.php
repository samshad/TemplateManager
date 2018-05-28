<head>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?"></script>
</head>

<body>
<form action="">
    <label>Binary Search</label> <button type="button" onclick="show()">Show</button>
</form>

<pre class="prettyprint linenums" id="demo"></pre>

<script>
    function show() {
        var xhttp;
        /*if(str.length == 0){
            document.getElementById("txtHint").innerHTML = "";
            return;
        }*/
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "getCode.php", true);
        xhttp.send();
    }
</script>
</body>