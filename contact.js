document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("inquiryForm");
    const submitButton = document.getElementById("submitButton");

    submitButton.addEventListener("click", function(event) {
        event.preventDefault();

        const formData = new FormData(form);

        fetch("send_inquiry.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data); // Display feedback message
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Sorry, something went wrong. Please try again.");
        });
    });
});
