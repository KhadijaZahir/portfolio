$('#modal<?=$data2['id']?>').on('shown.bs.modal',func(){
 $('#myInput').trigger('focus')
})

$('#modal<?=$data2['id']?>').modal(options)
