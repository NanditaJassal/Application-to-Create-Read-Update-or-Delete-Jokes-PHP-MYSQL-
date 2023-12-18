<form action = "" method = "post">
    <input type= "hidden" name = "jokeid" value = "<?=$joke['id'];?>">
    <label for = 'joketext'> Edit your joke here; </label>
    <textarea name = "joketext" rows = "4" cols = "50">
    <?=$joke ['joketext'] ?>
    </textarea>
    <input type = "submit" name = "submit" value = "Submit">
</form>