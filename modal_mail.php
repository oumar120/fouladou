<div class="modal fade" id="modal_download" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <p>Pour télécharger veuillez remplir ce formulaire</p>
<form method="post" action="traiter.php">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">prénom:</label>
      <input type="text" class="form-control" name="nom1" required minlength="3" maxlength="15" >
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">nom:</label>
      <input type="text" class="form-control" name="nom2" required minlength="2" maxlength="10" >
                    </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-12">
                    <div class="form-group">
                    <label for="" class="col-form-label">email:</label>
                    <input type="email" class="form-control" name="nom3" required>
                    </div>               
                    </div> 
                </div>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                <button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button>
            </div>
        </form> 
        </div>
    </div>
</div>