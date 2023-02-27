<?php include_once 'includs/header.php' ?>


<h1 class="mt-4">Criando Novo Produto</h1>
<!--Create-->
<form class="row g-3 needs-validation" action="includs/php/create.php" method="POST" novalidate>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="validationCustom01" required>
        <div class="invalid-feedback">
            porfavor digite um nome!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Descricao</label>
        <input type="text" name="descricao" class="form-control" id="validationCustom02" required>
        <div class="invalid-feedback">
            porfavor digite uma descricao!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Preco</label>
        <input type="text" name="preco" class="form-control" id="validationCustom03" required>
        <div class="invalid-feedback">
            porfavor digite um prco!
        </div>
    </div>
    <div class="col-md-12">
        <label for="validationCustom04" class="form-label">scolha uma Imagem</label>
        <input class="form-control" type="file" name="imagem" id="formFile" required>
        <div class="invalid-feedback">
            porfavor selecione um imagem!
        </div>
    </div>
    <div class="col-12">
        <button name="btn" class="btn btn-primary" type="submit">Registar</button>
    </div>
</form>



<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>


</div>

<?php include_once 'includs/footer.php' ?>