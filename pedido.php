<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fazer Pedido - Delícias Graff</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }
    .container {
      max-width: 900px;
      padding-top: 2rem;
    }
    .cursor-pointer {
      cursor: pointer;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <h1 class="text-center mb-4">Fazer Pedido</h1>

    <div class="mb-3 text-end">
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProduto">Adicionar Produto</button>
    </div>

    <table class="table table-bordered table-hover" id="tabelaProdutos">
      <thead>
        <tr>
          <th>Produto</th>
          <th>Detalhes</th>
          <th>Quantidade</th>
        </tr>
      </thead>
      <tbody>
        <!-- Produtos adicionados aqui -->
      </tbody>
    </table>

    <div class="mt-4">
      <label for="nome" class="form-label">Seu nome</label>
      <input type="text" class="form-control mb-3" id="nome" required>

      <label for="telefone" class="form-label">Telefone</label>
      <input type="tel" class="form-control mb-3" id="telefone" required>

      <label for="observacoes" class="form-label">Observações</label>
      <textarea class="form-control mb-4" id="observacoes"></textarea>

      <button class="btn btn-dark" id="enviarPedido">Enviar Pedido via WhatsApp</button>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalProduto" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Selecionar Produto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form id="formProduto">
            <div class="mb-3">
              <label class="form-label">Produto</label>
              <select class="form-select" id="produto" required>
                <option disabled selected value="">Escolha...</option>
                <option>Doces</option>
                <option>Salgados</option>
                <option>Tortas</option>
              </select>
            </div>
            <div class="mb-3 d-none" id="saborGrupo">
              <label class="form-label">Sabor</label>
              <select class="form-select" id="sabor">
                <option>Chocolate</option>
                <option>Marta Rocha</option>
                <option>Quatro Leites</option>
              </select>
            </div>
            <div class="mb-3 d-none" id="tipoGrupo">
              <label class="form-label">Tipo</label>
              <select class="form-select" id="tipo">
                <option>Assados</option>
                <option>Fritos</option>
                <option>Sortidos</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Quantidade</label>
              <input type="number" class="form-control" id="quantidade" min="1" required>
            </div>
            <input type="hidden" id="produtoIndex">
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger me-auto d-none" id="excluirProduto">Excluir</button>
          <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary" id="salvarProduto">Salvar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const listaProdutos = [];
    const tabela = document.querySelector("#tabelaProdutos tbody");

    function atualizarTabela() {
      tabela.innerHTML = "";
      listaProdutos.forEach((p, i) => {
        const linha = document.createElement("tr");
        linha.classList.add("cursor-pointer");
        linha.innerHTML = `
          <td>${p.produto}</td>
          <td>${p.detalhes}</td>
          <td>${p.quantidade}</td>
        `;
        linha.onclick = () => abrirEdicao(i);
        tabela.appendChild(linha);
      });
    }

    document.getElementById("produto").addEventListener("change", e => {
      document.getElementById("saborGrupo").classList.toggle("d-none", e.target.value !== "Tortas");
      document.getElementById("tipoGrupo").classList.toggle("d-none", e.target.value !== "Salgados");
    });

    document.getElementById("salvarProduto").addEventListener("click", () => {
      const produto = document.getElementById("produto").value;
      const sabor = document.getElementById("sabor").value;
      const tipo = document.getElementById("tipo").value;
      const quantidade = document.getElementById("quantidade").value;
      const index = document.getElementById("produtoIndex").value;

      if (!produto || !quantidade) return alert("Preencha os campos obrigatórios.");

      let detalhes = "";
      if (produto === "Tortas") detalhes = sabor;
      if (produto === "Salgados") detalhes = tipo;

      const dados = { produto, detalhes, quantidade };

      if (index === "") {
        listaProdutos.push(dados);
      } else {
        listaProdutos[+index] = dados;
      }

      atualizarTabela();
      bootstrap.Modal.getInstance(document.getElementById("modalProduto")).hide();
    });

    function abrirEdicao(index) {
      const item = listaProdutos[index];
      document.getElementById("produto").value = item.produto;
      document.getElementById("quantidade").value = item.quantidade;
      document.getElementById("produtoIndex").value = index;
      document.getElementById("excluirProduto").classList.remove("d-none");

      const evt = new Event("change");
      document.getElementById("produto").dispatchEvent(evt);

      if (item.produto === "Tortas") document.getElementById("sabor").value = item.detalhes;
      if (item.produto === "Salgados") document.getElementById("tipo").value = item.detalhes;

      new bootstrap.Modal(document.getElementById("modalProduto")).show();
    }

    document.getElementById("excluirProduto").addEventListener("click", () => {
      const index = +document.getElementById("produtoIndex").value;
      listaProdutos.splice(index, 1);
      atualizarTabela();
      bootstrap.Modal.getInstance(document.getElementById("modalProduto")).hide();
    });

    document.getElementById("modalProduto").addEventListener("hidden.bs.modal", () => {
      document.getElementById("formProduto").reset();
      document.getElementById("saborGrupo").classList.add("d-none");
      document.getElementById("tipoGrupo").classList.add("d-none");
      document.getElementById("produtoIndex").value = "";
      document.getElementById("excluirProduto").classList.add("d-none");
    });

    document.getElementById("enviarPedido").addEventListener("click", () => {
      const nome = document.getElementById("nome").value;
      const telefone = document.getElementById("telefone").value;
      const observacoes = document.getElementById("observacoes").value;

      if (!nome || !telefone || listaProdutos.length === 0) {
        alert("Preencha os campos obrigatórios e adicione pelo menos um produto.");
        return;
      }

      let mensagem = `Olá! Gostaria de fazer um pedido:\n\n`;
      listaProdutos.forEach(p => {
        mensagem += `• ${p.produto} (${p.detalhes}) - ${p.quantidade}\n`;
      });
      mensagem += `\nNome: ${nome}\nTelefone: ${telefone}`;
      if (observacoes) mensagem += `\nObservações: ${observacoes}`;

      const numero = "5549991026350";
      const url = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;
      window.open(url, '_blank');
    });
  </script>
</body>
</html>
