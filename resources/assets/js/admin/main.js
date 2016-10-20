require.config({
  baseUrl: '/js/',
  paths: {
    jquery: 'jquery.min',
    bootstrap: 'bootstrap.min',
    bootbox: 'bootbox.min',
    adminLTE: 'AdminLTE.min',
    slimscroll: 'jquery.slimscroll.min',
    laravel: 'admin/laravel',
    'datatables.net': 'jquery.dataTables.min',
    datatables: 'dataTables.bootstrap.min',
    select2: 'select2.full.min'
  },
  shim: {
    'adminLTE': ['jquery', 'bootstrap', 'slimscroll'],
    'bootbox': ['jquery', 'bootstrap'],
    'bootstrap': ['jquery'],
    'slimscroll': ['jquery'],
    'laravel': ['bootbox'],
    'select2': ['jquery']
  }
})

require(['adminLTE', 'laravel']);

require(['jquery'], function ($) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  // 用过标签加载js
  $('body').ready(function () {
    var requires = []

    $('[data-require]').each(function (index, item) {
      requires.push($(item).data('require'))
    })

    require(requires)
  });
});
