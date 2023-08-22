const ctx = document.getElementById('myChart');

Chart.defaults.font.size = 10;
const jurusan_labels = _ydataJurusan;
const data = {
  labels: jurusan_labels,
  datasets: [{
    label: 'Memuaskan',
    data: _xdataJurusan_memuaskan,
    backgroundColor: "rgba(124, 192, 255, 0.8)",
    borderColor: "rgba(124, 192, 255, 0.8)",
    borderWidth: 1
  },{
    label: 'Cukup',
    data: _xdataJurusan_cukup,
    backgroundColor: "rgba(253, 76, 95, 0.8)",
    borderColor: "rgba(253, 76, 95, 0.8)",
    borderWidth: 1
  }]
};

const config = {
    type: 'bar',
    data,
    options: {
      plugins: {
        legend: {
            labels: {
                // This more specific font property overrides the global property
                font: {
                    size: 13
                }
            }
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
}

let myChart = new Chart (
    ctx,
    config
)
  
function renderChart(type) {
    console.log(type.value);
    const fakultas_labels = _ydataFakultas;
    const jumlah_memuaskan_fakultas = _xdataFakultas_memuaskan;
    const jumlah_cukup_fakultas = _xdataFakultas_cukup;

    const jurusan_labels = _ydataJurusan;
    const jumlah_memuaskan_jurusan = _xdataJurusan_memuaskan;
    const jumlah_cukup_jurusan = _xdataJurusan_cukup;

    if(type === 'x_axis'){
      myChart.data.labels = jurusan_labels;
      myChart.data.datasets[0].data = jumlah_memuaskan_jurusan;
      myChart.data.datasets[1].data = jumlah_cukup_jurusan;

    }
    if(type === 'z_axis'){
      myChart.data.labels = fakultas_labels;
      myChart.data.datasets[0].data = jumlah_memuaskan_fakultas;
      myChart.data.datasets[1].data = jumlah_cukup_fakultas;
    }
    myChart.update();
}
