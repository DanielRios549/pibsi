
Quando clonar o repositório, instale as dempendências do npm e gulp,
depois estará disponível os comandos gulp e bower, mas não se esqueça de instalá-los globalmente também.

Intalar as dependências do bower é opcional, faça isso apenas se precisar atualizar os componentes,
se fizer isso, execute a tarefa "bower" para atualizar nos diretórios versionados,
você não usará nenhum arquivo da pasta "bower_components", a tarefa irá copiar os arquivos usados para as pasta deles.

Gulp task called "sass" compiles sass style to a css file.
Gulp task called "watch" watched sass files and compile then after a save.
Gulp task called "default" makes two task above.
Gulp tasks called "watch" and "default" keep running in background.

A tarefa "sass" compila o SASS, vc pode usar um formato de saída diferente.
A tarefa "watch" compila o SASS depois de uma modificação, use ela se não quiser ir no terminal sempre que modificar o SASS.
A tarefa "prod" compila o SASS pronto para produção.
A tarefa "default" faz as duas coisas anteriores, futuramente será adicionada mais coisas.

O arquivo "git-ftp-ignore" possue os arquivos e pastas ignorados na hora de enviar para o servidor principal,
mas não ignorados pelo git, porém, arquivos e apstas ignorados pelo git são ignorados pelo git ftp também.

Para usar o git ftp é necessário instala-lo, e ter as credenciais de acesso ao servidor,
se você não tem, faça o push apenas para o repositório e fale com um superior para ele ficar sabendo da modificação.
