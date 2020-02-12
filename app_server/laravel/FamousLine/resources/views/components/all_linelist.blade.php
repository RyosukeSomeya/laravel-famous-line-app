<div class="row">
    <div class="col">
        <h3>{{ $slamdunk_lines[0]->title->title }}</h3>

        <dl class="linelist-container">
            @foreach ($slamdunk_lines as $key => $line)
            <dd class="famousline_txt">{{ $line->famousline }}</dd>
            <dd class="character_name">{{ $line->character->character_name }}</dd>
            <dd>
                <div class="clearfix">
                    <a class="btn btn-primary btn-sm float-right" href='{{ url("/{$line->title->path}/{$line->id}") }}'>
                    詳細
                    </a>
                </div>
            </dd>
            @endforeach
        </dl>
    </div>

    <div class="col">
        <h3>{{ $jojo_lines[0]->title->title }}</h3>
        <dl class="linelist-container">
            @foreach ($jojo_lines as $key => $line)
            <dd class="famousline_txt">{{ $line->famousline }}</dd>
            <dd class="character_name">{{ $line->character->character_name }}</dd>
            <dd class="clearfix">
                <div class="clearfix">
                    <a class="btn btn-primary btn-sm float-right" href='{{ url("/{$line->title->path}/{$line->id}") }}'>
                    詳細
                    </a>
                </div>
            </dd>
            @endforeach
        </dl>
    </div>

    <div class="col">
        <h3>{{ $gundam_lines[0]->title->title }}</h3>
        <dl class="linelist-container">
            @foreach ($gundam_lines as $key => $line)
            <dd class="famousline_txt">{{ $line->famousline }}</dd>
            <dd class="character_name">{{ $line->character->character_name }}</dd>
            <dd>
                <div class="clearfix">
                    <a class="btn btn-primary btn-sm float-right" href='{{ url("/{$line->title->path}/{$line->id}") }}'>
                    詳細
                    </a>
                </div>
            </dd>
            @endforeach
        </dl>
    </div>
</div>