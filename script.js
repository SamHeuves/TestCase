// ANIMATE SEARCH

function animateSearch(toggle = true) {
  // Variabelen

  var elementSearchBar = document.getElementById("searchBarContainer"),
    elementLoader = document.getElementById("loader"),
    elementList = document.getElementById("list"),
    elementRetBut = document.getElementById("beforeButton");

  if (toggle) {
    // Add classes to selected elements based on 
    elementLoader.classList.add("loader-start");
    elementSearchBar.style.display = "none";
    elementLoader.style.display = "block";
    
    setTimeout(function() {
      elementRetBut.style.display = "block";
      elementList.style.display = "block";
      elementLoader.style.display = "none";
    }, 2000);

    document.getElementById("reset").reset();
    
  } else {
    // Remove classes to selected elements based on toggle
    elementLoader.classList.remove("loader-start");
    elementList.style.display = "none";
    elementSearchBar.style.display = "block";
    elementRetBut.style.display = "none";
  }
}