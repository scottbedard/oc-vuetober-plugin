<template>
    <div class="control-popup modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            $(this.$el).on('hide.bs.modal', () => this.$emit('hide'));
            $(this.$el).on('show.bs.modal', () => this.$emit('show'));
        },
        props: {
            isVisible: {
                default: false,
                type: Boolean,
            },
        },
        watch: {
            isVisible(isVisible) {
                if (this.isVisible) {
                    $(this.$el).modal();
                } else {
                    $(this.$el).modal('hide');
                }
            },
        },
    };
</script>
