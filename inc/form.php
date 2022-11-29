<div class="form-modal" id="modal">
    <div class="form-modal-content">
        <i class="fa fa-close" id="close-form" onclick="closeModal()" style="font-size:24px; color:#fff; cursor:pointer"></i>
        <h2>Entrar em contato</h2>
        <form style=" background-color: #008000;
    padding: 28px;" action="https://api.staticforms.xyz/submit" method="POST" class="form">
        <input type="hidden" name="accessKey" value="0d882dd7-db8a-4454-beae-a8e5ad092839">
        <input type="hidden" name="redirectTo" value="https://maquininhasdecartaoms.com.br">
        <label style="color: #fff;" for="exampleFormControlInput1">Nome</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="João">
        <label style="color: #fff;" for="exampleFormControlInput1">Telefone com DDD</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="telefone" placeholder="(11)99999-9999">

        <div class="form-group">
            <label style="color: #fff;" for="exampleFormControlInput1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="nome@exemplo.com">
        </div>

        <div class="form-group">
            <label style="color: #fff;" for="exampleFormControlSelect1">Maquininha</label>
            <select class="form-control" id="exampleFormControlSelect1" name="subject">
                <option>Stone</option>
                <option>Moderninha</option>
                <option>PagSeguro</option>

            </select>
        </div>
        <div class="form-group">
            <label style="color: #fff;" for="exampleFormControlSelect2"></label>
            <div class="form-group">
            <label style="color: #fff;" for="exampleFormControlInput1">Media do valor transacional em R$</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Ajuda na aprovacao de melhores precos">
        </div>

        </div>
        <div class="form-group">
            <label style="color: #fff;" for="exampleFormControlTextarea1">Informações sobre o seu comercio</label>
            <textarea class="form-control" name="number" id="exampleFormControlTextarea1" rows="3"></textarea>

            <button style="margin: 0 auto; margin-top: 12px;" type="submit" class="d-flex justify-content-center btn btn-primary">Enviar</button>
        </div>
    </form>
    </div>
</div>