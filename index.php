<?php include("views/header.php"); ?>
<!--     <div style="width: 100%; box-shadow: 0px 10px 20px -5px rgba(0,0,0,.8); ">
        <img width="100%" src="images/coup.png">
    </div> -->

    <div class="container-fluid" id="indexContainer" style="margin-left: auto; margin-right: auto; background-color: white; min-width: 330px; max-width: 60%; margin-top: 50px;">

        <div class="row" style="background-color: white">

            <!-- Blog Entries Column -->
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-10" >
                        <?php include("views/date_search.php"); ?>
                    </div>
                    <div class="col-xs-2" >
                        <button type="button" class="btn btn-success pull-right" style="">Create New Date</button>
                    </div>
                    <div class="col-xs-12" >
                            <?php include("views/date_list.php"); ?>
                    </div>
                </div>
            </div>

<!--             <div class="col-xs-12 col-sm-4">
                <img src="images/holly.jpg" style="width: 100%;">
            </div> -->

<!--             <div class="col-xs-12 col-sm-6">
                <div class="row">
                    <div class="hidden-xs col-sm-12" style="margin-top: 20px;">
                       <?php include("views/new_date_form.php"); ?>
                    </div>
                    <div class="col-xs-12">
                       
                    </div>
                </div>
            </div> -->
        </div>

    </div>

<!--     <div class = "col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" style="position: fixed; bottom:0; right: 0; left: 0; background-color: red; height: 60px;"> hello </div> -->
<script src="js/global.js"></script>




            <!-- Blog Sidebar Widgets Column -->

        <!-- /.row -->

