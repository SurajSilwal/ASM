<?php

function provideFeedback($submission_id, $staff_id, $feedback_text)
{
    $conn = cmysqli_connect($host, $username, $password, $database);

    $feedback_text = mysqli_real_escape_string($conn, $feedback_text);

    $sql = "INSERT INTO feedback (submission_id, staff_id, feedback_text) VALUES ('$submission_id', '$staff_id', '$feedback_text')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Function to get feedback given to a specific student
function getFeedbackByStudent($student_id)
{
    $conn = connectDatabase();

    $sql = "SELECT * FROM feedback 
            INNER JOIN assignment_submissions ON feedback.submission_id = assignment_submissions.id
            WHERE assignment_submissions.student_id='$student_id'";
    $result = mysqli_query($conn, $sql);
    $feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $feedbacks;
}
?>
