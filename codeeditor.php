<?php

//initially
$comment = null;
//if form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])) {
    $comment = $_POST['preview-form-comment'];
}
?>
<!doctype HTML>
<html>
 <head>
     <title>Start the challenge</title>
     <!--Code Mirror plugins-->
     <script type="text/javascript" src="plugins/codemirror/lib/codemirror.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script type="text/javascript" src="js/default.js"></script>
     <link rel="stylesheet" href="plugins/codemirror/lib/codemirror.css">
     <!--Language Plugin-->
     <script src="plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
     <script src="plugins/codemirror/mode/xml/xml.js"></script>
     <script src="plugins/codemirror/mode/javascript/javascript.js"></script>
     <script src="plugins/codemirror/mode/css/css.js"></script>
     <script src="plugins/codemirror/mode/clike/clike.js"></script>
     <script src="plugins/codemirror/mode/php/php.js"></script>
     <!--Closetag plugin-->
     <script src="plugins/codemirror/addon/edit/closetag.js"></script>
     <!--Autocomplete plugins-->
     <script src="plugins/codemirror/addon/hint/show-hint.js"></script>
     <script src="plugins/codemirror/addon/hint/css-hint.js"></script>
     <link rel="stylesheet" href="plugins/codemirror/addon/hint/show-hint.css">
     <!--Theme plugins-->
     <link rel="stylesheet" href="plugins/codemirror/theme/eclipse.css">

 </head>
<body>
<?php
 include("test.php");
        ?>




</body>
</html>