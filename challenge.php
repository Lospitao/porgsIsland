<?php
include("header.php");
?>
<html>
<head>
</head>
<body>


    <div class="exercise_details column">

        <ul class="nav nav-tabs" role="tablist" id="profileTabs">
            <li class="nav-item">
                <a class="nav-link active" href="#challenge_div" aria-controls="challenge_div" role="tab" data-toggle="tab">Challenge</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#output_div" aria-controls="output_div" role="tab" data-toggle="tab">Output</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="challenge_div">
                <p>Write a function called that takes a string of parentheses, and determines if the order
                    of the parentheses is valid. The function should return true if the string is valid, and false
                    if it's invalid.</p>
                <h5>Examples</h5>
                <code>
                    "()"              =>  true
                    ")(()))"          =>  false
                    "("               =>  false
                    "(())((()())())"  =>  true
                </code>
                <h5>Constraints</h5>
                <code>0 <= input.length <= 100</code>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="output_div">
                <h5>Your results will be shown here.</h5>
            </div>
        </div>

    </div>

            <div class="solution_ide column">
                <?php
                include("codeeditor.php");
                ?>

            </div>

            <div class="sample_tests column">
                <div id="preview-comment"><?php echo $response; ?></div>
            </div>
            

                <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
