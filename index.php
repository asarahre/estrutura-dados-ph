<!DOCTYPE html>
<html lang="en">
<?php  

 
	final class Usuario {
		public $login;
		public $senha;
		
		public function __construct($login, $senha){
			$this->login = $login;
			$this->senha = $senha;
	}
	 };
 
  $arrai = [
		new Usuario("sarah", 18958),
		new Usuario("deivid", 28850),
		new Usuario("cristyan", 18858),
		new Usuario("diego", 58238),
		new Usuario("sergio", 589320),
		new Usuario("caroline", 488518),
		new Usuario("cataria", 44522),
		new Usuario("iara", 586218),
		new Usuario("joão", 47944),
		new Usuario("marta", 48268),
		new Usuario("gabriel", 89225),
	];

  final class Fornecedor {
		public $nome;
		public $cnpj;
    public $produto;
		
		public function __construct($nome, $cnpj ,$produto){
			$this->nome = $nome;
			$this->cnpj = $cnpj;
      $this->produto = $produto;
	}
	 };
 
  $arrai2 = [
		new Fornecedor("carol", 18, "873.688.680-75", "bala"),
		new Fornecedor("deivid", 20, "493.377.430-78", "balão"),
		new Fornecedor("cristyan", 18, "137.705.080-76", "agua"),
		new Fornecedor("diego", 38, "644.869.490-05", "refri"),
		new Fornecedor("jose", 44, "588.336.740-29", "doce"),
		new Fornecedor("marta", 68, "657.379.600-48", "algodão"),
		new Fornecedor("gabriel", 25, "262.395.440-27", "salgado"),
	];

  final class Cliente {
		public $nome;
		public $idade;
		public $cpf;
		
		public function __construct($nome, $idade,$cpf){
			$this->nome = $nome;
			$this->idade = $idade;
			$this->cpf = $cpf;
	}
	 };
 
  $arrai3 = [
		new Cliente("sarah", 18, "873.688.680-75"),
		new Cliente("deivid", 20, "493.377.430-78"),
		new Cliente("cristyan", 18, "137.705.080-76"),
		new Cliente("diego", 38, "644.869.490-05"),
		new Cliente("sergio", 20, "670.276.740-41"),
		new Cliente("caroline", 18, "769.913.980-12"),
		new Cliente("cataria", 22, "204.677.030-78"),
		new Cliente("iara", 18, "593.920.680-85"),
		new Cliente("joão", 44, "588.336.740-29"),
		new Cliente("marta", 68, "657.379.600-48"),
		new Cliente("gabriel", 25, "262.395.440-27"),
	];
 ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>aula will</title>
</head>

<body>

  <div class="overflow-x-auto relative">
    <p class="text-xl text-left text-gray-500 bg-gray-700 text-center">
      Tabela Usuario
    </p>
    <table class="w-full text-sm text-left text-gray-500 p-4">
      <thead class="text-xs text-gray-700 uppercase  bg-gray-700 text-gray-400">
        <tr>
          <th scope="col" class="py-3 px-6">
            Login
          </th>
          <th scope="col" class="py-3 px-6">
            Senha
          </th>
        </tr>
      </thead>
      <tbody>
        <?php
					foreach($arrai as $key => $p){
					 
					?>
        <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-900">
          <th scope="row" class="py-4 px-6 font-medium whitespace-nowrap text-white">
            <?php
									echo($p->login);
					 			?>
          </th>
          <td class="py-4 px-6">
            <?php
									echo($p->senha);
								?>
          </td>
        </tr>
        <?php
			
					 }
					?>
      </tbody>
    </table>
    <p class="text-xl text-left text-gray-500 bg-gray-700 text-center ">
      Tabela Fornecedor
    </p>
    <table class="w-full text-sm text-left text-gray-500 p-4">
      <thead class="text-xs text-gray-700 uppercase  bg-gray-700 text-gray-400">
        <tr>
          <th scope="col" class="py-3 px-6">
            Nome
          </th>
          <th scope="col" class="py-3 px-6">
            CNPJ
          </th>
          <th scope="col" class="py-3 px-6">
            Produto
          </th>
        </tr>
      </thead>
      <tbody>
        <?php
					foreach($arrai2 as $key => $p){
					 
					?>
        <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-900">
          <th scope="row" class="py-4 px-6 font-medium whitespace-nowrap text-white">
            <?php
									echo($p->nome);
					 			?>
          </th>
          <td class="py-4 px-6">
            <?php
									echo($p->cnpj);
								?>
          </td>
          <td class="py-4 px-6">
            <?php
									echo($p->produto);
								?>
          </td>
        </tr>
        <?php
			
					 }
					?>
      </tbody>
    </table>
    <p class="text-xl text-left text-gray-500 pt-4 bg-gray-700 text-center">
      Tabela Cliente
    </p>
    <table class="w-full text-sm text-left text-gray-500 p-4">
      <thead class="text-xs text-gray-700 uppercase  bg-gray-700 text-gray-400">
        <tr>
          <th scope="col" class="py-3 px-6">
            Nome
          </th>
          <th scope="col" class="py-3 px-6">
            Idade
          </th>
          <th scope="col" class="py-3 px-6">
            CPF
          </th>
        </tr>
      </thead>
      <tbody>
        <?php
					foreach($arrai3 as $key => $p){
					 
					?>
        <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-900">
          <th scope="row" class="py-4 px-6 font-medium whitespace-nowrap text-white">
            <?php
									echo($p->nome);
					 			?>
          </th>
          <td class="py-4 px-6">
            <?php
									echo($p->idade);
								?>
          </td>
          <td class="py-4 px-6">
            <?php
									echo($p->cpf);
								?>
          </td>
        </tr>
        <?php
			
					 }
					?>
      </tbody>
    </table>
  </div>

</body>

</html>