<div>
    <form action="" method="post">
        @csrf
        English: <label>
            <input type="text" name="english">
        </label>
        <button type="submit">Translate</button>
    </form>
</div>

<div>
    Result: <?php echo $result ?>
</div>
