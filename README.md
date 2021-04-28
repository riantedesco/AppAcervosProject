Descrição do projeto
    O projeto a ser detalhado consiste na criação de uma ferramenta que possibilite o registro de itens pessoais numa biblioteca online. O usuário terá acesso a essa plataforma e poderá registrar seus objetos pessoais, bem como consulta-los quando desejar.

Objetivo do projeto
    Desenvolver uma ferramenta que possibilite ao usuário registrar seus objetos, como coleçoes de livros ou o que desejar, na plataforma, onde o acesso é retido exclusivamente ao usuário, bem como realizar consultas e navegar pela sua biblioteca.

Justificativa do projeto
    O projeto se baseou na necessidade de uma melhor organização pessoal, voltado para que pessoas que armazenam ou colecionam algo, possam ter onde organizar e controlar as informações de sua coleção.

Exclusões específicas
    •	A ferramenta apenas possibilita o registro e consulta de acervos do usuário, não se retendo a outras funções;
    •	O registro é feito pelo usuário e a organização da biblioteca decorre dos itens inclusos por ele. Qualquer informação preenchida incorretamente é de total responsabilidade do usuário;
    •	A plataforma não disponibiliza recurso de validação dos registros. A responsabilidade de incluir títulos existentes com informações válidas também cabe exclusivamente ao usuário.

Características do produto
    •	O projeto consiste em um sistema que possibilita ao usuário incluir registros de seus objetos ou coleções e posterior consulta;
    •	O usuário deve realizar um cadastro na plataforma para poder utilizá-la;
    •	A inserção ou consulta de itens só serão iniciados via login do usuário;
    •	A inclusão de registros é feita por formulários;
    •	O sistema será disponibilizado em formato web;
    •	O banco de dados a ser utilizado deve ser MySql;
    •	O sistema deve manter sessão do usuário, impedindo o acesso a outras páginas sem realizar um login válido;
    •	O usuário se encarrega de manter a biblioteca atualizada de acordo com seu acervo pessoal;
    •	A ferramenta deve funcionar via internet e os serviços nela incluso serão online.

Requisitos Funcionais

RF01 – Manter usuário
    Importância: [ X ] crítico [   ] importante [   ] útil
    Dependência do(s) requisito(s): [ x ]
    Relacionamento com outro(s) requisito(s): [ RF02, RF03, RF04 ]
    Priorização: [ 1 ] 

    PROBLEMAS/NECESSIDADES IDENTIFICADAS
        Por necessitar de cadastro para a realização das atividades da plataforma, o usuário deve fornecer suas informações pessoais.

    SOLUÇÃO
        Criar cadastro de usuários, com possibilidade de inserção, alteração e exclusão.
        Dados que deverão ser considerados para o cadastro:
        → Nome 
        → CPF
        → Data de nascimento
        → E-mail
        → Senha
        → Telefone

    RESTRIÇÕES / EXCEÇÕES
        - Um e-mail pode ser cadastrado apenas uma vez.
        - Todos os campos deverão ser obrigatoriamente informados.

RF02 – Manter coleção
    Importância: [   ] crítico [ X ] importante [   ] útil
    Dependência do(s) requisito(s): [ RF01 ]
    Relacionamento com outro(s) requisito(s): [ RF01 ]
    Priorização: [ 2 ] 

    PROBLEMAS/NECESSIDADES IDENTIFICADAS
        O usuário deve poder cadastrar, alterar e organizar suas coleções.

    SOLUÇÃO
        Criar um registro por formulário e métodos para alteração e remoção dos itens cadastrados, bem como fornecer consulta ao acervo.

    RESTRIÇÕES / EXCEÇÕES
        - O sistema não fornece ferramenta de validação, o usuário deve se encarregar de fornecer as informações corretas.

Requisitos Não-Funcionais
    Os requisitos que descrevem os aspectos não-funcionais do sistema são apresentados a seguir:

Requisitos de Interface

    RNF/INT-01	O sistema deve ter uma interface visual de fácil utilização. 
    RNF/INT-02	A entrada de dados de cadastro e login de clientes bem como inclusão de registro na biblioteca serão feitos por formulário.
    RNF/INT-03	O sistema deve conter uma barra de menu e submenus, que encaminham o usuário ao local desejado.

Requisitos de Operacionais

    RNF/OPE-01	O programa deve ser desenvolvido em formato de aplicação web.
    RNF/OPE-02	O programa deve possuir um banco de dados para armazenamento das informações de usuários, e suas coleções. 
    RNF/OPE-03	A aplicação exige acesso à internet para seu funcionamento.
    RNF/OPE-04	O programa será desenvolvido em PHP, pelo Visual Studio Code.
    RNF/OPE-05	O programa utilizará ferramentas como CSS, Bootstrap e JQuery para auxiliar no visual da interface.

Requisitos de Confiabilidade

    RNF/CON-01	O sistema deve estar disponível 24 horas por dia durante os 7 dias da semana. Em caso de necessidade de ficar inativo, um responsável deve comunicar aos usuários do aplicativo a indisponibilidade do serviço e seu respectivo prazo.





