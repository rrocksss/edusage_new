let tipe = '';
let wilayah = '';

function filterAll_Tipe() {
    var found, table, tr, td, i, j;
    tipe = "";
    table = document.getElementById("univDetails");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        if(wilayah == ''){
            for (j = 0; j < td.length; j++) {
                found = true;
            }
        }else{
            for (j = 0; j < td.length; j++) {
                if (td[j].textContent == wilayah) {
                    found = true;
                }
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}

function filterPTN_Tipe() {
    var found, table, tr, td, i, j;
    tipe = "PTN";
    table = document.getElementById("univDetails");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        if(wilayah == ''){
            for (j = 0; j < td.length; j++) {
                if (td[j].textContent == tipe) {
                    found = true;
                }
            }
        }else{
            for (j = 0; j < td.length; j++) {
                if (td[j].textContent == tipe && td[j-1].textContent == wilayah) {
                    found = true;
                }
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}

function filterPTS_Tipe() {
    var found, table, tr, td, i, j;
    tipe = "PTS";
    table = document.getElementById("univDetails");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        if(wilayah == ''){
            for (j = 0; j < td.length; j++) {
                if (td[j].textContent == tipe) {
                    found = true;
                }
            }
        }else{
            for (j = 0; j < td.length; j++) {
                // alert(td[j].textContent);
                if (td[j].textContent == tipe && td[j-1].textContent == wilayah) {
                    found = true;
                }
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}

function filterAll_Wilayah() {
    var found, table, tr, td, i, j;
    wilayah = "";
    table = document.getElementById("univDetails");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        if(tipe == ''){
            for (j = 0; j < td.length; j++) {
                found = true;
            }
        }else{
            for (j = 0; j < td.length; j++) {
                if (td[j].textContent == tipe) {
                    found = true;
                }
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
  }

function filterJakarta_Wilayah() {
    var found, table, tr, td, i, j;
    wilayah = "DKI Jakarta";
    table = document.getElementById("univDetails");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        if(tipe == ''){
            for (j = 0; j < td.length; j++) {
                if (td[j].textContent == wilayah) {
                    found = true;
                }
            }
        }else{
            for (j = 0; j < td.length; j++) {
                // alert(td[j].textContent);
                if (td[j].textContent == tipe && td[j-1].textContent == wilayah) {
                    found = true;
                }
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}

function filterJawaBarat_Wilayah() {
    var found, table, tr, td, i, j;
    wilayah = "Jawa Barat / Banten";
    table = document.getElementById("univDetails");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        if(tipe == ''){
            for (j = 0; j < td.length; j++) {
                if (td[j].textContent == wilayah) {
                    found = true;
                }
            }
        }else{
            for (j = 0; j < td.length; j++) {
                // alert(td[j].textContent);
                if (td[j].textContent == tipe && td[j-1].textContent == wilayah) {
                    found = true;
                }
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }}

function filterYogyakarta_Wilayah() {
    var found, table, tr, td, i, j;
    wilayah = "DI Yogyakarta";
    table = document.getElementById("univDetails");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        if(tipe == ''){
            for (j = 0; j < td.length; j++) {
                if (td[j].textContent == wilayah) {
                    found = true;
                }
            }
        }else{
            for (j = 0; j < td.length; j++) {
                // alert(td[j].textContent);
                if (td[j].textContent == tipe && td[j-1].textContent == wilayah) {
                    found = true;
                }
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }}

function filterJawaTengah_Wilayah() {
    var found, table, tr, td, i, j;
    wilayah = "Jawa Tengah";
    table = document.getElementById("univDetails");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        if(tipe == ''){
            for (j = 0; j < td.length; j++) {
                if (td[j].textContent == wilayah) {
                    found = true;
                }
            }
        }else{
            for (j = 0; j < td.length; j++) {
                // alert(td[j].textContent);
                if (td[j].textContent == tipe && td[j-1].textContent == wilayah) {
                    found = true;
                }
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }}

function filterJawaTimur_Wilayah() {
    var found, table, tr, td, i, j;
    wilayah = "Jawa Timur";
    table = document.getElementById("univDetails");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        if(tipe == ''){
            for (j = 0; j < td.length; j++) {
                if (td[j].textContent == wilayah) {
                    found = true;
                }
            }
        }else{
            for (j = 0; j < td.length; j++) {
                // alert(td[j].textContent);
                if (td[j].textContent == tipe && td[j-1].textContent == wilayah) {
                    found = true;
                }
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }}
