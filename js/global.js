    $("form#newDate").submit(function(event) {
        event.preventDefault();

        var title = $("#dateTitle").val();
        var minCost = $("#minCost").val();
        var maxCost = $("#maxCost").val();
        var minTime = $("#minTime").val();
        var maxTime = $("#maxTime").val();
        console.log(title);
        alert("Adding date: " + title + ", which will cost between "
         + minCost + " and " + maxCost + " pounds, and take between " + minTime + " and " + maxTime + " hours");
        // $.ajax({
        //     type: "POST",
        //     url: "insert.php",
        //     data: "toid=" + content + "&newmsg=" + newmsg,
        //     success: function(){alert('success');}
        // });
    });