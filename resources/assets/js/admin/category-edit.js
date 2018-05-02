window.Vue = require('vue');
window.axios = require('axios');
window.categoryEdit = new Vue({
    el: '#product-edit-app',
    data: {
        editor:'',
        categoryTitle:'',
        categoryParent:'',
        categoryDescription:'',
        categoryContent:''
    },
    mounted: function () {
        this.editor = CKEDITOR.replace('category-content');
     
    },
    methods: {
        start() {
    
        },
        saveCategory(){
            this.categoryContent = this.editor.getData();         
            let category = {
                'categoryParent':  this.categoryParent,
                'categoryTitle': this.categoryTitle,
                'categoryDescription':  this.categoryDescription,
                'categoryContent':  this.categoryContent       
            };
            axios.post('/admin/categories', {
                category: category
            }).then(function (response) {
                location.href = "/admin/categories";
            });
        }
    }
    });     

    