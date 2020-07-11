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
     <script src="plugins/codemirror/mode/xml/xml.js"></script>
     <script src="plugins/codemirror/addon/edit/closetag.js"></script>
     <link rel="stylesheet" href="plugins/codemirror/theme/eclipse.css">

 </head>
<body>
    <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <textarea class="codemirror-textarea" name="preview-form-comment" id="preview-form-comment">
            <?php echo $comment; ?>
        </textarea>
        <br>
        <button class="btn waves-effect waves-light" type="submit" name="action" id="preview-form-submit">Submit
            <i class="material-icons right">send</i>
        </button>
    </form>
    <div id="preview-comment"><?php echo $comment; ?></div>



</body>
</html>