// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

$.ajax({
    url: '/api/get-total-products-data-by-category',
    method: 'GET',
    success: function(response) {
        var totalProductsChart = new Chart(document.getElementById("totalProductsChart"), {
            type: 'bar',
            data: {
                labels: response.labels,
                datasets: [{
                    label: 'Total Products',
                    data: response.counts,
                    backgroundColor: '#4e73df',
                    hoverBackgroundColor: '#2e59d9',
                    borderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
            },
        });
    },
    error: function(error) {
        console.log(error);
    }
});

$.ajax({
  url: '/api/get-customer-registration-data',
  method: 'GET',
  success: function(response) {
      var customerRegistrationChart = new Chart(document.getElementById("customerRegistrationChart"), {
          type: 'line',
          data: {
              labels: response.labels,
              datasets: [{
                  label: 'Customer Registration',
                  borderColor: '#4e73df',
                  backgroundColor: 'rgba(78, 115, 223, 0.05)',
                  data: response.counts,
                  pointRadius: 5,
                  pointBackgroundColor: 'rgba(78, 115, 223, 1)',
                  pointBorderColor: 'rgba(78, 115, 223, 1)',
                  pointHoverRadius: 5,
                  pointHoverBackgroundColor: 'rgba(78, 115, 223, 1)',
                  pointHoverBorderColor: 'rgba(78, 115, 223, 1)',
                  pointHitRadius: 20,
                  pointBorderWidth: 2,
              }],
          },
          options: {
              maintainAspectRatio: false,
              layout: {
                  padding: {
                      left: 10,
                      right: 25,
                      top: 25,
                      bottom: 0
                  }
              },
              scales: {
                  xAxes: [{
                      time: {
                          unit: 'day',
                      },
                      gridLines: {
                          display: false,
                          drawBorder: false
                      },
                      ticks: {
                          maxTicksLimit: 7
                      },
                      maxBarThickness: 25,
                  }],
                  yAxes: [{
                      ticks: {
                          min: 0,
                          maxTicksLimit: 5,
                          padding: 10,
                          // Include a dollar sign in the ticks
                          callback: function(value, index, values) {
                              return value;
                          }
                      },
                      gridLines: {
                          color: "rgb(234, 236, 244)",
                          zeroLineColor: "rgb(234, 236, 244)",
                          drawBorder: false,
                          borderDash: [2],
                          zeroLineBorderDash: [2]
                      }
                  }],
              },
              legend: {
                  display: false
              },
              tooltips: {
                  titleMarginBottom: 10,
                  titleFontColor: '#6e707e',
                  titleFontSize: 14,
                  backgroundColor: "rgb(255,255,255)",
                  bodyFontColor: "#858796",
                  borderColor: '#dddfeb',
                  borderWidth: 1,
                  xPadding: 15,
                  yPadding: 15,
                  displayColors: false,
                  caretPadding: 10,
                  callbacks: {
                      label: function(tooltipItem, chart) {
                          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                          return datasetLabel + ': ' + tooltipItem.yLabel;
                      }
                  }
              },
          },
      });
  },
  error: function(error) {
      console.log(error);
  }
});

$.ajax({
    url: '/api/get-customer-knownFrom-data',
    method: 'GET',
    success: function(response) {
        var knownFromChart = new Chart(document.getElementById("knownFromChart"), {
            type: 'doughnut',
            data: {
                labels: response.labels,
                datasets: [{
                    data: response.counts,
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'], // Thay đổi màu sắc nếu cần
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });
    },
    error: function(error) {
        console.log(error);
    }
});

$.ajax({
    url: '/api/get-employee-chart-data',
    method: 'GET',
    success: function(response) {
        // Biểu đồ cột thống kê số lượng nhân viên theo vai trò
        var roleChart = new Chart(document.getElementById("roleChart"), {
            type: 'bar',
            data: {
                labels: ['Employee', 'Moderator', 'Admin'],
                datasets: [{
                    label: 'Number of Employees',
                    data: [response.employeeData, response.moderatorData, response.adminData],
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
            },
        });

        // Biểu đồ tròn thống kê số lượng nhân viên theo phòng ban
        var departmentChart = new Chart(document.getElementById("departmentChart"), {
            type: 'doughnut',
            data: {
                labels: Object.keys(response.departmentData),
                datasets: [{
                    data: Object.values(response.departmentData),
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#ffa07a', '#9370db'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#ff4500', '#6a5acd'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });

        // Biểu đồ tròn thống kê số lượng nhân viên theo vị trí
        var positionChart = new Chart(document.getElementById("positionChart"), {
            type: 'doughnut',
            data: {
                labels: Object.keys(response.positionData),
                datasets: [{
                    data: Object.values(response.positionData),
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#ffa07a', '#9370db'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#ff4500', '#6a5acd'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });

        // Biểu đồ cột thống kê lương trung bình
        var averageSalaryChart = new Chart(document.getElementById("averageSalaryChart"), {
            type: 'bar',
            data: {
                labels: ['Average Salary'],
                datasets: [{
                    label: 'Average Salary',
                    data: [response.averageSalary],
                    backgroundColor: ['#4e73df'],
                    hoverBackgroundColor: ['#2e59d9'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }],
                },
            },
        });

        // Biểu đồ cột thống kê số lượng nhân viên theo năm tuyển dụng
        var hireDateChart = new Chart(document.getElementById("hireDateChart"), {
            type: 'bar',
            data: {
                labels: response.hireDateData.map(data => data.year),
                datasets: [{
                    label: 'Number of Employees',
                    data: response.hireDateData.map(data => data.count),
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#ffa07a', '#9370db'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#ff4500', '#6a5acd'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'year'
                        },
                        gridLines: {
                            display: false,
                        },
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }],
                },
            },
        });
    },
    error: function(error) {
        console.log(error);
    }
});
// // Set new default font family and font color to mimic Bootstrap's default styling
// Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = '#858796';

// function number_format(number, decimals, dec_point, thousands_sep) {
//   // *     example: number_format(1234.56, 2, ',', ' ');
//   // *     return: '1 234,56'
//   number = (number + '').replace(',', '').replace(' ', '');
//   var n = !isFinite(+number) ? 0 : +number,
//     prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
//     sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
//     dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
//     s = '',
//     toFixedFix = function(n, prec) {
//       var k = Math.pow(10, prec);
//       return '' + Math.round(n * k) / k;
//     };
//   // Fix for IE parseFloat(0.55).toFixed(0) = 0;
//   s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
//   if (s[0].length > 3) {
//     s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
//   }
//   if ((s[1] || '').length < prec) {
//     s[1] = s[1] || '';
//     s[1] += new Array(prec - s[1].length + 1).join('0');
//   }
//   return s.join(dec);
// }

// // Bar Chart Example
// var ctx = document.getElementById("totalProductsChart");
// var myBarChart = new Chart(ctx, {
//   type: 'bar',
//   data: {
//     labels: ["January", "February", "March", "April", "May", "June"],
//     datasets: [{
//       label: "Revenue",
//       backgroundColor: "#4e73df",
//       hoverBackgroundColor: "#2e59d9",
//       borderColor: "#4e73df",
//       data: [4215, 5312, 6251, 7841, 9821, 14984],
//     }],
//   },
//   options: {
//     maintainAspectRatio: false,
//     layout: {
//       padding: {
//         left: 10,
//         right: 25,
//         top: 25,
//         bottom: 0
//       }
//     },
//     scales: {
//       xAxes: [{
//         time: {
//           unit: 'month'
//         },
//         gridLines: {
//           display: false,
//           drawBorder: false
//         },
//         ticks: {
//           maxTicksLimit: 6
//         },
//         maxBarThickness: 25,
//       }],
//       yAxes: [{
//         ticks: {
//           min: 0,
//           max: 15000,
//           maxTicksLimit: 5,
//           padding: 10,
//           // Include a dollar sign in the ticks
//           callback: function(value, index, values) {
//             return '$' + number_format(value);
//           }
//         },
//         gridLines: {
//           color: "rgb(234, 236, 244)",
//           zeroLineColor: "rgb(234, 236, 244)",
//           drawBorder: false,
//           borderDash: [2],
//           zeroLineBorderDash: [2]
//         }
//       }],
//     },
//     legend: {
//       display: false
//     },
//     tooltips: {
//       titleMarginBottom: 10,
//       titleFontColor: '#6e707e',
//       titleFontSize: 14,
//       backgroundColor: "rgb(255,255,255)",
//       bodyFontColor: "#858796",
//       borderColor: '#dddfeb',
//       borderWidth: 1,
//       xPadding: 15,
//       yPadding: 15,
//       displayColors: false,
//       caretPadding: 10,
//       callbacks: {
//         label: function(tooltipItem, chart) {
//           var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
//           return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
//         }
//       }
//     },
//   }
// });
