jQuery(function(){
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
        //PREENCHE COM O DADO ATUAL PARA EDIÇÃO
        if($("select[name=estado]").attr("data-atual") && $("select[name=cidade]").attr("data-atual")){
            $("select[name=estado]").val($("select[name=estado]").attr("data-atual"))
            $("select[name=cidade]").html("<option value='"+$("select[name=cidade]").attr('data-atual')+"'>"+$("select[name=cidade]").attr('data-atual')+"</option>")
        }
        //
    })
    //
})