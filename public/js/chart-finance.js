const ctx = document.getElementById("chart-finance");

const data = [100, 50, 100, 300, 400, 500, 600, 700, 800, 900];
new Chart(ctx, {
    type: "bar",
    data: {
        labels: [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ],
        datasets: [
            {
                label: "Penghasilan",
                data: data,
                borderWidth: 0,
                backgroundColor: "rgb(54, 162, 235)",
                borderColor: "rgba(75, 192, 192, 1)",
                hoverBackgroundColor: "rgba(75, 192, 192, 0.4)",
                hoverBorderColor: "rgba(75, 192, 192, 1)",
                borderRadius: {
                    topLeft: 10,
                    topRight: 10,
                    bottomLeft: 0,
                    bottomRight: 0,
                },
            },
        ],
    },
    options: {
        plugins: {
            legend: {
                display: false,
            },
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    display: true,
                },
                border: {
                    display: false,
                },
            },
            x: {
                grid: {
                    display: false,
                },
                border: {
                    display: false,
                },
            },
        },
        tooltips: {
            callbacks: {
                label: function (tooltipItem) {
                    return tooltipItem.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' Juta';
                }
            }
        }
    },
});
