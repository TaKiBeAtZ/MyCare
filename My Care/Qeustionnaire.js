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

        // Do something with the form data, for example, send it to a server
        console.log(formData);

        // You can add further processing here, like validation or sending data to a server

        // Reset the form
        this.reset();
    });