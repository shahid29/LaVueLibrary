import home from './components/admin/dashboard.vue'
import categoryIndex from './components/category/index'
import createCategory from './components/category/create'
import CatEdit from './components/category/edit'

//author
import authorIndex from './components/author/index'
import createAuthor from './components/author/create'
import AuthorEdit from './components/author/edit'

//user
import userIndex from './components/user/index'
import addUser from './components/user/create'
import UserEdit from './components/user/edit'

//books
import bookIndex from './components/book/index'
import addBook from './components/book/create'
import BookEdit from './components/book/edit'

//Borrows
import borrowIndex from './components/borrow/index'
import addBorrow from './components/borrow/create'
import editBorrow from './components/borrow/edit'

//Return
import returnIndex from './components/return/index'

export const routes = [
    //dashboard
    {
        path:'/',
        component:home
    },
    //category
    {
        path:'/category',
        component:categoryIndex
    },
    {
        path:'/create-category',
        component:createCategory
    },
    {
        path:'/cat-edit/:id',
        component:CatEdit
    },

    //author
    {
        path:'/author',
        component:authorIndex
    },
    {
        path:'/add-author',
        component:createAuthor
    },
    {
        path:'/author-edit/:id',
        component:AuthorEdit
    },

    //user
    {
        path:'/user',
        component:userIndex,
    },
    {
        path:'/add-user',
        component:addUser
    },
    {
        path:'/user-edit/:id',
        component:UserEdit
    },

    //books
    {
        path:'/books',
        component:bookIndex
    },
    {
        path:'/add-book',
        component:addBook
    },
    {
        path:'/book-edit/:id',
        component:BookEdit
    },

    //Borrow
    {
      path:'/borrows',
      component:borrowIndex
    },
    {
        path:'/add-borrow',
        component:addBorrow
    },
    {
        path:'/borrow-edit/:id',
        component:editBorrow
    },

    //retrun
    {
        path:'/return',
        component:returnIndex
    }
];


