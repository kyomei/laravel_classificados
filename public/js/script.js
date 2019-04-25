$(document).ready(function() {

	// Exibir modal ao excluir um anúncio
	$('a[data-confirm').bind('click', function(e){
		// Cancela ação do href
		e.preventDefault();

		// Pega o valor do atributo href
		var href = $(this).attr('href');	

		if(!$('#confirm-delete').length) {
			$('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header bg-dark text-white"><h5 class="modal-title">EXCLUIR ITEM</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-white">&times;</span></button></div><div class="modal-body"><p>Tem certeza que deseja excluir o item selecionado?</p></div><div class="modal-footer"><button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Cancelar</button><a class="btn btn-sm btn-danger text-white" id="dataConfirmOk">Apagar</a></div></div></div></div>');
		}
		$('#dataConfirmOk').attr('href', href);
		$('#confirm-delete').modal({shown:true});

	});
});