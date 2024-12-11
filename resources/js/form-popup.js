// form-popup.js

// Get button and popup elements
var downloadBtn = document.getElementById("downloadBtn");
var popupForm = document.getElementById("popupForm");
var closeBtn = document.getElementsByClassName("close")[0];

// Show the form when button is clicked
downloadBtn.onclick = function() {
    popupForm.style.display = "block";
}

// Close the form when 'X' is clicked
closeBtn.onclick = function() {
    popupForm.style.display = "none";
}

// Close the form if clicked outside of the popup
window.onclick = function(event) {
    if (event.target == popupForm) {
        popupForm.style.display = "none";
    }
}

// Handle form submission
document.getElementById("downloadForm").onsubmit = function(event) {
    event.preventDefault();  // Prevent form submission

    // Example: Get form data
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var description = document.getElementById("description").value;

    // Do something with form data, like processing the download
    alert("Data akan diunduh untuk: " + name + " (" + email + "). Keterangan: " + description);

    // Simulate file download (could be replaced with actual file generation/download)
    window.location.href = "path/to/your/file.zip"; // Ganti dengan path file yang sebenarnya

    // Close the form
    popupForm.style.display = "none";
}
