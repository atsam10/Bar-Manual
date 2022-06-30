//FOR SIDE BAR ANIMATION

//OPEN
function openNav() {
  document.getElementById("sidenav").style.width = "250px";
  // document.getElementById("drinks_page").style.paddingLeft = "270px";
}

//COLSE
function closeNav() {
  document.getElementById("sidenav").style.width = "0";
  // document.getElementById("display_sb").style.visibility = "visible";
  //document.getElementById("drinks_page").style.paddingLeft = "10px";
}

//FOR SEARCH BAR
function search() {
  let drink = document.getElementsByClassName("drink").value;
  document.getElementById("drinks_page").innerHTML = drink;
  console.log(drink);
}

function submitted(event) {
  const d = document.getElementById("query");
  console.log(d.value);
}



