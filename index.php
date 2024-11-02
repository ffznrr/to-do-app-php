<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-r from-sky-300 to-indigo-300">
    <div class="w-full min-h-screen p-4 sm:p-8 md:p-12 lg:p-16 xl:p-20 flex items-center justify-center">
        <div class="w-full max-w-2xl h-full border-4 border-white rounded-lg shadow-lg p-4 sm:p-6 md:p-8 lg:p-10 xl:p-12 bg-white bg-opacity-20 backdrop-blur-lg">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-white text-center mb-4">
                TO DO LIST APP
            </h1>
            <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl text-white text-center mb-8">
                Manage your tasks efficiently and stay organized.
            </p>
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" class="text-center mb-8">
                <div class="flex items-center justify-center">
                    <input type="text" name="todo" class="w-full max-w-md h-12 px-4 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-sky-500" placeholder="Enter your task" required>
                    <button class="bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-r-lg transition duration-300 ease-in-out" type="submit">
                        <i class="fas fa-plus mr-2"></i>Add
                    </button>
                </div>
            </form>
            <div class="text-center">
            <?php 
            session_start();

            if (!isset($_SESSION["task"])) {
                $_SESSION["task"] = [];
            }

            if(isset($_POST['del'])){
                $index_to_delete = $_POST['del'];
                if(isset($_SESSION['task'])){
                    unset($_SESSION['task'][$index_to_delete]);
                    $_SESSION['task'] = array_values($_SESSION['task']);
                }
            }

            if (isset($_POST["todo"])) {
                $task = trim($_POST['todo']); 
                if (!empty($task)) {
                    $_SESSION['task'][] = $task; 
                }
            }
            ?>
            <ul class="space-y-2">
                <?php foreach ($_SESSION['task'] as $index => $task): ?> 
                <li class="bg-white bg-opacity-50 rounded-lg shadow-md flex items-center justify-between p-4 transition duration-300 ease-in-out hover:bg-opacity-70">
                    <span class="text-gray-800 text-lg"><?= $index + 1 . ". " . htmlspecialchars($task) ?></span>
                    <form class="inline" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                        <input type="hidden" value="<?= $index ?>" name="del">
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-full transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </li>
                <?php endforeach; ?>
            </ul>
            </div>
        </div>
    </div>
    <script>
        // Add Toastify notifications here if needed
    </script>
</body>
</html>