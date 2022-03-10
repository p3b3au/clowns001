<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calendar.css">
    <link rel="stylesheet" href="form_popup.css">
    <title>calendar</title>
</head>

<body>
    <div data-app="calendar-app"></div>

    <div class="login-popup">
        <div class="form-popup" id="popupForm">
            <form action="/action_page.php" class="form-container" method="post">

                <label for="dateDate"><strong>vous avez selectionné</strong>
                </label>
                <input type="date" id="dateDate" name="dateDate">
                <br><br>
                <label for="dateTime"><strong>choisir une heure de début</strong>
                </label>
                <input timeformat="24h" type="time" id="dateTime" name="dateTime" value="12:00">
                <br><br>

                <div class="lieu"><label for="lieu"><strong>choisir un lieu</strong></label>
                    <div class="relatif"><select>
                            <?php
                            require 'calendar.php';
                            foreach (getAllLieu() as $edit) : ?>
                                <option style="color:black" value="<?= filter_var($edit['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>"><?=filter_var($edit['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)?>
                            </option>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    <br><br>
                    <button type="submit" class="btn">valider</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">annuler</button>
            </form>
        </div>
    </div>
    <div>

    </div>
    <?php
                   
                            foreach (getAllLieu() as $edit) : ?>
                                <div style="color:blueviolet"><?= filter_var($edit['nom'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?></div>
                          
                                <?php endforeach; ?>

</body>
<script src="calendar.js"></script>
<script src="action.js"></script>

</html>