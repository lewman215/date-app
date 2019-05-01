<?php include("views/header.php"); ?>

    <div class="container-fluid" style="height: 90vh; margin-left: auto; margin-top: 20px;  padding-top: 20px; margin-right: auto; background-color: white; max-width: 1400px;">

        <div class="row" style="background-color: white">
            <?php
                $date = Date::find_date($_GET["id"]); 
                echo $date->title;
                echo "<br/>";
                echo $date->relationship;
                echo "<br/>";
                echo $date->description;
                echo "<br/>";
                echo $date->cost;
                echo "<br/>";
                echo $date->timeNeeded;
            ?>

        </div>

    </div>

<script src="js/global.js"></script>




            <!-- Blog Sidebar Widgets Column -->

        <!-- /.row -->

