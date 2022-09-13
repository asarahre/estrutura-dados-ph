<!DOCTYPE html>
<html lang="en">
<?php  

 
	final class Usuario {
    public $codigo;
		public $nome;
		public $sobrenome;
    public $cpf;
		
		public function __construct($codigo, $nome, $sobrenome, $cpf){
			$this->codigo = $codigo;
			$this->nome = $nome;
      $this->sobrenome = $sobrenome;
      $this->cpf = $cpf;
	}
	 };
 
  $arrai = [
		new Usuario(18958, "sarah", "sarah", 889342929 ),
		new Usuario( 28850, "deivid", "deivid", 8349248),
		new Usuario( 18858, "cristyan","cristyan", 372872747),
	];

	final class Funcionario {
    public $codigo;
		public $nome;
		public $sobrenome;
    public $cpf;
		
		public function __construct($codigo, $nome, $sobrenome, $cpf){
			$this->codigo = $codigo;
			$this->nome = $nome;
      $this->sobrenome = $sobrenome;
      $this->cpf = $cpf;
	}
	 };
 
  $arra5 = [
		new Funcionario(18958, "sarah func", "sarah", 889342929 ),
		new Funcionario( 28850, "deivid", "deivid", 8349248),
		new Funcionario( 18858, "cristyan","cristyan", 372872747),
	];

  final class Fornecedor {
    public $codigo;
		public $nome;
		public $sobrenome;
    public $cpf;
		
		public function __construct($codigo, $nome, $sobrenome, $cpf){
			$this->codigo = $codigo;
			$this->nome = $nome;
      $this->sobrenome = $sobrenome;
      $this->cpf = $cpf;
	}
	 };
 
  $arrai2 = [
    new Fornecedor(18958, "sarah", "sarah", 889342929 ),
		new Fornecedor( 28850, "deivid", "deivid", 8349248),
		new Fornecedor( 18858, "cristyan","cristyan", 372872747),
	];

  final class Cliente {
    public $codigo;
		public $nome;
		public $sobrenome;
    public $cpf;
		
		public function __construct($codigo, $nome, $sobrenome, $cpf){
			$this->codigo = $codigo;
			$this->nome = $nome;
      $this->sobrenome = $sobrenome;
      $this->cpf = $cpf;
	}
	 };
 
  $arrai3 = [
    new Cliente(18958, "sarah", "sarah", 889342929 ),
		new Cliente( 28850, "deivid", "deivid", 8349248),
		new Cliente( 18858, "cristyan","cristyan", 372872747),
  ]
 ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>aula will</title>
</head>

<body>

  <div class=" flex flex-col overflow-x-auto relative w-full h-full bg-gray-100 gap-2">
    <div>
      <table class="w-full text-sm text-left text-gray-500 p-4 ">
        <p class="text-xl text-left text-gray-500 bg-gray-700 text-center">
          Tabela Usuario
        </p>
        <thead class="text-xs text-gray-700 uppercase  bg-gray-700 text-gray-400">
          <tr>
            <th scope="col" class="py-3 px-6">
              Codigo
            </th>
            <th scope="col" class="py-3 px-6">
              Nome
            </th>
            <th scope="col" class="py-3 px-6">
              sobrenome
            </th>
            <th scope="col" class="py-3 px-6">
              cpf
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
									echo($p->codigo);
					 			?>
            </th>
            <td class="py-4 px-6">
              <?php
									echo($p->nome);
								?>
            </td>
            <td class="py-4 px-6">
              <?php
									echo($p->sobrenome);
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
    <div>
      <table class="w-full text-sm text-left' text-gray-500 p-4">
        <p class="text-xl text-left text-gray-500 bg-gray-700 text-center ">
          Tabela Fornecedor
        </p>
        <thead class="text-xs text-gray-700 uppercase  bg-gray-700 text-gray-400">
          <tr>
            <th scope="col" class="py-3 px-6">
              Codigo
            </th>
            <th scope="col" class="py-3 px-6">
              Nome
            </th>
            <th scope="col" class="py-3 px-6">
              sobrenome
            </th>
            <th scope="col" class="py-3 px-6">
              cpf
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
									echo($p->codigo);
					 			?>
            </th>
            <td class="py-4 px-6">
              <?php
									echo($p->nome);
								?>
            </td>
            <td class="py-4 px-6">
              <?php
									echo($p->sobrenome);
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
    <div>
      <table class="w-full text-sm text-left text-gray-500 p-4">
        <p class="text-xl text-left text-gray-500 pt-4 bg-gray-700 text-center">
          Tabela Cliente
        </p>
        <thead class="text-xs text-gray-700 uppercase  bg-gray-700 text-gray-400">
          <tr>
            <th scope="col" class="py-3 px-6">
              Codigo
            </th>
            <th scope="col" class="py-3 px-6">
              Nome
            </th>
            <th scope="col" class="py-3 px-6">
              sobrenome
            </th>
            <th scope="col" class="py-3 px-6">
              cpf
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
									echo($p->codigo);
					 			?>
            </th>
            <td class="py-4 px-6">
              <?php
									echo($p->nome);
								?>
            </td>
            <td class="py-4 px-6">
              <?php
									echo($p->sobrenome);
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
    <div>
      <table class="w-full text-sm text-left text-gray-500 p-4">
        <p class="text-xl text-left text-gray-500 pt-4 bg-gray-700 text-center">
          Tabela Funcionario
        </p>
        <thead class="text-xs text-gray-700 uppercase  bg-gray-700 text-gray-400">
          <tr>
            <th scope="col" class="py-3 px-6">
              Codigo
            </th>
            <th scope="col" class="py-3 px-6">
              Nome
            </th>
            <th scope="col" class="py-3 px-6">
              sobrenome
            </th>
            <th scope="col" class="py-3 px-6">
              cpf
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
					foreach($arra5 as $key => $p){
					 
					?>
          <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-900">
            <th scope="row" class="py-4 px-6 font-medium whitespace-nowrap text-white">
              <?php
									echo($p->codigo);
					 			?>
            </th>
            <td class="py-4 px-6">
              <?php
									echo($p->nome);
								?>
            </td>
            <td class="py-4 px-6">
              <?php
									echo($p->sobrenome);
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
  </div>

</body>

</html>