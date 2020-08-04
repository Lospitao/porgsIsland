<?php
$correct_output="Laura";
$response=null;
//if submit button is clicked
if (isset($_POST['action'])) {
    //if the code given is equal to the correct answer to challenge
    $comment=strip_tags($_POST['preview-form-comment']); /*remove html tags*/
    $comment=str_replace(' ', '', $comment); /*remove spaces in*/

    if($comment != $correct_output) {
        $response="You did not pass the test"; //valid answer
    }
    else $response="Congrats!Valid code"; //invalid answer
}
?>
<form id="preview-form" method="POST" action="challenge.php">
        <textarea class="codemirror-textarea" name="preview-form-comment" id="preview-form-comment">
            <?php
            if (isset($_POST['preview-form-comment'])) {
                echo $_POST['preview-form-comment'];
            }
            ?>
        </textarea>
    <br>
    <button class="btn waves-effect waves-light" type="submit" name="action" id="preview-form-submit">Submit
        <i class="material-icons right">send</i>
    </button>
</form>




