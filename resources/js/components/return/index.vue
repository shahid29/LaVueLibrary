<template>
    <div>
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Book Return List</h3>
                            <div class="card-tools">
                                <!--<router-link to="/add-borrow" class="btn btn-success"  >Add Borrow</router-link>-->
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th>Book Name</th>
                                    <th>User Name</th>
                                    <th>Date Issued</th>
                                    <th>Date Return</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-if="result.date_return!=null" v-for="(result,index) in printMyBorrowBook">
                                    <td>{{index+1}}</td>
                                    <td>{{result.book.title|sortlenght(10,"..")}}</td>
                                    <td>{{result.user.name}}</td>
                                    <td>{{result.date_issued | timeFormat}}</td>
                                    <td>{{result.date_return | timeFormat}}</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SN.</th>
                                    <th>Book Name</th>
                                    <th>User Name</th>
                                    <th>Date Issued</th>
                                    <th>Date Return</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card --
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
</template>

<script>
    export default {
        name: "index",

        mounted(){
            this.$store.dispatch("hitActionBorrow")
        },
        computed:{
            printMyBorrowBook(){
                return this.$store.getters.borrow
            }
        },

    }

</script>

<style scoped>

</style>
