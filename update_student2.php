/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.main-content {
    background-color: #fff;
    width: 90%;
    max-width: 800px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Header */
header {
    text-align: center;
    margin-bottom: 20px;
    border-bottom: 2px solid #dcdcdc;
    padding-bottom: 10px;
}

header h2 {
    color: #4a4a4a;
    font-size: 1.8rem;
    font-weight: bold;
    margin: 0;
}

/* Add Result Form */
.add-result-form {
    margin-bottom: 20px;
}

.add-result-form form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.add-result-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #dcdcdc;
    border-radius: 4px;
    font-size: 0.9rem;
}

.add-result-form button {
    grid-column: span 2;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s;
}

.add-result-form button:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 600px) {
    .add-result-form form {
        grid-template-columns: 1fr;
    }
    
    .main-content {
        width: 95%;
    }
}
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rms3";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission for update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_code = $_POST['student_code'];
    $student_name = $_POST['student_name'];
    $information_technology_concepts = $_POST['information_technology_concepts'];
    $fundamentals_of_programming = $_POST['fundamentals_of_programming'];
    $mathematics = $_POST['mathematics'];
    $fundamental_of_electrical_engineering = $_POST['fundamental_of_electrical_engineering'];
    $programming_laboratory = $_POST['programming_laboratory'];
    $english_study_skills_for_ict = $_POST['english_study_skills_for_ict'];
    $sgpa = $_POST['sgpa'];
    $ygpa = $_POST['ygpa'];

    // Update the database
    $sql = "UPDATE students1 SET 
            student_name='$student_name',
            information_technology_concepts='$information_technology_concepts',
            fundamentals_of_programming='$fundamentals_of_programming',
            mathematics='$mathematics',
            fundamental_of_electrical_engineering='$fundamental_of_electrical_engineering',
            programming_laboratory='$programming_laboratory',
            english_study_skills_for_ict='$english_study_skills_for_ict',
            sgpa='$sgpa',
            ygpa='$ygpa'
            WHERE student_code='$student_code'";

    if ($conn->query($sql) === TRUE) {
        echo "Student data updated successfully";
        header("Location: displayresult2.php"); // Redirect to a list or view page
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
