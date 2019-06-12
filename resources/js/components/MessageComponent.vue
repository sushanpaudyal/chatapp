<template>
    <div class="card card-default chat-box">
        <div class="card-header">
            Chats
            <!-- Close Button -->
            <a href="" @click.prevent="close">
                <i class="fa fa-times float-right"></i>
            </a>
            <!-- Close Button Ends Here -->

            <!-- Options -->
            <div class="dropdown float-right mr-4"> 
                <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="fasle"> 
                    <i class="fa fa-ellipsis-v"> </i> 
                </a> 
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
                    <a href="#" class="dropdown-item">Block</a> 
                    <a href="#" class="dropdown-item" @click.prevent="clear">Clear Chat</a> 
                </div> 
            </div>

            <!-- Options End Here -->

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
            },
            clear(){
                this.chats = []
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