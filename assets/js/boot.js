import Vue from 'vue';

// disable the production tip, we know what we're doing
Vue.config.productionTip = false;

//
// register global filters
//
import filters from './filters/global';

Object.keys(filters).forEach(tag => {
    Vue.filter(tag, filters[tag]);
});

//
// register global components
//
import components from './components/global';

Object.keys(components).forEach(tag => {
    Vue.component(tag, components[tag]);
});
