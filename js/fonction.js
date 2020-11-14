	$(document).on("click", ".btn_download", function(){
	contenu=$(this).data('var');
	$.ajax({
          url: "./traiter.php",
          type: "POST",
          datatype:"json",    
          data:  { 
              contenu:contenu
              },
         success: function(data) {
        document.getElementById('reponse').innerHTML=data;
           }
        }) 
  $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text('Télécharger '+ contenu);    
    $('#modal_download').modal('show');       	        
});

function aller(){
  $(".modal-header").css("background-color", "#007bff");                      
    $(".modal-header").css("color", "white" );  
    $(".modal-title").text("Merci de nous faire part de vos remarques ou suggestions");
    $(".modal-title").css("color","white");
    $('#form').modal('show');  
}

function go(){
  $(".modal-header").css("background-color", "#007bff"); 
    $(".modal-footer").css("background-color", "#007bff");                 
    $(".modal-header").css("color", "white" );  
    $(".modal-title").text("BIENVENUE SUR FOULADOU.SITE")
    $(".modal-title").css("color","white");  
    $('#modalCRUD').modal('show');  
}
var option;
$('#formUsuarios').submit(function(e){      
option=1;                   
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    nom1 = $.trim($('#nom1').val());    
    nom2 = $.trim($('#nom2').val());
    nom3 = $.trim($('#nom3').val());    
    nom4 = $.trim($('#nom4').val());                             
        $.ajax({
          url: "./traiter.php",
          type: "POST",
          datatype:"json",    
          data:  {
              nom1:nom1,
              nom2:nom2,
              nom3:nom3,
              nom4:nom4,
              option:option
              },
       success: function(data) {
            alert("votre message a bien été envoyé");
           }   
        });
  $('#form').modal('hide');                                             
});
