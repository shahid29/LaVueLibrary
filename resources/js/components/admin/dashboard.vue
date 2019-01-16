<template>
   <div>
       <div class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1 class="m-0 text-dark">Dashboard</h1>
                   </div><!-- /.col -->
               </div><!-- /.row -->
           </div><!-- /.container-fluid -->
       </div>
       <section class="content">
           <div class="container-fluid">
               <!-- Small boxes (Stat box) -->
               <div class="row">
                   <div class="col-lg-3 col-6">
                       <!-- small box -->
                       <div class="small-box bg-info">
                           <div class="inner">
                               <h3 >{{printCategoryInform.length}}</h3>

                               <p>Total Category</p>
                           </div>
                           <div class="icon">
                               <i class="ion ion-bag"></i>
                           </div>
                           <router-link to="/category"  class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></router-link>
                       </div>
                   </div>
                   <!-- ./col -->
                   <div class="col-lg-3 col-6">
                       <!-- small box -->
                       <div class="small-box bg-success">
                           <div class="inner">
                               <h3>{{printmYAuthor.length}}<sup style="font-size: 20px"></sup></h3>

                               <p>Total Author</p>
                           </div>
                           <div class="icon">
                               <i class="ion ion-stats-bars"></i>
                           </div>
                           <router-link to="/author"  class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></router-link>
                       </div>
                   </div>
                   <!-- ./col -->
                   <div class="col-lg-3 col-6">
                       <!-- small box -->
                       <div class="small-box bg-warning">
                           <div class="inner">
                               <h3>{{printMyUser.length}}</h3>

                               <p>Total User</p>
                           </div>
                           <div class="icon">
                               <i class="ion ion-person-add"></i>
                           </div>
                           <router-link to="/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></router-link>
                       </div>
                   </div>
                   <div class="col-lg-3 col-6">
                       <!-- small box -->
                       <div class="small-box bg-brown">
                           <div class="inner">
                               <h3>{{printMyBook.length}}</h3>

                               <p>Total Book</p>
                           </div>
                           <div class="icon">
                               <i class="ion ion-pie-graph"></i>
                           </div>
                           <router-link to="/books" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></router-link>
                       </div>
                   </div>
                   <!-- ./col -->
                   <div class="col-lg-3 col-6">
                       <!-- small box -->
                       <div class="small-box bg-danger">
                           <div class="inner">
                               <h3>{{printMyBorrowBook_date_return.length}}</h3>
                               <p>Total Borrow</p>
                           </div>
                           <div class="icon">
                               <i class="ion ion-pie-graph"></i>
                           </div>
                           <router-link to="/borrows" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></router-link>
                       </div>
                   </div>
                   <!-- ./col -->
               </div>

           </div><!-- /.container-fluid -->
       </section>
   </div>
</template>

<script>
    export default {
        name: "dashboard",

        mounted(){
            this.$store.dispatch("hitActionAuthor")
            this.$store.dispatch("hitActionBook");
            this.$store.dispatch("allCategory")
            this.$store.dispatch("hitActionBorrow_date_return")
            this.$store.dispatch("hitActionUser")
        },
        computed:{
            printmYAuthor(){
                return this.$store.getters.author
            },
            printMyBook(){
                return this.$store.getters.book
            },
            printMyBorrowBook_date_return(){
                return this.$store.getters.borrow_date_return
            },
            printCategoryInform(){
                return this.$store.getters.getMyCategory
            },
            printMyUser(){
                return this.$store.getters.user
            }
        },
    }
</script>

<style scoped>

</style>
