// // Get the table element
// const table = document.querySelector('table');

// // Get all table headers
// const headers = document.querySelectorAll('th');

// // Add click event listeners to each header
// headers.forEach((header, index) => {
//     header.addEventListener('click', () => {
//         const rows = Array.from(table.querySelectorAll('tr'));

//         rows.sort((a, b) => {
//             const aText = a.querySelectorAll('td')[index].innerText;
//             const bText = b.querySelectorAll('td')[index].innerText;

//             return aText.localeCompare(bText);
//         });

//         // Remove existing rows
//         rows.forEach(row => table.removeChild(row));

//         // Re-append sorted rows
//         rows.forEach(row => table.appendChild(row));
//     });
// });