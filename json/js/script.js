// let mahasiswa = {
//     nama: "Masred",
//     mrp: "234532454",
//     email: "jangkrik@mail.com"
// }

// console.log(JSON.stringify(mahasiswa));

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if (xhr.readyState == 4 && xhr.status == 200) {
//     let mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//   }
// };
// xhr.open("GET", "json/coba.json", true);
// xhr.send();

$.getJSON("json/coba.json", function (data) {
  console.log(data);
});
