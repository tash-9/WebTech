function loadStudentData() {
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "data.php", true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            var student = JSON.parse(xhr.responseText);

            document.getElementById("result").innerHTML =
                "<h3>Student Details</h3>" +
                "Name: " + student.name + "<br>" +
                "ID: " + student.id + "<br>" +
                "Department: " + student.department + "<br>" +
                "CGPA: " + student.cgpa;
        }
    };

    xhr.send();
}