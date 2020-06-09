<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen and (max-width:480px)">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>log</title>
</head>

<body>
    <img class="daily_background" src="背景2.jpg" alt="">

    <div>
        <p class="timer_title" id="timer_title">英語</p>
    </div>


    <div class="timer_Box">
        <a class="btn-circle-fishy" id="pauseButton" class="values">25:00</a>
    </div>

    <!-- <div class="analysis_button_Box">
        <a href="#" class="analysis_button">記録を見る</a>
    </div> -->

    <div class="analysis_button_Box">
        <button class="analysis_button timer" id="start_button" data-minutes-left="3">スタート</button>
        <!-- <a class="analysis_button" id="start_button">スタート</a> -->

    
        <div class='timer' data-seconds-left="180"></div>
    </div>

    <div class="analysis_button_Box">
        <button class="analysis_button" id="finish_button">終了</button>
        <!-- <a href="#" class="analysis_button" id="finish_button">終了</a> -->
    </div>



    <script>
        // $(function() {
        //     $("#selected_task").on("click", function() {
        //         let title = $(this).text();
        //         $("#timer_title").text(title);


        //     })
        // })
        let data = localStorage.getItem('data')
        // alert(data);
        $("#timer_title").text(data);
    </script>


    <script src="jquery.js"></script>
    <script src="jquery.simple.timer.js"></script>

    <script>
        $(function() {
            $('.timer').startTimer();
        });
    </script>


</body>

</html>