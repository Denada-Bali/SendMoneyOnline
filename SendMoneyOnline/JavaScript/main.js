bodyElement = document.querySelector("body");
checkbox = document.getElementById("checkbox");

checkbox.addEventListener("change", () => {
  //change the them of the website
  document.body.classList.toggle("dark");
});
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function openRegForm() {
  document.getElementById("myRegForm").style.display = "block";
}

function closeRegForm() {
  document.getElementById("myRegForm").style.display = "none";
}

// disable radio button
document.getElementById("business").addEventListener("click", function () {
  this.disabled = true;
});
