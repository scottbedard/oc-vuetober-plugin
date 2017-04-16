<template>
    <div>
        <!--
            we can use the trans filter to translate values. in order
            for this filter to work, make sure you're passing in the
            neccessary language strings in the _example.htm partial
        -->
        <label>{{ 'author.plugin::lang.example.message' | trans(lang) }}</label>

        <!--
            we can pass our data back to October by using a name that
            is formatted like Model[field]. for complex form widgets
            this can be a hidden field containing stringified json.
        -->
        <v-input name="Thing[example]" v-model="input" />

        <!-- This modal just demonstrates some of the global componnets -->
        <v-example-modal :is-visible="modalIsVisible" @hide="onModalHidden" />

        <v-button @click="onButtonClicked">
            Click to see global components
        </v-button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                modalIsVisible: false,
                input: this.value, // <- setting our initial value
            };
        },
        components: {
            'v-example-modal': require('./example_modal/example_modal'),
        },
        methods: {
            onButtonClicked() {
                this.modalIsVisible = true;
            },
            onModalHidden() {
                this.modalIsVisible = false;
            },
        },
        props: [
            'lang',
            'value',
        ],
    };
</script>
