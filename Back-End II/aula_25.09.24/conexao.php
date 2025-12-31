    <?php
        // "mysql:host=localhost: 3306"
        // "dbname=loja"
        $pes = new PDO("mysql:host=localhost: 3306;dbname=loja", "root", "user");

        if($pes){
            echo "conectado";
        }


        $email = "email1@teste.com";
        $senha = "123456";

        // O query (pode ser qualquer nome) vai ser utilizado para enviar os dados para a tabela em SQL. 
        // Entretanto, os dados só podem exercer essa função depois de "preparar eles para viagem".
        $query = "insert into usuario (email, senha) values (':email', ':senha')";
        //Ao adicionar ":" numa frase, você torna mais seguro o texto pela forma como a variável vai ser acessada

        //Desse modo, a criação deste parâmetro criou uma correlação entre as formas de texto.
        $parametros = [
            ":email" => $email,
            ":senha" => $senha
        ];
        //A criação desse statement é o mesmo que preparar um carro para uma viagem
        $statement = $pes -> prepare ($query);
        $statement -> execute();

    ?>