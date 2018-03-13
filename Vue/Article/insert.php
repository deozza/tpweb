<div class="main" id="start">
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 mx-auto">
                    <h1>Ecrire un article</h1>
                    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
                    <form class="form-signin" id="register" method="POST" action="../Functions/insert.php">
                        <label for="titre" class="sr-only">Titre de l'article</label>
                        <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre de l'article" required autofocus>

                        <label for="image" class="sr-only">Image</label>
                        <input type="text" name="image" id="image" class="form-control" placeholder="Image" required>

                        <textarea name="editor1" id="editor1" rows="10" cols="80">
                            This is my textarea to be replaced with CKEditor.
                        </textarea>

                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace( 'editor1' );
                        </script>

                        <button class="btn btn-success" type="submit" value="submit" name="register">Créer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>