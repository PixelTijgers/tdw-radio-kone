// Import bootstrap file.
require('./bootstrap');

// Import alpine js file.
require('alpinejs');

// Init Common & load.
(window['Common'] = require('./load.js')).init();

// Import Vue.
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll';

// Set components.
//Vue.component('chat-form', require('./components/ChatForm.vue').default);
//Vue.component('chat-messages', require('./components/ChatMessages.vue').default);

// Import moment.
//Vue.use(require('vue-moment'));
//Vue.use(VueChatScroll);

/*
// Init Vue.
const app = new Vue({

    // Attach components to element.
    el: '#chat',

    // Props used.
    data: {
        messages: []
    },

    // Init on page load.
    created() {

        // Return all current messages.
        this.fetchMessages();

        // Listen to event. New messages will be loaded.
        Echo.channel('chat')
            .listen('MessageSent', (e) => {
                console.log(e);
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                });
            });
    },

    methods: {

        // Fetch all messages.
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            });
        },

        // Insert message in the database.
        addMessage(message) {
            this.messages.push(message);

            axios.post('/messages', message).then(response => {
                console.log(response.data);
            });
        }
    },
});
*/
