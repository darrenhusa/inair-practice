<template>
    <div id="container"></div>
</template>

<script>
// import Highcharts from 'highcharts';
// import Exporting from 'highcharts/modules/exporting';
// Exporting(Highcharts);

export default {
    name : "StackedColumnChartAlt",

    props: ['title', 'categories'],
  
    mounted() {
      console.log('inside mounted hook')
      console.log(this.categories);

      Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: this.title,
    },
    xAxis: {
        categories: this.categories,
        // categories: ['Fords', 'Nissans', 'BMWs', 'Toyotos', 'Chevies']
        // categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']

    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total fruit consumption'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'John',
        data: [5, 3, 4, 7, 2]
    }, {
        name: 'Jane',
        data: [2, 2, 3, 2, 1]
    }, {
        name: 'Joe',
        data: [3, 4, 4, 2, 5]
    }]
  });
  },
//   beforeDestroy: function() {
//     this.target.destroy();
//   },
} // end export default

</script>