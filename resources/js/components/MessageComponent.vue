<template>
    <div class="card card-default chat-box">
        <div class="card-header">
            Chats
            <a href="" @click.prevent="close">
                <i class="fa fa-times float-right"></i>
            </a>
        </div>
        <div class="card-body" v-chat-scroll="{always: false, smooth: true}">
            <p class="card-text" v-for="chat in chats" :key="chat.message">
                {{chat.message}}
            </p>
        </div>
        <form class="card-footer" @submit.prevent="send">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Write your message here">
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                chats : [],
            }
        },
        methods : {
            send(){
                console.log("sent")
            },
            close(){
                this.$emit('close');
            }
        },
        created(){
            this.chats.push(
                {message: 'Hey'},
                {message: 'How are You'},
                {message: 'How are You Suahn'},
                {message: 'Is Everything Good Bro'},
                {message: 'Thanks'},
                {message: 'How'},
                {message: 'is that possible'},
                {message: 'See you soon'},
                {message: 'Sushan Paudyal'},

            )
        }
    }
</script>