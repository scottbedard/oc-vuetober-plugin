import Vue from 'vue';
import ExampleComponent from './components/example';

// register global components and utilities
require('assets/js/boot');

$(function() {
    // find the element we're going to mount our component to
    $('[data-widget=example]').each(function() {
        let el = $(this)[0];

        // parse the props from our data attributes
        const lang = JSON.parse(el.dataset.lang);
        const value = el.dataset.value;

        // instantiate our component and mount it to the dom
        new Vue({
            el,
            render: h => h(ExampleComponent, {
                props: {
                    lang,
                    value,
                },
            }),
        });
    });
});
