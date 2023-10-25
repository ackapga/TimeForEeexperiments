<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>jQuery</title>
        <style><?php echo file_get_contents("style.css"); ?></style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>
    <div class="content">
        <div class="box_jQuery">
            <div>
                <input type="text" id="name" class="input" placeholder="Введите имя">

                <input type="button" id="load" class="load" value="Отправить">
            </div>

            <div id="info" class="info">...</div>

        </div>
        <span id="status" class="status"></span>
    </div>
    </body>

    <script>

        function funcBefore() {
            $("#info").text("Ожидание данных...");
        }

        function funcSuccess(data) {
            $("#info").text(data)
        }

        function statusIcons(data, color) {
            $("#status").text(data);
            $("#status").css('background-color', color);
            $("#status").fadeIn('slow');
            setInterval(function() {
                $("#status").fadeOut("slow");
            }, 3000);

        }

        $(document).ready (function () {
            $("#load").bind("click", function () {
                //
                var check = $("#name").val();
                //
                $.ajax ({
                    url: "status.php",
                    type: "POST",
                    data: ({check: check }),
                    success: function (data) {
                        if(data == "Fail") {
                            statusIcons(data, '#fd0001');
                        } else {
                            statusIcons(data, '#02bc36');
                        }
                    }
                });
                //
                $.ajax ({
                    url: "content.php",
                    type: "POST",
                    data: ({name: check}),
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });
        });


    </script>
</html>