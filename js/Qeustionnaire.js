document.getElementById("healthForm").addEventListener("submit", function(event) {
        event.preventDefault();

        // Get form data
        var formData = {
            name: document.getElementById("name").value,
            email: document.getElementById("email").value,
            age: document.getElementById("age").value,
            gender: document.getElementById("gender").value,
            healthIssues: document.getElementById("healthIssues").value
        };

        // Reset the form
        this.reset();
    });