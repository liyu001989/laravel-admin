require.config({
    baseUrl: "/js/",
    paths: {
        jquery: "jquery.min",
        bootstrap: 'bootstrap.min',
        bootbox: 'bootbox.min',
        adminLTE: 'AdminLTE.min',
        slimscroll: 'jquery.slimscroll.min',
    },
    shim: {
        'adminLTE': ['bootstrap', 'slimscroll'],
        'bootbox': ['jquery', 'bootstrap'],
        'bootstrap': ['jquery'],
        'slimscroll': ['jquery']
    }
});

require(['adminLTE']);
