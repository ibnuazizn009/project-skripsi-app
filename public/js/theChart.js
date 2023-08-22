// var cData = JSON.parse(`<?php echo $chart_data; ?>`);
const ctx = document.getElementById('myChart');

const data = {
  labels: _ydataMah,
  datasets: [{
    label: 'Mahasiswa',
    data: _xdataMah,
    backgroundColor: 'green',
    borderColor: 'green',
    borderWidth: 1
  }]
};

const data2 = {
  labels: _ydataFak,
  datasets: [{
    label: 'Fakultas',
    data: _xdataFak,
    backgroundColor: 'yellow',
    borderColor: 'yellow',
    borderWidth: 1
  }]
};

const data3 = {
  labels: _ydataJur,
  datasets: [{
    label: 'Jurusan',
    data: _xdataJur,
    backgroundColor: 'red',
    borderColor: 'red',
    borderWidth: 1
  }]
};

const config = {
  type: 'bar',
  data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
}

const config2 = {
  type: 'bar',
  data: data2,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
}

const config3 = {
  type: 'bar',
  data: data3,
  options: {
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

console.log(ctx);
console.log(myChart);

function renderChart(type) {
  console.log(type.value);
  myChart.destroy();
  if (type.value === 'mahasiswa') {
      myChart = new Chart(
          ctx,
          config
      );                
  }
  if (type.value === 'fakultas') {
      myChart = new Chart(
          document.getElementById('myChart'),
          config2
      );                
  }
  if (type.value === 'jurusan') {
    myChart = new Chart(
        document.getElementById('myChart'),
        config3
    );                
}
}
