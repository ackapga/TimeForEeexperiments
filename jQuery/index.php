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

            <span id="status" class="status"></span>

            <div>
                <input type="text" id="name" class="input" placeholder="Введите имя">

                <input type="button" id="load" class="load" value="Отправить">
            </div>

            <div id="info" class="info">text</div>

        </div>
    </div>
    </body>

    <script>

        function funcBefore() {
            $("#info").text("Ожидание данных...");
        }

        function funcSuccess(data) {
            $("#info").text(data)
        }

        $(document).ready (function () {
            $("#load").bind("click", function () {

                var check = $("#name").val();

                $.ajax ({
                    url: "content.php",
                    type: "POST",
                    data: ({name: check, number: 5}),
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                })

                $.ajax ({
                    url: "check.php",
                    type: "POST",
                    data: ({check: check }),
                    success: function (data) {
                        if(data == "Fail")
                            $("#status").text(data);
                        else
                            $("#status").text(data);
                    }
                });

            });
        });


    </script>
</html>