/* menu active class handler */
var url = window.location.pathname,
value = url.substring(url.lastIndexOf('/') + 1);

$('ul.nav a[href="'+ value +'"]').parent().addClass('active');