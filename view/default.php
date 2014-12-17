<?php

namespace view;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Remote Access</title>
        <link rel="stylesheet" type="text/css" href="<?php echo dirname($_SERVER['PHP_SELF']); ?>/view/css/style.css">
    </head>
    <body>
        <div id="header"><h1>Remote Access</h1></div>
        <div id="sidebar">
            <p><a href="#">Settings</a></p>
            <p><a href="#">Commands</a></p>
            <p><a href="#">How to work</a></p>
            <p><a href="#">About creator</a></p>
        </div>
        <div id="content">
            <form action="<?php echo dirname($_SERVER['PHP_SELF']); ?>/index.php" method="post" name="drop_down_box">
                <text class="label">Please choise a command: </text>
                <select id="commands" name="commands" size="1" onchange="display();">
                    <option value="start_program">Start program</option>
                    <option value="open_file">Open file</option>
                </select>
                <div id="program_choise">
                    <text class="label">Please choise a program: </text>
                    <select name="parametrs" size="1">
                        <option id="select" value="" selected="selected"></option>
                        <option value="word">Microsoft Word</option>
                        <option value="point">Power point</option>
                        <option value="excel">Microsoft Excel</option>
                    </select><br/>
                </div>
                <!--<text class="label">Please choise a computer ip: </text>-->
<!--                <select name="commands" size="1">
                <?php
                ?>
                </select>-->
                <br/>
                <input type="submit" value="Send">
            </form> 
            <div id="footer">&copy; Pohorielov Vlad</div>
            <script type="text/javascript" >
                function display() {
                    var option = document.getElementById("commands").value;
                    if (option == "start_program")
                    {
                        document.getElementById("program_choise").style.visibility = "visible";
                    }
                    else {
                        document.getElementById("program_choise").style.visibility = "hidden";
//                        document.getElementById("program_choise").getElementsByTagName("option")[].selecte = 'selected';
                        document.getElementById("select").selected = true;
                    }

                }
            </script>
    </body>
</html>

