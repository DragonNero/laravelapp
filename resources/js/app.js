import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(function () {
    $('td.whitespace-no-wrap').removeClass('whitespace-no-wrap');
});
