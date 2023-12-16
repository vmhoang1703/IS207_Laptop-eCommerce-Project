// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

$(document).ready(function () {
    $.ajax({
        url: "/api/get-total-products-data-by-category",
        method: "GET",
        success: function (response) {
            var totalProductsChart = new Chart(
                document.getElementById("totalProductsChart"),
                {
                    type: "bar",
                    data: {
                        labels: response.labels,
                        datasets: [
                            {
                                label: "Total Products",
                                data: response.counts,
                                backgroundColor: "#4e73df",
                                hoverBackgroundColor: "#2e59d9",
                                borderColor: "rgba(234, 236, 244, 1)",
                                borderWidth: 1, // Add border width for clarity
                            },
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [
                                {
                                    gridLines: {
                                        display: true,
                                    },
                                    ticks: {
                                        maxTicksLimit: 10,
                                    },
                                },
                            ],
                            yAxes: [
                                {
                                    ticks: {
                                        beginAtZero: true,
                                        stepSize: 1,
                                    },
                                    gridLines: {
                                        color: "rgba(0, 0, 0, .125)",
                                    },
                                },
                            ],
                        },
                        legend: {
                            display: true,
                            position: "top",
                        },
                        tooltips: {
                            titleMarginBottom: 10,
                            titleFontColor: "#6e707e",
                            titleFontSize: 14,
                            backgroundColor: "rgb(255,255,255)",
                            bodyFontColor: "#858796",
                            borderColor: "#dddfeb",
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            caretPadding: 10,
                            callbacks: {
                                label: function (tooltipItem, chart) {
                                    return (
                                        chart.datasets[tooltipItem.datasetIndex]
                                            .label +
                                        ": " +
                                        tooltipItem.yLabel
                                    );
                                },
                            },
                        },
                    },
                }
            );
        },
        error: function (error) {
            console.log(error);
        },
    });

    $.ajax({
        url: "/api/get-customer-registration-data",
        method: "GET",
        success: function (response) {
            var customerRegistrationChart = new Chart(
                document.getElementById("customerRegistrationChart"),
                {
                    type: "line",
                    data: {
                        labels: response.labels,
                        datasets: [
                            {
                                label: "Customer Registration",
                                borderColor: "#4e73df",
                                backgroundColor: "rgba(78, 115, 223, 0.05)",
                                data: response.counts,
                                pointRadius: 5,
                                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                pointBorderColor: "rgba(78, 115, 223, 1)",
                                pointHoverRadius: 5,
                                pointHoverBackgroundColor:
                                    "rgba(78, 115, 223, 1)",
                                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                pointHitRadius: 20,
                                pointBorderWidth: 2,
                            },
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        layout: {
                            padding: {
                                left: 10,
                                right: 25,
                                top: 25,
                                bottom: 0,
                            },
                        },
                        scales: {
                            xAxes: [
                                {
                                    time: {
                                        unit: "day",
                                    },
                                    gridLines: {
                                        display: false,
                                        drawBorder: false,
                                    },
                                    ticks: {
                                        maxTicksLimit: 7,
                                    },
                                    maxBarThickness: 25,
                                },
                            ],
                            yAxes: [
                                {
                                    ticks: {
                                        min: 0,
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        // Include a dollar sign in the ticks
                                        callback: function (
                                            value,
                                            index,
                                            values
                                        ) {
                                            return value;
                                        },
                                    },
                                    gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: false,
                                        borderDash: [2],
                                        zeroLineBorderDash: [2],
                                    },
                                },
                            ],
                        },
                        legend: {
                            display: false,
                        },
                        tooltips: {
                            titleMarginBottom: 10,
                            titleFontColor: "#6e707e",
                            titleFontSize: 14,
                            backgroundColor: "rgb(255,255,255)",
                            bodyFontColor: "#858796",
                            borderColor: "#dddfeb",
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            caretPadding: 10,
                            callbacks: {
                                label: function (tooltipItem, chart) {
                                    var datasetLabel =
                                        chart.datasets[tooltipItem.datasetIndex]
                                            .label || "";
                                    return (
                                        datasetLabel + ": " + tooltipItem.yLabel
                                    );
                                },
                            },
                        },
                    },
                }
            );
        },
        error: function (error) {
            console.log(error);
        },
    });

    $.ajax({
        url: "/api/get-customer-knownFrom-data",
        method: "GET",
        success: function (response) {
            var knownFromChart = new Chart(
                document.getElementById("knownFromChart"),
                {
                    type: "doughnut",
                    data: {
                        labels: response.labels,
                        datasets: [
                            {
                                data: response.counts,
                                backgroundColor: [
                                    "#4e73df",
                                    "#1cc88a",
                                    "#36b9cc",
                                ], // Thay đổi màu sắc nếu cần
                                hoverBackgroundColor: [
                                    "#2e59d9",
                                    "#17a673",
                                    "#2c9faf",
                                ],
                                hoverBorderColor: "rgba(234, 236, 244, 1)",
                            },
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        tooltips: {
                            backgroundColor: "rgb(255,255,255)",
                            bodyFontColor: "#858796",
                            borderColor: "#dddfeb",
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            caretPadding: 10,
                        },
                        legend: {
                            display: false,
                        },
                        cutoutPercentage: 80,
                    },
                }
            );
        },
        error: function (error) {
            console.log(error);
        },
    });

    $.ajax({
        url: "/api/get-employee-chart-data",
        method: "GET",
        success: function (response) {
            // Biểu đồ cột thống kê số lượng nhân viên theo vai trò
            var roleChart = new Chart(document.getElementById("roleChart"), {
                type: "bar",
                data: {
                    labels: [
                        "Admin",
                        "Manager",
                        "Products Manager",
                        "Sales",
                        "Accounting",
                        "Marketing",
                    ],
                    datasets: [
                        {
                            label: "Number",
                            data: [
                                response.adminData,
                                response.managerData,
                                response.productsManagerData,
                                response.salesData,
                                response.accountingData,
                                response.marketingData,
                            ],
                            backgroundColor: [
                                "#4e73df",
                                "#1cc88a",
                                "#36b9cc",
                                "#f6c23e",
                                "#e74a3b",
                                "#858796",
                            ],
                            hoverBackgroundColor: [
                                "#2e59d9",
                                "#17a673",
                                "#2c9faf",
                                "#dda20a",
                                "#c73c30",
                                "#6e707e",
                            ],
                            hoverBorderColor: "rgba(234, 236, 244, 1)",
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        xAxes: [
                            {
                                gridLines: {
                                    display: true,
                                },
                            },
                        ],
                        yAxes: [
                            {
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 1,
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, .125)",
                                },
                            },
                        ],
                    },
                    legend: {
                        display: false,
                    },
                    tooltips: {
                        titleMarginBottom: 10,
                        titleFontColor: "#6e707e",
                        titleFontSize: 14,
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: "#dddfeb",
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                        callbacks: {
                            label: function (tooltipItem, chart) {
                                var datasetLabel =
                                    chart.datasets[tooltipItem.datasetIndex]
                                        .label || "";
                                return datasetLabel + ": " + tooltipItem.yLabel;
                            },
                        },
                    },
                },
            });

            // Biểu đồ tròn thống kê số lượng nhân viên theo phòng ban
            var departmentChart = new Chart(
                document.getElementById("departmentChart"),
                {
                    type: "doughnut",
                    data: {
                        labels: Object.keys(response.departmentData),
                        datasets: [
                            {
                                data: Object.values(response.departmentData),
                                backgroundColor: [
                                    "#4e73df",
                                    "#1cc88a",
                                    "#36b9cc",
                                    "#ffa07a",
                                    "#9370db",
                                ],
                                hoverBackgroundColor: [
                                    "#2e59d9",
                                    "#17a673",
                                    "#2c9faf",
                                    "#ff4500",
                                    "#6a5acd",
                                ],
                                hoverBorderColor: "rgba(234, 236, 244, 1)",
                            },
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        tooltips: {
                            backgroundColor: "rgb(255,255,255)",
                            bodyFontColor: "#858796",
                            borderColor: "#dddfeb",
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            caretPadding: 10,
                        },
                        legend: {
                            display: false,
                        },
                        cutoutPercentage: 80,
                    },
                }
            );

            // Biểu đồ tròn thống kê số lượng nhân viên theo vị trí
            var positionChart = new Chart(
                document.getElementById("positionChart"),
                {
                    type: "doughnut",
                    data: {
                        labels: Object.keys(response.positionData),
                        datasets: [
                            {
                                data: Object.values(response.positionData),
                                backgroundColor: [
                                    "#4e73df",
                                    "#1cc88a",
                                    "#36b9cc",
                                    "#ffa07a",
                                    "#9370db",
                                ],
                                hoverBackgroundColor: [
                                    "#2e59d9",
                                    "#17a673",
                                    "#2c9faf",
                                    "#ff4500",
                                    "#6a5acd",
                                ],
                                hoverBorderColor: "rgba(234, 236, 244, 1)",
                            },
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        tooltips: {
                            backgroundColor: "rgb(255,255,255)",
                            bodyFontColor: "#858796",
                            borderColor: "#dddfeb",
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            caretPadding: 10,
                        },
                        legend: {
                            display: false,
                        },
                        cutoutPercentage: 80,
                    },
                }
            );

            // Biểu đồ cột thống kê lương trung bình
            var averageSalaryChart = new Chart(
                document.getElementById("averageSalaryChart"),
                {
                    type: "bar",
                    data: {
                        labels: ["Average Salary"],
                        datasets: [
                            {
                                label: "Average Salary",
                                data: [response.averageSalary],
                                backgroundColor: ["#4e73df"],
                                hoverBackgroundColor: ["#2e59d9"],
                                hoverBorderColor: "rgba(234, 236, 244, 1)",
                            },
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [
                                {
                                    ticks: {
                                        beginAtZero: true,
                                    },
                                },
                            ],
                        },
                    },
                }
            );

            // Biểu đồ cột thống kê số lượng nhân viên theo năm tuyển dụng
            var hireDateChart = new Chart(
                document.getElementById("hireDateChart"),
                {
                    type: "bar",
                    data: {
                        labels: response.hireDateData.map((data) => data.year),
                        datasets: [
                            {
                                label: "Number of Employees",
                                data: response.hireDateData.map(
                                    (data) => data.count
                                ),
                                backgroundColor: [
                                    "#4e73df",
                                    "#1cc88a",
                                    "#36b9cc",
                                    "#ffa07a",
                                    "#9370db",
                                ],
                                hoverBackgroundColor: [
                                    "#2e59d9",
                                    "#17a673",
                                    "#2c9faf",
                                    "#ff4500",
                                    "#6a5acd",
                                ],
                                hoverBorderColor: "rgba(234, 236, 244, 1)",
                            },
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [
                                {
                                    time: {
                                        unit: "year",
                                    },
                                    gridLines: {
                                        display: false,
                                    },
                                },
                            ],
                            yAxes: [
                                {
                                    ticks: {
                                        beginAtZero: true,
                                    },
                                },
                            ],
                        },
                    },
                }
            );
        },
        error: function (error) {
            console.log(error);
        },
    });

    $.ajax({
        url: "/api/get-revenue-data",
        method: "GET",
        success: function (response) {
            // Get the canvas element
            var ctx = document.getElementById("revenueChart").getContext("2d");

            // Create the revenue chart
            var revenueChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: response.labels,
                    datasets: [
                        {
                            label: "Revenue",
                            borderColor: "#4e73df",
                            backgroundColor: "rgba(78, 115, 223, 0.05)",
                            data: response.revenue,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointBorderColor: "rgba(78, 115, 223, 1)",
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                            pointHitRadius: 20,
                            pointBorderWidth: 2,
                        },
                    ],
                },
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        xAxes: [
                            {
                                gridLines: {
                                    display: false,
                                },
                                ticks: {
                                    maxTicksLimit: 10,
                                },
                            },
                        ],
                        yAxes: [
                            {
                                ticks: {
                                    beginAtZero: true,
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, .125)",
                                },
                            },
                        ],
                    },
                    legend: {
                        display: true,
                        position: "top",
                    },
                    tooltips: {
                        titleMarginBottom: 10,
                        titleFontColor: "#6e707e",
                        titleFontSize: 14,
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: "#dddfeb",
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                        callbacks: {
                            label: function (tooltipItem, chart) {
                                return (
                                    "Revenue: $" + tooltipItem.yLabel.toFixed(2)
                                );
                            },
                        },
                    },
                },
            });
        },
        error: function (error) {
            console.log(error);
        },
    });

    //Dashboard
    $.ajax({
        url: "/api/get-earnings-overview-data",
        method: "GET",
        success: function (response) {
            // Initialize Chart.js
            var ctx = document.getElementById("myAreaChart").getContext("2d");
            var myAreaChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: response.labels,
                    datasets: [
                        {
                            label: "Earnings Overview",
                            borderColor: "#4e73df",
                            backgroundColor: "rgba(78, 115, 223, 0.05)",
                            data: response.earnings,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointBorderColor: "rgba(78, 115, 223, 1)",
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                            pointHitRadius: 20,
                            pointBorderWidth: 2,
                        },
                    ],
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 25,
                            bottom: 0,
                        },
                    },
                    scales: {
                        xAxes: [
                            {
                                time: {
                                    unit: "month",
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                },
                                ticks: {
                                    maxTicksLimit: 12,
                                },
                                maxBarThickness: 25,
                            },
                        ],
                        yAxes: [
                            {
                                ticks: {
                                    min: 0,
                                    maxTicksLimit: 5,
                                    padding: 10,
                                    callback: function (value, index, values) {
                                        return "$" + value;
                                    },
                                },
                                gridLines: {
                                    color: "rgb(234, 236, 244)",
                                    zeroLineColor: "rgb(234, 236, 244)",
                                    drawBorder: false,
                                    borderDash: [2],
                                    zeroLineBorderDash: [2],
                                },
                            },
                        ],
                    },
                    legend: {
                        display: false,
                    },
                    tooltips: {
                        titleMarginBottom: 10,
                        titleFontColor: "#6e707e",
                        titleFontSize: 14,
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: "#dddfeb",
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                        callbacks: {
                            label: function (tooltipItem, chart) {
                                var datasetLabel =
                                    chart.datasets[tooltipItem.datasetIndex]
                                        .label || "";
                                return (
                                    datasetLabel +
                                    ": $" +
                                    tooltipItem.yLabel.toFixed(2)
                                );
                            },
                        },
                    },
                },
            });
        },
        error: function (error) {
            console.log(error);
        },
    });
});
