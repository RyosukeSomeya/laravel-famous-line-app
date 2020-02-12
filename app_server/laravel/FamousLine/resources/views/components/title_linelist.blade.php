<div class="row">
    <div class="col">
        <dl class="linelist-container">
            @foreach ($famous_lines as $key => $line)
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