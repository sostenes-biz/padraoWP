jQuery( function($){

// Listar Posts
var page = 1;
var slug = $('list-group-item.active').data('slug');

var listarPostsAjax = function(page, slug){

	$.ajax({
		url: wp.ajaxurl,
		type: 'GET',
		data:{
			action: 'listarPosts',
			page: page,
			slug: slug
		},
		beforeSend:function(){
			$('.progress').removeClass('d-none');
		}
	})
	.done(function(resposta){
		$('.progress').addClass('d-none');
		$('#listar-posts').html(resposta);
	})
	.fail(function(){
		console.log('Algo deu errado!!!');
	})

}

listarPostsAjax(page, slug);

// Ação ao clicar na categoria
$('.list-group-item').on('click', function(){
	slug = $(this).data('slug');
	listarPostsAjax(1, slug);
	$('.list-group-item').removeClass('active');
	$(this).addClass('active');
});

// Ação ao clicar na paginação
$('body').on('click', '.page-item', function(){
	page = $(this).find('span').text();
	listarPostsAjax(page, slug);
	$('.page-item').removeClass('active');
	$(this).addClass('active');
});

// Ação do botão limpar
$('#btn-limpar').on('click', function(){
	listarPostsAjax(1, slug);
	$(this).addClass('d-none');
	$('#campo-busca').val('');
});

$('#campo-busca').on('keyup', function(){
	listarPostsAjax(1, slug);
	$('#btn-limpar').removeClass('d-none');
});

})