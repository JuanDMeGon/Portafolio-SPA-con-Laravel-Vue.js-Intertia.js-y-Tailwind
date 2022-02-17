<template>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            Welcome3
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        components: {
            //
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
        }
    })
</script>
