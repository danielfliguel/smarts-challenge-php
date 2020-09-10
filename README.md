# Dashboard Smart Staff
---

## Funcionalidades
* Esta aplicação constrói uma lista de usuários a partir de um arquivo JSON.
* A aplicação permite ordenar a exibição dos dados por: nome do usuário, email, empresa, idade e orçamento.
* É possível filtrar o número de usuários exibidos pela data de registro ao informar um intervalo de datas nos campos localizados acima da lista.
* Ao clicar sobre a foto de um usuário, são exibidos os detalhes do mesmo em uma nova aba.
---

## Instalação do ambiente
1. Instale o Docker for windows, disponível em:
    
    `https://hub.docker.com/editions/community/docker-ce-desktop-windows/`

2. Instale a ferramenta Git for Windows, disponível em:

    `https://gitforwindows.org/`

4. Escolha um local de sua preferência para baixar o projeto, clique com o botão direito dentro do local escolhido e clique em "Git bash here". Dentro do terminal que se abrirá digite:

    `git clone https://github.com/danielfliguel/docker-php.git smarts-challenge`

5. Após a conclusão do processo, feche o terminal e abra a pasta `smarts-challenge`

6. Entre na pasta `www` e exclua o arquivo `index.php`. Clique com o botão direito e escolha a opção "Git bash here". Dentro do terminal digite:

    `git clone https://github.com/danielfliguel/smarts-challenge-php.git .`

6. Retorne à raiz da pasta criada no passo 4, segure a tecla shift, clique com o botão direito e escolha a opção "Abrir janela do PowerShell aqui"

7. Com o PowerShell aberto, digite o comando `docker-compose up -d --build`

8. Após a conclusão do processo, digite `docker-compose up`

9. Abra o navegador e digite `localhost/`