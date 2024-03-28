require('./bootstrap');

import Alpine from 'alpinejs';
import $ from 'jquery';

import 'select2';

$(document).ready(function() {
    $('.select2').select2();
});


$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    window.addEventListener('trigger-select2', event => {
        setTimeout(() => {
            $('#select2-'+event.detail).select2();
        }, 100)
    })
});



window.Alpine = Alpine;

Alpine.start();

