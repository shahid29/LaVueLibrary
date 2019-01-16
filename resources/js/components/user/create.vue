<template>
    <div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Your User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form @submit.prevent="user()"  role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">User Name</label>
                        <input id="exampleInputName" v-model="form.name" type="text" name="name"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Email</label>
                        <input id="exampleInputEmail1" v-model="form.email" type="text" name="email"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                        <has-error :form="form" field="email"></has-error>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword">User Password</label>
                        <input id="exampleInputPassword" v-model="form.password" type="password" name="password"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                        <has-error :form="form" field="password"></has-error>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputCPassword">Confirm Password</label>
                        <input id="exampleInputCPassword" v-model="form.password_confirmation" type="password" name="password_confirmation"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('password_confirmation') }">
                        <has-error :form="form" field="password_confirmation"></has-error>

                    </div>
                </div>


                <!-- /.card-body -->

                <div class="card-footer">
                    <router-link class="btn btn-danger" to="/user">Back</router-link>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        name: "create",
        data(){
            return{
                form :new Form({
                    'name':'',
                    'email':'',
                    'password':'',
                    'password_confirmation':'',
                })


            }
        },
        methods:{
            user(){
                this.form.post('/create-user')
                    .then((response)=>{
                        this.$router.push('/user')

                        toast({
                            type: 'success',
                            title: 'User added successfully'
                        })
                    })
            }
        }

    }
</script>

<style scoped>

</style>
