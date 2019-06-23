    $("#newDate").submit(function(event) {
        event.preventDefault();

        var title = $("#title").val();
        var description = $("#description").val();
        var maxCost = $("#maxCost").val();
        var maxTime = $("#maxTime").val();

        $.ajax({
            type: "POST",
            url: "ajax_requests.php",
            data: {
                action: 'addDate',
                title: title,
                description: description,
                maxCost: maxCost,
                maxTime: maxTime
            },
            success: function(data){
                alert("success");
            }
        });

    });