<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>jQuery</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>

            function funcBefore() {
                $("#info").text("Ожидание данных...");
            }

            function funcSuccess(data) {
                $("#info").text(data)
            }

            $(document).ready (function () {
               $("#load").bind("click", function () {
                   let admin = "ADMIN";
                   $.ajax ({
                       url: "content.php",
                       type: "POST",
                       data: ({name: admin, number: 5}),
                       dataType: "html",
                       beforeSend: funcBefore,
                       success: funcSuccess
                   })
               });
            });
        </script>

    </head>

    <body>

    <p id="load" style="cursor: pointer">Старт</p>

    <div id="info"></div>

    </body>
</html>