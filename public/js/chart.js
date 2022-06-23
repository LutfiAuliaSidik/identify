  const labels = [
    'accuracy data',
    'accuracy image',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: '',
      backgroundColor: 'rgb(0, 134, 255)',
      borderColor: 'rgb(0, 134, 255, 0.1)',
      data: [100, 70],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

