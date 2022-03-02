// selection des cellules /////////////////////////////
const cells = document.querySelectorAll(".current, .prev, .next");

for (var i=0; i<cells.length; i++){
   
cells[i].addEventListener('click',add);
function add() {
  alert(this.id)
};
}

console.log(cells);