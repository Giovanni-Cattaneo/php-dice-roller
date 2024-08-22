<?php

$dice = !empty($_GET["dice"]) ? $_GET["dice"] : 20;

$proficency = !empty($_GET["proficency"]) ? $_GET["proficency"] : 0;

$weaponMod = !empty($_GET["weapon_mod"]) ? $_GET["weapon_mod"] : 0;

$char = !empty($_GET["char"]) ? $_GET["char"] : 0;

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

<body>
    <div class="container">
        <form class="d-flex flex-column  gap-3 align-items-center" action="index.php" method="get">
            <div class="dice_container d-flex">
                <label class="form-check-label" for="">Choose the dice</label>
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
                <div class="mb-3">
                    <input
                        type="number"
                        class="form-control"
                        name="dice_number"
                        id=""
                        aria-describedby="helpId"
                        placeholder="" />
                    <small id="helpId" class="form-text text-muted">Quante volte vuoi tirare</small>
                </div>
            </div>

            <div class="weapon_container d-flex">
                <label class="form-check-label" for="">Add Weapon Bonus</label>
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
                <label class="form-check-label" for="">Add your proficency</label>
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

    </form>
    </div>


</body>

</html>