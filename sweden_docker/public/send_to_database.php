<?php
header('Content-Type: application/json');

// Path to the leaderboard file
$leaderboardFile = 'leaderboard.json';

// Ensure the leaderboard file exists or create it
if (!file_exists($leaderboardFile)) {
    file_put_contents($leaderboardFile, json_encode([])); // Create an empty JSON file
}

// Handle POST request to update leaderboard
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the required fields are present in the POST request
    if (isset($_POST['username']) && isset($_POST['score'])) {
        $username = $_POST['username'];
        $score = (int)$_POST['score'];

        // Load the current leaderboard
        $leaderboard = json_decode(file_get_contents($leaderboardFile), true);

        if (!$leaderboard || !is_array($leaderboard)) {
            $leaderboard = [];
        }

        // Check if the username already exists in the leaderboard
        $found = false;
        foreach ($leaderboard as &$user) {
            if ($user['username'] === $username) {
                $user['score'] += $score; // Update the user's score
                $found = true;
                break;
            }
        }

        // If the username doesn't exist, add it
        if (!$found) {
            $leaderboard[] = ['username' => $username, 'score' => $score];
        }

        // Save the updated leaderboard back to the file
        file_put_contents($leaderboardFile, json_encode($leaderboard, JSON_PRETTY_PRINT));

        // Respond with success
        echo json_encode(['success' => true, 'message' => 'Data updated successfully.']);
        exit;
    } else {
        // Missing fields in the POST request
        echo json_encode(['error' => 'Invalid data. Please send both "username" and "score".']);
        exit;
    }
}

// Handle GET request to display the leaderboard
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Load and decode the leaderboard data
    $leaderboard = json_decode(file_get_contents($leaderboardFile), true);

    if ($leaderboard && is_array($leaderboard)) {
        // Sort the leaderboard by score (descending)
        usort($leaderboard, function($a, $b) {
            return $b['score'] - $a['score'];
        });

        // Assign ranks
        $rankedLeaderboard = [];
        $rank = 1;
        $previousScore = -1;

        foreach ($leaderboard as $index => $user) {
            if ($user['score'] != $previousScore) {
                $rank = $index + 1; // Update rank when score changes
            }
            $user['rank'] = $rank; // Add rank to the user data
            $rankedLeaderboard[] = $user;

            $previousScore = $user['score'];
        }

        // Respond with the ranked leaderboard
        echo json_encode($rankedLeaderboard, JSON_PRETTY_PRINT);
        exit;
    } else {
        echo json_encode(["error" => "Invalid leaderboard data."]);
        exit;
    }
}

// If the request method is neither POST nor GET
http_response_code(405); // Method Not Allowed
echo json_encode(['error' => 'Invalid request method. Use GET or POST.']);
?>
