ESCOPO DO PROJETO

Descrição 
    O projeto a ser detalhado consiste na criação de uma ferramenta que possibilite o registro de itens pessoais em acervos criadoos pelo usuário. O mesmo terá acesso a essa plataforma e poderá registrar seus objetos pessoais, bem como consulta-los quando desejar.

Objetivo
    Desenvolver uma ferramenta que possibilite ao usuário registrar acervos e inserir seus objetos, como coleções de livros ou o que desejar, na plataforma, onde o acesso é retido exclusivamente ao usuário, bem como realizar consultas e navegar por seus acervos.

Justificativa
    O projeto se baseou na necessidade de uma melhor organização pessoal, voltado para que pessoas que armazenam ou colecionam algo, possam ter onde organizar e controlar as informações de sua coleção.

Exclusões específicas
    • A ferramenta apenas possibilita o registro e consulta de acervos e itens do usuário, não se retendo a outras funções;
    • O registro é feito pelo usuário e a organização dos acervos decorre dos itens inclusos por ele. Qualquer informação preenchida incorretamente é de total responsabilidade do usuário;
    • A plataforma não disponibiliza recurso de validação dos registros. A responsabilidade de incluir títulos existentes com informações válidas também cabe exclusivamente ao usuário.
    Características
    • O projeto consiste em um sistema que possibilita ao usuário criar acervos e incluir registros de seus objetos ou coleções, bem como consulta-los;
    • O usuário deve realizar um cadastro na plataforma para poder utilizá-la;
    • A inserção ou consulta de acervos só serão iniciados via login do usuário;
    • A inclusão de registros é feita por formulários;
    • O sistema será disponibilizado em formato web;
    • O banco de dados a ser utilizado deve ser MySql;
    • O sistema deve manter sessão do usuário, impedindo o acesso a outras páginas sem realizar um login válido;
    • O usuário se encarrega de manter os acervos atualizados de acordo com sua vontade; 
    • A ferramenta deve funcionar via internet e os serviços nela incluso serão online.

------------------------------------------------------------------------------------------------------------------------------------------------
REQUISITOS DO PROJETO

Requisitos funcionais
    • RF01 – Manter usuário: necessidade usada para utilizar o sistema, onde cada usuário terá acesso a sua própria biblioteca de acervos. O usuário deve cadastrar-se e realizar login para usar a aplicação.
    • RF02 – Manter acervos: necessidade usada para que o usuário possa criar bibliotecas para organizar e classificar seus objetos de acordo com sua vontade.
    • RF03 – Manter itens: necessidade usada para inserir registros de itens dentro dos acervos criados pelo usuário.

Requisitos não-funcionais
    REQUISITOS DE INTERFACE
        • RNF/INT-01: O sistema deve ter uma interface visual de fácil utilização. 
        • RNF/INT-02: A entrada de dados de cadastro e login de clientes, bem como inclusão de acervos e registros de itens serão feitos por formulário.
        • RNF/INT-03: O sistema deve conter uma barra de menu e submenus, que encaminham o usuário ao local desejado.
    REQUISITOS OPERACIONAIS
        • RNF/OPE-01: O programa deve ser desenvolvido em formato de aplicação web.
        • RNF/OPE-02: O programa deve possuir um banco de dados para armazenamento das informações de usuários, e suas coleções. 
        • RNF/OPE-03: A aplicação exige acesso à internet para seu funcionamento.
        • RNF/OPE-04: O programa será desenvolvido em PHP, pelo Visual Studio Code.
        • RNF/OPE-05: O programa utilizará ferramentas como CSS, Bootstrap e JQuery para auxiliar no visual da interface.
    REQUISITOS DE CONFIABILIDADE
        • RNF/CON-01: O sistema deve estar disponível 24 horas por dia durante os 7 dias da semana. Em caso de necessidade de ficar inativo, um responsável deve comunicar aos usuários do aplicativo a indisponibilidade do serviço e seu respectivo prazo.