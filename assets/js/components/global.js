// this file contains our plugin's global components. any
// component that is registered here will be available
// everywhere, provided the boot file is pulled in.
export default {
    'v-button': require('./ui/button'),
    'v-input': require('./ui/input'),
    'v-modal': require('./ui/modal'),
    'v-modal-body': require('./ui/modal_body'),
    'v-modal-footer': require('./ui/modal_footer'),
    'v-modal-header': require('./ui/modal_header'),
    'v-spinner': require('./ui/spinner'),
};
