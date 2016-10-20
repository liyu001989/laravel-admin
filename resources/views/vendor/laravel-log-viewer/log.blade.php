@extends('admin.common.layout')

@section('page-title', '日志列表')

@section('content')
  <div class="row">
    <div class="col-sm-3 col-md-3 sidebar">
      <p class="text-muted"><i>选择日志</i></p>
      <div class="list-group">
        <select class="select-log select2">
            @foreach($files as $file)
                <option value="?l={{ base64_encode($file) }}" @if ($current_file == $file) selected="selected" @endif>
                    {{$file}}
                </option>
            @endforeach
        </select>
      </div>
    </div>
    <div class="col-sm-9 col-md-12 table-container">
      <div class="box">
        <div class="box-body">
          @if ($logs === null)
            <div>
              Log file >50M, please download it.
            </div>
          @else
          <table id="table-log" class="table table-striped">
            <thead>
              <tr>
                <th>Level</th>
                <th>Date</th>
                <th>Content</th>
              </tr>
            </thead>
            <tbody>

              @foreach($logs as $key => $log)
                <tr>
                  <td class="text-{{{$log['level_class']}}}">
                    <span class="glyphicon glyphicon-{{{$log['level_img']}}}-sign" aria-hidden="true"></span> &nbsp;{{$log['level']}}
                  </td>
                  <td class="date">{{{$log['date']}}}</td>
                  <td class="text">
                    @if ($log['stack'])
                        <a class="pull-right expand btn btn-default btn-xs" data-display="stack{{{$key}}}"><span class="glyphicon glyphicon-search"></span></a>
                    @endif
                    {{{$log['text']}}}
                    @if (isset($log['in_file']))
                        <br />{{{$log['in_file']}}}
                    @endif
                    @if ($log['stack'])
                        <div class="stack word-break" id="stack{{{$key}}}" style="display: none; white-space: pre-wrap;">{{{ trim($log['stack']) }}}</div>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          @endif
          <div>
            <a href="?dl={{ base64_encode($current_file) }}"><span class="glyphicon glyphicon-download-alt"></span> Download file</a>
            -
            <a id="delete-log" href="?del={{ base64_encode($current_file) }}"><span class="glyphicon glyphicon-trash"></span> Delete file</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
require(['jquery', 'datatables', 'select2', 'bootbox'], function($, DataTable, select2, bootbox) {
  $('#table-log').DataTable({
    "order": [ 1, 'desc' ],
    "stateSave": true,
    "stateSaveCallback": function (settings, data) {
      window.localStorage.setItem("datatable", JSON.stringify(data));
    },
    "stateLoadCallback": function (settings) {
      var data = JSON.parse(window.localStorage.getItem("datatable"));
      if (data) data.start = 0;
      return data;
    }
  });
  $('.table-container').on('click', '.expand', function(){
    $('#' + $(this).data('display')).toggle();
  });
  $('#delete-log').click(function(){
      var $this = $(this);

      bootbox.confirm('Are you sure?', function(result) {
          if (!result) {
              return;
          }
          window.location.replace($this.attr('href'));
      });
      return false;
  });

  // 下拉日志列表，并跳转
  $('.select2').select2({
      minimumResultsForSearch: Infinity
  });
  $('.select-log').change(function() {
    window.location.replace($(this).val());
  });
});
</script>
@endsection