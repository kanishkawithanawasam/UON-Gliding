var rows = document.getElementsByClassName("tdata");
for (let index = 0; index < rows.length; index++) {
    if (index%2==0) {
        rows[index].style.background="#f2f1f2";
    }else{
        rows[index].style.background="#d9ffe1";
    }
}
