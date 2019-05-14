<div class="row" style="background-color: white">
    <div class="col-xs-12">   
        <div class=" row" id="" style="">
            <?php
                $dates = Date::find_all_dates();                    
                foreach($dates as $date) {
            ?>                      
                        <div class = "col-xs-12 col-sm-6 col-lg-4" style="">
                            <div class="date">
                                <span class = "dateTitle"> <?= $date->title ?> </span>
                                <span class = "dateDescription"> <?= $date->description ?> </span>
                                <span class = "dateCost"> cost:  <?= $date->cost ?> </span>
                                <span class = "dateTime"> time:  <?= $date->time ?> </span>
                            </div>
                        </div>
            <?php
                }
            ?>

            <script> 
                var dates = $(".date");
                console.log(dates);
                
                $(".dates").append(dates[0]);
            </script>
        </div>
        
    </div>
</div>
