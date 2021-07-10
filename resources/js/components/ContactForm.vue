<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="/contact-us/sendMsg" class="was-validated">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input @keyup="buttonText = name" v-model="name" type="text" class="form-control" id="name" placeholder="Enter name" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="msg">Message:</label>
                        <textArea class="form-control" id="msg" placeholder="Enter message" name="msg" ></textArea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div @click="buttonText = name" class="btn btn-primary">{{ buttonText }}</div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default({
        data() {
            return{
                loaded: false,
                name: '',
                buttonText: 'Click me to change my text to name text'
            }
        },
        mounted(){

        },
        methods:{

        }
    })
</script>
