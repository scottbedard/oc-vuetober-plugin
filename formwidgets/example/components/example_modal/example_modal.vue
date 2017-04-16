<style lang="scss" scoped>
    pre {
        overflow: hidden;
    }
</style>

<template>
    <v-modal :is-visible="isVisible" @hide="$emit('hide')">
        <!-- Header -->
        <v-modal-header>
            Global components
        </v-modal-header>

        <!-- Body -->
        <v-modal-body>
            <h5><pre>&lt;v-modal&gt;</pre></h5>
            <h5><pre>&lt;v-modal-header&gt;</pre></h5>
            <h5><pre>&lt;v-modal-body&gt;</pre></h5>
            <h5><pre>&lt;v-modal-footer&gt;</pre></h5>

            <hr />

            <h5><pre>&lt;v-button&gt;</pre></h5>
            <v-button>Default</v-button>
            <v-button primary>Primary</v-button>

            <hr />

            <h5><pre>&lt;v-input&gt;</pre></h5>
            <v-input placeholder="Placeholder text">
                Use the default slot for labels
                <span slot="comment">Use the &quot;comment&quot; slot for comments</span>
            </v-input>

            <hr />

            <h5><pre>&lt;v-spinner&gt;</pre></h5>
            <v-spinner>Use the default slot for a loading message</v-spinner>
        </v-modal-body>

        <!-- Footer -->
        <v-modal-footer>
            <v-button @click="$emit('hide')">Close</v-button>
        </v-modal-footer>
    </v-modal>
</template>

<script>
    export default {
        props: ['isVisible'],
    };
</script>
