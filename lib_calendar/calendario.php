<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encomendar | Confeitaria Luh Mimu's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- -->
    <meta charset='utf-8' />
    <link href='css/core/main.min.css' rel='stylesheet' />
    <link href='css/daygrid/main.min.css' rel='stylesheet' />
    <script src='js/core/main.min.js'></script>
    <script src='js/interaction/main.min.js'></script>
    <script src='js/daygrid/main.min.js'></script>
    <script src='js/core/locales/pt-br.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'pt-br',
                plugins: ['interaction', 'dayGrid'],
                //defaultDate: '2019-04-12',
                editable: true,
                eventLimit: true,
                events: 'list_eventos.php',
                extraParams: function() {
                    return {
                        cachebuster: new Date().valueOf()
                    };
                }
            });

            calendar.render();
        });
    </script>
    <style>
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php
    include '../includes/header.php';
    ?>

    <!-- Menu -->
    <?php
    include '../includes/menu.php';
    ?>

    <!-- Calendário -->
    <br><br>
    <div id='calendar'></div>
    <br><br>
    
    <!-- Footer -->
    <?php
    include '../includes/footer.php';
    ?>

</body>

</html>