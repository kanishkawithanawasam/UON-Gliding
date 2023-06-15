var rows = document.getElementsByClassName("tdata");
for (let index = 0; index < rows.length; index++) {
    if (index%2==0) {
        rows[index].style.background="#f2f1f2";
    }else{
        rows[index].style.background="#d9ffe1";
    }
}


function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
    }