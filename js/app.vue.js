Vue.filter("inverse", function(data){
    return data.split('').reverse().join('');
});

new Vue({
    el:"#app",
    data:{
        nom:"",
        eleves:[{
            id:1,
            nom:"SaFrAnO",
            prenom:"jOcElYn",
        },
        {
            id:4,
            nom:"aZeRtY",
            prenom:"jOcElYn",
        },
        {
            id:2,
            nom:"QwErTy",
            prenom:"jOcElYn",
        }],
    },
        methods:{
            Test:function(){
                alert(this.eleves.length);
            },
        }
    
});