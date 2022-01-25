<template>
    <ul class="chat flex h-100 flex-1 flex-col overflow-scroll" v-chat-scroll>
        <li v-for="message in messages">
            <div class="chat-body">
                <div
                    class="py-3 px-4 shadow rounded-md text-sm mb-5 w-3/4"
                    :class="message.user.name ? message.user.name !== username ? 'message' : 'userMessage' : message.user !== username ? 'message' : 'userMessage'"
                >
                    <div v-if="message.user !== username" class="header">
                        <strong class="primary-font">
                            {{ message.user.name }}
                        </strong>
                    </div>
                    <div v-else>
                        <strong class="primary-font">
                            {{ message.user }}
                        </strong>
                    </div>
                    {{ message.message }}
                    <div
                        class="text-xs block"
                    >
                    </div>
                </div>
            </div>
        </li>
    </ul>
</template>

<script>
export default {
    props: ['messages', 'username'],
};
</script>
