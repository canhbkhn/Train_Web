//Show man dropdown
function Man() {
    document.getElementById("ManDropDown").classList.toggle("show");
}

//Show bo dropdown
function Bo() {
    document.getElementById("BoDropDown").classList.toggle("show");
}

//Show sua dropdown
function Sua() {
    document.getElementById("SuaDropDown").classList.toggle("show");
}
  
  
  // Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
    var manDrop = document.getElementById("ManDropDown");
    var boDrop = document.getElementById("BoDropDown");
    var suaDrop = document.getElementById("SuaDropDown");

    if (!e.target.matches('.Mandropbtn')) {
        if (manDrop.classList.contains('show')) {
           manDrop.classList.remove('show');
        }
    }
    if(!e.target.matches('.Bodropbtn'))
    {
        if (boDrop.classList.contains('show')) {
            boDrop.classList.remove('show');
        }
    }
    if(!e.target.matches('.Suadropbtn'))
    {
        if (suaDrop.classList.contains('show')) {
            suaDrop.classList.remove('show');
        } 
    }
} 
