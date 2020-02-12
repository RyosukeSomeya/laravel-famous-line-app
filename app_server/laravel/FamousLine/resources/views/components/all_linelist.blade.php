<div class="row">
    <div class="col">
        <h3>{{ $slamdunk_lines[0]->title->title }}</h3>

        <dl class="linelist-container">
            <?php foreach ($slamdunk_lines as $key => $line) : ?>
                <dd class="famousline_txt">{{ $line->famousline }}</dd>
                <dd class="character_name">{{ $line->character->character_name }}</dd>
                <dd>
                    <div>詳細</div>
                    <div>削除</div>
                </dd>
            <?php endforeach; ?>
        </dl>
    </div>

    <div class="col">
        <h3>{{ $jojo_lines[0]->title->title }}</h3>
        <dl class="linelist-container">
            <?php foreach ($jojo_lines as $key => $line) : ?>
                <dd class="famousline_txt">{{ $line->famousline }}</dd>
                <dd class="character_name">{{ $line->character->character_name }}</dd>
            <?php endforeach; ?>
        </dl>
    </div>

    <div class="col">
        <h3>{{ $gundam_lines[0]->title->title }}</h3>
        <dl class="linelist-container">
            <?php foreach ($gundam_lines as $key => $line) : ?>
                <dd class="famousline_txt">{{ $line->famousline }}</dd>
                <dd class="character_name">{{ $line->character->character_name }}</dd>
            <?php endforeach; ?>
        </dl>
    </div>
</div>