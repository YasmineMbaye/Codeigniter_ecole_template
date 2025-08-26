document.getElementById("mdp").addEventListener('click', function(){
    if(document.getElementById("input").type == 'password' ){
        document.getElementById("input").type='text';
        document.getElementById("mdp").classList.add('active');

    }
    else{
        document.getElementById("input").type='password';
        document.getElementById("mdp").classList.remove('active');
       
    }
});
document.getElementById("mdps").addEventListener('click', function(){
    if(document.getElementById("inputs").type == 'password' ){
        document.getElementById("inputs").type='text';
        document.getElementById("mdps").classList.add('active');

    }
    else{
        document.getElementById("inputs").type='password';
        document.getElementById("mdps").classList.remove('active');
       
    }
});