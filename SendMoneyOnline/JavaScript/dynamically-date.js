const dateInput = document.getElementById("dateInput");

// Get the current date
const currentDate = new Date();

// Format the date as YYYY-MM-DD
const year = currentDate.getFullYear();
const month = String(currentDate.getMonth() + 1).padStart(2, "0");
const day = String(currentDate.getDate()).padStart(2, "0");
const formattedDate = `${year}-${month}-${day}`;

// Set the formatted date as the value of the input field
dateInput.value = formattedDate;
