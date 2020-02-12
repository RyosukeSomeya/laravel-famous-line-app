<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <ul>
        <?php foreach ($slamdunk_lines as $key => $line) : ?>
            <li><?php echo $line->famousline; ?></li>
            <li><?php echo $line->character->character_name; ?></li>
            <li><?php echo $line->title->title; ?></li>
        <?php endforeach; ?>
        <?php foreach ($jojo_lines as $key => $line) : ?>
            <li><?php echo $line->famousline; ?></li>
            <li><?php echo $line->character->character_name; ?></li>
            <li><?php echo $line->title->title; ?></li>
        <?php endforeach; ?>
        <?php foreach ($gundam_lines as $key => $line) : ?>
            <li><?php echo $line->famousline; ?></li>
            <li><?php echo $line->character->character_name; ?></li>
            <li><?php echo $line->title->title; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>