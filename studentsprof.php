
<?php
// 1. Create Student Profile
$student = array(
    "studentNumber" => "260263",
    "name" => "Kyllie De Rueda",
    "course" => "BS Information Technology",
    "enrolledSubjects" => array(
        "Programming 2",
        "IT Infrastructure",
        "Data Structure"
    )
);


$encodedStudent = json_encode($student, JSON_PRETTY_PRINT);

$decodedStudent = json_decode($encodedStudent, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>

    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffc3f5;
            margin: 0;
            padding: 30px;
        }

        .container {
            background-color: white;
            max-width: 550px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #940074;
        }

        h2 {
            text-align: center;
            color: #000408;
        }

        h3 {
            color: #f19be6;
        }

        p {
            font-size: 16px;
        }

        li {
            margin: 8px 0;
        }

        pre {
            background-color: #fff6c2;
            padding: 12px;
            border-radius: 5px;
            white-space: pre-wrap;
        }

        .first {
            background-color: #fffacb;
            padding: 10px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #e78ec2;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #ffffff;
        }
    </style> -->
</head>

<body>

<div class="container">

    <h2>Student Profile</h2>

    <h3>Student Information</h3>

    <p><b>Student Number:</b>
        <?php echo $decodedStudent["studentNumber"]; ?>
    </p>

    <p><b>Name:</b>
        <?php echo $decodedStudent["name"]; ?>
    </p>

    <p><b>Course:</b>
        <?php echo $decodedStudent["course"]; ?>
    </p>

    <h3>Enrolled Subjects</h3>

    <ul>
        <?php
        foreach ($decodedStudent["enrolledSubjects"] as $subject) {
            echo "<li>" . htmlspecialchars($subject) . "</li>";
        }
        ?>
    </ul>

    <h3>Encoded JSON</h3>

    <pre><?php echo htmlspecialchars($encodedStudent); ?></pre>

    <h3>Decoded JSON</h3>

    <p>Student data successfully decoded!</p>

    <h3>First Enrolled Subject</h3>

    <div class="first">
        <?php
        echo htmlspecialchars($decodedStudent["enrolledSubjects"][0]);
        ?>
    </div>

    <h3>Difference Between Array and JSON</h3>

    <table>
        <tr>
            <th>Array</th>
            <th>JSON</th>
        </tr>

        <tr>
            <td>Stores multiple values in a PHP variable.</td>
            <td>Stores structured data in text format.</td>
        </tr>

        <tr>
            <td>Created using array() or [].</td>
            <td>Created using json_encode().</td>
        </tr>

        <tr>
            <td>Can be accessed using keys or indexes.</td>
            <td>Must be decoded using json_decode() before accessing as a PHP array.</td>
        </tr>

        <tr>
            <td>Used to organize data in PHP.</td>
            <td>Used to exchange or transfer data between systems.</td>
        </tr>

    </table>

</div>

</body>
</html>
