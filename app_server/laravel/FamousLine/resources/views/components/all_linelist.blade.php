<div class="row">
    <div class="col">
        <div class="clearfix mb-3">
            <h3 class="float-left">
                <a href="/{{ $slamdunk_title_info->path }}">{{ $slamdunk_lines[0]->title->title }}</a>
            </h3>
            <a class="ml-2 btn btn-primary btn-sm d-inline-block" href="/slamdunk/create">新規追加</a>
        </div>

        <dl class="linelist-container">
            @foreach ($slamdunk_lines as $key => $line)
            <dd class="famousline_txt">{{ $line->famousline }}</dd>
            <dd class="character_name">{{ $line->character->character_name }}</dd>
            <dd>
                <div class="clearfix">
                    <a class="d-block float-right btn btn-primary btn-sm" href='{{ url("/{$line->title->path}/{$line->id}") }}'>
                        詳細
                    </a>
                </div>
            </dd>
            @endforeach
        </dl>
    </div>

    <div class="col">
        <div class="clearfix mb-3">
            <h3 class="float-left">
                <a href="/{{ $jojo_title_info->path }}">{{ $jojo_lines[0]->title->title }}</a>
            </h3>
            <a class=" ml-2 btn btn-primary btn-sm d-inline-block" href="/jojo/create">新規追加</a>
        </div>
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
        <div class="clearfix mb-3">
            <h3 class="float-left">
                <a href="/{{ $gundam_title_info->path }}">{{ $gundam_lines[0]->title->title }}</a>
            </h3>
            <a class="ml-2 btn btn-primary btn-sm d-inline-block" href="/gundam/create">新規追加</a>
        </div>
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