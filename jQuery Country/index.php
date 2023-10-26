<!doctype html>
<html lang="en">
<head>
    <title>Country</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("select[name='country']").bind("change", function () {
                $.get("countryCheck.php",
                    {country: $("select[name='country']").val()},
                    function (data) {
                        data = JSON.parse(data);
                        $("select[name='city'").empty();
                        for (var id in data) {
                            $("select[name='city'").append($("<option value='" + id + "'>" + data[id] + "</option>"));
                        }
                    });
            });

            $("#city").bind("click", function () {
                var one = $("select[name='country']").val();
                var two = $("select[name='city']").val();
                $.ajax ({
                    url: "cityCheck.php",
                    type: "POST",
                    data: ({country: one, city: two}),
                    dataType: "html",
                    beforeSend: function () {
                        $("#nameCity").text("load...");
                    },
                    success: function (data) {
                        $("#nameCity").text(data);
                    }
                });
            });


        });
    </script>
</head>
<body>
<lable>Country:</lable>
<select name="country" id="country">
    <option value="0" selected="selected" style="display: none"></option>
    <option value="1">Kazakhstan</option>
    <option value="2">Russian</option>
    <option value="3">Belarus</option>
    <option value="4">Uzbekistan</option>
    <option value="5">USA</option>
</select>
<lable>City:</lable>
<select name="city" id="city">
    <option value="0" selected="selected" style="display: none"></option>
</select>
<h1 id="nameCity"></h1>
</body>
</html>