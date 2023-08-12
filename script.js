const alunoBotao = document.getElementById("aluno");
const professorBotao = document.getElementById("professor");
const disciplinaBotao = document.getElementById("disciplina");
const botoesContainer = document.getElementById("botoes-secundarios"); 

let botoesAdicionados = [];

alunoBotao.addEventListener('click', function () {
    limparBotoes();
    
    const novoBotaoCadastrar = criarBotao('./aluno/cadastrar/cadaluno.php', 'Cadastrar Aluno');
    const novoBotaoListar = criarBotao('./aluno/listar/listaalunos.php', 'Listar Aluno');

    botoesContainer.appendChild(novoBotaoCadastrar);
    botoesContainer.appendChild(novoBotaoListar);
    
    botoesAdicionados.push(novoBotaoCadastrar, novoBotaoListar);
});

professorBotao.addEventListener('click', function () {
    limparBotoes();
    
    const novoBotaoCadastrar = criarBotao('./professor/cadastrar/cadprof.php', 'Cadastrar Professor');
    const novoBotaoListar = criarBotao('./professor/listar/listaprof.php', 'Listar Professores');

    botoesContainer.appendChild(novoBotaoCadastrar);
    botoesContainer.appendChild(novoBotaoListar);
    
    botoesAdicionados.push(novoBotaoCadastrar, novoBotaoListar);
});

disciplinaBotao.addEventListener('click', function () {
    limparBotoes();
    
    const novoBotaoCadastrar = criarBotao('./disciplina/cadastrar/cadadis.php', 'Cadastrar Disciplina');
    const novoBotaoListar = criarBotao('./disciplina/listar/listadis.php', 'Listar Disciplinas');

    botoesContainer.appendChild(novoBotaoCadastrar);
    botoesContainer.appendChild(novoBotaoListar);
    
    botoesAdicionados.push(novoBotaoCadastrar, novoBotaoListar);
});

function limparBotoes() {
    while (botoesAdicionados.length > 0) {
        const botaoRemover = botoesAdicionados.pop();
        botaoRemover.remove();
    }
}

function criarBotao(link, texto) {
    const novoBotao = document.createElement("button");
    const novoLink = document.createElement("a");
    novoLink.href = link;
    novoLink.className = "button";
    novoLink.textContent = texto;
    novoBotao.appendChild(novoLink);
    novoBotao.classList.add("botao");
    novoBotao.classList.add("secundario");
    return novoBotao;
}