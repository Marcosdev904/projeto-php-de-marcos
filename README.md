# projeto-php-de-marcos

# INDEX: 
O index é responsável por fazer o login do usuário. Ele recebe o email e senha e logo após consulta no banco de dados. Caso o usuário seja encontrado ele redireciona para a página painel, caso contrário aparece "falha ao logar".

# CONEXÃO: 
o conexão é responsável por ligar o sistema ao banco de dados mysql. Ele define o endereço do servidor, o usuário, a senha e o nome do banco de dados e, em seguida, utiliza mysqli() para realizar a conexão.

# LOGOUT:
realiza o logout do usuário. Ele verifica se a sessão existe e caso não exista inicializa ela usando  session_start();. Logo após ele destrói a sessão e levando o usuário de volta para a página de login.

# PAINEL:
é a página para onde usuário vai após realizar o login corretamente, nessa página mostra o nome do usuário e um botão para sair da conta.

# PROTECT:
protege páginas privadas, verificando se o usuário está logado. Caso não esteja, impede o acesso.
