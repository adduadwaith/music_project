<?php

function check_login($con)
{
    if (isset($_SESSION['email'])) {
        $id = $_SESSION['email'];
        // Prepared statement to prevent SQL injection
        $query = "SELECT * FROM users WHERE email = ? LIMIT 1";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit;  // Ensure the script stops after redirection
}
