// Data untuk Doughnut Chart
var tipsData = [30, 10, 10, 10, 5, 5, 5, 5, 5, 5, 5, 5, 5];

// Warna untuk setiap bagian Doughnut Chart
var tipsColors = [
  '#FF6384', '#FF9F40', '#FFCD56', '#4BC0C0', '#36A2EB', '#9966FF',
  '#FF6384', '#FF9F40', '#FFCD56', '#4BC0C0', '#36A2EB', '#9966FF', '#4CAF50'
];

// Inisialisasi Doughnut Chart
var ctx = document.getElementById('tipsChart').getContext('2d');
var tipsChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Protein', 'Fosfor', 'Kalium', 'Sodium', 'Cairan', 'Karbohidrat', 'Makanan Olahan', 'Porsi Makan', 'Energi', 'Air', 'Suplemen', 'Kafein', 'Ahli Gizi'],
    datasets: [{
      data: tipsData,
      backgroundColor: tipsColors,
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      display: false
    },
  }
});
