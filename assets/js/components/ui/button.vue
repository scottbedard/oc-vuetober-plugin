<template>
    <button
        class="btn"
        ref="button"
        :class="[btnClass]"
        :type="type"
        @click="onClicked">
        <slot></slot>
    </button>
</template>

<script>
    export default {
        computed: {
            btnClass() {
                return this.primary
                    ? 'btn-primary'
                    : 'btn-default';
            },
        },
        methods: {
            focus() {
                this.$refs.button.focus();
            },
            onClicked(e) {
                this.$emit('click', e);
            },
        },
        props: {
            primary: {
                default: false,
                type: Boolean,
            },
            type: {
                default: 'button',
                type: String,
            },
        },
    };
</script>
