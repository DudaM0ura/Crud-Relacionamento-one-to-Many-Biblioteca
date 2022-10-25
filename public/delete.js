const _token = $("#_token").val();
console.log(_token);

const DeletarLivro = (id) => {
    $.ajax({
        type: "delete",
        url: `livros/destroy/${id}`,
        data: {
            _token
        },
        success: function (response) {
            alert("Livro deletado");
            $(`#tr-livros-${id}`).remove();
        }
    });
};

const DeletarCategoria = (id) =>{
    $.ajax({
        type: "delete",
        url: `/categoria/destroy/${id}`,   // sempre colocar a barra no inicio dessa URL - evitar erro 404 que duplica a url
        data: {
            _token
        },
        success: function (response) {
            alert("Categoria deletada");
            $(`#tr-categoria-${id}`).remove();
        }
    });
}