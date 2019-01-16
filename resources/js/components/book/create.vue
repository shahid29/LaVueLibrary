<template>
    <div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Your Book Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form @submit.prevent="book()"  role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Book Title</label>
                        <input id="exampleInputName" v-model="form.title" type="text" name="title"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                        <has-error :form="form" field="title"></has-error>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputCat">Category Name</label>
                            <select id="exampleInputCat" v-model="form.category_id" type="text" name="category_id"
                                     class="form-control" :class="{ 'is-invalid': form.errors.has('category_id') }">
                                <option :value="result.id" v-for="result in printCategoryInform">{{result.name}}</option>
                            </select>
                            <has-error :form="form" field="category_id"></has-error>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputCat">Author Name</label>
                            <select id="exampleInputCa" v-model="form.author_id" type="text" name="author_id"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('author_id') }">
                                <option  :value="result.id" v-for="result in printmYAuthor">{{result.name}}</option>
                            </select>
                            <has-error :form="form" field="author_id"></has-error>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ISBN</label>
                        <input id="exampleInputEmail1" v-model="form.isbn" type="text" name="isbn"
                               class="form-control" :class="{ 'is-invalid': form.errors.has('isbn') }">
                        <has-error :form="form" field="isbn"></has-error>
                    </div>
                    <div class="form-group">
                        <label for="datepicker">Publication Date</label>
                        <date-picker name="date_of_publication" id="datepicker"
                         v-model="form.date_of_publication" lang="en"
                         class="form-control-lg DatePicker" :class="{ 'is-invalid': form.errors.has('date_of_publication') }">
                        </date-picker>
                        <has-error :form="form" field="date_of_publication"></has-error>
                    </div>
                </div>


                <!-- /.card-body -->

                <div class="card-footer">
                    <router-link class="btn btn-danger" to="/books">Back</router-link>
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
                    'title':'',
                    'category_id':'',
                    'author_id':'',
                    'isbn':'',
                    'date_of_publication':'',
                })


            }
        },

        mounted(){
            this.$store.dispatch("allCategory")
            this.$store.dispatch("hitActionAuthor")
        },

        computed:{
            printCategoryInform(){
                return this.$store.getters.getMyCategory
            },
            printmYAuthor(){
                return this.$store.getters.author
            }
        },

        methods:{
            book(){
                this.form.post('/store')
                    .then((response)=>{
                        this.$router.push('/books')

                        toast({
                            type: 'success',
                            title: 'Author added successfully'
                        })
                    })
            }
        }

    }
</script>

<style scoped>

</style>
