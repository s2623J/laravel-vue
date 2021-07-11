<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form @submit="sendMessage" class="was-validated">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input @keyup="buttonText = name" v-model="name" type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input v-model="email" type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <input v-model="message" type="text" class="form-control" id="message" placeholder="Enter message" name="message" required>
                        <!-- <textArea v-model="message" type="textarea" class="form-control" id="message" placeholder="Enter message" name="message" ></textArea> -->
                    </div>
                    <button v-if="!formSending" type="submit" class="btn btn-primary">Submit</button>
                    <button v-if="!!formSending" class="btn btn-primary">Sending Message...</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default({
        data() {
            return{
                loaded:         false,
                formSending:    false,
                name:           null,
                email:          null,
                message:        null,
                buttonText:     'Click me to change my text to name text'
            }
        },
        mounted(){

        },
        methods:{
            sendMessage(e) {
                e.preventDefault();
                const self = this;
                self.formSending = true;
                axios.post('/contact-us/sendMessage/ajax', {
                    name:       self.name,
                    email:      self.email,
                    message:    self.message
                })
                .then((response) => { 
                    // alert('Thank you! Your message has been sent!');
                    alert(response.data.message);
                    self.formSending = false;

                    self.name = null;
                    self.email = null;
                    self.message = null;
                })
                .catch((error) => {
                    alert('Sorry, message failed.');
                    self.formSending = false;
                })
            }
        }
    })
</script>
