<!DOCTYPE html>
<html lang="en">
<?php  
	// $valor =  $pessoa->nome
 
	final class Cliente {
		public $nome;
		public $idade;
		public $cpf;
		
		public function __construct($nome, $idade,$cpf){
			$this->nome = $nome;
			$this->idade = $idade;
			$this->cpf = $cpf;
	}
	 }
 
  $arrai = [
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
    <table class="w-full text-sm text-left text-gray-500">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-700 text-gray-400">
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
					foreach($arrai as $key => $p){
					 
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