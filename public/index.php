<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
            <label for="month">Month:</label>
            <select id="month_input" name="month" onchange="updateMonth()">
                <option value="1">Jan</option>
                <option value="2">Feb</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">Jun</option>
                <option value="7">July</option>
                <option value="8">Aug</option>
                <option value="9">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
            </select>

            <label for="day">Day:</label>
            <select id="day_input" name="day" onchange="updateDay()">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <label for="year">Year:</label>
            <select id="year_input" name="year" onchange="updateYear()">
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                <option value="2032">2032</option>
                <option value="2033">2033</option>
            </select>

        <h3> <span id="month"></span> / <span id="day"></span> / <span id="year"> </span> </span> is <span id="x"> x </span>days from away </h3>

        <script src="" async defer></script>
    </body>
    <script>

        var month = new Date()
        month = month.getMonth() + 1
        document.getElementById('month').innerHTML = month;

        var day = new Date()
        day = day.getDate()
        document.getElementById('day').innerHTML = day;

        var year = new Date()
        year = year.getFullYear()
        document.getElementById('year').innerHTML = year;

        // var todays_date = month + '/' + day + '/' + year;

            var new_year = document.getElementById('year_input');

            function updateMonth() {
                var new_month = document.getElementById('month_input');
                var month_value = new_month.options[new_month.selectedIndex].value;
                document.getElementById('month').innerHTML = month_value;
            }

            function updateDay() {
                var new_day = document.getElementById('day_input');
                var day_value = new_day.options[new_day.selectedIndex].value;
                document.getElementById('day').innerHTML =day_value;
            }

            function updateYear() {
                var new_year = document.getElementById('year_input');
                var year_value = new_year.options[new_year.selectedIndex].value;
                document.getElementById('year').innerHTML =year_value;
            }


            updateMonth();
            updateDay();
            updateYear();
    </script>

    <script>
        // document.getElementById('month').addEventListener('onchange', newDate())
        // document.getElementById('day').addElementListener('onchange',theDay())
        // document.getElementById('year').addElementListener('onchange',theYear())
        
        // function newDate() {
        //     document.getElementById('date').innerHTML = month + '/' + day + '/' + year;

        //     var new_month = document.getElementById('month').value;
        //     var new_day = document.getElementById('day').value;
        //     var new_year = document.getElementById('year').value;
        //     if (month != new_month) {
        //         console.log('hello');
        //     }
        //     document.getElementById('date').innerHTML = new_month + '/' + day + '/' + year;
        //     document.getElementById('date').innerHTML = new_month + '/' + new_day + '/' + year;
        //     document.getElementById('date').innerHTML = new_month + '/' + new_day + '/' + new_year;
        // }

        // function theDay() {
        //     var new_day = document.getElementById('day').value;
        //     document.getElementById('date').innerHTML = month + '/' + new_day + '/' + year;
        // }

        // function theYear() {
        //     var year = document.getElementById('year').value;
        //     document.getElementById('date').innerHTML = month + '/' + day + '/' + year;
        // }
    </script>

</html>