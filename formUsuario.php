<?php include "header.php" ?>

    <div class="d-flex justify-content-center mb-3">
        <h2>Cadastre-se</h2>
    </div>

    <div class="d-flex justify-content-center mb-3">
        <form action="actionUsuario.php" method="POST" class="was-validated" enctype="multipart/form-data">

            <div class="form-floating mt-3 mb-3">
                <input type="file" name="fotoUsuario" id="fotoUsuario" placeholder="Foto" class="form-control">
                <label for="fotoUsuario">Foto</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating mt-3 mb-3">
                <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome Completo" class="form-control">
                <label for="nomeUsuario">Nome</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating mt-3 mb-3">
                <select name="cursoUsuario" id="cursoUsuario" placeholder="curso" class="form-control">
                    <option value="Técnico em Informática para Internet" selected>Técnico em Informática para Internet</option>
                    <option value="Técnico em Automação Industrial">Técnico em Automação Industrial</option>
                    <option value="Técnico em Mecânica">Técnico em Mecânica</option>
                    <option value="Técnico em Programação de Jogos Digitais">Técnico em Programação de Jogos Digitais</option>
                    <option value="Técnico em Eletromecânica">Técnico em Eletromecânica</option>
                </select>
                <label for="cursoUsuario">Curso</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>


            <div class="form-floating mt-3 mb-3">
                <input type="email" name="emailUsuario" id="emailUsuario" placeholder="Email" class="form-control">
                <label for="emailUsuario">Email</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating mt-3 mb-3">
                <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="Senha" class="form-control" minlength="3" maxlength="8">
                <label for="senhaUsuario">Senha</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating mt-3 mb-3">
                <input type="password" name="confirmarSenhaUsuario" id="confirmarSenhaUsuario" placeholder="Confirme a Senha" class="form-control" minlength="3" maxlength="8">
                <label for="confirmarSenhaUsuario">Confirme a Senha</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <button type="submit" class="btn btn-outline-dark">Cadastrar</button>

        </form>

    </div>

<?php include "footer.php" ?>