<!doctype HTML>
<html>
 <head>
     <title>Write your code here</title>
     <!--Code Mirror plugins-->
     <script src="codemirror/lib/codemirror.js"></script>
     <link rel="stylesheet" href="codemirror/lib/codemirror.css">
     <script src="codemirror/mode/xml/xml.js"></script>
     <script src="codemirror/mode/php/php.js"></script>
     <script src="codemirror/mode/css/css.js"></script>
     <script src="codemirror/mode/javascript/javascript.js"></script>
     <script src="codemirror/addon/edit/closetag.js"></script>
     <link rel="stylesheet" href="codemirror/theme/xq-light.css">

 </head>
<body>
    <textarea id="editor">
        <p>I am a paragraph</p>
        <h5>Constraints</h5>
         <div role="tabpanel" class="tab-pane fade" id="output_div">
                <h5>Your results will be shown here.</h5>
            </div>
    </textarea>
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
            mode: "xml",

            theme: "xq-light",
            lineNumbers: true,
            autoCloseTags: true,
        });
    </script>
</body>
</html>