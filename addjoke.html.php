<form action = "" method = "post">
    <label for= 'joketext'> Type your joke here; </label>
    <textarea name = "joketext" row= "4" cols= "50"></textarea>

    <select name = "authors">
        <option value = "">Select an author </option>
        <?php foreach ($authors as $author):?>
            <option value="<?=htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
        
    </select>

    <select name = "categories">
        <option value = "">Select a category </option>
        <?php foreach ($categories as $category):?>
            <option value="<?=htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <?=htmlspecialchars($category['categoryName'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select>


    <input type="Submit" name="submit" value = "Add!">
</form>