<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Movement</title>
</head>
<body>
    <h1>Robot Movement Control</h1>
    <form method="POST" action="">
        <label for="command">Enter Command (e.g., move forward, turn left, turn right):</label><br>
        <input type="text" id="command" name="command" required><br><br>
        <button type="submit">Submit Command</button>
    </form>
    <h2>Robot State:</h2>
    <pre>
        <?php
        // Initialize the robot's state
        session_start();
        if (!isset($_SESSION['robot'])) {
            $_SESSION['robot'] = [
                'position' => [0, 0], // Starting position (x, y)
                'direction' => 'north', // Initial direction
            ];
        }

        // Function to update the robot's state
        function updateRobotState(&$robot, $command) {
            $directions = ['north', 'east', 'south', 'west'];
            $currentDirectionIndex = array_search($robot['direction'], $directions);

            switch (strtolower($command)) {
                case 'move forward':
                    switch ($robot['direction']) {
                        case 'north':
                            $robot['position'][1] += 1;
                            break;
                        case 'south':
                            $robot['position'][1] -= 1;
                            break;
                        case 'east':
                            $robot['position'][0] += 1;
                            break;
                        case 'west':
                            $robot['position'][0] -= 1;
                            break;
                    }
                    break;

                case 'turn left':
                    $currentDirectionIndex = ($currentDirectionIndex - 1 + 4) % 4;
                    $robot['direction'] = $directions[$currentDirectionIndex];
                    break;

                case 'turn right':
                    $currentDirectionIndex = ($currentDirectionIndex + 1) % 4;
                    $robot['direction'] = $directions[$currentDirectionIndex];
                    break;

                default:
                    echo "Invalid command: $command\n";
            }
        }

        // Handle user input
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['command'])) {
            $command = trim($_POST['command']);
            updateRobotState($_SESSION['robot'], $command);
        }

        // Display the robot's current state
        print_r($_SESSION['robot']);
        ?>
    </pre>
</body>
</html>
