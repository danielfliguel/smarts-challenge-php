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

3. Escolha um local de sua preferência para baixar o projeto, clique com o botão direito dentro do local escolhido e escolha a opção "Git bash here". Dentro do terminal que se abrirá digite:

    `git clone https://github.com/danielfliguel/docker-php.git smarts-challenge`

4. Após a conclusão do processo, será criada a pasta `smarts-challenge` no local.  

5. Abra a pasta `smarts-challenge` e abra a pasta `www`. Exclua o arquivo `index.php`, clique com o botão direito e escolha a opção "Git bash here". Dentro do terminal digite:

    `git clone https://github.com/danielfliguel/smarts-challenge-php.git .`

6. Retorne à raiz da pasta criada no passo 4, segure a tecla shift, clique com o botão direito e escolha a opção "Abrir janela do PowerShell aqui"

7. Digite o comando `docker ps` e verifique se há containers rodando. Caso haja, pare todos com o comando `docker stop $(docker ps -a -q)` antes de prosseguir

8. Digite o comando `docker-compose up -d --build`

9. Após a conclusão do processo, digite `docker-compose up`

10. Abra o navegador e digite `localhost/`