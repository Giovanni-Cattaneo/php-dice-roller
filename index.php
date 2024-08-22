<?php

$dice = !empty($_GET["dice"]) ? $_GET["dice"] : 20;

$proficency = !empty($_GET["proficency"]) ? $_GET["proficency"] : 0;

$weaponMod = !empty($_GET["weapon_mod"]) ? $_GET["weapon_mod"] : 0;

$char = !empty($_GET["char"]) && $_GET["char"] >= -5 && $_GET["char"] <= 7 ? $_GET["char"] : 0;

$diceNumber = !empty($_GET["dice_number"]) && $_GET["dice_number"] > 0  ? $_GET["dice_number"] : 1;



// echo ($dice);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e7d95647e4.js" crossorigin="anonymous"></script>
</head>

<body class="body">
    <header>
        <h1>Welcome to dice roller</h1>
    </header>
    <main>
        <div class="container">
            <form class="d-flex flex-column gap-1 align-items-center" action="index.php" method="get">
                <label class="form-check-label px-3" for="">
                    <h4>Choose the dice</h4>
                </label>
                <div class="dice_container d-flex align-items-center">
                    <div class="form-check form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="dice"
                            id=""
                            value="2" />
                        <label class="form-check-label" for="">coin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="dice"
                            id=""
                            value="4" />
                        <label class="form-check-label" for="">d4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="dice"
                            id=""
                            value="6" />
                        <label class="form-check-label" for="">d6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="dice"
                            id=""
                            value="8" />
                        <label class="form-check-label" for="">d8</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="dice"
                            id=""
                            value="10" />
                        <label class="form-check-label" for="">d10</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="dice"
                            id=""
                            value="12" />
                        <label class="form-check-label" for="">d12</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="dice"
                            id=""
                            value="20" />
                        <label class="form-check-label" for="">d20</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="dice"
                            id=""
                            value="100" />
                        <label class="form-check-label" for="">d100</label>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <input
                            type="number"
                            class="form-control"
                            name="dice_number"
                            id=""
                            aria-describedby="helpId"
                            placeholder="How many dices?" />
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>

                <div class="weapon_container d-flex">
                    <label class="form-check-label px-3" for=""><strong>Add Weapon Bonus</strong></label>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="weapon_mod"
                            id=""
                            value="1" />
                        <label class="form-check-label" for="">+1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="weapon_mod"
                            id=""
                            value="2" />
                        <label class="form-check-label" for="">+2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="weapon_mod"
                            id=""
                            value="3" />
                        <label class="form-check-label" for="">+3</label>
                    </div>
                </div>

                <div class="proficency_container d-flex">
                    <label class="form-check-label px-3" for=""><strong>Add your proficency</strong></label>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="proficency"
                            id=""
                            value="2" />
                        <label class="form-check-label" for="">+2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="proficency"
                            id=""
                            value="3" />
                        <label class="form-check-label" for="">+3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="proficency"
                            id=""
                            value="4" />
                        <label class="form-check-label" for="">+4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="proficency"
                            id=""
                            value="5" />
                        <label class="form-check-label" for="">+5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="proficency"
                            id=""
                            value="6" />
                        <label class="form-check-label" for="">+6</label>
                    </div>
                </div>

                <div class="mod_container">
                    <div class="mb-3">
                        <label for="" class="form-label"></label>
                        <input
                            type="number"
                            class="form-control"
                            name="char"
                            id=""
                            aria-describedby="helpId"
                            placeholder="" />
                        <small id="helpId" class="form-text text-muted">Inserisci il modificatore caratteristica</small>
                    </div>


                </div>

                <button
                    type="submit"
                    class="btn btn-primary">
                    Tira
                </button>


                <div class="card_section d-flex gap-3 flex-wrap">
                    <?php
                    if (isset($dice) && isset($proficency)) {

                        for ($i = 0; $i < $diceNumber; $i++) {
                            $diceValue = rand(1, $dice);
                            $total = $diceValue + $proficency + $char + $weaponMod;

                    ?>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Ecco il tuo tiro</h4>
                                    <p class="card-text">Dado <?php echo ($diceValue) ?></p>
                                    <p class="card-text">Weapon bonus +<?php echo ($weaponMod) ?></p>
                                    <p class="card-text">Proficency +<?php echo ($proficency) ?></p>
                                    <p class="card-text">Mod char +<?php echo ($char) ?></p>
                                    <?php if ($diceValue === 20) : ?>
                                        <p class="card-text ">Total = <span class="green"><?php echo ($total) ?> <i class="fa-solid fa-trophy"></i></span></p>
                                    <?php elseif ($diceValue === 1) : ?>
                                        <p class="card-text ">Total = <span class="red"><?php echo ($total) ?> <i class="fa-solid fa-skull"></i></span> </p>
                                    <?php else : ?>
                                        <p class="card-text">Total = <?php echo ($total) ?></p>
                                    <?php endif; ?>

                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

        </div>

        <div class="d-flex">
            <table class="mod">
                <thead>
                    <tr>
                        <th>Stat</th>
                        <th>Mod</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0 - 1</td>
                        <td>-5</td>
                    </tr>
                    <tr>
                        <td>2 - 3</td>
                        <td>-4</td>
                    </tr>
                    <tr>
                        <td>4 - 5</td>
                        <td>-3</td>
                    </tr>
                    <tr>
                        <td>6 - 7</td>
                        <td>-2</td>
                    </tr>
                    <tr>
                        <td>8 - 9</td>
                        <td>-1</td>
                    </tr>
                    <tr>
                        <td>10 - 11</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>12 - 13</td>
                        <td>+1</td>
                    </tr>
                    <tr>
                        <td>14 - 15</td>
                        <td>+2</td>
                    </tr>
                    <tr>
                        <td>16 - 17</td>
                        <td>+3</td>
                    </tr>
                    <tr>
                        <td>18 - 19</td>
                        <td>+4</td>
                    </tr>
                    <tr>
                        <td>20 - 21</td>
                        <td>+5</td>
                    </tr>
                    <tr>
                        <td>22 - 23</td>
                        <td>+6</td>
                    </tr>
                    <tr>
                        <td>24 - 25</td>
                        <td>+7</td>
                    </tr>
                </tbody>
            </table>

            <table class="proficency">
                <tr>
                    <th>Level</th>
                    <th>Proficency</th>
                </tr>
                <!-- Livelli da 1 a 4 -->
                <tr>
                    <td>1-4</td>
                    <td>+2</td>
                </tr>
                <!-- Livelli da 5 a 8 -->
                <tr>
                    <td>5-8</td>
                    <td>+3</td>
                </tr>
                <!-- Livelli da 9 a 12 -->
                <tr>
                    <td>9-12</td>
                    <td>+4</td>
                </tr>
                <!-- Livelli da 13 a 16 -->
                <tr>
                    <td>13-16</td>
                    <td>+5</td>
                </tr>
                <!-- Livelli da 17 a 20 -->
                <tr>
                    <td>17-20</td>
                    <td>+6</td>
                </tr>
            </table>
        </div>
    </main>
    <footer></footer>


    </form>
    </div>


</body>

</html>