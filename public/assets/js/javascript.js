(function(win,doc){
    'use stric';
    
    function confirmDelete(event)
    {
        event.preventDefault();

        let token = doc.getElementsByName("_token")[0].value; //input type name= _token
        if(confirm("Deseja mesmo deletar o registro?")){
            let ajax = new XMLHttpRequest();
            ajax.open("DELETE", event.target.parentNode.href); //Define método Delete
            ajax.setRequestHeader('X-CSRF-TOKEN', token); //Laravel exige que use um código de validação
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4 && ajax.status == 200){ //Verificar Requisição
                    win.location.href="orcamento"; //redireciona para página orcamento
                } 
            };
            ajax.send();
        }else{
            return false;
        }
    }

    // function confirmPagina(event)
    // {


        
    //     alert(event.target.parentNode.href);
    //     windows.load

        // event.preventDefault();

        // let token = doc.getElementsByName("_token")[0].value; //input type name= _token
        
        //     let ajax = new XMLHttpRequest();
        //     ajax.open("GET", event.target.parentNode.href); //Define método Delete
        //     ajax.setRequestHeader('X-CSRF-TOKEN', token); //Laravel exige que use um código de validação
        //     ajax.onreadystatechange = function(){
        //         if(ajax.readyState == 4 && ajax.status == 200){ //Verificar Requisição
        //             alert("testando");
        //         } 
        //     };
        //     ajax.send();
        
    //}

    // if(doc.querySelector('.js_pagina'))
    // {
    //     let btn=doc.querySelectorAll('.js_pagina');

    //     for(let i=0; i<btn.length; i++){
    //         btn[i].addEventListener('click',confirmPagina,false);
    //     }
    // }

    if(doc.querySelector('.js_delete'))
    {
        let btn=doc.querySelectorAll('.js_delete');

        for(let i=0; i<btn.length; i++){
            btn[i].addEventListener('click',confirmDelete,false);
        }
    }
})(window,document);