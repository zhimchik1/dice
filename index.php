<?php

spl_autoload_register(function ($className) {
    $className = str_replace('\\', '/', $className);
    $filePath = __DIR__ . '/src/' . $className . '.php';

    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

use Run\CoinTossGame;

function createGame(string $gameType): CoinTossGame
{
    $gameTypeClass = 'Game\\' . ucfirst($gameType);
    if (class_exists($gameTypeClass)) {
        return new CoinTossGame(new $gameTypeClass());
    }

    throw new InvalidArgumentException('Invalid game type');
}

$gameType = $_GET['game'] ?? 'CoinToss';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gameType = $_POST['game'] ?? 'CoinToss';
}

$gamesDirectory = __DIR__ . '/src/Game';
$availableGames = [];

$gameFiles = glob($gamesDirectory . '/*.php');
foreach ($gameFiles as $gameFile) {
    $gameName = basename($gameFile, '.php');
    $availableGames[$gameName] = $gameName;
}

try {
    $game = createGame($gameType);
    $result = $game->play();
} catch (InvalidArgumentException $e) {
    $result = 'Invalid game type';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Coin Toss Game</title>
</head>
<body>
<h1>Coin Toss Game</h1>

<form method="post">
    <p>Select a game:</p>
    <?php foreach ($availableGames as $gameValue => $gameLabel): ?>
        <input type="radio" name="game" value="<?php echo $gameValue; ?>" <?php echo $gameType === $gameValue ? 'checked' : ''; ?>>
        <label for="<?php echo $gameValue; ?>"><?php echo $gameLabel; ?></label><br>
    <?php endforeach; ?>
    <br>
    <input type="submit" value="Play">
</form>

<h2>Game Result</h2>
<p>Game Type: <?php echo $gameType; ?></p>
<p><?php echo $result; ?></p>
</body>
</html>
