var major1 = document.getElementById('major1').dataset.value;
var major2 = document.getElementById('major2').dataset.value;
var major3 = document.getElementById('major3').dataset.value;
var major1_percent = document.getElementById('major1-percent').dataset.value;
var major2_percent = document.getElementById('major2-percent').dataset.value;
var major3_percent = document.getElementById('major3-percent').dataset.value;
var major4_percent = 100 - (parseInt( major1_percent) + parseInt( major2_percent) + parseInt( major3_percent));

var options = {
    type: 'doughnut',
    data: {
    labels: [ major1, major2, major3, 'Lainnya'],
    datasets: [{
        label: 'Persentase Kecocokan',
        data: [major1_percent, major2_percent, major3_percent, major4_percent],
        backgroundColor: ["#001F5D", "#6282C2", "#2D72FE", "#27CBFF"],
        borderWidth: 1
    }]
    },
    options: {
    plugins: {
        legend: {
            display: true,
            maxWidth: 210,
            position: 'right',
            title : {
                display: true,
                text: "Jurusan",
                padding: 5
            },
            labels : {
                padding: 20
            }
        },
        tooltip: {
            callbacks: {
                label: function(context) {
                    let label = context.dataset.label || '';
                    const index = context.dataIndex;
                    const value = context.dataset.data[index];

                    label += ": " + value + "%"
                    return label;
                }
              }
            }
        },
    }
}

var ctx =document.getElementById('myChart');
var chart = new Chart(ctx, options);
