
function validar(form){
    if(!form.nome.value){
        alert('Informe o nome');
    } else if (!form.foto.value) {
        alert('Adicione uma imagem ao anuncio');
    } else if (!form.descricao.value){
        alert('Descreva seu anuncio');
    } else if (!form.data-de-vencimento.value){
        alert('Insira uma data de vencimento ao anúncio');
    } else if (!form.preco.value){
        alert('Insira um preço ao anúncio');
    } else{
        form.submit()   ;
    }
}