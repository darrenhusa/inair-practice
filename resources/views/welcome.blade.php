<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inair practice</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>
    <h1>Hello INAIR!!!</h1>

    <h1>Testing Vue 2</h1>
    <div id="app">
        <p>@{{ message }}</p>

        <example-component url="/fig05"></example-component>

        <h2>Stacked Column Chart from Vue SFC</h2>
        <stacked-column-chart 
            title="My Great Chart" 
            v-bind:categories="['Fords', 'Nissans', 'BMWs', 'Toyotos', 'Chevies']">
        </stacked-column-chart>
    </div>

    <h2>Stacked Column chart</h2>
    <div id="container">

    </div>


    <h2>Line chart</h2>
    <div id="container2">

    </div>
    <script src="js/line-chart.js"></script>
    <script src="js/stacked-column-chart.js"></script>    
    <!-- <script src="node_modules/vue/dist/vue.js"></script> -->
    <!-- <script src="../node_modules/vue/dist/vue.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> -->
    <!-- <script src="js/main.js"></script> -->
    <script src="js/app.js"></script>
</body>
</html>