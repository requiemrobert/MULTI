//Función para comprobar los campos de texto
function validateField(input) {

  var _empty       = (input.val().length <= 0) ? true : false;
  var letter       = /[a-zA-Z]+/g.test(input.val()) ? false : true;
  var email        = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/g.test(input.val()) ? false : true;   
  var valid        = true;

  if (input.attr('required') == 'required' && _empty)
  {
    input.addClass('input-error');
    valid = false;
  }
  else if (input.attr('letter') == 'true' && ( _empty || letter) )
  {
    input.addClass('input-error');
    valid = false;
  }
  else if (input.attr('email') == 'true' && ( _empty || email) )
  {
    input.addClass('input-error');
    valid = false;
  }
  else
  {
    input.removeClass('input-error');
  }

  return valid;
}

function number(e) {

    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);

    if(!patron.test(tecla_final)){
      alert("Únicamente ingrese números");
    }

    return patron.test(tecla_final);

}

function getFormData($form){
    var unindexed_array = $form.serializeArray();

    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return JSON.stringify(indexed_array);
}
