// let categories = document.querySelector("#categories")
// let categGraph = new Chart(categories, {
//     type: "pie",
//     data: {
//         labels: {{ categNom|raw }},
// datasets: [{
//     label: "Répartition des catégories",
//     data: {{ categCount|raw }},
// backgroundColor: {{ categColor|raw }}
// }]
// }
// })
//
// let feedbacks = document.querySelector("#feedbacks")
// let annGraph = new Chart(feedbacks, {
//     type: "line",
//     data: {
//         labels: {{ dates|raw }},
// datasets: [{
//     label: "Nombre de feedback",
//     data: {{ feedbackCount|raw }}
// }]
// },
// options: {
//     scales: {
//         yAxes: [{
//             ticks: {
//                 beginAtZero: true
//             }
//         }]
//     }
// }
// })