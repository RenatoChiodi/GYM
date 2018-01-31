/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-administrator').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('administrator');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir ID: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

$('#delete-modal-advisor').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('advisor');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir ID: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

$('#delete-modal-customer').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir ID: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

