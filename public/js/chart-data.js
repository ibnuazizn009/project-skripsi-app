const ctx = document.getElementById('myChart').getContext("2d");


const data = {
  labels: _ydataJurusan,
  datasets: [{
    label: 'Wisudawan Berdasarkan Jurusan',
    backgroundColor: "rgba(189, 229, 253, 0.8)",
    data: _xdataJurusan,
    borderWidth: 1
  }]
};

const data2 = {
  labels: _ydataFakultas,
  datasets: [{
    label: 'Wisudawan Berdasarkan Fakultas',
    data: _xdataFakultas,
    borderWidth: 1
  }]
};

const data3 = {
  labels: _ydataJurusan_S2,
  datasets: [{
    label: 'Wisudawan Berdasarkan Jurusan',
    backgroundColor: "rgba(110, 177, 245, 0.58)",
    data: _xdataJurusan_S2,
    borderWidth: 1
  }]
};

const config = {
  type: 'bar',
  data,
  options: {
    // maintainAspectRatio: true,
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
}

const config2 = {
  type: 'pie',
  data: data2,
  options: {
    // maintainAspectRatio: true,
    plugins: {
      labels: {
        fontSize: 18,
        precision: 1,
        textAlign: 'left'
      },
      legend: {
        position: 'right',
        rtl: true
      }
    }
  }
}

const config3 = {
  type: 'bar',
  data: data3,
  options: {
    
    responsive: true,
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
  // console.log(type.value);
  myChart.destroy();
  if (type.value === 'jurusan_s1') {
      myChart = new Chart(
          ctx,
          config
      );                
  }

  if (type.value === 'jurusan_s2') {
    myChart = new Chart(
        ctx,
        config3
    );                
  }

  if (type.value === 'fakultas') {
      myChart = new Chart(
          document.getElementById('pieChart'),
          config2
      );                
  }
}

console.log
// new Chart(ctx, {
//   type: 'pie',
//   data: {
//     labels: _ydataFakultas,
//     datasets: [{
//       label: 'Jumlah Mahasiswa',
//       data: _xdataFakultas,
//       borderWidth: 1
//     }]
//   },
//   options: {
//     plugins: {
//       labels: {
//         fontSize: 18,
//         precision: 1,
//         textAlign: 'left'
//       },
//       legend: {
//         position: 'right',
//         rtl: true
//       }
//     }
//   }
// });