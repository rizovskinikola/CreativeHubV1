var closeBtn = document.getElementById("closeBtn")
var yellowDiv = document.getElementById("yellowTop")
function closeYellow() {
    yellowDiv.style.display = "none";
}


closeBtn.addEventListener("click", closeYellow);
