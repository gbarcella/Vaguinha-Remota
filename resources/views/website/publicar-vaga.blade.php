@extends('website.partials.base')

@section('content')
<div class="div-publicar-vaga">
    
    <h1 class="texto-roxo">Publicar Vaga</h1>
    <h6 class="texto-roxo">Obs: todas vagas passam por análise interna, portanto, não será divulgada imediatamente afim de garantir a qualidade da mesma.</h6>
    <br>

    <form class="form-publicar-vaga" action="{{ route('cadastrar-vaga') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label texto-roxo">Título da Vaga</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Exemplo: Desenvolvedor Java Pleno" required>
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label texto-roxo">Categoria da Vaga</label>
            <select class="form-select" name="categoria_id" required>
                <option selected disabled>Escolha uma categoria</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>  
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="remuneracao" class="form-label texto-roxo">Remuneração da Vaga</label>
            <input type="text" class="form-control" id="remuneracao" name="remuneracao" placeholder="Exemplo: R$8.000,00 ou À Combinar" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label texto-roxo">Descrição da Vaga</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
        </div>
        <div class="mb-3" id="requisitos-container">
            <label for="titulo" class="form-label texto-roxo">Requisitos da Vaga</label>
            <div class="row">
                <div class="col-10">
                    <input type="text" class="form-control" id="requisitos" name="requisitos[]" placeholder="Exemplo: 2 anos de experiência com SpringBoot">
                </div>
                <div class="col-2 d-flex">
                    <button type="button" class="btn btn-hero" onclick="adicionarInputRequisito()"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>

        <div class="mb-3" id="beneficios-container">
            <label for="titulo" class="form-label texto-roxo">Benefícios da Vaga</label>
            <div class="row">
                <div class="col-10">
                    <input type="text" class="form-control" id="beneficios" name="beneficios[]" placeholder="Exemplo: Vale Alimentação/Refeição - R$1.000,00">
                </div>
                <div class="col-2 d-flex">
                    <button type="button" class="btn btn-hero" onclick="adicionarInputBeneficio()"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="titulo" class="form-label texto-roxo">Link para Candidatura (Pode ser site próprio, link direto para o whatsapp, email, etc...)</label>
            <input type="text" class="form-control" id="link_candidatura" name="link_candidatura" placeholder="Exemplo: htpps://wa.me/seu-numero-do-whatsapp" required>
        </div>

        <div class="mb-3">
            <label for="outras_informacoes" class="form-label texto-roxo">Outras Informações (Caso queira compartilhar algo a mais)</label>
            <textarea class="form-control" id="outras_informacoes" name="outras_informacoes" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="nome_empresa" class="form-label texto-roxo">Nome da Empresa</label>
            <input type="text" class="form-control" id="nome_empresa" name="nome_empresa" placeholder="Exemplo: Microsoft" required>
        </div>

        <div class="mb-3">
            <label for="nome_empresa" class="form-label texto-roxo">Logotipo da Empresa (Logotipo)</label>
            <input type="text" class="form-control" id="logotipo_empresa" name="logotipo_empresa" placeholder="OBS: Cole aqui o link do logotipo da sua empresa, pode ser do facebook, instagram, google, etc...">
        </div>

        <button type="submit" class="btn btn-hero">Publicar Vaga &nbsp;<i class="fa-solid fa-paper-plane"></i></button>
      </form>
</div>

<script>
function adicionarInputRequisito() {
    var container = document.getElementById("requisitos-container");
    var novoInput = document.createElement("div");
    novoInput.innerHTML = `
        <div class="row">
        <label for="requisito" class="texto-roxo">Requisito:</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="requisitos" name="requisitos[]">
                </div>
                <div class="col-2 d-flex">
                    <button type="button" class="btn btn-hero" onclick="removerInputRequisito(this)"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
        `;
    container.appendChild(novoInput);
}

function removerInputRequisito(botao) {
    var divPai = botao.closest('.row');
    divPai.remove();
}

function adicionarInputBeneficio() {
    var container = document.getElementById("beneficios-container");
    var novoInput = document.createElement("div");
    novoInput.innerHTML = `
       <div class="row">
        <label for="beneficio" class="texto-roxo">Benefício:</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="beneficios" name="beneficios[]">
                </div>
                <div class="col-2 d-flex">
                    <button type="button" class="btn btn-hero" onclick="removerInputBeneficio(this)"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
        `;
    container.appendChild(novoInput);
}

function removerInputBeneficio(botao) {
    var divPai = botao.closest('.row');
    divPai.remove();
}
</script>

@stop