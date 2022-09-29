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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
            <label for="month">Month:</label>
            <select clas="input_field" id="month_input" name="month" onchange="updateMonth()">
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
            <select clas="input_field" id="day_input" name="day" onchange="updateDay()">
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
            <select clas="input_field" id="year_input" name="year" onchange="updateYear()">
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
                <option value="2034">2034</option>
                <option value="2035">2035</option>
                <option value="2036">2036</option>
                <option value="2037">2037</option>
                <option value="2038">2038</option>
                <option value="2039">2039</option>
                <option value="2040">2040</option>
                <option value="2041">2041</option>
                <option value="2042">2042</option>
                <option value="2043">2043</option>
                <option value="2044">2044</option>
                <option value="2045">2045</option>
                <option value="2046">2046</option>
                <option value="2047">2047</option>
                <option value="2048">2048</option>
                <option value="2049">2049</option>
                <option value="2050">2050</option>
                <option value="2051">2051</option>
                <option value="2052">2052</option>
                <option value="2053">2053</option>
                <option value="2054">2054</option>
                <option value="2055">2055</option>
                <option value="2056">2056</option>
                <option value="2057">2057</option>
                <option value="2058">2058</option>
                <option value="2059">2059</option>
                <option value="2060">2060</option>
                <option value="2061">2061</option>
                <option value="2062">2062</option>
            </select>

        <h3> <span id="month"></span> / <span id="day"></span> / <span id="year"> </span> </span> is <span id="months_future"> 0 </span> month(s) <span id="days_future"> 0 </span> day(s) <span id="years_future"> 0 </span> year(s) away </h3>

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

        todays_date = month + ' ' + day + ' ' + year;

        // var todays_date = month + '/' + day + '/' + year;

        var new_year = document.getElementById('year_input');


        localStorage.setItem('Month', month)
        var test_month = localStorage.getItem('Month')
        document.getElementById('month').innerHTML = test_month;
        

            function updateMonth() {
                localStorage.setItem('Month', month)
                var test_month = localStorage.getItem('Month') // Local storage variable
                
                var new_month = document.getElementById('month_input'); // getting input 
                var month_value = new_month.options[new_month.selectedIndex].value; // getting input

                // Test Code
                // var current_month = month;

                // var month_until = month_value - month;
                // var future_month = +month_value + +3;
                // document.getElementById('month').innerHTML = test_month;
                
                // if (month_value = current_month) {
                //     if (month_until >= 0) {
                //         document.getElementById('months_future').innerHTML = month_until;
                //     } else {
                //         document.getElementById('months_future').innerHTML = future_month;
                //     }
                // }


                // Test Code

                document.getElementById('month').innerHTML = month_value;
                
                var month_until = month_value - month;
                var future_month = +month_value + +3;

                if (month_until >= 0) {
                    console.log(month_until)
                    document.getElementById('months_future').innerHTML = month_until;
                } else {
                    console.log(future_month)
                    document.getElementById('months_future').innerHTML = future_month;
                }
            }

            function updateDay() {
                var new_day = document.getElementById('day_input');
                var day_value = new_day.options[new_day.selectedIndex].value;
                document.getElementById('day').innerHTML = day_value;
                var day_until = day_value - day;
                var future_day = +day_value + 1;
                if (day_until >= 0) {
                    document.getElementById('days_future').innerHTML = day_until;
                } else {
                    document.getElementById('days_future').innerHTML = future_day;
                }
            }

            function updateYear() {
                var new_year = document.getElementById('year_input');
                var year_value = new_year.options[new_year.selectedIndex].value;
                document.getElementById('year').innerHTML =year_value;
                var year_until = year_value - year;
                if (year_until >= 0) {
                    document.getElementById('years_future').innerHTML = year_until;
                }
            }

            updateMonth();
            updateDay();
            updateYear();
            // dateIntoFuture();

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