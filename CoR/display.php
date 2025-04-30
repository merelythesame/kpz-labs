<?php
use CoR\ComplaintRequestHandler;
use CoR\PrimaryRequestHandler;
use CoR\TechProblemRequestHandler;
use CoR\TechSolutionRequestHandler;

require_once 'autoloader.php';
session_start();

$level1 = new PrimaryRequestHandler();
$level2 = new TechProblemRequestHandler();
$level3 = new TechSolutionRequestHandler();
$level4 = new ComplaintRequestHandler();

$level1->setNext($level2)->setNext($level3)->setNext($level4);

if (!isset($_SESSION['step'])) {
    $_SESSION['step'] = 1;
}

$levels = [$level1, $level2, $level3, $level4];
$currentLevel = $_SESSION['step'] - 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choice = (int)($_POST['choice'] ?? 0);

    $handler = $levels[$currentLevel];
    $result = $handler->handle($choice);

    if ($result !== null) {
        echo "<h2>$result</h2>";
        session_destroy();
        exit;
    } else {
        $_SESSION['step']++;

        if ($_SESSION['step'] > count($levels)) {
            echo "<h2>Couldnt get support level. Restarting...</h2>";
            $_SESSION['step'] = 1;
        }
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$handler = $levels[$currentLevel];
$questionData = $handler->getQuestion();
?>


<?php if ($questionData): ?>
    <form method="post">
        <p><?= htmlspecialchars($questionData['question']) ?></p>

        <?php foreach ($questionData['options'] as $key => $option): ?>
            <div>
                <input type="radio" id="option<?= $key ?>" name="choice" value="<?= $key ?>" required>
                <label for="option<?= $key ?>"><?= $option ?></label>
            </div>
        <?php endforeach; ?>

        <button type="submit">Next</button>
    </form>
<?php else: ?>
    <p>Error</p>
<?php endif; ?>
