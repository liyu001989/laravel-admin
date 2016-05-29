<?php
    // 没有传入searchColumns 则返回
    if (!isset($searchColumns)) {
        return;
    }
    $requests = array_filter(\Request::all());
    $url = \Request::url();
?>
@if (array_intersect(array_keys($requests), $searchColumns))

    <div class="btn-group" role="group" style="margin-left:10px">
        <button type="button" class="btn btn-default btn-xs">清空</button>
        <a class="btn btn-default btn-xs" href="{{ $url}}"><i class="glyphicon glyphicon-remove"></i></a>
    </div>

    @foreach($requests as $key => $column)
        @if (in_array($key, $searchColumns))
            <?php
                $query = $requests;
                unset($query[$key]);
            ?>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default btn-xs">{{ $key.": ".$column }}</button>
                <a
                class="btn btn-default btn-xs"
                href="{{ $query ? $url.'?'.http_build_query($query) : $url }}">
                    <i class="glyphicon glyphicon-remove"></i>
                </a>
            </div>
        @endif
    @endforeach
@endif