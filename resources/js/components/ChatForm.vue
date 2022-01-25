<template>

    <div class="chatForm flex justify-between">

        <input
            required
            id="btn-input"
            type="text"
            name="message"
            class="shadow-sm block w-full text-sm"
            placeholder="Type your message"
            v-model="newMessage"
            @keyup.enter="sendMessage"
        >

        <button
            class="text-sm px-3 ml-3 font-bold"
            id="btn-chat"
            @click="sendMessage">
            Send
        </button>

    </div>

</template>

<script>
export default {
    props: ['user'],

    data() {
        return {
            newMessage: ''
        }
    },

    methods: {
        sendMessage() {
            this.$emit('messagesent', {
                user: this.user,
                message: this.newMessage
            });

            this.newMessage = '';
        }
    }
}
</script>
<style>



</style>
