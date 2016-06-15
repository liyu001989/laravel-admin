require.config({
  baseUrl: '/js/',
  paths: {
    jquery: 'jquery.min',
    bootstrap: 'bootstrap.min',
    bootbox: 'bootbox.min',
    adminLTE: 'AdminLTE.min',
    slimscroll: 'jquery.slimscroll.min',
    laravel: 'admin/common/laravel.js'
  },
  shim: {
    'adminLTE': ['jquery', 'bootstrap', 'slimscroll'],
    'bootbox': ['jquery', 'bootstrap'],
    'bootstrap': ['jquery'],
    'slimscroll': ['jquery'],
    'laravel': ['bootbox']
  }
})

require(['adminLTE'])

require(['jquery'], function ($) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })

  // 用过标签加载js
  $('body').ready(function () {
    var requires = []

    $('[data-require]').each(function (index, item) {
      requires.push($(item).data('require'))
    })

    require(requires)
  })
})
