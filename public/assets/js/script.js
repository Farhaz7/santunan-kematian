const terimaButton = document.getElementById("terimaButton");
const perbaikanButton = document.getElementById("perbaikanButton");
const tolakButton = document.getElementById("tolakButton");
const buttonContainer = document.querySelector(".button-container");

//  terimaButton.addEventListener("click", function() {
//     // Menghapus tombol yang ada
//     buttonContainer.removeChild(terimaButton);
//     buttonContainer.removeChild(perbaikanButton);
//     buttonContainer.removeChild(tolakButton);

//     // Membuat tombol baru "Berkas Diterima"
//     const diterimaButton = document.createElement("button");
//     diterimaButton.textContent = "Berkas Diterima";
//     diterimaButton.classList.add("btn", "btn-success");
//     buttonContainer.appendChild(diterimaButton);
// });

// perbaikanButton.addEventListener("click", function() {
//     // Menghapus tombol yang ada
//     buttonContainer.removeChild(terimaButton);
//     buttonContainer.removeChild(perbaikanButton);
//     buttonContainer.removeChild(tolakButton);

//     // Membuat tombol baru "Berkas Diperbaiki"
//     const diperbaikiButton = document.createElement("button");
//     diperbaikiButton.textContent = "Berkas Diperbaiki";
//     diperbaikiButton.classList.add("btn", "btn-warning");
//     buttonContainer.appendChild(diperbaikiButton);
// });

// tolakButton.addEventListener("click", function() {
//     // Menghapus tombol yang ada
//     buttonContainer.removeChild(terimaButton);
//     buttonContainer.removeChild(perbaikanButton);
//     buttonContainer.removeChild(tolakButton);

//     // Membuat tombol baru "Berkas Ditolak"
//     const ditolakButton = document.createElement("button");
//     ditolakButton.textContent = "Berkas Ditolak";
//     ditolakButton.classList.add("btn", "btn-danger");
//     buttonContainer.appendChild(ditolakButton);
// });


// // Menambahkan event listener ke tabel
// document.addEventListener('click', function(event) {
//     const clickedElement = event.target;

//     // Memeriksa apakah elemen yang diklik adalah tombol "Terima", "Perbaikan", atau "Tolak"
//     if (clickedElement.matches('#terimaButton')) {
//         // Logika untuk tombol "Terima"
//         console.log('Tombol "Terima" ditekan.');
//     } else if (clickedElement.matches('#perbaikanButton')) {
//         // Logika untuk tombol "Perbaikan"
//         console.log('Tombol "Perbaikan" ditekan.');
//     } else if (clickedElement.matches('#tolakButton')) {
//         // Logika untuk tombol "Tolak"
//         console.log('Tombol "Tolak" ditekan.');
//     }
// });
