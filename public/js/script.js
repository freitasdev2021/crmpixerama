jQuery(function(){
    //
    $(document).ready(function(){
        //FORMATAR TEXTO SEM CARACTERES ESPECIAIS
        $('input[type=name]').bind('input',function(){
            str = $(this).val().replace(/[^A-Za-z\u00C0-\u00FF\-\/\s]+/g,'');
            str = str.replace(/[\s{ \2 }]+/g,' ');
            if(str == " ")str = "";
            $(this).val( str );
        });
        //FORMATAR TEXTAREA SEM CARACTERES ESPECIAIS
        $('textarea').bind('textarea',function(){
            str = $(this).val().replace(/[^A-Za-z\u00C0-\u00FF\-\/\s]+/g,'');
            str = str.replace(/[\s{ \2 }]+/g,' ');
            if(str == " ")str = "";
            $(this).val( str );
        });
        //EXCLUIR OS ERROS QUANDO RECARREGAR A TELA
        $(".error-input").hide()
    })
    //SELECT DE CIDADES E ESTADOS
    $.ajax({
        method : "GET",
        url : "https://raw.githubusercontent.com/rennanmserenza/dados-brasil/main/estados-com-cidades.json"
    }).done(function(response){
        var cidadesEstados = jQuery.parseJSON(response)
        cidCount = -1;
        cidadesEstados.estados.forEach((i)=>{
            cidCount++;
            //PREENCHE OS CAMPOS DA SELEÇÃO DE ESTADO
            $("select[name=estado]").append("<option value='"+i.sigla+"' data-position='"+cidCount+"'>"+i.sigla+"</option>")
        })
        //PREENCHE DINAMICAMENTE AS CIDADES
        $("select[name=estado]").on("change",function(){
            $("select[name=cidade]").html("")
            cidadesEstados.estados[$("select[name=estado] option:selected").attr("data-position")].cidades.forEach((c)=>{
                $("select[name=cidade]").append("<option value='"+c.nomeCidade+"'>"+c.nomeCidade+"</option>")
            })
        })
        //
    })
    //
})