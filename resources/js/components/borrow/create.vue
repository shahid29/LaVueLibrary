<template>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Your Borrow Details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form @submit.prevent="Borrow()"  role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputCa">Book Name</label>
                            <select id="exampleInputCa" v-model="form.book_id" type="text" name="book_id"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('book_id') }">
                                <option :value="result.id" v-for="result in printMyBook">{{result.title}}</option>
                            </select>
                            <has-error :form="form" field="book_id"></has-error>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputCat">User Name</label>

                                <select id="exampleInputCat" v-on:keyup="Search()" v-model="form.user_id" type="text" name="user_id"
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('user_id') }">
                                    <option :value="result.id" v-for="result in printMyUser">{{result.name}}</option>
                                </select>
                                <has-error :form="form" field="user_id"></has-error>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datepicker">Issued Date</label>
                            <date-picker name="date_issued" id="datepicker"
                                         v-model="form.date_issued" lang="en"
                                         class="form-control-lg DatePicker" :class="{ 'is-invalid': form.errors.has('date_issued') }">
                            </date-picker>
                            <has-error :form="form" field="date_issued"></has-error>
                        </div>
                        <div class="form-group">
                            <label for="datepicker1">Due for Return</label>
                            <date-picker name="date_due_for_return" id="datepicker1"
                                         v-model="form.date_due_for_return" lang="en"
                                         class="form-control-lg DatePicker" :class="{ 'is-invalid': form.errors.has('date_due_for_return') }">
                            </date-picker>
                            <has-error :form="form" field="date_due_for_return"></has-error>
                        </div>
                    </div>


                    <!-- /.card-body -->

                    <div class="card-footer">
                        <router-link class="btn btn-danger" to="/borrows">Back</router-link>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import DatePicker from 'vue2-datepicker'
    export default {
        components: { DatePicker },
        name: "create",

        data(){
            return{
                form :new Form({
                    'book_id':'',
                    'user_id':'',
                    'date_issued':'',
                    'date_due_for_return':'',


                })


            }
        },


        mounted(){
            this.$store.dispatch("hitActionBook");
            this.$store.dispatch("hitActionUser")
        },
        computed:{
            printMyBook(){
                return this.$store.getters.book
            },
            printMyUser(){
                return this.$store.getters.user
            }
        },

        methods:{
            Borrow(){
                this.form.post('/create')
                    .then((response)=>{
                        this.$router.push('/borrows')

                        toast({
                            type: 'success',
                            title: 'User added successfully'
                        })
                    })
            },

        }


    }
</script>

<style scoped>

</style>
