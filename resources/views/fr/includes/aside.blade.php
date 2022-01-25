<aside class="col-span-12 lg:col-start-9 lg:col-span-3" id="chat">

    <div class="chat-container bg-white overflow-scroll p-5 flex flex-col flex-1">

        <h3
            class="py-3 px-4 shadow text-sm mb-5 bg-white"
        >
            Welcome, <span class="font-bold">{{ $user->name }}</span>
            <small class="block italic">{{ $user->email }}</small>
        </h3>

        <chat-messages
            :messages="messages"
            username="{{ $user->name }}"
        >
        </chat-messages>

        <chat-form
            v-on:messagesent="addMessage"
            user="{{ $user->name }}"
        >
        </chat-form>

    </div>

</aside>
