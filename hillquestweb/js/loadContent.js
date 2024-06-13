function loadHTML(id, file) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        if (this.status == 200) {
            document.getElementById(id).innerHTML = this.responseText;
        }
    }
    xhttp.open("GET", file, true);
    xhttp.send();
}
